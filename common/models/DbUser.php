<?php

namespace common\models;

use Yii;
use yii\base\Model;
/**
 * This is the model class for table "ld_user".
 *
 * @property integer $uId
 * @property string $userName
 * @property string $password
 * @property string $cName
 * @property string $phone
 * @property string $photo
 * @property string $email
 * @property integer $level
 * @property string $levelName
 * @property integer $experience
 * @property integer $ITmoney
 * @property integer $money
 * @property integer $isDelete
 * @property integer $sex
 * @property string $registerTime
 * @property string $logoutTime
 * @property string $loginTime
 * @property integer $isSystem
 * @property string $updateTime
 * @property string $salt;
 */

class DbUser extends \yii\db\ActiveRecord
{
    public static function getDb()
    {
        return Yii::$app->db;
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }


    /*
     * 获取系统用户
     * */
    public static  function getSystemUid(){
        $all = self::find()->select('uid')->where(['isSystem'=>1])->asArray()->all();
        return $all[array_rand($all,1)]['uid'];
    }

}
