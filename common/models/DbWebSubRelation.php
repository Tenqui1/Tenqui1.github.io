<?php

namespace common\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "ld_user".
 *
 * @property integer $id
 * @property string $subId
 * @property integer $webId
 * @property integer $isDelete
 * @property integer $level
 */

class DbWebSubRelation extends \yii\db\ActiveRecord
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
        return 'webSubRelation';
    }



}
