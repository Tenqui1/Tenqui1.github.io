<?php
namespace backend\models;


use Yii;
use yii\base\Model;




class Upload extends Model
{
    public $scenario;
    public $resources;
    public $img;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
                return [
                    ['scenario', 'required', 'message' => '请选择场景'],
                    ['resources', 'required', 'message' => '请选择文件','on'=> 'resources'],
                    ['resources', 'file', 'message' => '请选择文件','on'=> 'resources'],
                    ['resources', 'validateResources','message'=>'上传的文件不合规','on'=> 'resources'],
                    ['img', 'required', 'message' => '请选择文件','on'=> 'img'],
                    ['img', 'file', 'message' => '请选择文件','on'=> 'img'],
                    ['img', 'validateCkeditorImg','message'=>'上传的文件不合规','on'=> 'img'],
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




    /**
     * 上传图片
     * */
    public function uploadImg()
    {
        $path =Yii::$app->params['upload']['web']['webPrewiewImg'].'/'.date('ymd',time()).'/';
        if ( !is_dir($path)) {
             mkdir($path, 0777, true);
             chmod($path, 0777);
        }
        if ($this->validate()) {
            //生成文件名
            $fileName =rand(100000000, 9999999999). '.'.$this->img->extension;
            $new = $path.$fileName;
            if(!$this->img->saveAs($new)){
                return false;
            }
        } else {
            //上传失败记录日志
            Yii::info($this->errors, $this->img, 'Upload');
            return false;
        }
        return   explode('resources',$new)[1];
    }

    /**
     * 上传文件
     * */
    public function uploadResource()
    {
        $path =Yii::$app->params['upload']['web']['webResource'].'/'.date('ymd',time()).'/';
        if ( !is_dir($path)) {
            mkdir($path, 0777, true);
            chmod($path, 0777);
        }
        if ($this->validate()) {
            //生成文件名
            $fileName =rand(100000000, 9999999999). '.'.$this->resources->extension;
            $new = $path.$fileName;
            if(!$this->resources->saveAs($new)){
                return false;
            }
        } else {
            //上传失败记录日志
            Yii::info($this->errors, $this->resources, 'Upload');
            return false;
        }
        return   explode('resources',$new)[1];
    }



    /**

     * 解压缩

     * @method unzip_file

     * @param  string     $zipName 压缩包名称

     * @param  string     $dest    解压到指定目录

     * @return boolean              true|false

     */

    public function unzip_file( $zipName,$dest){

        //检测要解压压缩包是否存在
//        if(!is_file($zipName)){
//            return false;
//
//        }

        //检测目标路径是否存在

        if(!is_dir($dest)){

            mkdir($dest,0777,true);

        }

        $zip=new \ZipArchive();

        if($zip->open($zipName)){

            $zip->extractTo($dest);

            $zip->close();

            return true;

        }else{

            return false;

        }

    }




}