
<?php
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);
?>

<style>
    .layui-itbook .layui-layer-btn0{
        background-color: #323436;
        border-color: #323436;
    }
</style>
<div class="container">
    <form class="form-horizontal submit-from" id="form" style="margin-bottom: 50px"  action="<?= Yii::$app->urlManager->createUrl(['submit/web'])?>" method="post"  enctype="multipart/form-data">
        <div class="form-group">
            <label  class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <h2 class="form-signin-heading submit-title">发布网站模板</h2>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <p class="submit-agreement">
                    <label class="submit-label " onclick="explain('submit')">发布说明</label>
                    <label class="submit-label" onclick="explain('reward')">奖励说明</label>
                    <label class="submit-label" onclick="explain('punishment')">惩罚说明</label>
                </p>
                <p class="center"><i class="glyphicon glyphicon-volume-down"></i>提示：上传文件为zip或rar格式，请确保有演示文件，并能正常访问代码无错误！</p>
                <?php if(isset($error)):?>
                <p class="center error-label"><i class="fa fa-exclamation-circle"></i>错误：<?=$error?></p>
                <?php endif;?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">标题</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title" placeholder="请输入模板标题" value="<?=isset($model->title) ? $model->title : '' ?>">
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">简介</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="describe" placeholder="请输入模板的简介"  value="<?=isset($model->describe) ? $model->describe : '' ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">标签</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="keyword" placeholder="插件关键字,请用逗号隔开。例如商城模板，商务模板，黑色大气。（写的越全越容易被用户找到下载哦！）"   value="<?=isset($model->keyword) ? $model->keyword : '' ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">IE兼容</label>
            <div class="col-sm-4">
                <select name="IE" class="form-control" id="">
                    <option value="8" <?=isset($model->IE) && $model->IE == 8 ? 'selected' : '' ?>>8</option>
                    <option value="6" <?=isset($model->IE) && $model->IE == 6 ? 'selected' : '' ?>>6</option>
                    <option value="7" <?=isset($model->IE) && $model->IE == 7 ? 'selected' : '' ?>>7</option>
                    <option value="9" <?=isset($model->IE) && $model->IE == 9 ? 'selected' : '' ?>>9</option>
                    <option value="10" <?=isset($model->IE) && $model->IE == 10 ? 'selected' : '' ?>>10</option>
                    <option value="11" <?=isset($model->IE) && $model->IE == 11 ? 'selected' : '' ?>>11</option>
                </select>
            </div>
            <label class="col-sm-2 control-label">价格</label>
            <div class="col-sm-4">
                <input type="text" class="form-control"  name="price"  value="<?=isset($model->price) ? $model->price : '' ?>" placeholder="下载所需IT币(用户下载您将获得对应IT币)" >
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">官网地址</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="oldUrl" <?=isset($model->oldUrl) ? $model->oldUrl : '' ?>" placeholder="官网地址，没用可以不填">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">上传文件</label>
            <div class="col-sm-10">
                <input type="file" id="resource" name="resources" onchange="fileSelected()">
                <div class="help-block top20per" id="file-info" style="display:none">
                    <p><label>文件名：</label><span class="fileName">xxxxx.zip</span></p>
                    <p><label>文件类型：</label><span class="fileType">xxxxx.zip</span></p>
                    <p><label>文件大小：</label><span class="fileSize">xxxxx.zip</span></p>
                </div>
                <p class="help-block"><i class="glyphicon glyphicon-volume-down"></i>提示：文件大小不得超过30M</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">使用方法 </label>
            <div class="col-sm-10">
                <p style="margin-top: 8px;"><i class="glyphicon glyphicon-volume-down"></i>提供插件使用方法介绍等信息(奖励2倍以上IT币)</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label"> </label>
            <div class="col-sm-10">
                <script id="manual" name="manual" type="text/plain"><?=!empty($model->manual) ? $model->manual:''?></script>
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="hidden" name='<?=Yii::$app->request->csrfParam?>' value="<?=Yii::$app->request->csrfToken?>"/>
                <button type="submit" onclick="submitUEditor();uploadFile()" class="btn btn-default btn-block black" data-toggle="modal" data-target="#sumit-process-model">提交</button>
            </div>
        </div>
    </form>
</div> <!-- /container -->

<div class="modal fade" tabindex="-1" role="dialog"  id="sumit-process-model" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >文件提交中，请耐心等待...</h5>
            </div>
            <div class="modal-body">
                <div class="progress" id="form-progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                        <span class="sr-only">0% Complete (success)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function(){
        var ue = UE.getEditor('manual');
    });
    //询问框
    function explain(label){
        if(label == 'submit') {
            var title='发布说明';
            var content = <?= json_encode($agreement['explain'])?>;
        }else if(label == 'reward'){
            var title='奖励说明';
            var content =<?= json_encode($agreement['reward'])?>;
        }else if(label == 'punishment'){
            var title='惩罚说明';
            var content = <?= json_encode($agreement['punishment'])?>;
        }
        layer.open({
            type: 1,
            skin: 'layui-itbook', //样式类名
            shadeClose:false,
            title:title,
            area: ['500px', '500px'], //宽高
            content: content,
            btn:'我了解了',
            btnAlign: 'c'
        });
    }

    function fileSelected() {
        var file = document.getElementById('resource').files[0];
        if (file) {
            var fileSize = 0;
            if (file.size > 1024 * 1024){
                fileSize = (Math.round(file.size * 100 / (1024 * 1024)) / 100).toString() + 'MB';
            }else{
                fileSize = (Math.round(file.size * 100 / 1024) / 100).toString() + 'KB';
            }
            $('#file-info').css('display','block');
            $('#file-info').find('.fileName').html(file.name);
            $('#file-info').find('.fileType').html(file.type);
            $('#file-info').find('.fileSize').html(fileSize);
        }else{
            $('#file-info').css('display','none');
        }
    }

    function uploadFile() {
        var fd = new FormData();
        var xhr = new XMLHttpRequest();
        /* 事件监听 */
        xhr.upload.addEventListener("progress", uploadProgress, false);
        xhr.addEventListener("load", uploadComplete, false);
        xhr.addEventListener("error", uploadFailed, false);
        xhr.addEventListener("abort", uploadCanceled, false);
        /* 下面的url一定要改成你要发送文件的服务器url */
        xhr.open("POST", "<?= Yii::$app->urlManager->createUrl(['submit/web'])?>");
        xhr.send(fd);
    }

    function uploadProgress(evt) {
        if (evt.lengthComputable) {
            var percentComplete = Math.round(evt.loaded * 100 / evt.total);
            $('#form-progress').find('.progress-bar').css('width',percentComplete.toString()+'%');
        }
        else {
            $('#form-progress').find('.progress-bar').css('width',0);
        }
    }

    function uploadComplete(evt) {
        /* 当服务器响应后，这个事件就会被触发 */
        //alert(evt.target.responseText);
        alert("上传成功");
    }

    function uploadFailed(evt) {
        alert("上传文件发生了错误尝试");
    }

    function uploadCanceled(evt) {
        alert("上传被用户取消或者浏览器断开连接");
    }

</script>


