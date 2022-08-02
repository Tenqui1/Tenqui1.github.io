<?php
namespace frontend\models;

use common\models\DbWebSubject;
use Yii;
use yii\base\Model;



class webSubject extends Model
{
    public $id;
    public $name;
    public $sort;
    public $isDelete;
    public $pid;
    public $level;
    public $subjectId=0;
    public $one=0;
    public $two=0;
    public $three=0;
    public $subjectList=[];
    public $orderBy;
    public $page=1;
    public $offset = 20;
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
                return [
                    [['name','orderBy'],'string',],
                    [['id','sort','isDelete','pid','level','subjectId'],'integer'],
                    [['orderBy'], 'in', 'range' => ['browseNum', 'downloadNum', 'collectionNum','likeNum','commentNum']],
                    ['page','number','min'=>1]

                ];

    }



    /**
     * 获取 学科分类信息
     */

    public function getSubjectList()
    {
        $subject=[];
        $subject[0] =DbWebSubject::find()
            ->where(['isDelete'=>0,'level'=>0])
            ->orderBy(['sort'=>SORT_ASC])
            ->asArray()
            ->all();
        if(!$this->subjectId){
            $this->subjectId=$subject[0][0]['id'];
            $subject[1] = self::getChildSubjectList($subject[0][0]['id']);
            $subject[2] = self::getChildSubjectList($subject[1][0]['id']);
            $this->one = $subject[0][0]['id'];
            $this->two = $subject[1][0]['id'];
            if(!empty($subject[2]))$this->three = $subject[2][0]['id'];
        }else{
            $info = DbWebSubject::find()
                ->where(['id'=>$this->subjectId])
                ->asArray()
                ->one();
            if($info['level'] == 0){
                $this->one=$this->subjectId;
                $subject[1] = self::getChildSubjectList($this->one);
                $this->two = $subject[1][0]['id'];
                $subject[2] = self::getChildSubjectList($this->two);
                if(!empty($subject[2]))$this->three = $subject[2][0]['id'];
            }elseif ($info['level'] ==1){
                $this->one = $info['pid'];
                $this->two=$this->subjectId;
                $subject[1] = self::getChildSubjectList($this->one);
                $subject[2] = self::getChildSubjectList($this->two);
                if(!empty($subject[2])) $this->three = $subject[2][0]['id'];
            }else{
                $this->two = $info['pid'];
                 $self =  DbWebSubject::find()
                     ->where(['id'=>$this->two])
                     ->asArray()
                     ->one();
                  $this->one = $self['pid'];
                  $subject[1] = self::getChildSubjectList($this->one);
                  $subject[2] = self::getChildSubjectList($this->two);
                  if(!empty($subject[2])) $this->three=$this->subjectId;
            }
        }
        $this->subjectList = $subject;
        return  $subject;
    }


    /*
     * 获取学科的子集
     * */
    public  static  function getChildSubjectList($subjectId){
         return DbWebSubject::find()->where(['isDelete'=>0,'pid'=>$subjectId])->orderBy(['sort'=>SORT_ASC])->asArray()->all();
    }

}