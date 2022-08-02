<?php
/**
 *  邮件发送model
 *
 * */
namespace backend\models;

use common\models\DbUser;
use common\models\DbWebSource;
use frontend\models\EveryDayData;
use Yii;
use yii\base\Model;
/**
 * LoginForm is the model behind the login form.
 *
 */



class WebSource extends Model
{
    public $id;
    public $uId;
    public $title;
    public $keyword;
    public $describe;
    public $manual;
    public $subject;
    public $oldUrl;
    public $coverUrl;
    public $soureUrl;
    public $browseNum;
    public $collectionNum;
    public $likeNum;
    public $shareNum;
    public $commentNum;
    public $downloadNum;
    public $price;
    public $registerTime;
    public $updateTime;
    public $status;
    public $isDelete;
    public $IE=8;
    public $isIE=1;
    public $isFirefox=1;
    public $isChrome=1;
    public $isSafari=1;
    public $resources;
    public $previewUrl;
    public $img;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
                return [
//                    ['resources', 'required', 'message' => '请选择文件','on'=> 'submit-web'],
//                    ['resources', 'required', 'message' => '请选择文件','on'=> 'submit-web'],
                    [['manual','oldUrl','coverUrl','soureUrl','resources'],'string','on'=> 'submit-web'],
                    [['subject'],'required','on'=> 'submit-web'],
                     //['resources', 'required', 'message' => '请选择文件','on'=> 'submit-web'],
//                    ['resources', 'file', 'message' => '请选择文件','on'=> 'submit-web'],
//                    ['resources', 'validateResources','message'=>'上传的文件不合规','on'=> 'submit-web'],
                    [['title'], 'string', 'min' => 5, 'max' => 255,'message' => '标题长度必须大于5个字符','on'=> 'submit-web'],
                    [['keyword'],'string', 'min' => 2,'max' => 255,'message' => '标签长度必须大于2个字符','on'=> 'submit-web'],
                    [['describe'],'string','max' => 255,'message' => '简介长度不能超过255个字符','on'=> 'submit-web'],
                    [['price'],'integer','max'=>1000,'message'=>'价格不能大于1000','on'=> 'submit-web'],
                    [[ 'browseNum','collectionNum','likeNum','shareNum','commentNum','downloadNum'],'integer','message'=>'收藏，点赞，评论等数值必须为整数','on'=> 'submit-web'],
                    [[ 'browseNum','collectionNum','likeNum','shareNum','commentNum','downloadNum'],'default','value' =>0,'on'=> 'submit-web'],
                    [[ 'isIE','isFirefox','isChrome','isSafari'],'default','value' =>1,'on'=> 'submit-web'],
                    [['price'],'default', 'value' =>0,'on'=> 'submit-web'],
                    //[['oldUrl'],'url', 'defaultScheme' => 'http','message'=>'官网地址不合法','on'=> 'submit-web'],
                    [['IE'],'in', 'range' => [6,7,8,9,10, 11],'message'=>'IE版本选择不合法','on'=> 'submit-web'],
                    ['id','integer', 'message' => 'id不合法'],
//                    ['img', 'required', 'message' => '请选择文件','on'=> 'ckeditor-img'],
//                    ['img', 'file', 'message' => '请选择文件','on'=> 'ckeditor-img'],
//                    ['img', 'validateCkeditorImg','message'=>'上传的文件不合规','on'=> 'ckeditor-img'],
                ];

    }

    /**
     * 验证文件
     * */
    public function validateResources($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if(!in_array(trim($this->resources->type),['application/x-zip-compressed','application/octet-stream']) || !in_array(trim($this->resources->extension),['zip', 'rar'])){
                $this->addError('error','上传的文件格式错误');
            }
            if($this->resources->size > 30*1024*1024){
                $this->addError('error','所上传文件的大小不得大于30M');
            }
            return true;
        }
    }

    /*
     * 验证文件
     * */
    public function validateCkeditorImg($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if(!in_array(trim($this->img->type),['image/gif','image/jpeg','image/gif','image/png']) || !in_array(trim($this->img->extension),['png','jpg','jpeg','gif'])){
                $this->addError('error','上传的文件格式错误');
            }
            if($this->img->size > 5*1024*1024){
                $this->addError('error','所上传文件的大小不得大于5M');
            }
            return true;
        }
    }


    public function addWebSource()
    {
        $source = new DbWebSource();
        $source->uId = DbUser::getSystemUid();
        $source->title = $this->title;
        $source->keyword = $this->keyword;
        $source->describe = $this->describe;
        $source->manual = $this->manual;
        $source->oldUrl = $this->oldUrl;
        $source->coverUrl=$this->coverUrl;
        $source->soureUrl=$this->resources;
        $source->previewUrl= explode('.',str_ireplace('resource','preview',$source->soureUrl))[0];
        $source->browseNum = $this->browseNum;
        $source->collectionNum = $this->collectionNum;
        $source->likeNum = $this->likeNum;
        $source->shareNum = $this->shareNum;
        $source->commentNum = $this->commentNum;
        $source->downloadNum = $this->downloadNum;
        $source->IE = $this->IE;
        $source->isIE = $this->isIE;
        $source->isFirefox = $this->isFirefox;
        $source->isChrome = $this->isChrome;
        $source->isSafari = $this->isSafari;
        $source->updateTime = time();
        $source->registerTime = date('Y-m-d H:i:s',time());
        $source->price = $this->price;
        $source->status=1;
        $transaction = Yii::$app->db->beginTransaction();
        $result = $source->save();
        $id = Yii::$app->db->lastInsertID;
        $r1 = (new WebSubRelation)->bindSubjectIds($id,$this->subject);
        $r2 =(new EveryDayData())->addNewWebNum();
        if($result && $r1 && $r2){
            $transaction->commit();
            return true;
        }else{
            $transaction->rollBack();
            return false;
        }
    }

    //审核web资源
    public function editWebSource()
    {
        $source = DbWebSource::findOne(['id'=>$this->id]);
        $source->uId = DbUser::getSystemUid();
        $source->title = $this->title;
        $source->keyword = $this->keyword;
        $source->describe = $this->describe;
        $source->manual = $this->manual;
        $source->oldUrl = $this->oldUrl;
        $source->coverUrl=$this->coverUrl;
        $source->soureUrl=$this->resources;
        $source->previewUrl= explode('.',str_ireplace('resource','preview',$source->soureUrl))[0];
        $source->browseNum = $this->browseNum;
        $source->collectionNum = $this->collectionNum;
        $source->likeNum = $this->likeNum;
        $source->shareNum = $this->shareNum;
        $source->commentNum = $this->commentNum;
        $source->downloadNum = $this->downloadNum;
        $source->IE = $this->IE;
        $source->isIE = $this->isIE;
        $source->isFirefox = $this->isFirefox;
        $source->isChrome = $this->isChrome;
        $source->isSafari = $this->isSafari;
        $source->updateTime = time();
        $source->price = $this->price;
        $source->status=1;
        $transaction = Yii::$app->db->beginTransaction();
        $result = $source->save();
        $r1 = (new WebSubRelation)->bindSubjectIds($this->id,$this->subject);
        $r2 =(new EveryDayData())->addNewWebNum();
        if($result && $r1 && $r2){
            $transaction->commit();
            return true;
        }else{
            $transaction->rollBack();
            return false;
        }
    }








}