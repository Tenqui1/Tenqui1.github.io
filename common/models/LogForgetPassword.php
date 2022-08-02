<?php

namespace common\models;

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
 * @property integer $address
 *  @property string $createTime
 */

class LogForgetPassword extends \yii\db\ActiveRecord
{
    public static function getDb()
    {
        return Yii::$app->itbook_log;
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'forgetpassword';
    }

}
