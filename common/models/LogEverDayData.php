<?php

namespace common\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "ld_user".
 *
 * @property integer $id
 * @property integer $registerNum
 * @property integer $loginNum
 * @property integer $index_pv
 * @property integer $index_ip
 * @property integer $date
 */

class LogEverDayData extends \yii\db\ActiveRecord
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
        return 'everDayData';
    }

}
