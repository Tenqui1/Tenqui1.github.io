<div class="main">
    <div id="primary" class="primary">
        <div class="article">
            <header>
                <h1><?=$info['title']?></h1>
                <p class="info">
                    <span>分类：
                        <?php foreach ($info['subjectList'] as $k=>$v):?>
                            <?php if($k == end(array_keys($info['subjectList']))):?>
                                <a href="http://www.dowebok.com/code" rel="category tag"><?= $v['name']?></a>
                            <?php else:?>
                                <a href="http://www.dowebok.com/code" rel="category tag"><?= $v['name']?></a>,
                            <?php endif;?>
                        <?php endforeach;?>
                      </span>
                    <span>日期：<time datetime="<?=$info['registerDate']?>" pubdate><?=$info['registerDate']?></time></span>
                    <span>点击(<?=$info['analysisBrowseNum']?>)</span>
                    <span>下载(<?=$info['analysisDownloadNum']?>)</span>
                    <span>点赞(<?=$info['analysisLikeNum']?>)</span>
                    <span>收藏(<?=$info['analysisCollectionNum']?>)</span>
                    <span>评论(<span><?=$info['analysisCommentNum']?></span>)</span>
                </p>
            </header>
            <p><img style="max-width: 100%" src="<?=Yii::$app->params['domain']['pic'].$info['coverUrl']?>" alt="<?=$info['title']?>" /></p>
            <p class="vad"><a class="view" href="<?=Yii::$app->params['domain']['demo'].$info['previewUrl']?>" target="_blank" rel="noopener noreferrer">演 示</a> <a class="down" href="<?=Yii::$app->params['domain']['resource'].$info['soureUrl']?>" target="_blank" rel="noopener noreferrer">下 载</a></p>

            <h2>简介</h2>
            <p><?= $info['describe'];?></p>
            <h2>浏览器兼容</h2>
            <table class="browsers">
                <thead>
                <tr>
                    <th><img src="/img/ie.png" alt="IE" /></th>
                    <th><img src="/img/edge.png" alt="Edge" /></th>
                    <th><img src="/img/chrome.png" alt="Chrome" /></th>
                    <th><img src="/img/firefox.png" alt="Firefox" /></th>
                    <th><img src="/img/opera.png" alt="Opera" /></th>
                    <th><img src="/img/safari.png" alt="Safari" /></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>IE7+</td>
                    <td>Edge</td>
                    <td>Chrome</td>
                    <td>Firefox</td>
                    <td>Opera</td>
                    <td>Safari</td>
                </tr>
                </tbody>
            </table>
            <h2>使用方法</h2>
           <p>
               <?= $info['manual']?>
           </p>
        </div>

        <section class="xg">
            <h2 class="tt1"><span>相关评论(共6条评论)</span></h2>
            <ul class="comment-list-body">
                <li class="comment-author-info">
                    <a href="#" class="comment-author-info-img">
                        <img src="/img/user.gif">
                    </a>
                    <div class="comment-author-info-name">
                        <a href="#">王大锤</a>
                        <div class="comment-author-info-time"><span class="layui-badge layui-bg-green">4楼</span>· 2019.03.31 18:56</div>
                    </div>
                    <p class="comment-info-message">爱卿，此意是当诛杀此逆臣？朕早有此意。卿可在酒席上听我摔杯为号</p>
                    <div class="comment-info-tools">
                        <div class="comment-info-tools-block">
                            <span><i class=" fa fa-thumbs-o-up"></i>点赞</span>
                            <span><i class=" fa fa-comment-o"></i>回复</span>
                        </div>
                    </div>
                    <ul class="comment-child-list">
                        <li class="comment-author-info">
                            <a href="#" class="comment-author-info-img">
                                <img src="/img/user.gif">
                            </a>
                            <div class="comment-author-info-name">
                                <a href="#">王大锤</a>
                                <div class="comment-author-info-time"> 2019.03.31 18:56</div>
                            </div>
                            <p class="comment-info-message">爱卿，此意是当诛杀此逆臣？朕早有此意。卿可在酒席上听我摔杯为号</p>
                            <div class="comment-info-tools">
                                <div class="comment-info-tools-block">
                                    <span><i class=" fa fa-thumbs-o-up"></i>点赞</span>
                                    <span><i class=" fa fa-comment-o"></i>回复</span>
                                </div>
                            </div>
                        </li>
                        <li class="comment-author-info">
                            <a href="#" class="comment-author-info-img">
                                <img src="/img/user.gif">
                            </a>
                            <div class="comment-author-info-name">
                                <a href="#">王大锤</a>
                                <div class="comment-author-info-time"> 2019.03.31 18:56</div>
                            </div>
                            <p class="comment-info-message">爱卿，此意是当诛杀此逆臣？朕早有此意。卿可在酒席上听我摔杯为号</p>
                            <div class="comment-info-tools">
                                <div class="comment-info-tools-block">
                                    <span><i class=" fa fa-thumbs-o-up"></i>点赞</span>
                                    <span><i class=" fa fa-comment-o"></i>回复</span>
                                </div>
                            </div>
                        </li>
                        <li class="comment-author-info">
                            <a href="#" class="comment-author-info-img">
                                <img src="/img/user.gif">
                            </a>
                            <div class="comment-author-info-name">
                                <a href="#">王大锤</a>
                                <div class="comment-author-info-time"> 2019.03.31 18:56</div>
                            </div>
                            <p class="comment-info-message">爱卿，此意是当诛杀此逆臣？朕早有此意。卿可在酒席上听我摔杯为号</p>
                            <div class="comment-info-tools">
                                <div class="comment-info-tools-block">
                                    <span><i class=" fa fa-thumbs-o-up"></i>点赞</span>
                                    <span><i class=" fa fa-comment-o"></i>回复</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="comment-author-info">
                    <a href="#" class="comment-author-info-img">
                        <img src="/img/user.gif">
                    </a>
                    <div class="comment-author-info-name">
                        <a href="#">王大锤</a>
                        <div class="comment-author-info-time"><span class="layui-badge layui-bg-green">4楼</span>· 2019.03.31 18:56</div>
                    </div>
                    <p class="comment-info-message">爱卿，此意是当诛杀此逆臣？朕早有此意。卿可在酒席上听我摔杯为号</p>
                    <div class="comment-info-tools">
                        <div class="comment-info-tools-block">
                            <span><i class=" fa fa-thumbs-o-up"></i>点赞</span>
                            <span><i class=" fa fa-comment-o"></i>回复</span>
                        </div>
                    </div>
                    <ul class="comment-child-list">
                        <li class="comment-author-info">
                            <a href="#" class="comment-author-info-img">
                                <img src="/img/user.gif">
                            </a>
                            <div class="comment-author-info-name">
                                <a href="#">王大锤</a>
                                <div class="comment-author-info-time"> 2019.03.31 18:56</div>
                            </div>
                            <p class="comment-info-message">爱卿，此意是当诛杀此逆臣？朕早有此意。卿可在酒席上听我摔杯为号</p>
                            <div class="comment-info-tools">
                                <div class="comment-info-tools-block">
                                    <span><i class=" fa fa-thumbs-o-up"></i>点赞</span>
                                    <span><i class=" fa fa-comment-o"></i>回复</span>
                                </div>
                            </div>
                        </li>
                        <li class="comment-author-info">
                            <a href="#" class="comment-author-info-img">
                                <img src="/img/user.gif">
                            </a>
                            <div class="comment-author-info-name">
                                <a href="#">王大锤</a>
                                <div class="comment-author-info-time"> 2019.03.31 18:56</div>
                            </div>
                            <p class="comment-info-message">爱卿，此意是当诛杀此逆臣？朕早有此意。卿可在酒席上听我摔杯为号</p>
                            <div class="comment-info-tools">
                                <div class="comment-info-tools-block">
                                    <span><i class=" fa fa-thumbs-o-up"></i>点赞</span>
                                    <span><i class=" fa fa-comment-o"></i>回复</span>
                                </div>
                            </div>
                        </li>
                        <li class="comment-author-info">
                            <a href="#" class="comment-author-info-img">
                                <img src="/img/user.gif">
                            </a>
                            <div class="comment-author-info-name">
                                <a href="#">王大锤</a>
                                <div class="comment-author-info-time"> 2019.03.31 18:56</div>
                            </div>
                            <p class="comment-info-message">爱卿，此意是当诛杀此逆臣？朕早有此意。卿可在酒席上听我摔杯为号</p>
                            <div class="comment-info-tools">
                                <div class="comment-info-tools-block">
                                    <span><i class=" fa fa-thumbs-o-up"></i>点赞</span>
                                    <span><i class=" fa fa-comment-o"></i>回复</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
        <section class="xg">
            <h2 class="tt1"><span>发表评论</span></h2>
            <textarea id="userComment" required lay-verify="required" placeholder="说点什么吧" style="height: 200px" class="layui-textarea" webId="<?=$info['id']?>"  ></textarea>
            <button  class="layui-btn" style="float: right" onclick="sendComment()">发表</button>
        </section>
    </div>

    <div class="secondary">
        <aside>
            <p class="author-info-img">
                <a href="#">
                    <img src="/img/user.gif">
                </a>
            </p>
            <a href="" class="author-info" style=" text-decoration: none;">
                <h4>王大锤</h4>
                <address><i class="fa fa-map-marker"></i>上海市静安区中山北路</address>
            </a>
            <div class="userinfo-function">
                <a class="btn" ><i class="fa  fa-plus-circle right5per"></i>关注作者</a>
                <a class="btn"> <i class="fa fa-telegram right5per"></i>私信作者</a>
                <a class="btn"><i class="fa fa-heart right5per"></i>收藏插件</a>
            </div>
        </aside>

        <aside>
            <h3><span>随机推荐</span></h3>
            <ul class="list3">
                <?php foreach ($recommond as $v):?>
                <li>
                    <a href="<?=\yii\helpers\Url::to(['web/'.$v['id']])?>" title="<?= $v['title']?>"><img src="<?=    Yii::$app->params['domain']['pic'].$v['coverUrl']?>" alt="<?= $v['title']?>"></a>
                    <a href="<?=\yii\helpers\Url::to(['web/'.$v['id']])?>"><?= $v['title']?></a>
                </li>
                <?php endforeach;?>
            </ul>
        </aside>
    </div>
</div>
<script>


     function sendComment() {

        $.ajax({
            type: "POST",
            url: "test.json",
            data: {username:$("#username").val(), content:$("#content").val()},
            dataType: "json",
            success: function(data){
                $('#resText').empty();   //清空resText里面的所有内容
                var html = '';
                $.each(data, function(commentIndex, comment){
                    html += '<div class="comment"><h6>' + comment['username']
                        + ':</h6><p class="para"' + comment['content']
                        + '</p></div>';
                });
                $('#resText').html(html);
            }
        });
    }



</script>
