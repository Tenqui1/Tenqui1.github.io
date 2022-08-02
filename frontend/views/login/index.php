<div class="main">
    <div class="contact" style="padding: 20px; background-color: #fff;">
        <form id="wp_login_form" action="<?= Yii::$app->urlManager->createUrl(['login/index'])?>"  method="post" class="form">
            <div class="form-head">
                <h2>登录</h2>
                <p>还没有账号？<a href="<?= Yii::$app->urlManager->createUrl(['login/register'])?>">立即注册</a></p>
            </div>
            <?php if(isset($error)):?>
                <p style="text-align: center;color: red">
                    <i class="fa fa-exclamation-circle"></i>错误：<?= $error?>
                </p>
            <?php endif;?>
            <div class="form-body">
                <p id="result" class="err-msg"></p>
                <div class="ui-input">
                    <input type="text" name="account" placeholder="用户名/邮箱号" value="<?= $model->account?$model->account:'';?>">
                </div>
                <div class="ui-input">
                    <input type="password" name="password" placeholder="密码" value="<?= $model->password?$model->password:'';?>">
                </div>
<!--                                <label><input name="rememberme" type="checkbox" value="forever" />记住我</label>-->
                <p class="forget-password">
                    <a href="<?= Yii::$app->urlManager->createUrl(['login/forget-password'])?>">忘记密码？</a>
                </p>
                <input type="hidden" name='<?=Yii::$app->request->csrfParam?>' value="<?=Yii::$app->request->csrfToken?>"/>
                <button id="submitbtn" style="background-color: #21B384;color: white" class="ui-button ui-button-primary">登录</button>
            </div>
        </form>
    </div>
</div>
