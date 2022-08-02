<?php

namespace frontend\models;

use common\models\DbUser;
use common\models\LogForgetPassword;
use common\models\LogUserLogin;
use wsl\ip2location\Ip2Location;
use Yii;
use yii\base\Model;
/**
 * This is the model class for table "ld_user".
 *
 * @property integer $id
 * @property integer $uid
 * @property string $password
 * @property string $salt
 * @property string $client
 * @property string $ip
 * @property integer $country
 * @property integer $address
 * @property string $createTime
 */
class UserForgetPasswordLog extends Model
{
    public $id;
    public $uid;
    public $password;
    public $salt;
    public $client;
    public $ip;
    public $country;
    public $address;
    public $createTime;



    /*
   * 增加用户修改密码的记录
   *
   * */
    public function addLog($uid){

        $user = DbUser::findOne(['uId'=>$uid]);
        $log = new LogForgetPassword();
        $log->uid=$uid;
        $log->password = $user->password;
        $log->salt=$user->salt;
        $log->createTime=time();
        $log->ip = \Yii::$app->request->getUserIP();
        $log->client = \Yii::$app->request->getUserAgent();
        $ipLocation = new Ip2Location();
        $locationModel = $ipLocation->getLocation( $log->ip);
        $city = $locationModel->toArray();
        $log->country = $city['country'];
        $log->address = $city['area'];
        return $log->save();
    }





}
