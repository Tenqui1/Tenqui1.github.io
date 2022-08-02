<div class="container">
    <div class="col-lg-4">
        <div class="panel panel-default userinfo-panel-box " style="height: 730px">
            <div class="panel-body">
                <div class=" userinfo-panel-useinfo center">
                    <a href="" ><img class="user-photo" src="/img/54.png"></a>
                    <ul class="list-unstyled userinfo-panel-option-list top20per">
                        <li class="active"><i class="fa fa-calendar right5per"></i>今日运势</li>
                        <li><i class="fa fa-user-circle right5per"></i>我的资料</li>
                        <li><i class="fa fa-cloud-upload right5per"></i>我的插件</li>
                        <li><i class="fa fa-envelope right5per"></i>我的消息</li>
                        <li><i class="fa fa-bitcoin right5per"></i>IT币记录</li>
                        <li><i class="fa fa-history right5per"></i>我的记录</li>
                        <li><i class="fa fa-users right5per"></i>我的粉丝</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div class="col-lg-8">
        <form class="form-horizontal submit-from" style="margin-bottom: 50px"  action="<?= Yii::$app->urlManager->createUrl(['submit/web'])?>" method="post"  enctype="multipart/form-data">
            <div class="form-group">
                <label  class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <h2 class="form-signin-heading submit-title center">个人资料</h2>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">用户名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="userName" placeholder="用户名，不可修改" value="<?=isset($model->userName) ? $model->userName : '' ?>" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">邮箱</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" placeholder="邮箱，不可修改" value="<?=isset($model->email) ? $model->email : '' ?>" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">性别</label>
                <div class="col-sm-10">
                    <select class="form-control">
                        <option value="1">男</option>
                        <option value="0">女</option>
                        <option value="2">保密</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">地址</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="address" placeholder="地址" value="<?=isset($model->address) ? $model->address : '' ?>" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">GitHub</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="github" placeholder="github地址" value="<?=isset($model->github) ? $model->github : '' ?>" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">QQ</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" placeholder="qq" value="<?=isset($model->qq) ? $model->qq : '' ?>" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">微信</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" placeholder="wechat" value="<?=isset($model->wechat) ? $model->wechat : '' ?>" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">签名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" placeholder="来一句让人印象深刻的标记语言吧" value="<?=isset($model->label) ? $model->label : '' ?>" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">自我介绍</label>
                <div class="col-sm-10">
                    <textarea  class="form-control" style="height: 100px" name="introduction" placeholder="自我介绍，做一个有介绍的人" value="<?=isset($model->introduction) ? $model->introduction : '' ?>" ></textarea>
                </div>
            </div>

        </form>
    </div>
</div>