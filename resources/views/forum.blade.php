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

            <div class="stream-list question-stream" style="min-height:550px;">
                @foreach($posts as $post)
                    <section class="stream-list__item">
                        <div class="qa-rank">

                            <div class="answers">
                                {{$post->reply_num}}<small>回答</small>
                            </div>
                            <div class="views hidden-xs">
                                {{$post->click_num}}<small>浏览</small>
                            </div>
                        </div>
                        <div class="summary">
                            <ul class="author list-inline">
                                <li>
                                    <a href="/u/wojiujiaotudou">{{$post->username}}</a>
                                    <span class="split"></span>
                                    <span style="display:none">{{$min = ceil((time()-strtotime($post->modify_time))/60)}}</span>
                                    <a href="/q/1010000004518087" class="askDate" data-created="1456821997">
                                        @if($min < 60)
                                            {{$min."分钟"}}
                                        @elseif($min < 1440)
                                            {{(ceil($min/60))."小时"}}
                                        @else
                                            {{(ceil($min/60/24))."天"}}
                                        @endif
                                        前发帖</a>
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
                                        {{ csrf_field() }}
                                        <input id="myTitle" type="text" name="title" required="" data-error="" autocomplete="off" class="form-control tagClose input-lg" placeholder="标题" value="">
                                    </div>
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