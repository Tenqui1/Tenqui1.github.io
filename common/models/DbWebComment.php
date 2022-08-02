<?php

namespace common\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "ld_user".
 *
 * @property integer $id
 * @property integer $uId
 * @property integer $webId
 * @property integer $pid
 * @property integer $likeNum
 * @property string $content
 * @property integer $status
 * @property integer $isDelete
 * @property string $createTime
 */

class DbWebComment extends \yii\db\ActiveRecord
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
        return 'webComment';
    }

}
