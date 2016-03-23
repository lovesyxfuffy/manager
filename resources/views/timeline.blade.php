
@extends('blank')
@section('title')
    时间轴
@stop

@section('head')

@stop
@section('list')
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="#">项目管理</a>
        </li>

        <li class="active">时间轴</li>
    </ul>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->



            <div id="timeline-2" >
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <!-- #section:pages/timeline.style2 -->
                        <div class="timeline-container timeline-style2">
												<span class="timeline-label">
													<b>Today</b>
												</span>

                            <div class="timeline-items">
                                @foreach($logs_today as $log)
                                <div class="timeline-item clearfix">
                                    <div class="timeline-info">
                                        <span class="timeline-date">{{$log->time}}</span>

                                        <i class="timeline-indicator btn btn-info no-hover"></i>
                                    </div>

                                    <div class="widget-box transparent">
                                        <div class="widget-body">
                                            <div class="widget-main no-padding">
																	<span class="bigger-110">
																		<a href="#" class="purple bolder">{{$log->username}}</a>
                                                                        <br />
																		{{$log->content}}
																	</span>
                                                <br />
                                                @if(property_exists($log,'more'))
                                                    {{$log->more}}
                                                @endif
                                                <br />
                                                @if($log->sign=='project_finished')
                                                <i class="ace-icon fa fa-hand-o-right grey bigger-125"></i>
                                                <a href="{{URL('/project/content/'.$log->project_id)}}">Click to see &hellip;</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div><!-- /.timeline-items -->
                        </div><!-- /.timeline-container -->

                        <!-- /section:pages/timeline.style2 -->
                        <div class="timeline-container timeline-style2">
												<span class="timeline-label">
													<b>Yesterday</b>
												</span>

                            <div class="timeline-items">
                                @foreach($logs_yesterday as $log)
                                    <div class="timeline-item clearfix">
                                        <div class="timeline-info">
                                            <span class="timeline-date">{{$log->time}}</span>

                                            <i class="timeline-indicator btn btn-info no-hover"></i>
                                        </div>

                                        <div class="widget-box transparent">
                                            <div class="widget-body">
                                                <div class="widget-main no-padding">
																	<span class="bigger-110">
																		<a href="#" class="purple bolder">{{$log->username}}</a>
                                                                        <br />
                                                                        {{$log->content}}
																	</span>
                                                    <br />
                                                    @if(property_exists($log,'more'))
                                                        {{$log->more}}
                                                    @endif
                                                    <br />
                                                    @if($log->sign=='project_finished')
                                                        <i class="ace-icon fa fa-hand-o-right grey bigger-125"></i>
                                                        <a href="#">Click to see &hellip;</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div><!-- /.timeline-items -->
                        </div><!-- /.timeline-container -->


                    </div>
                </div>
            </div>

            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->

    </div><!-- /.row -->
@stop

@section('inline-scripts')
    <script type="text/javascript">
        jQuery(function($) {
            $('[data-toggle="buttons"] .btn').on('click', function(e){
                var target = $(this).find('input[type=radio]');
                var which = parseInt(target.val());
                $('[id*="timeline-"]').addClass('hide');
                $('#timeline-'+which).removeClass('hide');
            });
        });
    </script>
    <script>
        $('#item2').addClass('active');
        $('#item24').addClass('active')
    </script>
@stop