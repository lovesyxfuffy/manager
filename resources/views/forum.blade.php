@extends('blank')
@section('title')
    论坛
@stop
@section('head')

<link rel="stylesheet" href="https://sf-static.b0.upaiyun.com/v-56d41406/global/css/global.css">
@stop
@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-9 main">
            <ul class="nav nav-tabs nav-tabs-zen mb10 mt30">
                <li class="active"><a href="/questions">最新的</a>
                </li>
                <li><a href="/questions/hottest">热门的</a></li>
                <li><a href="/questions/unanswered">未回答的</a></li>
            </ul>

            <div class="stream-list question-stream">
                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes hidden-xs">
                            0<small>投票</small>
                        </div>
                        <div class="answers">
                            0<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            1<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li>
                                <a href="/u/cs_victor">cs_victor</a>
                                <span class="split"></span>
                                <a href="/q/1010000004515276" class="askDate" data-created="1456802597">刚刚提问</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004515276">MySql数据表设计问题，求优化。</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/mysql" data-toggle="popover" data-original-title="mysql" data-id="1040000000089439">mysql</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/mysql%E4%BC%98%E5%8C%96" data-toggle="popover" data-original-title="mysql优化" data-id="1040000000630821">mysql优化</a></li>            </ul>
                    </div>
                </section>



                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes hidden-xs">
                            0<small>投票</small>
                        </div>
                        <div class="answers answered">
                            1<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            52<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li>
                                <a href="/u/jayzou">邹世杰</a>
                                <span class="split"></span>
                                <a href="/q/1010000004513674/a-1020000004515210">8 分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004513674">求微信安卓端 js 不执行的解决思路</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/%E5%BE%AE%E4%BF%A1%E5%BC%80%E5%8F%91" data-toggle="popover" data-original-title="微信开发" data-id="1040000000659227">微信开发</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/javascript" data-toggle="popover" data-original-title="javascript" data-id="1040000000089436">javascript</a></li>            </ul>
                    </div>
                </section>

                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes hidden-xs">
                            0<small>投票</small>
                        </div>
                        <div class="answers answered">
                            7<small>回答</small>
                        </div>
                        <div>
                        </div>
                        <div class="views hidden-xs">
                            133<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li>
                                <a href="/u/interjc">interjc</a>
                                <span class="split"></span>
                                <a href="/q/1010000004512922/a-1020000004515194">10 分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004512922">用CSS如何实现此效果？</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/css" data-toggle="popover" data-original-title="css" data-id="1040000000089434">css</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/html" data-toggle="popover" data-original-title="html" data-id="1040000000089571">html</a></li>            </ul>
                    </div>
                </section>

                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes hidden-xs">
                            0<small>投票</small>
                        </div>
                        <div class="answers answered solved">
                            5<small>解决</small>
                        </div>
                        <div class="views hidden-xs">
                            354<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li>
                                <a href="/u/hex">Hex</a>
                                <span class="split"></span>
                                <a href="/q/1010000004087221/a-1020000004515190">11 分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004087221">一个函数，想在所有的控制其中能够调用，写在什么地方最合适？</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/php" data-toggle="popover" data-original-title="php" data-id="1040000000089387">php</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/codeigniter" data-toggle="popover" data-original-title="codeigniter" data-id="1040000000090378">codeigniter</a></li>            </ul>
                    </div>
                </section>

                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes hidden-xs">
                            0<small>投票</small>
                        </div>
                        <div class="answers answered">
                            3<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            56<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li>
                                <a href="/u/tcc">tcc</a>
                                <span class="split"></span>
                                <a href="/q/1010000004513381/a-1020000004515177">12 分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004513381">Laravel的create页面和edit页面共用表单，但是edit页面有变量，create页面没有变量，能否共用？</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/php" data-toggle="popover" data-original-title="php" data-id="1040000000089387">php</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/laravel" data-toggle="popover" data-original-title="laravel" data-id="1040000000196640">laravel</a></li>            </ul>
                    </div>
                </section>

                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes hidden-xs">
                            0<small>投票</small>
                        </div>
                        <div class="answers answered">
                            2<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            26<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li>
                                <a href="/u/fingerliu">FingerLiu</a>
                                <span class="split"></span>
                                <a href="/q/1010000004514966/a-1020000004515172">12 分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004514966">python对不同类型的序列切片复制，但是效果为何不一样？</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/python" data-toggle="popover" data-original-title="python" data-id="1040000000089534">python</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/javascript" data-toggle="popover" data-original-title="javascript" data-id="1040000000089436">javascript</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/flask" data-toggle="popover" data-original-title="flask" data-id="1040000000125263">flask</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/python2.7" data-toggle="popover" data-original-title="python2.7" data-id="1040000000734508">python2.7</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/python3.x" data-toggle="popover" data-original-title="python3.x" data-id="1040000000174563">python3.x</a></li>            </ul>
                    </div>
                </section>

                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes plus hidden-xs">
                            1<small>投票</small>
                        </div>
                        <div class="answers answered">
                            5<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            284<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li>
                                <a href="/u/hex">Hex</a>
                                <span class="split"></span>
                                <a href="/q/1010000004089470/a-1020000004515147">15 分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004089470">一个php codeigniter问题</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/php" data-toggle="popover" data-original-title="php" data-id="1040000000089387">php</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/codeigniter" data-toggle="popover" data-original-title="codeigniter" data-id="1040000000090378">codeigniter</a></li>            </ul>
                    </div>
                </section>

                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes hidden-xs">
                            0<small>投票</small>
                        </div>
                        <div class="answers">
                            0<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            26<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li>
                                <a href="/u/guhuiweb">guhuiweb</a>
                                <span class="split"></span>
                                <a href="/q/1010000004515121" class="askDate" data-created="1456801610">17 分钟前提问</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004515121">vue的数据绑定不支持以下表达式吗？</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/vue.js" data-toggle="popover" data-original-title="vue.js" data-id="1040000004003243">vue.js</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/javascript" data-toggle="popover" data-original-title="javascript" data-id="1040000000089436">javascript</a></li>            </ul>
                    </div>
                </section>

                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes hidden-xs">
                            0<small>投票</small>
                        </div>
                        <div class="answers answered">
                            3<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            64<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li>
                                <a href="/u/sulh">苏理煌</a>
                                <span class="split"></span>
                                <a href="/q/1010000004514666/a-1020000004515083">20 分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004514666">如何通过ajax导入文件？</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/javascript" data-toggle="popover" data-original-title="javascript" data-id="1040000000089436">javascript</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/html5" data-toggle="popover" data-original-title="html5" data-id="1040000000089409">html5</a></li>            </ul>
                    </div>
                </section>

                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes hidden-xs">
                            0<small>投票</small>
                        </div>
                        <div class="answers answered">
                            5<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            867<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li>
                                <a href="/u/zhoujingk">iDev_周晶</a>
                                <span class="split"></span>
                                <a href="/q/1010000004137098/a-1020000004515054">22 分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004137098">mac 安装PHP7提示“ld: symbol(s) not found for architecture x86_64”</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/php7" data-toggle="popover" data-original-title="php7" data-id="1040000002907096">php7</a></li>            </ul>
                    </div>
                </section>

                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes hidden-xs">
                            0<small>投票</small>
                        </div>
                        <div class="answers answered">
                            2<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            38<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li>
                                <a href="/u/lyon1994">Lyon1994</a>
                                <span class="split"></span>
                                <a href="/q/1010000004514449/a-1020000004515034">23 分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004514449">写Android时用的JDK和编译Android应用时用的JDK还有Android应用运行时的JDK版本的一些疑问？</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/jdk" data-toggle="popover" data-original-title="jdk" data-id="1040000000489258">jdk</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/android" data-toggle="popover" data-original-title="android" data-id="1040000000089658">android</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/android-studio" data-toggle="popover" data-original-title="android-studio" data-id="1040000000410239">android-studio</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/android-dev" data-toggle="popover" data-original-title="android-dev" data-id="1040000002497308">android-dev</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/linux" data-toggle="popover" data-original-title="linux" data-id="1040000000089392">linux</a></li>            </ul>
                    </div>
                </section>

                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes hidden-xs">
                            0<small>投票</small>
                        </div>
                        <div class="answers answered">
                            7<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            225<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li>
                                <a href="/u/yagao">牙膏</a>
                                <span class="split"></span>
                                <a href="/q/1010000004475975/a-1020000004514994">25 分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004475975">超出div宽度范围的文字进行省略号省略，如何在鼠标移上去以后显示完整的内容？</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/css" data-toggle="popover" data-original-title="css" data-id="1040000000089434">css</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/html5" data-toggle="popover" data-original-title="html5" data-id="1040000000089409">html5</a></li>            </ul>
                    </div>
                </section>

                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes minus hidden-xs">
                            -1<small>投票</small>
                        </div>
                        <div class="answers answered solved">
                            6<small>解决</small>
                        </div>
                        <div class="views hidden-xs">
                            65<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li>
                                <a href="/u/universe_of_code">代码宇宙</a>
                                <span class="split"></span>
                                <a href="/q/1010000004512601/a-1020000004514969">29 分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004512601">C语言for循环test条件为真，但是不执行statement语句？</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/c" data-toggle="popover" data-original-title="c" data-id="1040000000089457">c</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/%E6%96%B0%E6%89%8B%E6%8F%90%E9%97%AE" data-toggle="popover" data-original-title="新手提问" data-id="1040000000464633">新手提问</a></li>            </ul>
                    </div>
                </section>

                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes hidden-xs">
                            0<small>投票</small>
                        </div>
                        <div class="answers answered">
                            2<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            48<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li>
                                <a href="/u/rainwsy">rainwsy</a>
                                <span class="split"></span>
                                <a href="/q/1010000004514810/a-1020000004514942">31 分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004514810">[PHP] session在个别页面间的传递的问题</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/php" data-toggle="popover" data-original-title="php" data-id="1040000000089387">php</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/html" data-toggle="popover" data-original-title="html" data-id="1040000000089571">html</a></li>            </ul>
                    </div>
                </section>

                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes hidden-xs">
                            0<small>投票</small>
                        </div>
                        <div class="answers">
                            0<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            25<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li>
                                <a href="/u/hudi">hudi</a>
                                <span class="split"></span>
                                <a href="/q/1010000004514910" class="askDate" data-created="1456800621">33 分钟前提问</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004514910">ios  apns证书问题</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/ios" data-toggle="popover" data-original-title="ios" data-id="1040000000089442">ios</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/objective-c" data-toggle="popover" data-original-title="objective-c" data-id="1040000000090209">objective-c</a></li>            </ul>
                    </div>
                </section>

                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes hidden-xs">
                            0<small>投票</small>
                        </div>
                        <div class="answers answered">
                            1<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            43<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li>
                                <a href="/u/gzchen">gzchen</a>
                                <span class="split"></span>
                                <a href="/q/1010000004514573/a-1020000004514903">34 分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004514573">pdo用好了是不是就基本不用自己在写输入过滤了吧？</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/php_pdo" data-toggle="popover" data-original-title="php_pdo" data-id="1040000002794587">php_pdo</a></li>            </ul>
                    </div>
                </section>

                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes hidden-xs">
                            0<small>投票</small>
                        </div>
                        <div class="answers">
                            0<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            25<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li>
                                <a href="/u/chencore">chencore</a>
                                <span class="split"></span>
                                <a href="/q/1010000004514890" class="askDate" data-created="1456800515">35 分钟前提问</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004514890">vue.js提示 Unknown custom element: &lt;v-grid&gt; </a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/vue.js" data-toggle="popover" data-original-title="vue.js" data-id="1040000004003243">vue.js</a></li>            </ul>
                    </div>
                </section>

                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes hidden-xs">
                            0<small>投票</small>
                        </div>
                        <div class="answers">
                            0<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            27<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li>
                                <a href="/u/haua">黒之染</a>
                                <span class="split"></span>
                                <a href="/q/1010000004514887" class="askDate" data-created="1456800511">35 分钟前提问</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004514887">从svn下载回来的项目使用了CocoaPods 但是使用pod install后，项目依然不能启动？</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/ios%E5%BC%80%E5%8F%91app" data-toggle="popover" data-original-title="ios开发app" data-id="1040000004235601">ios开发app</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/objective-c" data-toggle="popover" data-original-title="objective-c" data-id="1040000000090209">objective-c</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/swift" data-toggle="popover" data-original-title="swift" data-id="1040000000531223">swift</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/cocoapods" data-toggle="popover" data-original-title="cocoapods" data-id="1040000000380446">cocoapods</a></li>            </ul>
                    </div>
                </section>

                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes hidden-xs">
                            0<small>投票</small>
                        </div>
                        <div class="answers answered">
                            2<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            68<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li class="pull-right" title="1 收藏">
                                <small class="glyphicon glyphicon-bookmark"></small> 1
                            </li>
                            <li>
                                <a href="/u/idisfkj">idisfkj</a>
                                <span class="split"></span>
                                <a href="/q/1010000004513337/a-1020000004514882">36 分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004513337">android studio修改包名为何没有效果？</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/android" data-toggle="popover" data-original-title="android" data-id="1040000000089658">android</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/android-studio" data-toggle="popover" data-original-title="android-studio" data-id="1040000000410239">android-studio</a></li>            </ul>
                    </div>
                </section>

                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes hidden-xs">
                            0<small>投票</small>
                        </div>
                        <div class="answers answered">
                            2<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            233<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li>
                                <a href="/u/dxwsker">思维</a>
                                <span class="split"></span>
                                <a href="/q/1010000004310057/a-1020000004514866">37 分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004310057">docker守护运行老是自己退出怎么回事啊？</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/docker" data-toggle="popover" data-original-title="docker" data-id="1040000000366352">docker</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/docker-%E5%90%AF%E5%8A%A8" data-toggle="popover" data-original-title="docker-启动" data-id="1040000002722846">docker-启动</a></li>            </ul>
                    </div>
                </section>

                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes hidden-xs">
                            0<small>投票</small>
                        </div>
                        <div class="answers answered">
                            2<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            51<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li>
                                <a href="/u/idisfkj">idisfkj</a>
                                <span class="split"></span>
                                <a href="/q/1010000004513463/a-1020000004514852">38 分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004513463">Android侧滑</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/android" data-toggle="popover" data-original-title="android" data-id="1040000000089658">android</a></li>            </ul>
                    </div>
                </section>

                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes hidden-xs">
                            0<small>投票</small>
                        </div>
                        <div class="answers answered">
                            1<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            44<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li>
                                <a href="/u/hellnpeter">hellnpeter</a>
                                <span class="split"></span>
                                <a href="/q/1010000004514762/a-1020000004514843">39 分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004514762">CSS3动画兼容性问题，如何解决？</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/css" data-toggle="popover" data-original-title="css" data-id="1040000000089434">css</a></li>            </ul>
                    </div>
                </section>

                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes hidden-xs">
                            0<small>投票</small>
                        </div>
                        <div class="answers answered">
                            3<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            80<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li>
                                <a href="/u/dxwsker">思维</a>
                                <span class="split"></span>
                                <a href="/q/1010000004502135/a-1020000004514818">42 分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004502135">docker里的修改无法保存</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/docker" data-toggle="popover" data-original-title="docker" data-id="1040000000366352">docker</a></li>            </ul>
                    </div>
                </section>

                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes plus hidden-xs">
                            1<small>投票</small>
                        </div>
                        <div class="answers answered">
                            2<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            105<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li>
                                <a href="/u/dxwsker">思维</a>
                                <span class="split"></span>
                                <a href="/q/1010000004499566/a-1020000004514786">44 分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004499566">Mac下如何使用Docker部属lanmp开发环境？</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/mac" data-toggle="popover" data-original-title="mac" data-id="1040000000089466">mac</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/docker" data-toggle="popover" data-original-title="docker" data-id="1040000000366352">docker</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/lamp" data-toggle="popover" data-original-title="lamp" data-id="1040000000187054">lamp</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/lnmp" data-toggle="popover" data-original-title="lnmp" data-id="1040000000158612">lnmp</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/lanmp" data-toggle="popover" data-original-title="lanmp" data-id="1040000000526723">lanmp</a></li>            </ul>
                    </div>
                </section>

                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes hidden-xs">
                            0<small>投票</small>
                        </div>
                        <div class="answers answered solved">
                            8<small>解决</small>
                        </div>
                        <div class="views hidden-xs">
                            312<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li class="pull-right" title="1 收藏">
                                <small class="glyphicon glyphicon-bookmark"></small> 1
                            </li>
                            <li>
                                <a href="/u/peng_he">peng_he</a>
                                <span class="split"></span>
                                <a href="/q/1010000004142174/a-1020000004514736">52 分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="/q/1010000004142174">js可以根据后端传递过来的ip地址判断出对应所在的省份地区吗？</a></h2>
                        <ul class="taglist--inline ib">
                            <li class="tagPopup"><a class="tag tag-sm" href="/t/javascript" data-toggle="popover" data-original-title="javascript" data-id="1040000000089436">javascript</a></li>            </ul>
                    </div>
                </section>

            </div><!-- /.stream-list -->

            <div class="text-center">
                <ul class="pagination"><li class="active"><a href="javascript:void(0);">1</a></li><li><a href="/questions?page=2">2</a></li><li><a href="/questions?page=3">3</a></li><li><a href="/questions?page=4">4</a></li><li><a href="/questions?page=5">5</a></li><li class="disabled"><span>…</span></li><li class="next"><a rel="next" href="/questions?page=2">下一页</a></li></ul>
            </div>
        </div><!-- /.main -->
        <div class="col-xs-12 col-md-3 side mt30">
            <div class="side-ask alert alert-warning">
                <p>今天，你编程时遇到了什么问题呢？</p>
                <a href="/ask" class="mt10 btn btn-primary btn-block" data-toggle="modal" data-target=".bs-example-modal-lg">提问</a>
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="container" style="width:100%;">
                                <form id="question" method="POST" role="form">
                                    <input type="hidden" value="1220000004517869" id="draftId">
                                    <input type="hidden" value="0" name="site" id="siteId">
                                    <div class="form-group">
                                        <label for="title" class="sr-only">标题</label>
                                        <input id="myTitle" type="text" name="title" required="" data-error="" autocomplete="off" class="form-control tagClose input-lg" placeholder="标题：一句话说清问题，用问号结尾" value="">
                                    </div>

                                    <input type="hidden" name="created" data-value="" value="">

                                    <div id="titleSuggest" class="panel hidden widget-suggest panel-default">
                                        <div class="panel-body">
                                            <p>
                                                <strong>这些问题可能有你需要的答案</strong>
                                                <button type="button" class="widget-suggest__close btn btn-default btn-xs">关闭提示</button>
                                            </p>
                                            <ul id="qList" class="list-unstyled widget-suggest__list">
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="tags" class="sr-only">标签：至少1个，最多5个</label>
                                        <input class="tagsInput form-control hidden" data-init="null" name="tags" type="text" placeholder="标签，如：php 可使用逗号,分号;分隔" data-role="tagsinput"><div class="sf-typeHelper"><input type="text" data-role="sf_typeHelper-input" class="sf-typeHelper-input" placeholder="标签，如：php 可使用逗号,分号;分隔" style="width: 20em;"><ul class="sf-typeHelper-list dropdown-menu" style="display: none;"></ul></div>

                                        <div role="tabpanel" class="techTags panel panel-default techTags-panel" data-tech="{&quot;\u5f00\u53d1\u8bed\u8a00&quot;:[{&quot;id&quot;:&quot;1040000000089436&quot;,&quot;name&quot;:&quot;javascript&quot;},{&quot;id&quot;:&quot;1040000000089387&quot;,&quot;name&quot;:&quot;php&quot;},{&quot;id&quot;:&quot;1040000000089434&quot;,&quot;name&quot;:&quot;css&quot;},{&quot;id&quot;:&quot;1040000000089534&quot;,&quot;name&quot;:&quot;python&quot;},{&quot;id&quot;:&quot;1040000000089571&quot;,&quot;name&quot;:&quot;html&quot;},{&quot;id&quot;:&quot;1040000000089449&quot;,&quot;name&quot;:&quot;java&quot;},{&quot;id&quot;:&quot;1040000000089918&quot;,&quot;name&quot;:&quot;node.js&quot;},{&quot;id&quot;:&quot;1040000000089409&quot;,&quot;name&quot;:&quot;html5&quot;},{&quot;id&quot;:&quot;1040000000089741&quot;,&quot;name&quot;:&quot;c++&quot;},{&quot;id&quot;:&quot;1040000000089457&quot;,&quot;name&quot;:&quot;c&quot;},{&quot;id&quot;:&quot;1040000000090209&quot;,&quot;name&quot;:&quot;objective-c&quot;},{&quot;id&quot;:&quot;1040000000089669&quot;,&quot;name&quot;:&quot;shell&quot;},{&quot;id&quot;:&quot;1040000000531223&quot;,&quot;name&quot;:&quot;swift&quot;},{&quot;id&quot;:&quot;1040000000089699&quot;,&quot;name&quot;:&quot;ruby&quot;},{&quot;id&quot;:&quot;1040000000089686&quot;,&quot;name&quot;:&quot;bash&quot;},{&quot;id&quot;:&quot;1040000000089581&quot;,&quot;name&quot;:&quot;c#&quot;},{&quot;id&quot;:&quot;1040000000090433&quot;,&quot;name&quot;:&quot;asp.net&quot;},{&quot;id&quot;:&quot;1040000000090208&quot;,&quot;name&quot;:&quot;lua&quot;},{&quot;id&quot;:&quot;1040000000090228&quot;,&quot;name&quot;:&quot;scala&quot;},{&quot;id&quot;:&quot;1040000000090194&quot;,&quot;name&quot;:&quot;actionscript&quot;},{&quot;id&quot;:&quot;1040000000089698&quot;,&quot;name&quot;:&quot;perl&quot;},{&quot;id&quot;:&quot;1040000000090201&quot;,&quot;name&quot;:&quot;erlang&quot;},{&quot;id&quot;:&quot;1040000000311191&quot;,&quot;name&quot;:&quot;rust&quot;},{&quot;id&quot;:&quot;1040000000090511&quot;,&quot;name&quot;:&quot;go&quot;}],&quot;\u5e73\u53f0\u6846\u67b6&quot;:[{&quot;id&quot;:&quot;1040000000196640&quot;,&quot;name&quot;:&quot;laravel&quot;},{&quot;id&quot;:&quot;1040000000125263&quot;,&quot;name&quot;:&quot;flask&quot;},{&quot;id&quot;:&quot;1040000000089564&quot;,&quot;name&quot;:&quot;django&quot;},{&quot;id&quot;:&quot;1040000000089646&quot;,&quot;name&quot;:&quot;ruby-on-rails&quot;},{&quot;id&quot;:&quot;1040000000166256&quot;,&quot;name&quot;:&quot;express&quot;},{&quot;id&quot;:&quot;1040000000090103&quot;,&quot;name&quot;:&quot;spring&quot;},{&quot;id&quot;:&quot;1040000000116331&quot;,&quot;name&quot;:&quot;tornado&quot;},{&quot;id&quot;:&quot;1040000000090398&quot;,&quot;name&quot;:&quot;yii&quot;},{&quot;id&quot;:&quot;1040000000622042&quot;,&quot;name&quot;:&quot;koa&quot;},{&quot;id&quot;:&quot;1040000000089638&quot;,&quot;name&quot;:&quot;struts&quot;}],&quot;\u670d\u52a1\u5668&quot;:[{&quot;id&quot;:&quot;1040000000089392&quot;,&quot;name&quot;:&quot;linux&quot;},{&quot;id&quot;:&quot;1040000000090145&quot;,&quot;name&quot;:&quot;nginx&quot;},{&quot;id&quot;:&quot;1040000000089761&quot;,&quot;name&quot;:&quot;apache&quot;},{&quot;id&quot;:&quot;1040000000090245&quot;,&quot;name&quot;:&quot;ubuntu&quot;},{&quot;id&quot;:&quot;1040000000366352&quot;,&quot;name&quot;:&quot;docker&quot;},{&quot;id&quot;:&quot;1040000000090249&quot;,&quot;name&quot;:&quot;centos&quot;},{&quot;id&quot;:&quot;1040000000090401&quot;,&quot;name&quot;:&quot;\u7f13\u5b58&quot;},{&quot;id&quot;:&quot;1040000000090117&quot;,&quot;name&quot;:&quot;tomcat&quot;},{&quot;id&quot;:&quot;1040000000090646&quot;,&quot;name&quot;:&quot;unix&quot;},{&quot;id&quot;:&quot;1040000000089648&quot;,&quot;name&quot;:&quot;hadoop&quot;},{&quot;id&quot;:&quot;1040000000090107&quot;,&quot;name&quot;:&quot;\u8d1f\u8f7d\u5747\u8861&quot;},{&quot;id&quot;:&quot;1040000000090609&quot;,&quot;name&quot;:&quot;windows-server&quot;}],&quot;\u6570\u636e\u5e93\u548c\u7f13\u5b58&quot;:[{&quot;id&quot;:&quot;1040000000089439&quot;,&quot;name&quot;:&quot;mysql&quot;},{&quot;id&quot;:&quot;1040000000089431&quot;,&quot;name&quot;:&quot;redis&quot;},{&quot;id&quot;:&quot;1040000000090049&quot;,&quot;name&quot;:&quot;sql&quot;},{&quot;id&quot;:&quot;1040000000089488&quot;,&quot;name&quot;:&quot;mongodb&quot;},{&quot;id&quot;:&quot;1040000000089432&quot;,&quot;name&quot;:&quot;nosql&quot;},{&quot;id&quot;:&quot;1040000000089873&quot;,&quot;name&quot;:&quot;memcached&quot;},{&quot;id&quot;:&quot;1040000000090354&quot;,&quot;name&quot;:&quot;sqlite&quot;},{&quot;id&quot;:&quot;1040000000090701&quot;,&quot;name&quot;:&quot;oracle&quot;},{&quot;id&quot;:&quot;1040000000090861&quot;,&quot;name&quot;:&quot;postgresql&quot;},{&quot;id&quot;:&quot;1040000000090424&quot;,&quot;name&quot;:&quot;sqlserver&quot;}],&quot;\u5f00\u53d1\u5de5\u5177&quot;:[{&quot;id&quot;:&quot;1040000000089459&quot;,&quot;name&quot;:&quot;git&quot;},{&quot;id&quot;:&quot;1040000000091226&quot;,&quot;name&quot;:&quot;github&quot;},{&quot;id&quot;:&quot;1040000000089467&quot;,&quot;name&quot;:&quot;vim&quot;},{&quot;id&quot;:&quot;1040000000089579&quot;,&quot;name&quot;:&quot;xcode&quot;},{&quot;id&quot;:&quot;1040000000126097&quot;,&quot;name&quot;:&quot;sublime-text&quot;},{&quot;id&quot;:&quot;1040000000089509&quot;,&quot;name&quot;:&quot;eclipse&quot;},{&quot;id&quot;:&quot;1040000000089447&quot;,&quot;name&quot;:&quot;svn&quot;},{&quot;id&quot;:&quot;1040000000090560&quot;,&quot;name&quot;:&quot;intellij-idea&quot;},{&quot;id&quot;:&quot;1040000000090473&quot;,&quot;name&quot;:&quot;ide&quot;},{&quot;id&quot;:&quot;1040000000090216&quot;,&quot;name&quot;:&quot;emacs&quot;},{&quot;id&quot;:&quot;1040000000090186&quot;,&quot;name&quot;:&quot;maven&quot;},{&quot;id&quot;:&quot;1040000000090524&quot;,&quot;name&quot;:&quot;atom&quot;},{&quot;id&quot;:&quot;1040000000090231&quot;,&quot;name&quot;:&quot;visual-studio&quot;},{&quot;id&quot;:&quot;1040000000089663&quot;,&quot;name&quot;:&quot;textmate&quot;},{&quot;id&quot;:&quot;1040000000183694&quot;,&quot;name&quot;:&quot;hg&quot;}],&quot;\u7cfb\u7edf\u8bbe\u5907&quot;:[{&quot;id&quot;:&quot;1040000000089442&quot;,&quot;name&quot;:&quot;ios&quot;},{&quot;id&quot;:&quot;1040000000089658&quot;,&quot;name&quot;:&quot;android&quot;},{&quot;id&quot;:&quot;1040000000089407&quot;,&quot;name&quot;:&quot;chrome&quot;},{&quot;id&quot;:&quot;1040000000089709&quot;,&quot;name&quot;:&quot;windows&quot;},{&quot;id&quot;:&quot;1040000000090220&quot;,&quot;name&quot;:&quot;macosx&quot;},{&quot;id&quot;:&quot;1040000000089498&quot;,&quot;name&quot;:&quot;iphone&quot;},{&quot;id&quot;:&quot;1040000000125504&quot;,&quot;name&quot;:&quot;internet-explorer&quot;},{&quot;id&quot;:&quot;1040000000090217&quot;,&quot;name&quot;:&quot;firefox&quot;},{&quot;id&quot;:&quot;1040000000090638&quot;,&quot;name&quot;:&quot;ipad&quot;},{&quot;id&quot;:&quot;1040000000089499&quot;,&quot;name&quot;:&quot;safari&quot;},{&quot;id&quot;:&quot;1040000000090218&quot;,&quot;name&quot;:&quot;opera&quot;},{&quot;id&quot;:&quot;1040000002871462&quot;,&quot;name&quot;:&quot;apple-watch&quot;}],&quot;\u5176\u5b83&quot;:[{&quot;id&quot;:&quot;1040000000089409&quot;,&quot;name&quot;:&quot;html5&quot;},{&quot;id&quot;:&quot;1040000002893277&quot;,&quot;name&quot;:&quot;react.js&quot;},{&quot;id&quot;:&quot;1040000000090137&quot;,&quot;name&quot;:&quot;\u641c\u7d22\u5f15\u64ce&quot;},{&quot;id&quot;:&quot;1040000000123810&quot;,&quot;name&quot;:&quot;virtualenv&quot;},{&quot;id&quot;:&quot;1040000000090316&quot;,&quot;name&quot;:&quot;lucene&quot;}]}" style="display: none;">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class=""><a href="#开发语言" aria-controls="type" role="tab" data-toggle="tab">开发语言</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#平台框架" aria-controls="type" role="tab" data-toggle="tab">平台框架</a>
                                                </li>
                                                <li role="presentation" class="active"><a href="#服务器" aria-controls="type" role="tab" data-toggle="tab">服务器</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#数据库和缓存" aria-controls="type" role="tab" data-toggle="tab">数据库和缓存</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#开发工具" aria-controls="type" role="tab" data-toggle="tab">开发工具</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#系统设备" aria-controls="type" role="tab" data-toggle="tab">系统设备</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#其它" aria-controls="type" role="tab" data-toggle="tab">其它</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane" id="开发语言">
                                                    <ul class="taglist--inline">
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089436" href="javascript: void(0);">javascript</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089387" href="javascript: void(0);">php</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089434" href="javascript: void(0);">css</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089534" href="javascript: void(0);">python</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089571" href="javascript: void(0);">html</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089449" href="javascript: void(0);">java</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089918" href="javascript: void(0);">node.js</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089409" href="javascript: void(0);">html5</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089741" href="javascript: void(0);">c++</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089457" href="javascript: void(0);">c</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090209" href="javascript: void(0);">objective-c</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089669" href="javascript: void(0);">shell</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000531223" href="javascript: void(0);">swift</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089699" href="javascript: void(0);">ruby</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089686" href="javascript: void(0);">bash</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089581" href="javascript: void(0);">c#</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090433" href="javascript: void(0);">asp.net</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090208" href="javascript: void(0);">lua</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090228" href="javascript: void(0);">scala</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090194" href="javascript: void(0);">actionscript</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089698" href="javascript: void(0);">perl</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090201" href="javascript: void(0);">erlang</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000311191" href="javascript: void(0);">rust</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090511" href="javascript: void(0);">go</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="平台框架">
                                                    <ul class="taglist--inline">
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000196640" href="javascript: void(0);">laravel</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000125263" href="javascript: void(0);">flask</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089564" href="javascript: void(0);">django</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089646" href="javascript: void(0);">ruby-on-rails</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000166256" href="javascript: void(0);">express</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090103" href="javascript: void(0);">spring</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000116331" href="javascript: void(0);">tornado</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090398" href="javascript: void(0);">yii</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000622042" href="javascript: void(0);">koa</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089638" href="javascript: void(0);">struts</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane active" id="服务器">
                                                    <ul class="taglist--inline">
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089392" href="javascript: void(0);">linux</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090145" href="javascript: void(0);">nginx</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089761" href="javascript: void(0);">apache</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090245" href="javascript: void(0);">ubuntu</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000366352" href="javascript: void(0);">docker</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090249" href="javascript: void(0);">centos</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090401" href="javascript: void(0);">缓存</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090117" href="javascript: void(0);">tomcat</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090646" href="javascript: void(0);">unix</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089648" href="javascript: void(0);">hadoop</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090107" href="javascript: void(0);">负载均衡</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090609" href="javascript: void(0);">windows-server</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="数据库和缓存">
                                                    <ul class="taglist--inline">
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089439" href="javascript: void(0);">mysql</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089431" href="javascript: void(0);">redis</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090049" href="javascript: void(0);">sql</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089488" href="javascript: void(0);">mongodb</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089432" href="javascript: void(0);">nosql</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089873" href="javascript: void(0);">memcached</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090354" href="javascript: void(0);">sqlite</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090701" href="javascript: void(0);">oracle</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090861" href="javascript: void(0);">postgresql</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090424" href="javascript: void(0);">sqlserver</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane " id="开发工具">
                                                    <ul class="taglist--inline">
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089459" href="javascript: void(0);">git</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000091226" href="javascript: void(0);">github</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089467" href="javascript: void(0);">vim</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089579" href="javascript: void(0);">xcode</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000126097" href="javascript: void(0);">sublime-text</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089509" href="javascript: void(0);">eclipse</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089447" href="javascript: void(0);">svn</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090560" href="javascript: void(0);">intellij-idea</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090473" href="javascript: void(0);">ide</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090216" href="javascript: void(0);">emacs</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090186" href="javascript: void(0);">maven</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090524" href="javascript: void(0);">atom</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090231" href="javascript: void(0);">visual-studio</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089663" href="javascript: void(0);">textmate</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000183694" href="javascript: void(0);">hg</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane " id="系统设备">
                                                    <ul class="taglist--inline">
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089442" href="javascript: void(0);">ios</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089658" href="javascript: void(0);">android</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089407" href="javascript: void(0);">chrome</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089709" href="javascript: void(0);">windows</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090220" href="javascript: void(0);">macosx</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089498" href="javascript: void(0);">iphone</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000125504" href="javascript: void(0);">internet-explorer</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090217" href="javascript: void(0);">firefox</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090638" href="javascript: void(0);">ipad</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089499" href="javascript: void(0);">safari</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090218" href="javascript: void(0);">opera</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000002871462" href="javascript: void(0);">apple-watch</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane " id="其它">
                                                    <ul class="taglist--inline">
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000089409" href="javascript: void(0);">html5</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000002893277" href="javascript: void(0);">react.js</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090137" href="javascript: void(0);">搜索引擎</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000123810" href="javascript: void(0);">virtualenv</a>
                                                        </li>
                                                        <li class="mb5">
                                                            <a class="tag" data-id="1040000000090316" href="javascript: void(0);">lucene</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div id="questionText" class="editor liveMode" style="min-height: 458px;">
                                        <div class="editor-toolbar" id="wmd-button-bar"><ul class="editor-mode"><li class="pull-right"><a class="editor__menu--preview" title="预览模式"></a></li><li class="pull-right"><a class="editor__menu--live muted" title="实况模式"></a></li><li class="pull-right"><a class="editor__menu--edit" title="编辑模式"></a></li><li class="pull-right editor__menu--divider"></li><li id="wmd-zen-button" class="pull-right" title="全屏"><a class="editor__menu--zen"></a></li></ul><ul id="wmd-button-row" class="editor__menu clearfix"><li class="wmd-button" id="wmd-bold-button" title="加粗 <strong> Ctrl+B" style="left: 0px;"><a class="editor__menu--bold" style="background-position: 0px 0px;"></a></li><li class="wmd-button" id="wmd-italic-button" title="斜体 <em> Ctrl+I" style="left: 25px;"><a class="editor__menu--bold" style="background-position: -20px 0px;"></a></li><li class="editor__menu--divider wmd-spacer1" id="wmd-spacer1"></li><li class="wmd-button" id="wmd-link-button" title="链接 <a> Ctrl+L" style="left: 75px;"><a class="editor__menu--bold" style="background-position: -40px 0px;"></a></li><li class="wmd-button" id="wmd-quote-button" title="引用 <blockquote> Ctrl+Q" style="left: 100px;"><a class="editor__menu--bold" style="background-position: -60px 0px;"></a></li><li class="wmd-button" id="wmd-code-button" title="代码 <pre><code> Ctrl+K" style="left: 125px;"><a class="editor__menu--bold" style="background-position: -80px 0px;"></a></li><li class="wmd-button" id="wmd-image-button" title="图片 <img> Ctrl+G" style="left: 150px;"><a class="editor__menu--bold" style="background-position: -100px 0px;"></a></li><li class="editor__menu--divider wmd-spacer2" id="wmd-spacer2"></li><li class="wmd-button" id="wmd-olist-button" title="数字列表 <ol> Ctrl+O" style="left: 200px;"><a class="editor__menu--bold" style="background-position: -120px 0px;"></a></li><li class="wmd-button" id="wmd-ulist-button" title="普通列表 <ul> Ctrl+U" style="left: 225px;"><a class="editor__menu--bold" style="background-position: -140px 0px;"></a></li><li class="wmd-button" id="wmd-heading-button" title="标题 <h1>/<h2> Ctrl+H" style="left: 250px;"><a class="editor__menu--bold" style="background-position: -160px 0px;"></a></li><li class="wmd-button" id="wmd-hr-button" title="分割线 <hr> Ctrl+R" style="left: 275px;"><a class="editor__menu--bold" style="background-position: -180px 0px;"></a></li><li class="editor__menu--divider wmd-spacer3" id="wmd-spacer3"></li><li class="wmd-button" id="wmd-undo-button" title="撤销 - Ctrl+Z" style="left: 325px;"><a class="editor__menu--bold" style="background-position: -200px -20px;"></a></li><li class="wmd-button" id="wmd-redo-button" title="重做 - Ctrl+Y" style="left: 350px;"><a class="editor__menu--bold" style="background-position: -220px -20px;"></a></li><li class="editor__menu--divider wmd-spacer4" id="wmd-spacer4"></li><li class="wmd-button" id="wmd-help-button" title="Markdown 语法" style="left: 400px;"><a class="editor__menu--bold" style="background-position: -300px 0px;"></a></li></ul></div><div class="wmd"><textarea id="myEditor" class="mono form-control wmd-input tabIndent" placeholder="1. 描述你的问题

