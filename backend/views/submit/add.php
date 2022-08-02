<span class="layui-breadcrumb" >
    <a href="<?= Yii::$app->urlManager->createUrl(['submit/list']) ?>">网站模板</a>
    <a href="<?= Yii::$app->urlManager->createUrl(['submit/list']) ?>">资源管理</a>
    <a><cite>添加网站模板</cite></a>
</span>
<form class="layui-form top40per" action="<?= Yii::$app->urlManager->createUrl(['submit/add'])?>" method="post" enctype="multipart/form-data">
    <?php if(isset($error)):?>
    <div class="layui-form-item">
        <div class="layui-input-block center"><span class="layui-badge">错误：<?=$error?></span></div>
    </div>
    <?php endif;?>
    <?php if(isset($success)):?>
        <div class="layui-form-item">
            <div class="layui-input-block center"><span class="layui-badge layui-bg-green"><?=$success?></span></div>
        </div>
    <?php endif;?>
    <div class="layui-form-item">
        <label class="layui-form-label">标题</label>
        <div class="layui-input-block">
            <input type="text" name="title"   placeholder="请输入标题" autocomplete="off" class="layui-input" value="<?= $model->title?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">关键字</label>
        <div class="layui-input-block">
            <input type="text" name="keyword"   placeholder="请输入关键字" autocomplete="off" class="layui-input" value="<?= $model->keyword?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">简介</label>
        <div class="layui-input-block">
            <input type="text" name="describe"   placeholder="请输入简介" autocomplete="off" class="layui-input" value="<?= $model->describe?>">
        </div>
    </div>

    <div class="layui-form-item firstSubjectList">
        <label class="layui-form-label">一级分类</label>
        <div class="layui-input-block">
            <?php foreach ($subjectList as $v):?>
                <?php if($v['level'] == 0):?>
                <input type="checkbox"  lay-filter="firstLevel" name="subject[0][]" pid="<?= $v['pid']?>"  value="<?= $v['id'];?>"    title="<?= $v['name']?>" lay-skin="primary" >
                <?php endif;?>
            <?php endforeach;?>
        </div>
    </div>
       <div class="layui-form-item twoSubjectList" style="display: none">
           <label class="layui-form-label">二级分类</label>
           <div class="layui-input-block">

           </div>
    </div>
    <div class="layui-form-item threeSubjectList" style=" display: none ">
        <label class="layui-form-label">三级分类</label>
        <div class="layui-input-block">

        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">官网地址</label>
        <div class="layui-input-block">
            <input type="text" name="oldUrl"   placeholder="请输入官网地址" autocomplete="off" class="layui-input" value="<?= $model->oldUrl?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">预览图</label>
        <button type="button" class="layui-btn" id="coverUrl">
            <i class="layui-icon">&#xe67c;</i>上传预览图
        </button>
    </div>

        <div class="layui-form-item previewImg" style="<?= empty($info['coverUrl']) ? 'display:none':'' ?>">
            <input type="text" name="coverUrl" hidden value="<?=$model->coverUrl?>">
            <label class="layui-form-label">预览图</label>
            <img src="<?=Yii::$app->params['domain']['pic'].$model->coverUrl;?>" alt="" style="max-width: 80%">
        </div>

    <div class="layui-form-item">
        <label class="layui-form-label">资源</label>
        <button type="button" class="layui-btn" id="soureUrl">
            <i class="layui-icon">&#xe67c;</i>上传资源包
        </button>
    </div>

        <div class="layui-form-item resourcesUrl" style="<?= empty($info['soureUrl']) ? 'display:none':'' ?>">
            <input type="text" name="resources" hidden value="<?= $model->soureUrl?>" >
            <label class="layui-form-label">资源路径</label>
            <label class="layui-form-label url"><?= Yii::$app->params['domain']['resource'].$model->soureUrl?></label>
        </div>

    <div class="layui-form-item">
        <label class="layui-form-label">价格</label>
        <div class="layui-input-block">
            <input type="text" name="price"   placeholder="请输入价格" autocomplete="off" class="layui-input" value="<?= $model->price?>">
        </div>
    </div>
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">文本域</label>
        <div class="layui-input-block">
            <script id="manual" name="manual" type="text/plain">
                <?=$model->manual;?>
            </script>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">浏览量</label>
        <div class="layui-input-block">
            <input type="text" name="browseNum"   placeholder="请输入浏览量" autocomplete="off" class="layui-input" value="<?=$model->browseNum?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">收藏数</label>
        <div class="layui-input-block">
            <input type="text" name="collectionNum"   placeholder="请输入收藏数" autocomplete="off" class="layui-input" value="<?= $model->collectionNum?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">点赞数</label>
        <div class="layui-input-block">
            <input type="text" name="likeNum"   placeholder="请输入点赞数" autocomplete="off" class="layui-input" value="<?= $model->likeNum?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">分享数</label>
        <div class="layui-input-block">
            <input type="text" name="shareNum"   placeholder="请输入分享数" autocomplete="off" class="layui-input" value="<?= $model->shareNum?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">评论数</label>
        <div class="layui-input-block">
            <input type="text" name="commentNum"   placeholder="请输入评论数" autocomplete="off" class="layui-input" value="<?= $model->commentNum?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">下载数</label>
        <div class="layui-input-block">
            <input type="text" name="downloadNum"   placeholder="请输入下载数" autocomplete="off" class="layui-input" value="<?= $model->downloadNum?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">IE兼容</label>
        <div class="layui-input-block">
            <select name="IE">
                <option value="8" <?=$model->IE== 8 ? 'selected' : '' ?>>8</option>
                <option value="6" <?=$model->IE== 6 ? 'selected' : '' ?>>6</option>
                <option value="7" <?=$model->IE== 7 ? 'selected' : '' ?>>7</option>
                <option value="9" <?=$model->IE== 9 ? 'selected' : '' ?>>9</option>
                <option value="10" <?=$model->IE== 10 ? 'selected' : '' ?>>10</option>
                <option value="11" <?=$model->IE== 11 ? 'selected' : '' ?>>11</option>
            </select>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">IE是否兼容</label>
        <div class="layui-input-block">
            <select name="isIE">
                <option value="1" <?=$model->isIE== 1 ? 'selected' : '' ?>>是</option>
                <option value="0" <?=$model->isIE== 0 ? 'selected' : '' ?>>否</option>
            </select>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">火狐兼容</label>
        <div class="layui-input-block">
            <select name="isFirefox">
                <option value="1" <?=$model->isFirefox== 1 ? 'selected' : '' ?>>是</option>
                <option value="0" <?=$model->isFirefox== 0 ? 'selected' : '' ?>>否</option>
            </select>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">谷歌兼容</label>
        <div class="layui-input-block">
            <select name="isChrome">
                <option value="1" <?=$model->isChrome== 1 ? 'selected' : '' ?>>是</option>
                <option value="0" <?=$model->isChrome== 0 ? 'selected' : '' ?>>否</option>
            </select>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">Safari兼容</label>
        <div class="layui-input-block">
            <select name="isSafari">
                <option value="1" <?=$model->isSafari== 1 ? 'selected' : '' ?>>是</option>
                <option value="0" <?=$model->isSafari== 0 ? 'selected' : '' ?>>否</option>
            </select>
        </div>
    </div>

    <div class="layui-form-item">
        <div class="layui-input-block">
            <input type="hidden" name='<?=Yii::$app->request->csrfParam?>' value="<?=Yii::$app->request->csrfToken?>"/>
            <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>

