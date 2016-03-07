@extends('blank')
@section('title')
    论坛
@stop

@section('head')
<link rel="stylesheet" href="https://sf-static.b0.upaiyun.com/v-56d41406/global/css/global.css">
<link type="text/css" rel="stylesheet" href="chrome-extension://kfgmnlgjmofpiicpgohgfpeabgpmhjdp/style.css">
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
                @foreach($posts as $post)
                    <section class="stream-list__item">
                        <div class="qa-rank">

                            <div class="answers">
                                {{$post->click_num}}<small>回答</small>
                            </div>
                            <div class="views hidden-xs">
                                {{$post->click_num}}<small>浏览</small>
                            </div>
                        </div>
                        <div class="summary">
                            <ul class="author list-inline">
                                <li>
                                    <a href="/u/wojiujiaotudou">我就叫土豆</a>
                                    <span class="split"></span>
                                    <a href="/q/1010000004518087" class="askDate" data-created="1456821997">{{ceil((time()-strtotime($post->modify_time))/60)}}分钟前发帖</a>
                                </li>
                            </ul>
                            <h2 class="title"><a href="{{url('/')}}/post/{{$post->id}}">{{$post->title}}</a></h2>
                            <ul class="taglist--inline ib">
                                <li class="tagPopup"><a class="tag tag-sm" href="/t/%E9%98%BF%E9%87%8C%E4%BA%91" data-toggle="popover" data-original-title="阿里云" data-id="1040000000126687">阿里云</a></li><li class="tagPopup"><a class="tag tag-sm" href="/t/svn" data-toggle="popover" data-original-title="svn" data-id="1040000000089447">svn</a></li>            </ul>
                        </div>
                    </section>
                @endforeach




            </div>
            <div class="text-center">
                <ul class="pagination">
                @if($num >10)
                    @for($i = 1; $i <= ceil($num / 10) && $i <= 5; $i++)
                        @if($page == $i)
                            <li class="disabled"><a href="{{url('/')}}/post/all?page={{$i}}">{{$i}}</a></li>
                        @else
                                <li class="active"><a href="{{url('/')}}/post/all?page={{$i}}">{{$i}}</a></li>
                            @endif
                    @endfor
                    @if($num > 50)
                            <span>…</span></li><li class="next"></li></ul>
                    @endif
                @endif
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
                                <form id="question" method="POST" role="form" style="margin-left:30px;margin-right:20px;margin-top:20px;" action="{{url('post')}}">
                                    <div class="form-group">
                                        <label for="title" class="sr-only">标题</label>
                                        <input id="myTitle" type="text" name="title" required="" data-error="" autocomplete="off" class="form-control tagClose input-lg" placeholder="标题" value="">
                                    </div>

                                    <!--div id="titleSuggest" class="panel hidden widget-suggest panel-default">
                                        <div class="panel-body">
                                            <p>
                                                <strong>这些问题可能有你需要的答案</strong>
                                                <button type="button" class="widget-suggest__close btn btn-default btn-xs">关闭提示</button>
                                            </p>
                                            <ul id="qList" class="list-unstyled widget-suggest__list">
                                            </ul>
                                        </div>
                                    </div-->


                                    <!--div class="form-group">
                                        <label for="tags" class="sr-only">标签：至少1个，最多5个</label>
                                        <input class="tagsInput form-control hidden" data-init="null" name="tags" type="text" placeholder="标签，如：php 可使用逗号,分号;分隔" data-role="tagsinput"><div class="sf-typeHelper"><input type="text" data-role="sf_typeHelper-input" class="sf-typeHelper-input" placeholder="标签，如：php 可使用逗号,分号;分隔" style="width: 20em;"><ul class="sf-typeHelper-list dropdown-menu" style="display: none;"></ul></div>

                                        <!--div role="tabpanel" class="techTags panel panel-default techTags-panel" data-tech="{&quot;\u5f00\u53d1\u8bed\u8a00&quot;:[{&quot;id&quot;:&quot;1040000000089436&quot;,&quot;name&quot;:&quot;javascript&quot;},{&quot;id&quot;:&quot;1040000000089387&quot;,&quot;name&quot;:&quot;php&quot;},{&quot;id&quot;:&quot;1040000000089434&quot;,&quot;name&quot;:&quot;css&quot;},{&quot;id&quot;:&quot;1040000000089534&quot;,&quot;name&quot;:&quot;python&quot;},{&quot;id&quot;:&quot;1040000000089571&quot;,&quot;name&quot;:&quot;html&quot;},{&quot;id&quot;:&quot;1040000000089449&quot;,&quot;name&quot;:&quot;java&quot;},{&quot;id&quot;:&quot;1040000000089918&quot;,&quot;name&quot;:&quot;node.js&quot;},{&quot;id&quot;:&quot;1040000000089409&quot;,&quot;name&quot;:&quot;html5&quot;},{&quot;id&quot;:&quot;1040000000089741&quot;,&quot;name&quot;:&quot;c++&quot;},{&quot;id&quot;:&quot;1040000000089457&quot;,&quot;name&quot;:&quot;c&quot;},{&quot;id&quot;:&quot;1040000000090209&quot;,&quot;name&quot;:&quot;objective-c&quot;},{&quot;id&quot;:&quot;1040000000089669&quot;,&quot;name&quot;:&quot;shell&quot;},{&quot;id&quot;:&quot;1040000000531223&quot;,&quot;name&quot;:&quot;swift&quot;},{&quot;id&quot;:&quot;1040000000089699&quot;,&quot;name&quot;:&quot;ruby&quot;},{&quot;id&quot;:&quot;1040000000089686&quot;,&quot;name&quot;:&quot;bash&quot;},{&quot;id&quot;:&quot;1040000000089581&quot;,&quot;name&quot;:&quot;c#&quot;},{&quot;id&quot;:&quot;1040000000090433&quot;,&quot;name&quot;:&quot;asp.net&quot;},{&quot;id&quot;:&quot;1040000000090208&quot;,&quot;name&quot;:&quot;lua&quot;},{&quot;id&quot;:&quot;1040000000090228&quot;,&quot;name&quot;:&quot;scala&quot;},{&quot;id&quot;:&quot;1040000000090194&quot;,&quot;name&quot;:&quot;actionscript&quot;},{&quot;id&quot;:&quot;1040000000089698&quot;,&quot;name&quot;:&quot;perl&quot;},{&quot;id&quot;:&quot;1040000000090201&quot;,&quot;name&quot;:&quot;erlang&quot;},{&quot;id&quot;:&quot;1040000000311191&quot;,&quot;name&quot;:&quot;rust&quot;},{&quot;id&quot;:&quot;1040000000090511&quot;,&quot;name&quot;:&quot;go&quot;}],&quot;\u5e73\u53f0\u6846\u67b6&quot;:[{&quot;id&quot;:&quot;1040000000196640&quot;,&quot;name&quot;:&quot;laravel&quot;},{&quot;id&quot;:&quot;1040000000125263&quot;,&quot;name&quot;:&quot;flask&quot;},{&quot;id&quot;:&quot;1040000000089564&quot;,&quot;name&quot;:&quot;django&quot;},{&quot;id&quot;:&quot;1040000000089646&quot;,&quot;name&quot;:&quot;ruby-on-rails&quot;},{&quot;id&quot;:&quot;1040000000166256&quot;,&quot;name&quot;:&quot;express&quot;},{&quot;id&quot;:&quot;1040000000090103&quot;,&quot;name&quot;:&quot;spring&quot;},{&quot;id&quot;:&quot;1040000000116331&quot;,&quot;name&quot;:&quot;tornado&quot;},{&quot;id&quot;:&quot;1040000000090398&quot;,&quot;name&quot;:&quot;yii&quot;},{&quot;id&quot;:&quot;1040000000622042&quot;,&quot;name&quot;:&quot;koa&quot;},{&quot;id&quot;:&quot;1040000000089638&quot;,&quot;name&quot;:&quot;struts&quot;}],&quot;\u670d\u52a1\u5668&quot;:[{&quot;id&quot;:&quot;1040000000089392&quot;,&quot;name&quot;:&quot;linux&quot;},{&quot;id&quot;:&quot;1040000000090145&quot;,&quot;name&quot;:&quot;nginx&quot;},{&quot;id&quot;:&quot;1040000000089761&quot;,&quot;name&quot;:&quot;apache&quot;},{&quot;id&quot;:&quot;1040000000090245&quot;,&quot;name&quot;:&quot;ubuntu&quot;},{&quot;id&quot;:&quot;1040000000366352&quot;,&quot;name&quot;:&quot;docker&quot;},{&quot;id&quot;:&quot;1040000000090249&quot;,&quot;name&quot;:&quot;centos&quot;},{&quot;id&quot;:&quot;1040000000090401&quot;,&quot;name&quot;:&quot;\u7f13\u5b58&quot;},{&quot;id&quot;:&quot;1040000000090117&quot;,&quot;name&quot;:&quot;tomcat&quot;},{&quot;id&quot;:&quot;1040000000090646&quot;,&quot;name&quot;:&quot;unix&quot;},{&quot;id&quot;:&quot;1040000000089648&quot;,&quot;name&quot;:&quot;hadoop&quot;},{&quot;id&quot;:&quot;1040000000090107&quot;,&quot;name&quot;:&quot;\u8d1f\u8f7d\u5747\u8861&quot;},{&quot;id&quot;:&quot;1040000000090609&quot;,&quot;name&quot;:&quot;windows-server&quot;}],&quot;\u6570\u636e\u5e93\u548c\u7f13\u5b58&quot;:[{&quot;id&quot;:&quot;1040000000089439&quot;,&quot;name&quot;:&quot;mysql&quot;},{&quot;id&quot;:&quot;1040000000089431&quot;,&quot;name&quot;:&quot;redis&quot;},{&quot;id&quot;:&quot;1040000000090049&quot;,&quot;name&quot;:&quot;sql&quot;},{&quot;id&quot;:&quot;1040000000089488&quot;,&quot;name&quot;:&quot;mongodb&quot;},{&quot;id&quot;:&quot;1040000000089432&quot;,&quot;name&quot;:&quot;nosql&quot;},{&quot;id&quot;:&quot;1040000000089873&quot;,&quot;name&quot;:&quot;memcached&quot;},{&quot;id&quot;:&quot;1040000000090354&quot;,&quot;name&quot;:&quot;sqlite&quot;},{&quot;id&quot;:&quot;1040000000090701&quot;,&quot;name&quot;:&quot;oracle&quot;},{&quot;id&quot;:&quot;1040000000090861&quot;,&quot;name&quot;:&quot;postgresql&quot;},{&quot;id&quot;:&quot;1040000000090424&quot;,&quot;name&quot;:&quot;sqlserver&quot;}],&quot;\u5f00\u53d1\u5de5\u5177&quot;:[{&quot;id&quot;:&quot;1040000000089459&quot;,&quot;name&quot;:&quot;git&quot;},{&quot;id&quot;:&quot;1040000000091226&quot;,&quot;name&quot;:&quot;github&quot;},{&quot;id&quot;:&quot;1040000000089467&quot;,&quot;name&quot;:&quot;vim&quot;},{&quot;id&quot;:&quot;1040000000089579&quot;,&quot;name&quot;:&quot;xcode&quot;},{&quot;id&quot;:&quot;1040000000126097&quot;,&quot;name&quot;:&quot;sublime-text&quot;},{&quot;id&quot;:&quot;1040000000089509&quot;,&quot;name&quot;:&quot;eclipse&quot;},{&quot;id&quot;:&quot;1040000000089447&quot;,&quot;name&quot;:&quot;svn&quot;},{&quot;id&quot;:&quot;1040000000090560&quot;,&quot;name&quot;:&quot;intellij-idea&quot;},{&quot;id&quot;:&quot;1040000000090473&quot;,&quot;name&quot;:&quot;ide&quot;},{&quot;id&quot;:&quot;1040000000090216&quot;,&quot;name&quot;:&quot;emacs&quot;},{&quot;id&quot;:&quot;1040000000090186&quot;,&quot;name&quot;:&quot;maven&quot;},{&quot;id&quot;:&quot;1040000000090524&quot;,&quot;name&quot;:&quot;atom&quot;},{&quot;id&quot;:&quot;1040000000090231&quot;,&quot;name&quot;:&quot;visual-studio&quot;},{&quot;id&quot;:&quot;1040000000089663&quot;,&quot;name&quot;:&quot;textmate&quot;},{&quot;id&quot;:&quot;1040000000183694&quot;,&quot;name&quot;:&quot;hg&quot;}],&quot;\u7cfb\u7edf\u8bbe\u5907&quot;:[{&quot;id&quot;:&quot;1040000000089442&quot;,&quot;name&quot;:&quot;ios&quot;},{&quot;id&quot;:&quot;1040000000089658&quot;,&quot;name&quot;:&quot;android&quot;},{&quot;id&quot;:&quot;1040000000089407&quot;,&quot;name&quot;:&quot;chrome&quot;},{&quot;id&quot;:&quot;1040000000089709&quot;,&quot;name&quot;:&quot;windows&quot;},{&quot;id&quot;:&quot;1040000000090220&quot;,&quot;name&quot;:&quot;macosx&quot;},{&quot;id&quot;:&quot;1040000000089498&quot;,&quot;name&quot;:&quot;iphone&quot;},{&quot;id&quot;:&quot;1040000000125504&quot;,&quot;name&quot;:&quot;internet-explorer&quot;},{&quot;id&quot;:&quot;1040000000090217&quot;,&quot;name&quot;:&quot;firefox&quot;},{&quot;id&quot;:&quot;1040000000090638&quot;,&quot;name&quot;:&quot;ipad&quot;},{&quot;id&quot;:&quot;1040000000089499&quot;,&quot;name&quot;:&quot;safari&quot;},{&quot;id&quot;:&quot;1040000000090218&quot;,&quot;name&quot;:&quot;opera&quot;},{&quot;id&quot;:&quot;1040000002871462&quot;,&quot;name&quot;:&quot;apple-watch&quot;}],&quot;\u5176\u5b83&quot;:[{&quot;id&quot;:&quot;1040000000089409&quot;,&quot;name&quot;:&quot;html5&quot;},{&quot;id&quot;:&quot;1040000002893277&quot;,&quot;name&quot;:&quot;react.js&quot;},{&quot;id&quot;:&quot;1040000000090137&quot;,&quot;name&quot;:&quot;\u641c\u7d22\u5f15\u64ce&quot;},{&quot;id&quot;:&quot;1040000000123810&quot;,&quot;name&quot;:&quot;virtualenv&quot;},{&quot;id&quot;:&quot;1040000000090316&quot;,&quot;name&quot;:&quot;lucene&quot;}]}" style="display: none;">
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

                                    </div-->


                                    <div id="questionText" class="" style="min-height: 458px;">
                                        <!--div class="editor-toolbar" id="wmd-button-bar"><ul class="editor-mode"><li class="pull-right"><a class="editor__menu--preview" title="预览模式"></a></li><li class="pull-right"><a class="editor__menu--live muted" title="实况模式"></a></li><li class="pull-right"><a class="editor__menu--edit" title="编辑模式"></a></li><li class="pull-right editor__menu--divider"></li><li id="wmd-zen-button" class="pull-right" title="全屏"><a class="editor__menu--zen"></a></li></ul><ul id="wmd-button-row" class="editor__menu clearfix"><li class="wmd-button" id="wmd-bold-button" title="加粗 <strong> Ctrl+B" style="left: 0px;"><a class="editor__menu--bold" style="background-position: 0px 0px;"></a></li><li class="wmd-button" id="wmd-italic-button" title="斜体 <em> Ctrl+I" style="left: 25px;"><a class="editor__menu--bold" style="background-position: -20px 0px;"></a></li><li class="editor__menu--divider wmd-spacer1" id="wmd-spacer1"></li><li class="wmd-button" id="wmd-link-button" title="链接 <a> Ctrl+L" style="left: 75px;"><a class="editor__menu--bold" style="background-position: -40px 0px;"></a></li><li class="wmd-button" id="wmd-quote-button" title="引用 <blockquote> Ctrl+Q" style="left: 100px;"><a class="editor__menu--bold" style="background-position: -60px 0px;"></a></li><li class="wmd-button" id="wmd-code-button" title="代码 <pre><code> Ctrl+K" style="left: 125px;"><a class="editor__menu--bold" style="background-position: -80px 0px;"></a></li><li class="wmd-button" id="wmd-image-button" title="图片 <img> Ctrl+G" style="left: 150px;"><a class="editor__menu--bold" style="background-position: -100px 0px;"></a></li><li class="editor__menu--divider wmd-spacer2" id="wmd-spacer2"></li><li class="wmd-button" id="wmd-olist-button" title="数字列表 <ol> Ctrl+O" style="left: 200px;"><a class="editor__menu--bold" style="background-position: -120px 0px;"></a></li><li class="wmd-button" id="wmd-ulist-button" title="普通列表 <ul> Ctrl+U" style="left: 225px;"><a class="editor__menu--bold" style="background-position: -140px 0px;"></a></li><li class="wmd-button" id="wmd-heading-button" title="标题 <h1>/<h2> Ctrl+H" style="left: 250px;"><a class="editor__menu--bold" style="background-position: -160px 0px;"></a></li><li class="wmd-button" id="wmd-hr-button" title="分割线 <hr> Ctrl+R" style="left: 275px;"><a class="editor__menu--bold" style="background-position: -180px 0px;"></a></li><li class="editor__menu--divider wmd-spacer3" id="wmd-spacer3"></li><li class="wmd-button" id="wmd-undo-button" title="撤销 - Ctrl+Z" style="left: 325px;"><a class="editor__menu--bold" style="background-position: -200px -20px;"></a></li><li class="wmd-button" id="wmd-redo-button" title="重做 - Ctrl+Y" style="left: 350px;"><a class="editor__menu--bold" style="background-position: -220px -20px;"></a></li><li class="editor__menu--divider wmd-spacer4" id="wmd-spacer4"></li><li class="wmd-button" id="wmd-help-button" title="Markdown 语法" style="left: 400px;"><a class="editor__menu--bold" style="background-position: -300px 0px;"></a></li></ul></div-->

                                            <textarea id="myEditor" name="content" class="mono form-control wmd-input tabIndent" placeholder="内容" style="min-height: 458px; background-position: 100% 0%; background-repeat: no-repeat; "></textarea>]
                                            <!--div style="position: absolute;z-index: 100;top: 31px;right: 0;cursor: pointer;" class="alert alert-info code-detect hide" role="alert">使用代码格式化改进排版<span style="margin-left: 10px;">✕</span> </div></div><div class="editor-line"></div><div class="editor-preview"><div class="fmt" id="wmd-preview"></div></div-->
                                        </div><a class="editor__resize" href="javascript:void(0);">调整高度</a>


                                    <div class=" publish-footer">
                                        <div class="container" style="width:100%">
                                            <div class="operations clearfix">
                                                <!--div class="shareToWeibo checkbox pull-left mr10 mb0">
                                                    <label for="shareToWeibo"><input type="checkbox" id="shareToWeibo"> 同步到新浪微博</label>
                                                </div-->
                                                <div class="pull-right">

                                                    <!--span class="text-muted" id="editorStatus">已保存草稿</span>
                                                    <a id="dropIt" href="javascript:void(0);" class="mr10">[舍弃]</a-->
                                                    <input type="submit" data-type="question"  class="btn btn-primary ml10" data-id="" data-do="" data-url="" data-text="发布问题" data-name="" />
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





        </div><!-- /.side -->
    </div>

@stop