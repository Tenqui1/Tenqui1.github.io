<div class="main">
    <div class="contact" style="padding: 20px; background-color: #fff;">
        <form id="wp_login_form"  action="<?= Yii::$app->urlManager->createUrl(['login/forget-password'])?>" method="post" class="form">
            <div class="form-head">
                <h2>重置密码</h2>
                <p>想起密码？<a href="<?= Yii::$app->urlManager->createUrl(['login/index'])?>">前往登录</a></p>
            </div>
            <?php if(isset($error)):?>
                <p style="text-align: center;color: red">
                    <i class="fa fa-exclamation-circle"></i>错误:<?= $error?>
                </p>
            <?php endif;?>
            <div class="form-body">
                <div class="ui-input">
                    <input type="text" id="userEmail" name="email" placeholder="请输入邮箱"  value="<?=isset($model->email) ? $model->email : '' ?>">
                </div>
                <div class="ui-input">
                    <input type="text" name="code" placeholder="请输入验证码"  value="<?=isset($model->code) ? $model->code : '' ?>">
                    <span class="get-code-button">获取验证码</span>
                </div>

                <div class="ui-input">
                    <input type="password" name="password" placeholder="密码" value="<?= $model->password?$model->password:'';?>">
                </div>

                <div class="ui-input">
                    <input type="password"  name="rpassword" placeholder="再次确认密码"  value="<?=isset($model->rpassword) ? $model->rpassword : '' ?>">
                </div>

                <input type="hidden" name='<?=Yii::$app->request->csrfParam?>' value="<?=Yii::$app->request->csrfToken?>"/>
                <button id="submitbtn" style="background-color: #21B384;color: white" class="ui-button ui-button-primary">重置密码</button>
            </div>
        </form>
    </div>
</div>
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
                scene:'forgetpassword'
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

