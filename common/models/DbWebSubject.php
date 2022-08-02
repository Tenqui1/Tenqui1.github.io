<?php

namespace common\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "ld_user".
 *
 * @property integer $id
 * @property string $name
 * @property integer $sort
 * @property integer $isDelete
 * @property integer $pid
 * @property integer $level
 */

class DbWebSubject extends \yii\db\ActiveRecord
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
        return 'webSubject';
    }

    //获取分类名称
    public static function getNameById($id){
        $one =self::find()->select('name')->where(['id'=>$id])->one();
        return $one->name;
    }


}
