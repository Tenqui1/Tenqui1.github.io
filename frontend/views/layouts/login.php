<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
\frontend\assets\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title> <?=isset($this->params['seo']['title'])?Html::encode($this->params['seo']['title']):'';?></title>
    <meta name="keywords" content="<?=isset($this->params['seo']['keywords'])?Html::encode($this->params['seo']['keywords']):'';?>" />
    <meta name="description" content="<?=isset($this->params['seo']['description'])?Html::encode($this->params['seo']['description']):'';?>" />
    <link rel="stylesheet" href="<?= \common\models\CommonHelper::getAssetUrl('font-awesome-4.7.0/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= \common\models\CommonHelper::getAssetUrl('dowebok/index/css/style.css') ?>">
    <link rel="stylesheet" href="<?= \common\models\CommonHelper::getAssetUrl('dowebok/login/css/login.css')?>">
    <script src="<?= \common\models\CommonHelper::getAssetUrl('dowebok/index/js/jquery.min.js')?>"></script>
    <script src="<?= \common\models\CommonHelper::getAssetUrl('dowebok/login/js/script.js')?>"></script>
</head>
<body>
<header class="hd">
    <h1><a href="/" title="58itbook">58itbook</a></h1>
    <ul class="nav">
        <li><a class="cur" href="/" title="首页">首页</a></li>
        <li><a href="/code" title="代码">网站模板</a></li>
        <li><a href="javascript:alert('禁止入内')">素材插件</a></li>
        <li><a href="javascript:alert('禁止入内')">工具类库</a></li>
        <li><a href="javascript:alert('禁止入内')">IT社区</a></li>
        <li><a href="javascript:alert('禁止入内')">关于我们</a></li>
    </ul>
    <div class="search">
        <form method="get" action="/">
            <input class="key" type="text" name="s" placeholder="输入关键词"> <input class="go" type="submit" value="搜索">
        </form>
        <?php if(!$this->params['loginStatus']):?>
            <a class="login rgisetr-login-btn" href="<?=\yii\helpers\Url::to(['login/index','callback'=>Yii::$app->request->getHostInfo().Yii::$app->request->url])?>">登录</a>
            <a class="reg rgisetr-login-btn" href="<?=\yii\helpers\Url::to(['login/register']) ?>">注册</a>
        <?php else:?>
            <div class="userPhoto">
                <a  href="#">
                    <img src="<?=$this->params['userInfo']['photo']?>">
                </a>
                <ul style="display: none">
                    <li><a href="<?=\yii\helpers\Url::to(['person/index']) ?>">个人主页</a></li>
                    <li><a href="">账户设置</a></li>
                    <li><a href="">我的私信</a></li>
                    <li><a href="">我的签到</a></li>
                    <li><a href="">我的插件</a></li>
                    <li><a href="">我的收藏</a></li>
                    <li><a href="">我的记录</a></li>
                    <li><a href="">我的粉丝</a></li>
                    <li><a href="<?=\yii\helpers\Url::to(['login/logout']) ?>">退出登陆</a></li>
                </ul>
            </div>
        <?php endif;?>
    </div>
</header>
<?php $this->beginBody() ?>

    <?= $content ?>

<?php $this->endBody() ?>
<footer class="ft">
    <p>&copy; CopyRight 2079 itbook.com <a href="http://www.miitbeian.gov.cn/" target="_blank">粤ICP备14034220号-1</a></p>
</footer>


</body>
</html>
<?php $this->endPage() ?>

