<?php
use yii\widgets\LinkPager;
?>
    <span class="layui-breadcrumb">
  <a href="">网站模板</a>
  <a><cite>资源管理</cite></a>
</span>
    <div class="row top20per">
        <a class="layui-btn layui-btn-sm" href="<?=\yii\helpers\Url::to(['submit/add'])?>">
            <i class="layui-icon">&#xe608;</i> 添加
        </a>
    </div>
<table class="layui-table center-table">
    <colgroup>
        <col width="150">
        <col width="200">
        <col>
    </colgroup>
    <thead>
    <tr>
        <th>ID</th>
        <th>UID</th>
        <th>标题</th>
        <th>关键字</th>
        <th>时间</th>
        <th>状态</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($list as $v):?>
    <tr>
        <td><?= $v['id']?></td>
        <td><?= $v['uId']?></td>
        <td><?= $v['title']?></td>
        <td><?= $v['keyword']?></td>
        <td><?= $v['registerTime']?></td>
        <?php if($v['status'] == 0):?>
            <td><span class="layui-badge layui-badge">审核中</span></td>
        <?php elseif ($v['status'] == -1):?>
            <td><span class="layui-badge layui-black">锁定</span></td>
        <?php elseif ($v['status'] == 1):?>
            <td><span class="layui-badge layui-bg-green">审核通过</span></td>
        <?php endif;?>
        <td>
            <div class="layui-btn-group">
                <a class="layui-btn layui-btn-sm " href="<?=\yii\helpers\Url::to(['submit/web','id'=>$v['id']])?>">审核</a>
                <a class="layui-btn layui-btn-sm  layui-btn-normal">解压</a>
                <a class="layui-btn layui-btn-sm  layui-btn-normal">预览</a>
                <button class="layui-btn layui-btn-sm layui-btn-danger">锁定</button>
            </div>
        </td>
    </tr>
    <?php endforeach;?>

    </tbody>
</table>
<?= LinkPager::widget(['pagination' => $pages]); ?>