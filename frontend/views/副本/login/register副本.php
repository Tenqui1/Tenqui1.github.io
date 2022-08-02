<div class="main">
    <div class="contact" style="padding: 20px; background-color: #fff;">
    <form class="form-horizontal login-from" style="width: 50%" action="<?= Yii::$app->urlManager->createUrl(['login/register'])?>" method="post">
        <div class="form-group">
            <label  class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <h2 class="form-signin-heading login-title">注册</h2>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <p class="login-label">已有账号？<a href="<?= Yii::$app->urlManager->createUrl(['login/index'])?>">前往登录</a></p>
                <?php if(isset($error)):?>
                    <p class="center error-label"><i class="fa fa-exclamation-circle"></i>错误：<?=$error?></p>
                <?php endif;?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="userName" placeholder="请输入用户名" value="<?=isset($model->userName) ? $model->userName : '' ?>">
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">邮箱</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="userEmail" name="email" placeholder="请输入邮箱" value="<?=isset($model->email) ? $model->email : '' ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">验证码</label>
            <div class="col-sm-10 input-group" style="    padding-left: 2.5%;padding-right: 2.5%;">
                <input type="text" class="form-control " name="code" placeholder="请输入验证码"  value="<?=isset($model->code) ? $model->code : '' ?>">
                <span class="input-group-addon  btn btn-success get-code-button">获取验证码</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control"  name="password" placeholder="请输入密码"  value="<?=isset($model->password) ? $model->password : '' ?>">
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">确认密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control"  name="rpassword" placeholder="再次确认密码"  value="<?=isset($model->rpassword) ? $model->rpassword : '' ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label class="pull-left">
                        <input type="checkbox" checked="checked" disabled>同意<a class="modalLink" href="<?= Yii::$app->urlManager->createUrl(['site/agreement'])?>" data-toggle="tooltip" data-html="true" data-placement="top" title="" style="color:#337ab7">《注册声明》《版权声明》</a>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="hidden" name='<?=Yii::$app->request->csrfParam?>' value="<?=Yii::$app->request->csrfToken?>"/>
                <button type="submit" class="btn btn-default btn-block black" >注册</button>
            </div>
        </div>
    </form>
</div> <!-- /container -->
<script src="<?= \common\models\CommonHelper::getAssetUrl('/js/mailCompletion.js')?>"></script>
<script>
    //初始化自动邮箱补全插件
    var mail = new hcMailCompletion('userEmail');
    mail.run();

    $('.get-code-button').click(function () {
        if($(this).attr('disabled') == 'disabled'){
            return false;
        }
        var userEmail = $('input[name="email"]').val();
        if(!userEmail){
            alert('请输入邮箱地址');
            return false;
        }
        $(this).attr('disabled', true);
        var left_time = 60;
        var tt = window.setInterval(function(){
            left_time = left_time - 1;
            if (left_time <= 0) {
                window.clearInterval(tt);
                $('.get-code-button').html('获取验证码');
                $('.get-code-button').removeAttr('disabled');
            }else {
                $('.get-code-button').html('（' + left_time + '）秒后重新发送');
            }
        }, 1000);
        $.ajax({
            type: "POST",
            url:  "/login/get-email-code.html",
            data: {
                _csrf:$('meta[name="csrf-token"]').attr("content"),
                userEmail:userEmail,
                scene:'register'
            },
            success: function(data){
                var data =JSON.parse(data);
                alert(data.msg);
                return false;
            }
        });
        return false;

    });
</script>
