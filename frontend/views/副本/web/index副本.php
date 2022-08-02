<?php
use yii\widgets\LinkPager;

?>
<section class="container list-nav">
    <ol class="breadcrumb">
        <li><a href="#">首页</a></li>
        <li class="active">网站模板</li>
    </ol>
    <div class="panel panel-default list-navbar">
        <div class="panel-body">
            <ul class="list-inline list-navbar-ul">
                <li class="list-navbar-header pull-left"><a href=""><i class="fa fa-list" style="margin-right: 5px"></i>模板分类</a></li>
                <ul class="list-inline pull-left list-navbar-body left20px">
                    <li class="active" ><a href="">不限</a></li>
                    <li><a href="">行业</a></li>
                    <li><a href="">商城</a></li>
                    <li><a href="">企业</a></li>
                    <li><a href="">专题</a></li>
                    <li><a href="">后台</a></li>
                    <li><a href="">其他</a></li>
                </ul>
            </ul>
            <ul class="list-inline list-navbar-ul">
                <li class="list-navbar-header pull-left"><a href=""><i class="fa fa-list" style="margin-right: 5px"></i>模板颜色</a></li>
                <ul class="list-inline pull-left list-navbar-body left20px">
                    <li class="active" ><a href="">不限</a></li>
                    <li><a href="">蓝色</a></li>
                    <li><a href="">红色</a></li>
                    <li><a href="">橙色</a></li>
                    <li><a href="">黄色</a></li>
                    <li><a href="">绿色</a></li>
                    <li><a href="">黑白</a></li>
                    <li><a href="">灰色</a></li>
                    <li><a href="">白色</a></li>
                    <li><a href="">粉色</a></li>
                    <li><a href="">多色</a></li>
                </ul>
            </ul>
            <ul class="list-inline list-navbar-ul">
                <li class="list-navbar-header pull-left"><a href=""><i class="fa fa-list" style="margin-right: 5px"></i>模板布局</a></li>
                <ul class="list-inline pull-left list-navbar-body left20px">
                    <li class="active" ><a href="">不限</a></li>
                    <li><a href="">常列</a></li>
                    <li><a href="">两列</a></li>
                    <li><a href="">滚动</a></li>
                    <li><a href="">全屏</a></li>
                    <li><a href="">响应式</a></li>
                    <li><a href="">手机wap</a></li>
                    <li><a href="">app模板</a></li>
                    <li><a href="">iframe</a></li>
                    <li><a href="">table</a></li>
                </ul>
            </ul>
            <ul class="list-inline list-navbar-ul">
                <li class="list-navbar-header pull-left"><a href=""><i class="fa fa-list" style="margin-right: 5px"></i>模板语言</a></li>
                <ul class="list-inline pull-left list-navbar-body left20px">
                    <li class="active" ><a href="">不限</a></li>
                    <li><a href="">中文模板</a></li>
                    <li><a href="">英文模板</a></li>
                    <li><a href="">俄语模板</a></li>
                    <li><a href="">德语模板</a></li>
                    <li><a href="">法语模板</a></li>
                </ul>
            </ul>
        </div>
    </div>

</section>
<section class="container top20per">
    <div class="panel panel-default list-sort">
        <div class="panel-body">
        <ul class="list-inline  list-sort-ul">
            <li class="pull-left  list-sort-header"><i class="fa fa-list-ul"></i>排序</li>
             <ul  class="list-inline pull-left list-sort-body">
                 <li class="active"><a href=""><i class="fa fa-arrow-down"></i>默认</a></li>
                 <li><a href=""><i class="fa fa-arrow-down"></i>人气</a></li>
                 <li><a href=""><i class="fa fa-arrow-down"></i>下载</a></li>
                 <li><a href=""><i class="fa fa-arrow-down"></i>收藏</a></li>
                 <li><a href=""><i class="fa fa-arrow-down"></i>点赞</a></li>
                 <li><a href=""><i class="fa fa-arrow-down"></i>评论</a></li>
             </ul>
        </ul>
        </div>
    </div>
</section>
<section class="container  good-container">
    <div class="row goods-list">
        <div class="col-lg-3 bottom20per top10per">
            <a href="<?=\yii\helpers\Url::to(['web/id'])?>" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
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
        <div class="col-lg-3 bottom20per top10per">
            <a href="<?=\yii\helpers\Url::to(['web/id'])?>" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
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
<section class="container top40per center">
    <nav aria-label="Page navigation">
        <?= LinkPager::widget([
            'pagination' => $pagination,
        ]);?>
    </nav>
</section>


