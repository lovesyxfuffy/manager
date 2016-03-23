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
                        <td><a href="{{$mp->status <= 2 ? url('publish/'.$mp->id) : url('project/content/'.$mp->id)}}">{{$mp->name}}</a></td>

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
                            @elseif($mp->status==4)
                                <td>
                                    <b class="green">已完成</b>
                                </td>
                                <td>
                                    <div class="progress progress-striped pos-rel" data-percent="100%">
                                        <div class="progress-bar progress-bar-success" style="width:100%;"></div>
                                    </div>
                                </td>
                            @endif

                            <td>
                                @if($mp->owner_id==session('user_id'))
                                <a href="{{$mp->status <= 2 ? url('publish/'.$mp->id) : url('project/content/'.$mp->id)}}">{{$mp->message}}</a>
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
    $('#item2').addClass('active');
    $('#item21').addClass('active');
    function getcontent(id){
        $('#content').html($('#project_'+id).val())
    }
</script>

@stop