

<div class="main">
	<div class="slidebar">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="#" title="惊悚万圣节">
                    <div data-background="<?= \common\models\CommonHelper::getAssetUrl('dowebok/index/images/halloween-1.jpg')?>" class="swiper-lazy">
                        <div class="swiper-lazy-preloader"></div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#" title="美丽花朵">
                    <div data-background="<?= \common\models\CommonHelper::getAssetUrl('dowebok/index/images/5.jpg')?>" class="swiper-lazy">
                        <div class="swiper-lazy-preloader"></div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#" title="2018世界杯">
                    <div data-background="<?= \common\models\CommonHelper::getAssetUrl('dowebok/index/images/1.jpg')?>" class="swiper-lazy">
                        <div class="swiper-lazy-preloader"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <span class="swiper-button-next"></span>
        <span class="swiper-button-prev"></span>
    </div>
    <div class="thead">
        <div class="dwoad">
            <script type="text/javascript">
                (function() {
                    var s = "_" + Math.random().toString(36).slice(2);
                    document.write('<div style="" id="' + s + '"></div>');
                    (window.slotbydup = window.slotbydup || []).push({
                        id: "u3724462",
                        container:  s
                    });
                })();
            </script>
            <script src="dowebok/index/js/c.js"></script>
        </div>
    </div>
</div>
	<div class="tt2">
		<h2>网站模板</h2>
		<span>
            <?php foreach ($webSubject as $v):?>
            <a href="<?=\yii\helpers\Url::to(['web/index','subjectId'=>$v['id']])?>"><?= $v['name'];?></a>
            <?php endforeach;?>
        </span>
        <span style="float: right;margin-right: 20px;text-decoration: underline;"><a style="color: #21B384;"  href="<?=\yii\helpers\Url::to(['web/index'])?>" >更多</a></span>
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
    <div class="tt2">
        <h2>网站模板</h2>
        <span>
            <?php foreach ($webSubject as $v):?>
                <a href="<?=\yii\helpers\Url::to(['web/index','subjectId'=>$v['id']])?>"><?= $v['name'];?></a>
            <?php endforeach;?>
        </span>
        <span style="float: right;margin-right: 20px;text-decoration: underline;"><a style="color: #21B384;"  href="<?=\yii\helpers\Url::to(['web/index'])?>" >更多</a></span>
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
</div>
