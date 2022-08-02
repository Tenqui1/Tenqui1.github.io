<?php
use yii\widgets\LinkPager;
?>
    <span class="layui-breadcrumb">
        <a href="<?= Yii::$app->urlManager->createUrl(['submit/list']) ?>">网站模板</a>
        <?php if(empty($info)):?>
            <a><cite>分类管理</cite></a>
        <?php else:?>
            <a href="<?= Yii::$app->urlManager->createUrl(['web-subject/list']) ?>">分类管理</a>
            <a><cite><?= $info->name?></cite></a>
        <?php endif;?>
</span>
<div class="row top20per">
    <button class="layui-btn layui-btn-sm">
        <i class="layui-icon">&#xe608;</i> 添加
    </button>
</div>
<table class="layui-table center-table">
    <colgroup>
        <col width="150">
        <col width="200">
        <col>
    </colgroup>
    <thead>
    <tr class="center">
        <th>ID</th>
        <th>名称</th>
        <th>排序</th>
        <th>PID</th>
        <th>父级</th>
        <th>等级</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($list as $v):?>
    <tr>
        <td><?= $v['id']?></td>
        <td><?= $v['name']?></td>
        <td><?= $v['sort']?></td>
        <td><?= $v['pid']?></td>
        <td><?= $v['pname']?></td>
        <td><?= $v['level']?></td>
        <td>
            <div class="layui-btn-group">
                <a class="layui-btn layui-btn-sm  " href="<?=\yii\helpers\Url::to(['web-subject/add-child-subject','id'=>$v['id']])?>">添加子分类</a>
                <a class="layui-btn layui-btn-sm  layui-btn-normal">修改</a>
                <button class="layui-btn layui-btn-sm layui-btn-danger">删除</button>
            </div>
        </td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
<div class="row" id="page"></div>
    <script>
        layui.use('laypage', function(){
            var laypage = layui.laypage;
            //执行一个laypage实例
            laypage.render({
                elem: 'page' //注意，这里的 test1 是 ID，不用加 # 号
                ,limit:<?=$page->length?>
                ,curr:<?=$page->current?>
                ,count:<?=$page->total?> //数据总数，从服务端得到
                ,jump: function(obj, first){
                    //首次不执行
                    if(!first){
                        Urlobj.set('page',obj.curr);
                        window.location.href =Urlobj.url();
                    }
                }
            });
        });
    </script>

