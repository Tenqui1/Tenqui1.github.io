<?php

namespace frontend\controllers;


use frontend\models\LoginForm;
use frontend\models\MailForm;
use Yii;
use yii\web\Controller;
use yii\web\Response;


class LoginController extends CommonController
{
    public $layout = 'login';






    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionIndex()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if(Yii::$app->request->isPost) {
            $model->scenario = 'login';
            $model->load(Yii::$app->request->post(), '');
            $checkRes = $model->validate();
            if (!$checkRes) {
                return $this->render('index', [
                    'error' => reset($model->getErrors())[0],
                    'model' => $model
                ]);
            }
            $result = $model->login();
            if(!$result){
                return $this->render('index',['model'=>$model]);
            }
            if(!empty(Yii::$app->request->referrer)){
                return $this->redirect( Yii::$app->user->returnUrl);
            }
            return $this->redirect('person.html');
        }
        return $this->render('index', [
            'model' => $model,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionRegister()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if(Yii::$app->request->isPost){
            $model->scenario='register';
            $model->load(Yii::$app->request->post(),'');
            $checkRes = $model->validate();
            if(!$checkRes){
                return $this->render('register', [
                    'error' => reset( $model->getErrors())[0],
                    'model'=>$model
                ]);
            }
            $result = $model->register();
            //跳转
            if(!$result){
                return $this->render('register',['model'=>$model]);
            }
            if(!empty(Yii::$app->request->referrer)){
                return $this->redirect( Yii::$app->user->returnUrl);
            }
            return $this->redirect('person.html');
        }
        return $this->render('register',['model'=>$model]);
    }

    /*
     * 忘记密码
     *
     * @param userEmail
     * @param $code
     * @param password
     * @param rpassword
     * @return view
     * */
    public function actionForgetPassword()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if(Yii::$app->request->isPost){
            $model->scenario='forgetpassword';
            $model->load(Yii::$app->request->post(),'');
            $checkRes = $model->validate();
            if(!$checkRes){
                return $this->render('forgetpassword', [
                    'error' => reset( $model->getErrors())[0],
                    'model'=>$model
                ]);
            }
            $result = $model->forgetpassword();
            //跳转
            if(!$result){
                return $this->render('forgetpassword',['model'=>$model]);
            }
            if(empty(Yii::$app->request->referrer)){
                return $this->redirect( Yii::$app->user->returnUrl);
            }
            return $this->redirect('index.html');
        }
        return $this->render('forgetpassword',['model'=>$model]);
    }




    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        $model = new LoginForm();
        if($model->logout() || empty(Yii::$app->request->referrer)){
            return $this->redirect( Yii::$app->user->returnUrl);
        }
        return $this->redirect(Yii::$app->request->referrer);
    }


    /**
     *  获取邮箱验证码
     *
     * @param $userEmail
     * @return json
     * */
    public  function actionGetEmailCode(){
        $model = new MailForm();
        if(!Yii::$app->request->isAjax || !Yii::$app->request->isPost){
            return json_encode(['status' => 0,'msg'=>'请求方式非法']);
        }
        $model->load(Yii::$app->request->post(),'');
        $checkRes = $model->validate();
        if(!$checkRes){
            return json_encode(['status' => 0,'msg'=>reset( $model->getErrors())[0]]);
        }
        if(!$model->checkEmailLimit()){
            return json_encode(['status' => 0,'msg'=>'今日邮件发送数已经达到最大']);
        }
        $res = $model->sendMailCode();
        if(!$res){
            return json_encode(['status' => 0,'msg'=>'邮箱验证码发送失败']);
        }
        return json_encode(['status' => 1,'msg'=>'验证码发送成功，有效时间'.(Yii::$app->params['emailConfig']['expire']/60).'分钟']);
    }


}
