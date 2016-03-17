@extends('blank')

@section('title')
项目管理
@stop

@section('head')
<style type="text/css">
    .widget-shadow {
        background-color: #fff;
        padding: 1.5em 1.5em 0em;
    }
</style>
@stop

@section('list')
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="#">项目管理</a>
        </li>

        <li class="active">发布项目</li>
    </ul>
@stop

@section('content')
    <h3 class="header smaller red">可加入的项目</h3>
    <input type='hidden' id="count" value="{{count($projects)}}">
    <div class="row">
        <!-- #section:pages/pricing.small-header -->
        @if(count($projects)!=0)
        <div id="project_header" class="col-xs-4 col-sm-3 pricing-span-header">
            <div class="widget-box transparent">
                <div class="widget-header">
                    <h5 class="widget-title bigger lighter">项目发布人</h5>
                </div>

                <div class="widget-body">
                    <div class="widget-main no-padding">
                        <ul class="list-unstyled list-striped pricing-table-header">
                            <li>项目名称 </li>
                            <li>项目类型 </li>
                            <li>项目酬劳 </li>
                            <li>项目简介 </li>
                            <li>开始时间 </li>
                            <li>结束时间</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- /section:pages/pricing.small-header -->
        <div id="modal-table" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header no-padding">
                        <div class="table-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <span class="white">&times;</span>
                            </button>
                            详细内容
                        </div>
                    </div>

                    <div class="modal-body no-padding">
                        <div>
                            <textarea disabled="disabled" id='content' style="width:85%;height:85%;margin-left:7.5%;" rows="15"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer no-margin-top">
                        <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
                            <i class="ace-icon fa fa-times"></i>
                            Close
                        </button>


                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        <!-- #section:pages/pricing.small-body -->
        <div class="col-xs-8 col-sm-9 pricing-span-body">

            @foreach($projects as $pj)

            <input type='hidden' value="{{$pj->content}}" id='project_{{$pj->id}}'>
            <div class="pricing-span" id="project_e_{{$pj->id}}">
                <!--{{$int=rand(0,4)}}-->
                <div class="widget-box pricing-box-small widget-color-{{$color[$int]}}">
                    <div class="widget-header">
                        <h5 class="widget-title bigger lighter">{{$pj->username}}</h5>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main no-padding">
                            <ul class="list-unstyled list-striped pricing-table">
                                <li> {{$pj->name}} </li>
                                <li>
                                    @if($pj->attribute==1)
                                        比赛项目
                                    @elseif($pj->attribute==2)
                                        外包项目
                                    @elseif($pj->attribute==3)
                                        原创项目
                                    @endif
                                </li>
                                <li> ￥{{$pj->reward}} </li>
                                <li> <a href="#modal-table" role="button" class="green" onclick="getcontent({{$pj->id}})" data-toggle="modal">点击查看</a> </li>
                                <li> {{$pj->starttime}} </li>

                                <li>
                                    {{$pj->endtime}}
                                </li>
                            </ul>

                        </div>

                        <div>
                            <a onclick="join({{$pj->id}})" class="btn btn-block btn-sm btn-{{$button[$int]}}" >
                                <span>参与</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div><!-- PAGE CONTENT ENDS -->
    <div class="row">
        <div class="col-xs-8 col-sm-9 pricing-span-body">
            <div class="panel-body widget-shadow">
                <h4>我的项目</h4>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>项目名称</th>
                        <th>项目状态</th>
                        <th>进度</th>
                        <th>项目详情</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!--{{$i=1}}-->
                    @foreach($my_projects as $mp)
                    <tr>

                        <th scope="row">{{$i++}}</th>
                        <td>{{$mp->name}}</td>

                            <!--{{var_dump($mp  )}}-->
                            @if($mp->status==0)

                                <td>
                                    审核中
                                </td>
                                <td>
                                    <div class="progress progress-striped pos-rel" data-percent="50%">
                                        <div class="progress-bar progress-bar-success" style="width: 50%;"></div>
                                    </div>
                                </td>
                            @elseif($mp->status==1)

                                <td>
                                    招募成员中
                                </td>
                                <td>
                                    <div  class="progress progress-striped pos-rel" data-percent="{{floor($mp->percent*100)}}%">
                                        <div class="progress-bar progress-bar-success" style="width:{{floor($mp->percent*100)}}%;"></div>
                                    </div>
                                </td>
                            @elseif($mp->status==2)
                                <td>
                                    排期审核中
                                </td>
                                <td>
                                    <div class="progress progress-striped pos-rel" data-percent="50%">
                                        <div class="progress-bar progress-bar-success" style="width: 50%;"></div>
                                    </div>
                                </td>
                            @elseif($mp->status==3)
                                <td>
                                    正在进行中
                                </td>
                                <td>
                                    <div class="progress progress-striped pos-rel" data-percent="{{floor($mp->percent*100)}}%">
                                        <div class="progress-bar progress-bar-success" style="width:{{floor($mp->percent*100)}}%;"></div>
                                    </div>
                                </td>
                            @endif

                            <td>
                                @if($mp->owner_id==session('user_id'))
                                <a href="#">{{$mp->message}}</a>
                                @else
                                    {{$mp->message}}
                                @endif

                            </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@section('scripts')

@stop

@section('inline-scripts')

<script>
    function getcontent(id){
        $('#content').html($('#project_'+id).val())
    }
</script>
<script>

    function join(id){
        $.ajax({
            type:'post',
            url:'{{URL('project/join')}}',
            data:{
                _token:'<?php echo csrf_token()?>',
                project_id:id,
            },
            success:function(data){
                if(data==0){
                    alert('参与请求已经提交，请等待项目拥有者审核')
                    $('#project_e_1').remove()
                    $('#count').val($('#count').val()-1)
                    if($('#count').val()==0)
                        $('#project_header').remove()

                }
            }
        })
    }
</script>
@stop