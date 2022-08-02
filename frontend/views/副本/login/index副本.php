<div class="container">
    <form class="form-horizontal login-from" action="<?= Yii::$app->urlManager->createUrl(['login/index'])?>" method="post">
        <div class="form-group">
            <label  class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <h2 class="form-signin-heading login-title">登录</h2>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <p class="login-label">还没有账号？<a href="<?= Yii::$app->urlManager->createUrl(['login/register'])?>">前往注册</a></p>
                <?php if(isset($error)):?>
                    <p class="center error-label"><i class="fa fa-exclamation-circle"></i>错误：<?=$error?></p>
                <?php endif;?>
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">账号</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="account" placeholder="请输入邮箱或者用户名"  value="<?=isset($model->account) ? $model->account : '' ?>">
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control"  name="password" placeholder="请输入密码"  value="<?=isset($model->password) ? $model->password : '' ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label class="pull-left">
                        <input type="checkbox">记住我
                    </label>
                    <a href="<?= Yii::$app->urlManager->createUrl(['login/forget-password'])?>" class="pull-right">忘记密码？</a>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="hidden" name='<?=Yii::$app->request->csrfParam?>' value="<?=Yii::$app->request->csrfToken?>"/>
                <button type="submit" class="btn btn-default btn-block black">登录</button>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox"  style="text-align: center">
                    <label>
                        <input type="checkbox" checked="checked" disabled>同意<a class="modalLink" href="<?= Yii::$app->urlManager->createUrl(['site/agreement'])?>" data-toggle="tooltip" data-html="true" data-placement="top" title="" style="color:#337ab7">《注册声明》《版权声明》</a>
                    </label>
                </div>
            </div>
        </div>
    </form>
</div> <!-- /container -->
