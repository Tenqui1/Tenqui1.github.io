<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
\backend\assets\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>layout 后台大布局 - Layui</title>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= \common\models\CommonHelper::getAssetUrl('/layui/css/layui.css') ?>">
    <link rel="stylesheet" href="<?= \common\models\CommonHelper::getAssetUrl('/css/common.css') ?>">
    <script src="<?= \common\models\CommonHelper::getAssetUrl('/layui/layui.js') ?>"></script>
    <script src="<?= \common\models\CommonHelper::getAssetUrl('/js/common.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="<?= \common\models\CommonHelper::getAssetUrl('/ueditor/ueditor.config.js') ?>"></script>
    <script type="text/javascript" src="<?= \common\models\CommonHelper::getAssetUrl('/ueditor/ueditor.all.js') ?>"></script>
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">ITbook后台</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item"><a href="">控制台</a></li>
            <li class="layui-nav-item"><a href="">商品管理</a></li>
            <li class="layui-nav-item"><a href="">用户</a></li>
            <li class="layui-nav-item">
                <a href="javascript:;">其它系统</a>
                <dl class="layui-nav-child">
                    <dd><a href="">邮件管理</a></dd>
                    <dd><a href="">消息管理</a></dd>
                    <dd><a href="">授权管理</a></dd>
                </dl>
            </li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
                    贤心
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">退了</a></li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">首页</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;">列表一</a></dd>
                        <dd><a href="javascript:;">列表二</a></dd>
                        <dd><a href="javascript:;">列表三</a></dd>
                        <dd><a href="">超链接</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">网站模板</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?=\yii\helpers\Url::to(['submit/list'])?>">资源管理</a></dd>
                        <dd><a href="<?=\yii\helpers\Url::to(['submit/submit'])?>">资源发布</a></dd>
                        <dd><a href="<?=\yii\helpers\Url::to(['web-subject/list'])?>">分类管理</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item"><a href="">云市场</a></li>
                <li class="layui-nav-item"><a href="">发布商品</a></li>
            </ul>
        </div>
    </div>
    <?php $this->beginBody() ?>
    <div class="layui-body">
        <!-- 内容主体区域 -->
        <div style="padding: 15px;">
            <?= $content ?>
        </div>
    </div>
    <?php $this->endBody() ?>
    <div class="layui-footer">
        <ul class="list-inline text-center">
            <li>© CopyRight 2019 itbook.com </li>
        </ul>
    </div>
</div>


<?php $this->endPage() ?>
<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;

    });
</script>
</body>
</html>