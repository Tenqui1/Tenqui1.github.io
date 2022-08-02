<?php

namespace frontend\controllers;


use common\models\CommonHelper;
use common\models\DbUser;
use common\models\DbWebSource;
use common\models\DbWebSubject;
use Yii;
use yii\web\Controller;
use yii\web\Response;


class SiteController extends CommonController
{
    public $layout='index';

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $userTable = DbUser::tableName();
        //查询分类
        $webSubject = DbWebSubject::find()
            ->where(['level'=>0,'isDelete'=>0])
            ->asArray()
            ->all();
        //查询数据
        $webList = DbWebSource::find()
            ->alias('s')
            ->join('left join',"$userTable u",'s.uId = u.uId')
            ->select('s.*,u.userName')
            ->where(['s.status'=>1,'s.isDelete'=>0])
            ->limit(12)
            ->asArray()
            ->all();
        foreach ($webList as &$v){
            $v['registerDate'] = CommonHelper::getRegisetrDate($v['registerTime']);
            $v['analysisBrowseNum']=CommonHelper::getAnalysisNum($v['browseNum']);
            $v['analysisDownloadNum']=CommonHelper::getAnalysisNum($v['downloadNum']);
        }
        return $this->render('index',['webList'=>$webList,'webSubject'=>$webSubject]);
    }



    public function actionPhpinfo(){
        echo phpinfo();die;
    }
}
