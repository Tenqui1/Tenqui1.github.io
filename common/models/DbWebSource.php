<?php

namespace common\models;

use Yii;
use yii\base\Model;
/**
 * This is the model class for table "ld_user".
 *
 * @property integer $id
 * @property integer $uId
 * @property string title
 * @property string keyword
 * @property string describe
 * @property string manual
 * @property integer $subjectId
 * @property string oldUrl
 * @property string coverUrl
 * @property string soureUrl
 * @property integer $browseNum
 * @property integer $collectionNum
 * @property integer $likeNum
 * @property integer $shareNum
 * @property integer $commentNum
 * @property integer $downloadNum
 * @property integer $price
 * @property integer $status
 * @property integer $isDelete
 * @property integer $IE
 * @property integer $isBoutique
 * @property integer $isIndex
 * @property integer $isIE
 * @property integer $isFirefox
 * @property integer $isChrome
 * @property integer $isSafari
 * @property integer $isResponseType
 * @property string $updateTime
 * @property string $registerTime
 */





class DbWebSource extends \yii\db\ActiveRecord
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
        return 'webSource';
    }

}
