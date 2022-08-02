<?php

namespace backend\models;

use common\models\DbWebSubRelation;
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

class WebSubRelation extends Model
{
    public $subId;
    public $webId;
    public $level;


    /*
     * 绑定webId和subjectId的关系
     * */
    public function bindSubjectIds($webId,$subjectIds){

        //删除原来的关系
        $one =  DbWebSubRelation::deleteAll(['webId'=>$webId]);
        $db = new DbWebSubRelation();
        //存储当前关系
        if(isset($subjectIds[0])){
          foreach ($subjectIds[0] as $v){
              $_model = clone $db;
              $_model->subId=$v;
              $_model->webId=$webId;
              $_model->level=0;
              $_model->save();
          }
        }
        if(isset($subjectIds[1])){
            foreach ($subjectIds[1] as $v){
                $_model = clone $db;
                $_model->subId=$v;
                $_model->webId=$webId;
                $_model->level=1;
                $_model->save();
            }
        }

        if(isset($subjectIds[2])){
            foreach ($subjectIds[2] as $v){
                $_model = clone $db;
                $_model->subId=$v;
                $_model->webId=$webId;
                $_model->level=2;
                $_model->save();
            }
        }
        return true;
    }

}