2. 贴上相关代码

3. 贴上报错信息

4. 贴上相关截图

5. 已经尝试过哪些方法仍然没解决（附上相关链接）" style="min-height: 458px; background-position: 100% 0%; background-repeat: no-repeat;"></textarea><div style="position: absolute;z-index: 100;top: 31px;right: 0;cursor: pointer;" class="alert alert-info code-detect hide" role="alert">使用代码格式化改进排版<span style="margin-left: 10px;">✕</span> </div></div><div class="editor-line"></div><div class="editor-preview"><div class="fmt" id="wmd-preview"></div></div>
                                    </div><a class="editor__resize" href="javascript:void(0);">调整高度</a>


                                    <div class=" publish-footer" style="width:100%">
                                        <div class="container">
                                            <div class="operations clearfix">
                                                <div class="shareToWeibo checkbox pull-left mr10 mb0">
                                                    <label for="shareToWeibo"><input type="checkbox" id="shareToWeibo"> 同步到新浪微博</label>
                                                </div>
                                                <div class="pull-right">

                                                    <span class="text-muted" id="editorStatus">已保存草稿</span>
                                                    <a id="dropIt" href="javascript:void(0);" class="mr10">[舍弃]</a>
                                                    <button data-type="question" id="publishIt" class="btn btn-primary ml10" data-id="" data-do="" data-url="" data-text="发布问题" data-name="">
                                                        发布问题
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="mt10 side-system-notice">
                    <i class="fa fa-bullhorn pull-left"></i><a class="side-system-notice--title" href="https://segmentfault.com/a/1190000004509593#notify">来跟大家分享下你的编程之路吧！</a>
                </div>
            </div>
            <div class="widget-messages">
                <a id="draftCount" class="widget-messages__item" href="/user/draft">
                    我的草稿
                </a>
                <a class="widget-messages__item" href="/user/bookmarks">
                    我的收藏
                </a>
                <a id="inviteCount" class="widget-messages__item" href="/user/invited">
                    邀请我回答的
                </a>
                <a class="widget-messages__item" href="/user/invitation">邀请朋友加入</a>
            </div>



            <div class="widget-box mt30">
                <h2 class="widget-box__title">
                    排行榜
                        <span class="userstab text-muted pull-right">
                            <a href="javascript:void(0);" data-tab="Daily" class="active">今天</a>
                            ·
                            <a href="javascript:void(0);" data-tab="Weekly">本周</a>
                            ·
                            <a href="/users">更多</a>
                        </span>
                </h2>
                <ol id="usersDaily" class="widget-top10">
                    <li class="text-muted">
                        <img class="avatar-24" src="https://sf-static.b0.upaiyun.com/v-56d41406/global/img/user-64.png">
                        <a href="/u/golden_freeman_china" class="ellipsis">
                            golden_freeman_china
                        </a>
                        <span class="text-muted pull-right">+100</span>
                    </li>
                    <li class="text-muted">
                        <img class="avatar-24" src="https://sf-static.b0.upaiyun.com/v-56d41406/global/img/user-64.png">
                        <a href="/u/newbird_007" class="ellipsis">
                            长颈鹿
                        </a>
                        <span class="text-muted pull-right">+45</span>
                    </li>
                    <li class="text-muted">
                        <img class="avatar-24" src="https://sfault-avatar.b0.upaiyun.com/916/709/916709727-1030000000660341_big64">
                        <a href="/u/zhugexiaojue" class="ellipsis">
                            诸葛小觉
                        </a>
                        <span class="text-muted pull-right">+45</span>
                    </li>
                    <li class="text-muted">
                        <img class="avatar-24" src="https://sfault-avatar.b0.upaiyun.com/218/164/2181645848-56a73292553c0_big64">
                        <a href="/u/jaege" class="ellipsis">
                            jaege
                        </a>
                        <span class="text-muted pull-right">+41</span>
                    </li>
                    <li class="text-muted">
                        <img class="avatar-24" src="https://sfault-avatar.b0.upaiyun.com/212/182/2121827898-1030000000596906_big64">
                        <a href="/u/lihongde" class="ellipsis">
                            壮壮呆瓜
                        </a>
                        <span class="text-muted pull-right">+37</span>
                    </li>
                    <li class="text-muted">
                        <img class="avatar-24" src="https://sfault-avatar.b0.upaiyun.com/238/787/2387875497-56b5b8b2569be_big64">
                        <a href="/u/datochan" class="ellipsis">
                            datochan
                        </a>
                        <span class="text-muted pull-right">+31</span>
                    </li>
                    <li class="text-muted">
                        <img class="avatar-24" src="https://sfault-avatar.b0.upaiyun.com/387/044/3870447111-5673aedad6338_big64">
                        <a href="/u/justjavac" class="ellipsis">
                            justjavac
                        </a>
                        <span class="text-muted pull-right">+26</span>
                    </li>
                    <li class="text-muted">
                        <img class="avatar-24" src="https://sfault-avatar.b0.upaiyun.com/157/173/15717300_big64">
                        <a href="/u/binux" class="ellipsis">
                            足兆叉虫
                        </a>
                        <span class="text-muted pull-right">+22</span>
                    </li>
                    <li class="text-muted">
                        <img class="avatar-24" src="https://sf-static.b0.upaiyun.com/v-56d41406/global/img/user-64.png">
                        <a href="/u/xiakshu" class="ellipsis">
                            夏殢无伤
                        </a>
                        <span class="text-muted pull-right">+21</span>
                    </li>
                    <li class="text-muted">
                        <img class="avatar-24" src="https://sf-static.b0.upaiyun.com/v-56d41406/global/img/user-64.png">
                        <a href="/u/church" class="ellipsis">
                            church
                        </a>
                        <span class="text-muted pull-right">+20</span>
                    </li>
                </ol>
                <ol id="usersWeekly" class="widget-top10 hidden">
                    <li class="text-muted">
                        <img class="avatar-24" src="https://sf-static.b0.upaiyun.com/v-56d41406/global/img/user-64.png" alt="">
                        <a href="/u/golden_freeman_china" class="ellipsis">
                            golden_freeman_china
                        </a>
                        <span class="text-muted pull-right">+116</span>
                    </li>
                    <li class="text-muted">
                        <img class="avatar-24" src="https://sfault-avatar.b0.upaiyun.com/355/038/3550384662-5491731491fc7_big64" alt="">
                        <a href="/u/trylife" class="ellipsis">
                            trylife
                        </a>
                        <span class="text-muted pull-right">+96</span>
                    </li>
                    <li class="text-muted">
                        <img class="avatar-24" src="https://sfault-avatar.b0.upaiyun.com/360/224/3602242875-56cf0d5105a69_big64" alt="">
                        <a href="/u/shomy" class="ellipsis">
                            shomy
                        </a>
                        <span class="text-muted pull-right">+85</span>
                    </li>
                    <li class="text-muted">
                        <img class="avatar-24" src="https://sfault-avatar.b0.upaiyun.com/304/698/3046988269-5644b84c17ed3_big64" alt="">
                        <a href="/u/youmingdot" class="ellipsis">
                            有明
                        </a>
                        <span class="text-muted pull-right">+74</span>
                    </li>
                    <li class="text-muted">
                        <img class="avatar-24" src="https://sfault-avatar.b0.upaiyun.com/883/658/883658877-54281918d345b_big64" alt="">
                        <a href="/u/xixicat" class="ellipsis">
                            xixicat
                        </a>
                        <span class="text-muted pull-right">+71</span>
                    </li>
                    <li class="text-muted">
                        <img class="avatar-24" src="https://sfault-avatar.b0.upaiyun.com/340/196/3401963472-56cd3725670bd_big64" alt="">
                        <a href="/u/pkuwangliang" class="ellipsis">
                            小亮_eecs
                        </a>
                        <span class="text-muted pull-right">+70</span>
                    </li>
                    <li class="text-muted">
                        <img class="avatar-24" src="https://sf-static.b0.upaiyun.com/v-56d41406/global/img/user-64.png" alt="">
                        <a href="/u/movieqiu" class="ellipsis">
                            movieqiu
                        </a>
                        <span class="text-muted pull-right">+69</span>
                    </li>
                    <li class="text-muted">
                        <img class="avatar-24" src="https://sf-static.b0.upaiyun.com/v-56d41406/global/img/user-64.png" alt="">
                        <a href="/u/hellnpeter" class="ellipsis">
                            hellnpeter
                        </a>
                        <span class="text-muted pull-right">+61</span>
                    </li>
                    <li class="text-muted">
                        <img class="avatar-24" src="https://sfault-avatar.b0.upaiyun.com/222/265/2222651558-5688d54d4891c_big64" alt="">
                        <a href="/u/jimmy_thr" class="ellipsis">
                            jimmy_thr
                        </a>
                        <span class="text-muted pull-right">+61</span>
                    </li>
                    <li class="text-muted">
                        <img class="avatar-24" src="https://sfault-avatar.b0.upaiyun.com/118/880/1188800450-54c0d1512f59a_big64" alt="">
                        <a href="/u/hsfzxjy" class="ellipsis">
                            hsfzxjy
                        </a>
                        <span class="text-muted pull-right">+58</span>
                    </li>
                </ol>
            </div>

            <div class="widget-box">
                <h2 class="h4 widget-box__title">最近热门</h2>
                <ul class="widget-links list-unstyled pl20">
                    <li class="widget-links__item" style="color: #999; list-style: square;">
                        <a href="/q/1010000004512922">用CSS如何实现此效果？</a>
                    </li>
                    <li class="widget-links__item" style="color: #999; list-style: square;">
                        <a href="/q/1010000004514049">js 全局作用域污染是什么意思</a>
                    </li>
                    <li class="widget-links__item" style="color: #999; list-style: square;">
                        <a href="/q/1010000004513566">jquery怎么实现文件上传？</a>
                    </li>
                    <li class="widget-links__item" style="color: #999; list-style: square;">
                        <a href="/q/1010000004513714">中国有没有类似短信接收验证码的服务？</a>
                    </li>
                    <li class="widget-links__item" style="color: #999; list-style: square;">
                        <a href="/q/1010000004513549">现在七牛的https流量是不是没有免费额度了？</a>
                    </li>
                    <li class="widget-links__item" style="color: #999; list-style: square;">
                        <a href="/q/1010000004513537">如何CocoaPods安装，淘宝的镜像不能用啊</a>
                    </li>
                    <li class="widget-links__item" style="color: #999; list-style: square;">
                        <a href="/q/1010000004513426">eclipse如何使用design包</a>
                    </li>
                    <li class="widget-links__item" style="color: #999; list-style: square;">
                        <a href="/q/1010000002667217">到底什么是消息队列？Java中如何实现消息队列？</a>
                    </li>
                    <li class="widget-links__item" style="color: #999; list-style: square;">
                        <a href="/q/1010000004514072">javascript通过构造函数new出来的对象为什么会出现重复多次的现象？</a>
                    </li>
                    <li class="widget-links__item" style="color: #999; list-style: square;">
                        <a href="/q/1010000004513337">android studio修改包名为何没有效果？</a>
                    </li>
                </ul>
            </div>
        </div><!-- /.side -->
    </div>
@stop