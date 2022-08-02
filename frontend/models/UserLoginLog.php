<?php

namespace frontend\models;

use common\models\LogUserLogin;
use wsl\ip2location\Ip2Location;
use Yii;
use yii\base\Model;
/**
 * This is the model class for table "ld_user".
 *
 * @property integer $id
 * @property integer $uid
 * @property string $loginTime
 * @property string $loginOutTime
 * @property string $client
 * @property string $ip
 *  @property integer $country
 * @property integer $address
 */
class UserLoginLog extends Model
{
    public $id;
    public $uid;
    public $loginTime;
    public $loginOutTime;
    public $client;
    public $ip;
    public $country;
    public $address;



    /*
   * 增加用户登陆记录
   *
   * */
    public function addLog($uid){
        $userLoginLog = new LogUserLogin();
        $userLoginLog->uid=$uid;
        $userLoginLog->loginTime=time();
        $userLoginLog->ip = \Yii::$app->request->getUserIP();
        $userLoginLog->client = \Yii::$app->request->getUserAgent();
        $ipLocation = new Ip2Location();
        $locationModel = $ipLocation->getLocation( $userLoginLog->ip);
        $city = $locationModel->toArray();
        $userLoginLog->country = $city['country'];
        $userLoginLog->address = $city['area'];
        return $userLoginLog->save();
    }





}
