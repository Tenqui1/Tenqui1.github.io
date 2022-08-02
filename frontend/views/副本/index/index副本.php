

<section id="banner" class="container">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="http://img1.dowebok.com/banner/1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="http://img1.dowebok.com/banner/1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="http://img1.dowebok.com/banner/1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="http://img1.dowebok.com/banner/1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="http://img1.dowebok.com/banner/1.jpg" alt=""></div>
            </div>
            <!-- 如果需要分页器 -->
            <div class="swiper-pagination"></div>

            <!-- 如果需要导航按钮 -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- 如果需要滚动条 -->
<!--            <div class="swiper-scrollbar"></div>-->
        </div>

    </div>
</section>
<section id="submit-navber" class="container top20per">
    <ol class="breadcrumb">
        <li><a href="#">首页</a></li>
        <li class="active">发布</li>
        <label class="label label-danger pull-right"><i class="glyphicon glyphicon-exclamation-sign"></i>公告：3月8日-3月31日发布，IT币奖励是平时10倍！！！</>
    </ol>
    <div class="row">
        <div class="col-md-4">
             <h5>发布网站模板</h5>
            <p>发布完整，可运行的网站前端页面代码（html，js,css 等），包括PC端，移动端（例如：公司官网，个人博客等的html代码）</p>
            <a href="<?=\yii\helpers\Url::to(['submit/web'])?>" class="center-block">前往发布>>></a>
        </div>
        <div class="col-md-4">
            <h5>发布素材插件</h5>
            <p>发布完整，可运行，无错误的html,js,css 插件代码，包括PC端，移动端（例如：个人写的加载框，css3特效，js小活动的代码）</p>
            <a href="<?=\yii\helpers\Url::to(['submit/code'])?>" class="center-block">前往发布>>></a>
        </div>
        <div class="col-md-4">
            <h5>发布工具类库</h5>
            <p>发布程序员常用的工具类库，（例如最新版本的编辑器，各种编程语言的手册等）</p>
            <br>
            <a href="<?=\yii\helpers\Url::to(['submit/tool'])?>" class="center-block">前往发布>>></a>
        </div>
    </div>
</section>
<section class="container top20per good-container">
    <ul class="list-inline template-index-nav">
        <li class="active">网站模板</li>
        <li><a href="">PC模板</a></li>
        <li><a href="">移动模板</a></li>
        <li><a href="">商务</a></li>
        <li><a href="">简洁</a></li>
        <li><a href="">自适应</a></li>
        <li class="pull-right look-more"><a >查看更多>>></a></li>
    </ul>
    <div class="row goods-list">
        <?php foreach ($webList as $v):?>
        <div class="col-lg-3 bottom20per top10per">
            <a href="<?=\yii\helpers\Url::to(['web/'.$v['id']])?>"><img src="<?= Yii::$app->params['domain']['pic'].$v['coverUrl']?>" ></a>
            <h5><a href="<?=\yii\helpers\Url::to(['web/'.$v['id']])?>"><?=$v['title'];?></a></h5>
            <div class="good-info">
                <time title="作者" class="pull-left">东方不败</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(<?=$v['browseNum'];?>)</span> <span title="下载">下载(<?=$v['downloadNum']?>)</span></span>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</section>
<section class="container top20per good-container">
    <ul class="list-inline template-index-nav">
        <li class="active">网站模板</li>
        <li><a href="">PC模板</a></li>
        <li><a href="">移动模板</a></li>
        <li><a href="">商务</a></li>
        <li><a href="">简洁</a></li>
        <li><a href="">自适应</a></li>
        <li class="pull-right look-more"><a >查看更多>>></a></li>
    </ul>
    <div class="row goods-list">
        <div class="col-lg-3 bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">东方不败</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">东方不败</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container top20per good-container">
    <ul class="list-inline template-index-nav">
        <li class="active">网站模板</li>
        <li><a href="">PC模板</a></li>
        <li><a href="">移动模板</a></li>
        <li><a href="">商务</a></li>
        <li><a href="">简洁</a></li>
        <li><a href="">自适应</a></li>
        <li class="pull-right look-more"><a >查看更多>>></a></li>
    </ul>
    <div class="row goods-list">
        <div class="col-lg-3 bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">东方不败</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">东方不败</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    var mySwiper = new Swiper ('.swiper-container', {
        direction: 'horizontal', // 横向
        loop: true, // 循环模式选项
        // 如果需要分页器
        pagination: {
            el: '.swiper-pagination',
            clickable :true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index + 1) + '</span>';
            },
        },
        autoplay: {
            delay: 3000,
            stopOnLastSlide: false,
            disableOnInteraction: true,
        },

        // 如果需要前进后退按钮
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // 如果需要滚动条
        // scrollbar: {
        //     el: '.swiper-scrollbar',
        // },
    })
</script>
