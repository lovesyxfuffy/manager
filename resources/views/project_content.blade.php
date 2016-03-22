@extends('blank')
@section('title')
项目详情
@stop

@section('head')

@stop
@section('list')
<ul class="breadcrumb">
    <li>
        <i class="ace-icon fa fa-home home-icon"></i>
        <a href="#">Home</a>
    </li>

    <li>
        <a href="#">Other Pages</a>
    </li>
    <li class="active">Blank Page</li>
</ul>
@stop
@section('content')
<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="space-6"></div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <!-- #section:pages/invoice -->
                <div class="widget-box transparent">
                    <div class="widget-header widget-header-large">
                        <h3 class="widget-title grey lighter">
                            <i class="ace-icon fa fa-leaf green"></i>
                            项目详情
                        </h3>

                        <!-- #section:pages/invoice.info -->
                        <div class="widget-toolbar hidden-480">
                            <a href="#">
                                <i class="ace-icon fa fa-print"></i>
                            </a>
                        </div>

                        <!-- /section:pages/invoice.info -->
                    </div>

                    <div class="widget-body">
                        <div class="widget-main padding-24">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-xs-11 label label-lg label-info arrowed-in arrowed-right">
                                            <b>项目详情</b>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <ul class="list-unstyled spaced">
                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>项目拥有者:
                                                <b class="blue">{{$owner_name}}</b>
                                            </li>

                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>项目名称:
                                                <b class="blue" style="word-wrap: break-word;">

                                                    {{$project->name}}
                                                </b>
                                            </li>

                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>
                                                项目性质:
                                                <b class="red">
                                                @if($project->attribute==1)
                                                    比赛项目
                                                @elseif($project->attribute==2)
                                                    外包项目
                                                @elseif($project->attribute==3)
                                                    原创项目
                                                @endif
                                                </b>
                                            </li>

                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>
                                                酬金:
                                                <b class="green">￥{{$project->reward}}</b>
                                            </li>

                                            <li class="divider"></li>

                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>
                                                起止时间
                                                <b class="grey">{{$project->starttime}} —— {{$project->endtime}}</b>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- /.col -->

                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right">
                                            <b>人员详情</b>
                                        </div>
                                    </div>

                                    <div>
                                        <ul class="list-unstyled  spaced">
                                            <li>
                                                <i class="ace-icon fa fa-caret-right green"></i>{{$owner_name}}
                                            </li>
                                            @foreach($member_names as $mn)
                                            <li>
                                                <i class="ace-icon fa fa-caret-right green"></i>{{$mn->username}}
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div><!-- /.col -->
                            </div><!-- /.row -->

                            <div class="space"></div>

                            <div>
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="center">#</th>
                                        <th>任务名称</th>
                                        <th >负责人</th>
                                        <th class="hidden-xs">开始时间</th>
                                        <th class="hidden-480">结束时间</th>
                                        <th>状态</th>
                                        <th>提交排期</th>
                                    </tr>
                                    </thead>
                                    <!--{{$i=1}}-->
                                    @foreach($plans as $plan)
                                    <tbody>
                                    <tr id="plan_{{$plan->id}}">
                                        <td class="center">{{$i++}}</td>

                                        <td>
                                            <a href="#">{{$plan->name}}</a>
                                        </td>
                                        <td class="hidden-xs">
                                            {{$plan->username}}
                                        </td>
                                        <td class="hidden-480"> {{$plan->start_time}} </td>
                                        <td>{{$plan->end_time}}</td>
                                        <td>
                                            @if($plan->status==0)
                                                <b class="blue">未完成</b>
                                            @elseif($plan->status==1)
                                                <b class="red">完成待审查</b>
                                            @elseif($plan->status==2)
                                                <b class="green">已完成</b>
                                            @endif
                                            &nbsp;&nbsp;&nbsp;&nbsp;

                                        </td>
                                        <td>@if($plan->user_id==session('user_id')&&$plan->status==0)
                                                <button class="btn btn-xs btn-success" onclick="Submit({{$plan->id}})">
                                                    <i class="ace-icon fa fa-check bigger-120"></i>
                                                </button>

                                                <button class="btn btn-xs btn-danger" onclick="Submit({{$plan->id}})">
                                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                </button>
                                            @endif</td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>

                            <div class="hr hr8 hr-double hr-dotted"></div>

                            <div class="row">

                                <div class="col-sm-2 pull-left">
                                    <div style="" class="progress progress-striped pos-rel" data-percent="{{floor($percent)}}%">
                                        <div class="progress-bar progress-bar-success" style="width:{{floor($percent)}}%;"></div>
                                    </div> </div>
                            </div>

                            <div class="space-6"></div>
                            <div class="well">
                            @foreach($plans as $plan)
                                @if($plan->status==1&&$project->owner_id==session('user_id'))
                                <div class="alert alert-warning">
                                    <strong>
                                        <i class="ace-icon fa fa-check"></i>
                                        {{$plan->username}}提交了完成{{$plan->name}}的请求 ！
                                    </strong>
                                    <button style="float:right" onclick="accept({{$plan->user_id}},{{$plan->id}},this)">通过</button>
                                    <button style="float:right" onclick="reject({{$plan->user_id}},{{$plan->id}},this)">拒绝</button>
                                    <br>
                                </div>
                                @endif
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /section:pages/invoice -->
            </div>
        </div>
        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div>
@stop

@section('scripts')

@stop

@section('inline-scripts')
<script>
    function Submit(id){
        $.ajax({
            type:'post',
            data:{
                plan_id:id,
                _token:'<?php echo csrf_token()?>',

            },
            url:'{{URL('project/plan/submit')}}',
            success:function(data){
                if(data==1){
                    alert('排期完成请求已提交')
                    window.location.reload()
                }

            }
        })
    }
</script>
<script>
    $('#item2').addClass('active');
    function accept(user_id,plan_id,obj){
        $.ajax({
            type:'post',
            data:{
                user_id:user_id,
                plan_id:plan_id,
                _token:'<?php echo csrf_token()?>',

            },
            url:'{{URL('project/plan/accept')}}',
            success:function(data){
                if(data==1){
                    window.location.reload()
                }

            }
        })
    }
    function reject(user_id,plan_id,obj){
        $.ajax({
            type:'post',
            data:{
                user_id:user_id,
                plan_id:plan_id,
                _token:'<?php echo csrf_token()?>',

            },
            url:'{{URL('project/plan/reject')}}',
            success:function(data){
                if(data==1){
                    window.location.reload()
                }
            }
        })
    }
</script>
@stop