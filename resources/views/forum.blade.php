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
                <a href="/ask" class="mt10 btn btn-primary btn-block">提问</a>
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