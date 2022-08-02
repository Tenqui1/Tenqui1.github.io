<?php

namespace common\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "ld_user".
 *
 * @property integer $id
 * @property integer $level
 * @property string $levelName
 * @property string $describe
 * @property string $client
 * @property string $reward
 * @property integer $experience
 * @property integer $isDelete
 */

class DbUserLevelName extends \yii\db\ActiveRecord
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
        return 'userLevelName';
    }

}
