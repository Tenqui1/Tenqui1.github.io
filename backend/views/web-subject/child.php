<span class="layui-breadcrumb" >
  <a href="<?= Yii::$app->urlManager->createUrl(['submit/list']) ?>">网站模板</a>
  <a href="<?= Yii::$app->urlManager->createUrl(['web-subject/list']) ?>">分类管理</a>
    <a href="<?= Yii::$app->urlManager->createUrl(['web-subject/list','pid'=>$info['id']]) ?>"><?= $info->name?></a>
  <a><cite>添加子分类</cite></a>
</span>
<form class="layui-form top40per" action="<?= Yii::$app->urlManager->createUrl(['web-subject/add-child-subject','id'=>$info->id])?>" method="post">
    <?php if(isset($error)):?>
    <div class="layui-form-item">
        <p class="center error-label"><i class="fa fa-exclamation-circle"></i>错误：<?=$error?></p>
    </div>
    <?php endif;?>
    <div class="layui-form-item">
        <label class="layui-form-label">名称</label>
        <div class="layui-input-block">
            <input type="text" name="name" required  lay-verify="required" placeholder="请输入名称" autocomplete="off" class="layui-input" value="<?= $model->name ? $model->name : '' ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">排序</label>
        <div class="layui-input-block">
            <input type="text" name="sort" required  lay-verify="required" placeholder="请输入排序，越小排序越靠前" autocomplete="off" class="layui-input" value="<?= $model->sort ? $model->sort : '' ?>">
        </div>
    </div>
    <input type="text" name="pid" hidden value="<?= $info['id']?>">
    <input type="text" name="level" hidden value="<?= $info['level']+1?>">
    <div class="layui-form-item">
        <div class="layui-input-block">
            <input type="hidden" name='<?=Yii::$app->request->csrfParam?>' value="<?=Yii::$app->request->csrfToken?>"/>
            <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
        </div>
    </div>
</form>

<script>
    //Demo
    layui.use('form', function(){
        var form = layui.form;
    });
</script>