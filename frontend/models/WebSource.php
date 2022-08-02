<?php
/**
 *  邮件发送model
 *
 * */
namespace frontend\models;

use common\models\CommonHelper;
use common\models\DbUser;
use common\models\DbWebComment;
use common\models\DbWebSource;
use common\models\DbWebSubject;
use common\models\DbWebSubRelation;
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
    public $subjectId;
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
    public $IE;
    public $isBoutique;
    public $isIndex;
    public $isIE;
    public $isFirefox;
    public $isChrome;
    public $isSafari;
    public $isResponseType;
    public $resources;
    public $previewUrl;
    public $img;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
                return [
                    [['manual','oldUrl'],'string','on'=> 'submit-web'],
                    ['resources', 'required', 'message' => '请选择文件','on'=> 'submit-web'],
                    ['resources', 'file', 'message' => '请选择文件','on'=> 'submit-web'],
                    ['resources', 'validateResources','message'=>'上传的文件不合规','on'=> 'submit-web'],
                    [['title'], 'string', 'min' => 5, 'max' => 255,'message' => '标题长度必须大于5个字符','on'=> 'submit-web'],
                    [['keyword'],'string', 'min' => 2,'max' => 255,'message' => '标签长度必须大于2个字符','on'=> 'submit-web'],
                    [['describe'],'string','max' => 255,'message' => '简介长度不能超过255个字符','on'=> 'submit-web'],
                    [['price'],'integer','max'=>1000,'message'=>'价格不能大于1000','on'=> 'submit-web'],
                    [['price'],'default', 'value' =>0,'on'=> 'submit-web'],
                    [['oldUrl'],'url', 'defaultScheme' => 'http','message'=>'官网地址不合法','on'=> 'submit-web'],
                    [['IE'],'in', 'range' => [6,7,8,9,10, 11],'message'=>'IE版本选择不合法','on'=> 'submit-web'],
                    ['id','required', 'message' => 'id不合法','on'=> 'detail'],
                    ['id','integer', 'message' => 'id不合法','on'=> 'detail'],
                    ['img', 'required', 'message' => '请选择文件','on'=> 'ckeditor-img'],
                    ['img', 'file', 'message' => '请选择文件','on'=> 'ckeditor-img'],
                    ['img', 'validateCkeditorImg','message'=>'上传的文件不合规','on'=> 'ckeditor-img'],

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

    //获取资源信息
    public function getInfo(){
        $userTable = DbUser::tableName();
        $subjectRelation = DbWebSubRelation::tableName();
        $subject = DbWebSubject::tableName();
        $map['s.status']=1;
        $map['s.isDelete']=0;
        $map['s.id']=$this->id;
        $info = DbWebSource::find()
            ->alias('s')
            ->join('left join',"$userTable u",'s.uId = u.uId')
            ->select('s.*,u.userName')
            ->where($map)
            ->asArray()
            ->one();
        $info['subjectList'] = DbWebSubRelation::find()
            ->alias('l')
            ->join('inner join',"$subject s","l.subId = s.id")
            ->select('l.*,s.name')
            ->where(["l.webId"=>$info['id'],'l.isDelete'=>0,'l.level'=>0])
            ->asArray()
            ->all();
        $info['commentList'] =DbWebComment::find()
            ->alias('c')
            ->select("c.*,u.userName,u.photo")
            ->join("left join","$userTable u",'c.uId = u.uId')
            ->where(['webId'=>$this->id])
            ->asArray()
            ->all();

        $info['registerDate'] = CommonHelper::getRegisetrDate($info['registerTime']);
        $info['analysisBrowseNum']=CommonHelper::getAnalysisNum($info['browseNum']);
        $info['analysisDownloadNum']=CommonHelper::getAnalysisNum($info['downloadNum']);
        $info['analysisCollectionNum']=CommonHelper::getAnalysisNum($info['collectionNum']);
        $info['analysisLikeNum']=CommonHelper::getAnalysisNum($info['likeNum']);
        $info['analysisCommentNum']=CommonHelper::getAnalysisNum($info['commentNum']);
        $info['analysisShareNum']=CommonHelper::getAnalysisNum($info['shareNum']);
      return $info;
    }


    //获取推荐
    public function getRecommend($webId,$pid){
        $userTable = DbUser::tableName();
        $subjectRelation = DbWebSubRelation::tableName();
        $map['s.status']=1;
        $map['s.isDelete']=0;
        $map['l.subId'] =$pid;
         return DbWebSource::find()
            ->alias('s')
            ->join('left join',"$userTable u",'s.uId = u.uId')
            ->join('left join',"$subjectRelation l","s.id = l.webId")
            ->select('s.*,u.userName')
            ->where($map)
             ->andWhere(['<>','l.webId',$webId])
            ->limit(12)
             ->asArray()
             ->all();
    }

    public function addWebSource()
    {
        $source = new DbWebSource();
        $source->uId = $this->uId;
        $source->title = $this->title;
        $source->keyword = $this->keyword;
        $source->describe = $this->describe;
        $source->manual = $this->manual;
        $source->oldUrl = $this->oldUrl;
        $source->soureUrl=$this->soureUrl;
        $source->previewUrl=Yii::$app->params['upload']['webPrewiew'].basename($this->soureUrl);
        $source->updateTime = time();
        $source->registerTime = date('Y-m-d H:i:s',time());
        $source->price = $this->price;
        $result = $source->save();
        if($result){
            (new EveryDayData())->addSubmitWebNum();
        }
        return $result;
    }


    /**
     * 上传文件
     * */
    public function upload()
    {
          $path =Yii::$app->params['upload']['web'].'/'.date('ymd',time()).'/';
        if ( !is_dir($path)) {
             mkdir($path, 0777, true);
            chmod($path, 0777);
        }
        if ($this->validate()) {
            //生成文件名
            $fileName =rand(100000, 999999). '.'.$this->resources->extension;
            $this->soureUrl =$path.$fileName;
            if(!$this->resources->saveAs($this->soureUrl)){
                return false;
            }
        } else {
            //上传失败记录日志
            Yii::info($this->errors, $this->resources, 'Upload');
            return false;
        }
        return   $this->soureUrl;
    }


    /**
     * 上传文件
     * */
    public function uploadCkeditorImg()
    {
        $path =Yii::$app->params['ueditorImg'].'/'.date('ymd',time()).'/';
        if ( !is_dir($path)) {
            mkdir($path, 0777, true);
            chmod($path, 0777);
        }
        if ($this->validate()) {
            //生成文件名
            $fileName =rand(100000, 999999). '.'.$this->img->extension;
            $this->soureUrl =$path.$fileName;
            if(!$this->img->saveAs($this->soureUrl)){
                return false;
            }
        } else {
            //上传失败记录日志
            Yii::info($this->errors, $this->img, 'Upload');
            return false;
        }
        return   $this->soureUrl;
    }




}