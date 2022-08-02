<?php


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
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title> <?=isset($this->params['seo']['title'])?Html::encode($this->params['seo']['title']):'';?></title>
    <meta name="keywords" content="<?=isset($this->params['seo']['keywords'])?Html::encode($this->params['seo']['keywords']):'';?>" />
    <meta name="description" content="<?=isset($this->params['seo']['description'])?Html::encode($this->params['seo']['description']):'';?>" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= \common\models\CommonHelper::getAssetUrl('/css/common.css') ?>" rel="stylesheet">
    <link href="<?= \common\models\CommonHelper::getAssetUrl('/css/submit.css') ?>" rel="stylesheet">


    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/layer/2.3/layer.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="<?= \common\models\CommonHelper::getAssetUrl('/ueditor/ueditor.config.js') ?>"></script>
    <script type="text/javascript" src="<?= \common\models\CommonHelper::getAssetUrl('/ueditor/ueditor.all.js') ?>"></script>

</head>
<body>
<header id="header">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">ITbook</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=\yii\helpers\Url::to(['site/index'])?>">ITbook</iT></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?=\yii\helpers\Url::to(['site/index'])?>">首页</a></li>
                    <li><a href="#about">网站模板</a></li>
                    <li><a href="#contact">素材插件</a></li>
                    <li><a href="#contact">工具类库</a></li>
                    <li><a href="#contact">IT社区</a></li>
                    <li><a href="#contact">关于我们</a></li>
                </ul>
                <div class="pull-right">
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="搜索...">
                        </div>
                        <button type="submit" class="btn btn-default">搜索</button>
                    </form>
                    <?php if($this->params['userInfo']):?>
                        <div class="col-xs-2 placeholder pull-right" >
                            <a href="">
                                <img class="img-circle" style="width:50px;height: 50px" src="<?=$this->params['userInfo']['photo']?>"  class="img-responsive" alt="Generic placeholder thumbnail">
                            </a>
                        </div>
                    <?php else:?>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="<?=\yii\helpers\Url::to(['login/index'])?>">登录</a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['login/register'])?>">注册</a></li>
                        </ul>
                    <?php endif;?>
                </div>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</header>
<?php $this->beginBody() ?>
<?= $content ?>
<?php $this->endBody() ?>
<footer id="footer" class="footer">
    <div class="row footer-bottom">
        <ul class="list-inline text-center">
            <li>© CopyRight 2019 itbook.com </li>
        </ul>
    </div>
</footer>

<?php $this->endPage() ?>

