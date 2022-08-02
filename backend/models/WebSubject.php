<?php
/**
 *  邮件发送model
 *
 * */
namespace backend\models;

use common\models\DbWebSource;
use common\models\DbWebSubject;
use Yii;
use yii\base\Model;
/**
 * LoginForm is the model behind the login form.
 *
 */



class WebSubject extends Model
{
    public $id;
    public $name;
    public $sort;
    public $pid;
    public $level;
    public $isDelete;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
                return [
                    [['id'],'integer', 'message' => 'id不合法'],
                    [['pid'],'integer', 'message' => 'pid不合法','on'=> ['addChild']],
                    [['name'], 'string', 'min' => 2, 'max' => 20,'message' => '标题长度必须大于2个字符,小于20个字符','on'=> ['addChild']],
                    [['sort','level'],'integer', 'message' => '排序请输入数字','on'=> ['addChild']],

                ];

    }

    /*
     * 添加分类
     */
    public function addSubject(){
        $db = new DbWebSubject();
        $db->name = $this->name;
        $db->sort = $this->sort ? $this->sort : (DbWebSubject::find()->where(['pid'=>$this->pid])->max('sort'))+1;
        $db->pid = $this->pid;
        $db->level = $this->level;
        return $db->save();
    }


}