<script>
    $(document).ready(function(){
        var ue = UE.getEditor('manual');

    });

    //初始化表单
    layui.use('form', function(){
        var form = layui.form;
        form.on('checkbox(firstLevel)', function(data){
            var html='';
            if( $('.firstSubjectList').find('input[type="checkbox"]:checked').length == 0 ){
                    $('.twoSubjectList').hide();
                }else{
                    $('.twoSubjectList').show();
                }
            $('input[type="checkbox"]:checked').each(function () {
                    var id=$(this).val();
                    <?php foreach ($subjectList as $v):?>
                    <?php if($v['level'] == 1 ):?>
                            if(<?= $v['pid'];?> == id){
                                html += '<input type="checkbox"  lay-filter="twoLevel" name="subject[1][]" pid="<?= $v['pid']?>" value="<?= $v['id'];?>"  title="<?= $v['name']?>" lay-skin="primary">';
                            }
                    <?php endif;?>
                    <?php endforeach;?>
            });
            html += '   </div>\n' +
                '</div>';
            $('.twoSubjectList').find('.layui-input-block').empty().append(html);
            layui.form.render();
        });

        form.on('checkbox(twoLevel)', function(data){
            var html='';
            if(   $('.twoSubjectList').find('input[type="checkbox"]:checked').length == 0 ){
                $('.threeSubjectList').hide();
            }else{
                $('.threeSubjectList').show();
            }
            $('input[type="checkbox"]:checked').each(function () {
                var id=$(this).val();
                <?php foreach ($subjectList as $v):?>
                <?php if($v['level'] == 2):?>
                    if(<?= $v['pid'];?> == id){
                        html +=   '<input type="checkbox"  lay-filter="threeLevel" name="subject[2][]" pid="<?= $v['pid']?>"  value="<?= $v['id'];?>" title="<?= $v['name']?>" lay-skin="primary" >';
                    }
                <?php endif;?>
                <?php endforeach;?>
            });
            html += '</div>\n' +
                '</div>';
            $('.threeSubjectList').find('.layui-input-block').empty().append(html);
            layui.form.render();
        });

    });
    //初始化文件提交
    layui.use('upload', function(){
        var upload = layui.upload;
        //执行实例
        var uploadInst = upload.render({
            elem: '#coverUrl' //绑定元素
            ,url: "<?= Yii::$app->urlManager->createUrl(['submit/upload'])?>" //上传接口
            ,data: {
                'scenario':'img',
                '<?=Yii::$app->request->csrfParam?>':"<?=Yii::$app->request->csrfToken?>"
            }
            ,done: function(res){
                //上传完毕回调
                if(res.error){
                    alert(res.error);
                    return false;
                }
                $('input[name="coverUrl"]').val(res.url);
                $('.previewImg').show();
                $('.previewImg').find('img').attr('src',"<?= Yii::$app->params['domain']['pic']?>"+res.url);
            }
            ,error: function(){
                //请求异常回调
                alert('网络错误');
            }
        });
        var uploadInst = upload.render({
            elem: '#soureUrl' //绑定元素
            ,url: "<?= Yii::$app->urlManager->createUrl(['submit/upload-resource'])?>" //上传接口
            ,accept:'file'
            ,data: {
                'scenario':'resources',
                '<?=Yii::$app->request->csrfParam?>':"<?=Yii::$app->request->csrfToken?>"
            }
            ,done: function(res){
                //上传完毕回调
                if(res.error){
                    alert(res.error);
                    return false;
                }
                $('input[name="resources"]').val(res.url);
                $('.resourcesUrl').find('.url').html("<?= Yii::$app->params['domain']['resource']?>"+res.url);
                $('.resourcesUrl').show();
            }
            ,error: function(){
                //请求异常回调
            }
        });
    });

    //生存随机数

    if($('input[name="browseNum"]').val() == 0){
        $('input[name="browseNum"]').val(randomNum(1000,5000));
    }
    if($('input[name="collectionNum"]').val() == 0){
        $('input[name="collectionNum"]').val(randomNum(100,200));
    }
    if($('input[name="likeNum"]').val() == 0){
        $('input[name="likeNum"]').val(randomNum(500,1000));
    }
    if($('input[name="shareNum"]').val() == 0){
        $('input[name="shareNum"]').val(randomNum(50,300));
    }
    if($('input[name="downloadNum"]').val() == 0){
        $('input[name="downloadNum"]').val(randomNum(50,100));
    }



</script>