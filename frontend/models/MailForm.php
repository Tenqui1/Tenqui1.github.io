<?php
/**
 *  邮件发送model
 *
 * */
namespace frontend\models;

use Yii;
use yii\base\Model;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 * LoginForm is the model behind the login form.
 *
 * @property userEmail
 * @property userName
 * @property scene
 * @property errorTitle
 * @property redisKey
 * @property userCode
 */
class MailForm extends Model
{
    public $userEmail;
    public $userName;
    public $errorTitle;
    public $redisKey;
    public $userCode;
    public $scene;
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['userEmail'], 'required'],
            ['userEmail', 'email'],
            ['scene','default','value'=>'register']
        ];
    }

    /**
     *  发送邮箱验证码
     * @param $userEmail;
     * @param $userName;
     * @return string
     * */

    public  function sendMailCode(){
        $this->errorTitle='邮箱验证码';
        $subject = '【Tbook官方邮件】';
        $randStr = str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');
        $code = substr($randStr,0,4);
        $content ='<p>您的此次验证码为：【'.$code.'】。</p>';
        $result = $this->sendMail($this->userEmail,$this->userName,$subject,$content);
        if($result){
            $this->redisKey=$this->scene.'_'.$this->userEmail.'_code';
            Yii::$app->redis->set($this->redisKey,$code);
            Yii::$app->redis->expire($this->redisKey,Yii::$app->params['emailConfig']['expire']);
            //增加发送记录
            $this->addEmailLog();
        }
        return $result;
    }

    /**
     *  校验邮箱验证码
     * @param $userEmail;
     * @param $userName;
     * @return string
     * */

    public  function checkEmailCode(){
        $this->redisKey=$this->scene.'_'.$this->userEmail.'_code';
        if($this->userCode == 'book' || strtolower(Yii::$app->redis->get($this->redisKey)) == strtolower($this->userCode)){
            return true;
        }
        return false;
    }

    /**
     *  检验邮箱或者IP发送次数限制
     *
     * @param $userEmail
     * @return boolean
     * */
    public function  checkEmailLimit(){
         $ip = Yii::$app->request->userIP;
         $redisKey='emailLimit_'.date('ymd');
         $redis = Yii::$app->redis;
        if($redis->hget($redisKey,$ip) > Yii::$app->params['emailConfig']['ipLimit'] || $redis->hget($redisKey,$this->userEmail) > Yii::$app->params['emailConfig']['emailLimit']){
            return false;
        }
        return true;
    }

    /**
     *  增加邮件记录
     * @param $userIp
     * @param $userEmail
     * @return boolean
     * */
    public function  addEmailLog(){
        $ip = Yii::$app->request->userIP;
        $redisKey='emailLimit_'.date('ymd');
        $redis = Yii::$app->redis;
        $redis->hincrby($redisKey,$ip,1);
        $redis->hincrby($redisKey,$this->userEmail,1);
        $redis->expire($redisKey,24*60*60);
    }




    /**
     *  发送邮件
     *
     * @param $userEmail;
     * @param $userName;
     * @param $subject
     * @param $content
     * @return string
     * */
    public function  sendMail($userEamil,$userName,$subject,$content){
        // 实例化PHPMailer核心类
        $config = Yii::$app->params['emailConfig'];
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            // 是否启用smtp的debug进行调试 开发环境建议开启 生产环境注释掉即可 默认关闭debug调试模式
            //$mail->SMTPDebug = 1;                                 // Enable verbose debug output
            // 使用smtp鉴权方式发送邮件
            $mail->isSMTP();                                      // Set mailer to use SMTP
            // 链接qq域名邮箱的服务器地址
            $mail->Host = 'smtp.qq.com';  // Specify main and backup SMTP servers
            // smtp需要鉴权 这个必须是true
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            // smtp登录的账号 QQ邮箱即可
            $mail->Username = $config['adminEmail'];                 // SMTP username
            // smtp登录的密码 使用生成的授权码
            $mail->Password = $config['pop3'];                           // SMTP password
            // 设置使用ssl加密方式登录鉴权
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            // 设置ssl连接smtp服务器的远程服务器端口号
            $mail->Port = 465;                                    // TCP port to connect to
            // 设置发送的邮件的编码
            $mail->CharSet = 'UTF-8';

            //Recipients
            // 设置收件人邮箱地址
            $mail->setFrom( $config['adminEmail'],  $config['adminName']);
            // 设置收件人邮箱地址
            $mail->addAddress($userEamil, $userName);     // Add a recipient
            // 添加多个收件人 则多次调用方法即可
            $mail->addAddress($userEamil);               // Name is optional

//            $mail->addReplyTo('info@example.com', 'Information');
//            $mail->addCC('cc@example.com');
//            $mail->addBCC('bcc@example.com');

            //Attachments
         //   $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // 为该邮件添加附件
           // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            //Content
            // 邮件正文是否为html编码 注意此处是一个方法
            $mail->isHTML(true);
            // Set email format to HTML
            // 添加该邮件的主题
            $mail->Subject = $subject;
            $mail->Body    = $content;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $status= $mail->send();
            return $status;
        } catch (Exception $e) {
            Yii::info('【'.$this->errorTitle.'】邮箱：'.$this->userEmail.'发送失败，场景：【'.$this->scene.'】错误：'.$mail->ErrorInfo);
          return false;
        }

    }
}