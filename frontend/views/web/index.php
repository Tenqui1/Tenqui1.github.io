<div class="main" style="margin: 0px auto;margin-bottom: 20px">
    <div class="tt3" style="<?= empty($subjectObj->subjectList[2]) ? 'height:100px':''?>">
            <ul class="subject-list">
                <li>一级分类</li>
                <?php foreach ($subjectObj->subjectList[0] as $v):?>
                     <li><a href="<?=\yii\helpers\Url::to(['web/index','subjectId'=>$v['id']])?>" class="<?= $v['id'] == $subjectObj->one ? 'active': ''?>"><?=$v['name']?></a></li>
                <?php endforeach;?>
            </ul>
            <ul class="subject-list">
                <li>二级分类</li>
                <?php foreach ($subjectObj->subjectList[1] as $v):?>
                    <li><a href="<?=\yii\helpers\Url::to(['web/index','subjectId'=>$v['id']])?>" class="<?= $v['id'] == $subjectObj->two ? 'active': ''?>"><?=$v['name']?></a></li>
                <?php endforeach;?>
            </ul>
        <?php if(!empty($subjectObj->subjectList[2])):?>
            <ul class="subject-list">
                <li>三级分类</li>
                <?php foreach ($subjectObj->subjectList[2] as $v):?>
                    <li><a href="<?=\yii\helpers\Url::to(['web/index','subjectId'=>$v['id']])?>" class="<?= $v['id'] == $subjectObj->three ? 'active': ''?>"><?=$v['name']?></a></li>
                <?php endforeach;?>
            </ul>
        <?php endif;?>
    </div>

    <div class="tt4">
        <ul class="list" >
            <li ><i class="fa fa-list-ul"></i>排序</li>
            <li><a class="<?= $subjectObj->orderBy == ''?'active':''; ?>" href="<?=\yii\helpers\Url::to(['web/index','subjectId'=>$subjectObj->subjectId])?>"><i class="fa fa-arrow-down"></i>默认</a></li>
            <li><a class="<?= $subjectObj->orderBy == 'browseNum'?'active':''; ?>"  href="<?=\yii\helpers\Url::to(['web/index','subjectId'=>$subjectObj->subjectId,'orderBy'=>'browseNum'])?>"><i class="fa fa-arrow-down"></i>人气</a></li>
            <li><a class="<?= $subjectObj->orderBy == 'downloadNum'?'active':''; ?>" href="<?=\yii\helpers\Url::to(['web/index','subjectId'=>$subjectObj->subjectId,'orderBy'=>'downloadNum'])?>"><i class="fa fa-arrow-down"></i>下载</a></li>
            <li><a class="<?= $subjectObj->orderBy == 'collectionNum'?'active':''; ?>" href="<?=\yii\helpers\Url::to(['web/index','subjectId'=>$subjectObj->subjectId,'orderBy'=>'collectionNum'])?>"><i class="fa fa-arrow-down"></i>收藏</a></li>
            <li><a class="<?= $subjectObj->orderBy == 'likeNum'?'active':''; ?>" href="<?=\yii\helpers\Url::to(['web/index','subjectId'=>$subjectObj->subjectId,'orderBy'=>'likeNum'])?>"><i class="fa fa-arrow-down"></i>点赞</a></li>
            <li><a class="<?= $subjectObj->orderBy == 'commentNum'?'active':''; ?>" href="<?=\yii\helpers\Url::to(['web/index','subjectId'=>$subjectObj->subjectId,'orderBy'=>'commentNum'])?>"><i class="fa fa-arrow-down"></i>评论</a></li>
        </ul>
    </div>

    <ul class="list1">
        <?php foreach ($webList as $v):?>
            <li>
                <a href="<?=\yii\helpers\Url::to(['web/'.$v['id']])?>">
                    <img src="<?=    Yii::$app->params['domain']['pic'].$v['coverUrl']?>" alt="<?= $v['title']?>">
                </a>
                <h2>
                    <a href="<?=\yii\helpers\Url::to(['web/'.$v['id']])?>" title="<?= $v['title']?>"><?= $v['title']?></a>
                </h2>
                <p class="description"><?=$v['describe'];?></p>
                <p class="info">
                    <time title="日期"><?= $v['registerDate']?></time>
                    <span class="view">
                    <span title="点击">点击(<?=$v['analysisBrowseNum']?>)</span>
                    <span title="下载">下载(<?=$v['analysisDownloadNum']?>)</span>
                </span>
                </p>
            </li>
        <?php endforeach;?>
    </ul>
    <?php if($total > $subjectObj->offset):?>
    <div id="pagination" style="text-align: center"></div>
    <?php endif;?>
</div>
<script>
    layui.use('laypage', function(){
        var laypage = layui.laypage;

        //执行一个laypage实例
        laypage.render({
            elem: 'pagination' //注意，这里的 test1 是 ID，不用加 # 号
            ,count: <?= $total?>
            ,cur:"<?=$subjectObj->page?>"
            ,limit:"<?= $subjectObj->offset?>"
            ,layout: [ 'prev', 'page', 'next']
            ,jump: function(obj,first){
                if(!first){
                    Urlobj.set('page',obj.curr);
                    window.location.href = Urlobj.url();
                }
            }
        });
    });
</script>
