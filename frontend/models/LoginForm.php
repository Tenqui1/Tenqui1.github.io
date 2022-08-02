<?php

namespace frontend\models;

use common\models\DbUserLevelName;
use common\models\DbUser;
use common\models\LogUserLogin;
use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class LoginForm extends Model
{
    public $uId;
    public $userName;
    public $password;
    public $cName;
    public $phone;
    public $photo;
    public $email;
    public $level;
    public $levelName;
    public $experience;
    public $ITmoney;
    public $money;
    public $isDelete;
    public $registerTime;
    public $updateTime;
    public $logoutTime;
    public $loginTime;
    public $isSystem;
    public $rememberMe = true;
    private $_user = false;
    public $code;
    public $rpassword;
    public $account;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['account', 'filter', 'filter' => 'trim','on' =>['login']],
            ['account', 'required', 'message' => '请输入用户名或者邮箱号', 'on' =>['login']],
            ['userName', 'filter', 'filter' => 'trim', 'on' =>['register']],
            ['userName', 'required', 'message' => '用户名不可以为空', 'on' =>['register']],
            ['userName', 'string', 'min' => 2, 'max' => 30,'on' =>['register']],
            ['userName', 'validateUserName','on' =>['register']],
            ['userName', 'validateBlackUserName','message'=>'账号异常，请联系客服','on' =>['register']],
            ['email', 'filter', 'filter' => 'trim','on' =>['register','forgetpassword']],
            ['email', 'required', 'message' => '邮箱不可以为空','on' =>['register','forgetpassword']],
            ['email', 'string', 'max' => 100,'on' =>['register','forgetpassword']],
            ['email', 'email','message'=>'请填写正确格式的邮箱','on' =>['register','forgetpassword']],
            ['email', 'validateEmail', 'on' =>['register','forgetpassword']],
            ['email', 'validateBlackEmail','message'=>'账号异常，请联系客服','on' =>['register','forgetpassword']],
            ['password', 'required', 'message' => '密码不可以为空'],
            ['password', 'string', 'min' => 6, 'tooShort' => '密码至少填写6位'],
            ['password', 'validatePassword','on' =>['login']],
            ['code',  'string', 'length'=>4, 'notEqual' => '验证码不合法','on' =>['register','forgetpassword']],
            ['code', 'validateCode','on' =>['register','forgetpassword']],
            ['rpassword', 'validaterPassword','message'=>'确认密码跟密码不一致', 'on' =>['register','forgetpassword']],
            [['loginTime','updateTime'],'default','value'=>time()],
            ['registerTime','default','value'=>date('Y-m-d H:i:s',time())],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = DbUser::find()
                ->where(['userName'=>$this->account])
                ->orWhere(['email'=>$this->account])
                ->one();
            if(!$user){
                $this->addError($attribute, '账号信息不存在');
            }
            //账号存在,对比密码
            $salt=$user->salt;
            //用户表单提交的密码加密
            $securityPassword=$this->password.$user->salt;
            if (!Yii::$app->security->validatePassword($securityPassword,$user->password)) {
              $this->addError($attribute, '帐号或密码错误');
            }
        }
    }


    /**
     *  验证确认密码
     *
     * @password
     * @rpassword
     * @return msg
     * */
    public function validateRpassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if($this->password != $this->rpassword){
                $this->addError($attribute, '确认密码跟密码不一致.');
            }
        }
    }


    /**
     *  验证用户名
     *
     * @email
     * @return msg
     * */
    public function validateUserName($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if(  User::findByUsername($this->userName)){
                $this->addError($attribute, '用户名已经存在.');
            }
        }
    }


    /**
     *  验证黑名单
     *
     * @email
     * @return msg
     * */
    public function validateBlackUserName($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if(  User::findBlackByUsername($this->userName)){
                $this->addError($attribute, '账号异常，请联系客服.');
            }
        }
    }





    /**
     *  验证邮箱
     *
     * @email
     * @return msg
     * */
    public function validateEmail($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if(User::findByEmail($this->email) && $this->scenario == 'register'){
                $this->addError($attribute, '邮箱已经被注册.');
            }
            if(!User::findByEmail($this->email) && $this->scenario == 'forgetpassword'){
                $this->addError($attribute, '邮箱还未注册.');
            }
        }
    }

    /**
     *  验证黑名单邮箱
     *
     * @email
     * @return msg
     * */
    public function validateBlackEmail($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if(User::findBlackByEmail($this->email)){
                $this->addError($attribute, '账号异常，请联系客服.');
            }
        }
    }


    /**
     *  验证邮箱验证码
     *
     * @email
     * @return msg
     * */
    public function validateCode($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $mail = new MailForm();
            $mail->userCode=$this->code;
            $mail->userEmail=$this->email;
            $mail->scene = $this->scenario;
            if(!$mail->checkEmailCode()){
                $this->addError($attribute, '验证码错误.');
            }
        }
    }




    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        $userInfo = DbUser::find()
            ->where(['userName'=>$this->account])
            ->orWhere(['email'=>$this->account])
            ->asArray()
            ->one();
        $redisKey=Yii::$app->params['redisUserinfoKey'];
        Yii::$app->session->set($redisKey, json_encode($userInfo));
        //增加统计记录
        (new UserLoginLog())->addLog($userInfo['uId']);
        (new EveryDayData())->addLoginLog();
        return $userInfo;
    }

    /**
     * 退出
     * */
    public function logout()
    {
        $redisKey=Yii::$app->params['redisUserinfoKey'];
        $result = Yii::$app->session->get($redisKey);
        if(!$result) return true;
        $result = json_decode($result,true);
        $user = DbUser::findOne(['uId'=>$result['uId']]);
        $user->logoutTime = time();
        $user->save();
        $userLogin =LogUserLogin::find()->where(['uid'=>$result['uId']])->orderBy(['id'=>SORT_DESC])->one();
        $userLogin->logoutTime= time();
        $userLogin->save();
        return Yii::$app->session->remove($redisKey);
    }



    /**
     *  注册用户
     *
     * @param $userName
     * @param $email
     * @param $password
     * @return true;
     * */

    public function register()
    {
        $user = new DbUser();
        $user->userName = $this->userName;
        $user->email = $this->email;
        $user->salt =Yii::$app->security->generateRandomString();
        $user->password = Yii::$app->security->generatePasswordHash($this->password.$user->salt);
        $user->updateTime = $this->updateTime;
        $user->registerTime = $this->registerTime;
        $user->loginTime = $this->loginTime;
        $user->photo ='img/user.gif';
        $user->level=1;
        $user->levelName=DbUserLevelName::findOne(['level'=>1,'isDelete'=>0])['levelName'];
        $result = $user->save();
        if($result){
            $this->uId =Yii::$app->db->getLastInsertID();
            //登录
            $userInfo = DbUser::find()
                ->where(['uId'=>$this->uId])
                ->asArray()
                ->one();
            $redisKey=Yii::$app->params['redisUserinfoKey'];
            Yii::$app->session->set($redisKey, json_encode($userInfo));
            //增加统计记录
            (new UserLoginLog())->addLog( $this->uId);
            (new EveryDayData())->addRegisterLog();
            (new EveryDayData())->addLoginLog();
        }
        return $result;
    }


    /**
     *  忘记密码
     *
     * @param $email
     * @param $password
     * @return Json
     * */
    public function forgetpassword(){
        $user = DbUser::findOne(['email'=>$this->email]);
        $user->salt =Yii::$app->security->generateRandomString();
        $user->password = Yii::$app->security->generatePasswordHash($this->password.$user->salt);
        $user->updateTime = $this->updateTime;
        //添加记录
        (new UserForgetPasswordLog())->addLog($user->uId);
        return $result = $user->save();
    }



}


