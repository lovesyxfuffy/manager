@extends('blank')
@section('title')
   发布回答
@stop

@section('head')
    <link rel="stylesheet" href="https://sf-static.b0.upaiyun.com/v-56d41406/global/css/global.css">
    <link type="text/css" rel="stylesheet" href="chrome-extension://kfgmnlgjmofpiicpgohgfpeabgpmhjdp/style.css">
    <link rel="stylesheet" href="https://sf-static.b0.upaiyun.com/v-56d6b848/qa/css/qa_all.css">
    <link rel="stylesheet" href="https://sf-static.b0.upaiyun.com/v-56d6b848/global/css/responsive.css">
    <script>
        function post()
        {
            $.ajax({
                url: "{{url('reply')}}",
                type: "post",
                data: {
                    content: $("#reply_content").val(),
                    post_id:"{{$post_id}}"
                },
                success:function(data) {
                    if (data == 0) {
                        alert("成功了!");
                        location.reload();
                    }
                    else
                        alert("失败了");
                }

            });
        }
    </script>

@stop

@section('content')
    <div class="row">
        <div class="col-md-9 col-sm-8 col-xs-12">
            <h1 class="h3 title" id="questionTitle" data-id="1010000004527231">
                <span class="question__title--icon-symbol mb10">问</span>
                    {{$post->title}}</h1>

            <div class="author">

                <div class="question__author">
                    <a href="/u/joeny" class="mr5"><strong>{{$post->username}}</strong></a>
                        <span class="hidden-xs"></span>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-xs-12 col-md-9 main">
            <article class="widget-question__item">
                <div class="post-col">
                    <!--div class="widget-vote">
                        <button type="button" class="like" data-id="1010000004527231" data-type="question" data-do="like" data-toggle="tooltip" data-placement="top" title="" data-original-title="问题对人有帮助，内容完整，我也想知道答案">
                            <span class="sr-only">问题对人有帮助，内容完整，我也想知道答案</span>
                        </button>
                        <span class="count">0</span>
                        <button type="button" class="hate" data-id="1010000004527231" data-type="question" data-do="hate" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="问题没有实际价值，缺少关键内容，没有改进余地">
                            <span class="sr-only">问题没有实际价值，缺少关键内容，没有改进余地</span>
                        </button>
                    </div-->
                    <!-- end .widget-vote -->
                </div>

                <div class="post-offset">
                    <div class="question fmt">
                       <pre class="hljs"><div class="widget-codetool" style="display: none;"><button class="selectCode btn btn-xs">全选</button><button href="javascript:void(0);" class="copyCode btn btn-xs" data-clipboard-text="" data-toggle="tooltip" data-placement="top" title="">复制</button><button href="javascript:void(0);" class="saveToNote btn btn-xs">放进笔记</button></div><code>{{$replies[0]->content}}</code></pre>

                    </div>



                    <!--div class="row">
                        <div class="post-opt col-md-8">
                            <ul class="list-inline mb0">
                                <li><a href="/q/1010000004527231">6 分钟前提问</a></li>


                                <li><a href="javascript:void(0);" class="comments" data-id="1010000004527231" data-target="#comment-1010000004527231">
                                        评论</a></li>






                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">更多<b class="caret"></b></a>
                                    <ul class="dropdown-menu dropdown-menu-left">
                                        <li><a href="#911" data-id="1010000004527231" data-toggle="modal" data-target="#911" data-type="question" data-typetext="问题">举报</a>
                                        </li>




                                    </ul>
                                </li>
                            </ul>
                        </div>


                    </div-->
                    <div class="widget-comments hidden" id="comment-1010000004527231" data-id="1010000004527231">
                        <div class="widget-comments__form row">

                            <form class="clearfix" method="POST">
                                <div class="form-group mb0 widget-comments__form--input">
                                    <input name="id" type="hidden" value="1010000004527231">
                                    <textarea rows="1" name="text" class="form-control mono" id="commentText-1010000004527231" data-id="1010000004527231" placeholder="使用评论询问更多信息或提出修改意见，请不要在评论里回答问题"></textarea>

                                </div>
                                <div class="widget-comments__btn">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-default postComment" data-id="1010000004527231">提交评论
                                        </button>
                                <span class="widget-comments__btn--tips"><a href="javascript:void(0);" class="toggle-comment-helper" title="语法提示">
                                        <i class="fa fa-question-circle"></i>
                                    </a></span>
                                    </div>
                                </div>
                            </form>
                            <div class="col-md-12">
                                <div class="alert alert-warning alert-dismissible mb0 mt10 fmt comment-helper" data-rank="0" style="display:none;" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="right:0;"><span aria-hidden="true">×</span></button>
                                    评论支持部分 Markdown 语法：<code>**bold**</code> <code>_italic_</code>
                                    <code>[link](http://example.com)</code> <code>&gt; 引用</code> <code>`code`</code> <code>-
                                        列表</code>。<br>同时，被你 @ 的用户也会收到通知
                                </div>
                            </div>


                        </div><!-- /.widget-comments__form -->
                    </div><!-- /.widget-comments -->


                </div>
                <!-- end .post-offset -->
            </article>

            <div class="widget-answers">
                <!--div class="btn-group pull-right" role="group">
                    <a href="/q/1010000004527231#answers-title" id="sortby-rank" class="btn btn-default btn-xs active">默认排序</a>
                    <a href="?sort=created#answers-title" id="sortby-created" class="btn btn-default btn-xs">时间排序</a>
                </div-->

                <h2 class="title h4 mt30 mb20 post-title" id="answers-title"></h2>





                <article class="clearfix widget-answers__item" id="a-1020000004527247">
                    <div class="post-col">
                        <!--div class="widget-vote">
                            <button type="button" class="like" data-id="1020000004527247" data-type="answer" data-do="like" data-toggle="tooltip" data-placement="top" title="" data-original-title="答案对人有帮助，有参考价值">
                                <span class="sr-only">答案对人有帮助，有参考价值</span>
                            </button>
                            <span class="count">0</span>
                            <button type="button" class="hate" data-id="1020000004527247" data-type="answer" data-do="hate" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="答案没帮助，是错误的答案，答非所问">
                                <span class="sr-only">答案没帮助，是错误的答案，答非所问</span>
                            </button>

                        </div-->
                    </div>
                    <span style="display:none" >{{$j = 1}}</span>
                    @foreach($replies as $reply)
                        @if($j++ > 1)
                    <div class="post-offset">
                        {{$j - 1}}楼
                        <div class="answer fmt">
                            <p>{{$reply->content}}</p>
                        </div>



                        <div class="row answer__info--row">
                            <div class="post-opt col-md-8 col-sm-8 col-xs-10">
                                <!--ul class="list-inline mb0">

                                    <li><a href="/q/1010000004527231/a-1020000004527247"> 1 分钟前回答</a> <span class="text-muted">

                    </span></li>

                                    <li><a href="javascript:void(0);" class="comments" data-id="1020000004527247" data-target="#comment-1020000004527247">
                                            评论</a></li>

                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">更多<b class="caret"></b></a>
                                        <ul class="dropdown-menu dropdown-menu-left">
                                            <li><a href="#911" data-id="1020000004527247" data-toggle="modal" data-target="#911" data-type="answer" data-typetext="答案">举报</a></li>
                                        </ul>
                                    </li>
                                </ul-->
                            </div>

                            <div class="col-md-2 col-sm-2 col-xs-2 answer__info--author-avatar">
                                <a class="mr10" href="/u/august1996"><img class="avatar-32" src="https://sfault-avatar.b0.upaiyun.com/379/989/3799891567-565fa729f1bc6_big64" alt=""></a>
                            </div>
                            <div class="col-md-2 col-sm-2 hidden-xs answer__info--author">
                                <div class=" answer__info--author-warp">
                                    <a class="answer__info--author-name" title="august1996" href="/u/august1996">{{$reply->username}}</a><!--span class="answer__info--author-rank">18 声望</span--></div>
                            </div>
                        </div>


                        <div class="widget-comments hidden" id="comment-1020000004527247" data-id="1020000004527247">
                            <div class="widget-comments__form row">

                                <form class="clearfix" method="">
                                    <div class="form-group mb0 widget-comments__form--input">
                                        <input name="post_id" type="hidden" value="">
                                        <textarea rows="1" name="content" class="form-control mono" id="commentText-1020000004527247" data-id="1020000004527247" placeholder="使用评论询问更多信息或提出修改意见，请不要在评论里回答问题"></textarea>

                                    </div>
                                    <div class="widget-comments__btn">
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-default postComment" data-id="1020000004527247">提交评论
                                            </button>
                                <span class="widget-comments__btn--tips"><a href="javascript:void(0);" class="toggle-comment-helper" title="语法提示">
                                        <i class="fa fa-question-circle"></i>
                                    </a></span>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-md-12">
                                    <div class="alert alert-warning alert-dismissible mb0 mt10 fmt comment-helper" data-rank="0" style="display:none;" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="right:0;"><span aria-hidden="true">×</span></button>
                                        评论支持部分 Markdown 语法：<code>**bold**</code> <code>_italic_</code>
                                        <code>[link](http://example.com)</code> <code>&gt; 引用</code> <code>`code`</code> <code>-
                                            列表</code>。<br>同时，被你 @ 的用户也会收到通知
                                    </div>
                                </div>


                            </div><!-- /.widget-comments__form -->
                        </div><!-- /.widget-comments -->




                    </div>
                        <h2 class="title h4 mt30 mb20 post-title" id="answers-title"></h2>
                        @endif
                        @endforeach
                </article><!-- /article -->




                <div class="text-center">

                </div>
            </div><!-- /.widget-answers -->



            <div style="padding-left: 65px;">
                <h4>撰写回复</h4>

                <form  class="editor-wrap" action="{{url('post/reply')}}" method="POST" />
                    <input type="hidden" name="post_id" value="{{$post_id}}">
                    <div class="editor" id="questionText">
                        <textarea id="reply_content" name="content" class="form-control" rows="15" placeholder="撰写答案..."></textarea>
                    </div>

                    <input type="submit" onclick="post" class="btn btn-default btn-sm inviteBtn ml5" style="float:right;" />
                </form>
            </div>



        </div>
        <!-- /.main -->





    </div>
@stop