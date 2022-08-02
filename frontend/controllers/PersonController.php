<?php

namespace frontend\controllers;


use Yii;
use yii\web\Controller;
use yii\web\Response;


class PersonController extends CommonController
{
    public $layout='person';

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }





}
