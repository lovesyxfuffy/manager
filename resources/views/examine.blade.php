@extends('blank')

@section('title')
    审核项目
@stop

@section('head')

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

    <div class="page-header">
        <h1>
            待审核的项目发布消息
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">
                <div class="col-xs-12">
                    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>

                            <th>项目名称</th>
                            <th>项目报酬</th>
                            <th class="hidden-480">项目属性</th>

                            <th>
                                <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                开始时间
                            </th>
                            <th>
                                <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                结束时间
                            </th>
                            <th class="hidden-480">详细内容</th>
                            <th class="hidden-480">操作</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($project_wait as $pw)
                        <tr id="pw_{{$pw->id}}">
                            <input type='hidden' value="{{$pw->content}}" id='project_{{$pw->id}}'>

                            <td>
                                {{$pw->name}}
                            </td>
                            <td>{{$pw->reward}}</td>
                            <td class="hidden-480">
                                @if($pw->attribute==1)
                                    比赛项目
                                @elseif($pw->attribute==2)
                                    外包项目
                                @elseif($pw->attribute==3)
                                    原创项目
                                @endif

                            </td>
                            <td>{{$pw->starttime}}</td>

                            <td>{{$pw->endtime}}</td>
                            <td><a href="#modal-table" role="button" class="green" onclick="getcontent({{$pw->id}})" data-toggle="modal">点击查看详情</a></td>
                            <td>
                                <div class="hidden-sm hidden-xs btn-group">
                                    <button class="btn btn-xs btn-success" onclick="accept({{$pw->id}},'pw')">
                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-danger" onclick="reject({{$pw->id}},'pw')">
                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div><!-- /.span -->
            </div><!-- /.row -->

            <div class="hr hr-18 dotted hr-double"></div>



            <div class="hr hr-18 dotted hr-double"></div>

            <div class="row">
                <div class="col-xs-12">
                    <h3 class="header smaller lighter blue">待通过的排期安排</h3>
                    <div class="table-header">
                        &nbsp;
                    </div>

                    <div>
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>

                                <th>项目名称</th>
                                <th>项目报酬</th>
                                <th class="hidden-480">项目类型</th>

                                <th>
                                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                    项目发布时间
                                </th>
                                <th>
                                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                    项目结束时间
                                </th>

                                <th class="hidden-480">详细排期查看</th>
                                <th>操作</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($project_plan as $pp)
                            <tr id="pp_{{$pp->id}}">


                                <td>
                                    {{$pp->name}}
                                </td>
                                <td>{{$pp->reward}}</td>
                                <td class="hidden-480">{{$pp->attribute}}</td>
                                <td>{{$pp->starttime}}</td>
                                <td>{{$pp->endtime}}</td>
                                <td><a href="#modal-table2" role="button" class="green" onclick="getplan({{$pp->id}})" data-toggle="modal">点击查看详情</a></td>
                                </td>

                                <td>
                                    <div class="hidden-sm hidden-xs btn-group">
                                        <button class="btn btn-xs btn-success" onclick="accept({{$pp->id}},'pp')">
                                            <i class="ace-icon fa fa-check bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-danger" onclick="reject({{$pp->id}},'pp')">
                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="modal-table2" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header no-padding">
                            <div class="table-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <span class="white">&times;</span>
                                </button>
                                Results for "Latest Registered Domains
                            </div>
                        </div>

                        <div class="modal-body no-padding">
                            <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                                <thead>
                                <tr>
                                    <th>项目负责人</th>
                                    <th>
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        项目开始时间</th>
                                    <th>
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        项目结束时间</th>

                                    <th>

                                        项目内容
                                    </th>
                                </tr>
                                </thead>

                                <tbody id="plans">


                                </tbody>
                            </table>
                        </div>

                        <div class="modal-footer no-margin-top">
                            <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
                                <i class="ace-icon fa fa-times"></i>
                                Close
                            </button>

                            <ul class="pagination pull-right no-margin">
                                <li class="prev disabled">
                                    <a href="#">
                                        <i class="ace-icon fa fa-angle-double-left"></i>
                                    </a>
                                </li>

                                <li class="active">
                                    <a href="#">1</a>
                                </li>

                                <li>
                                    <a href="#">2</a>
                                </li>

                                <li>
                                    <a href="#">3</a>
                                </li>

                                <li class="next">
                                    <a href="#">
                                        <i class="ace-icon fa fa-angle-double-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- PAGE CONTENT ENDS -->

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
            </div><!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->

@stop

@section('scripts')
    <script src="{{URL('/')}}/js/jquery.dataTables.min.js"></script>
    <script src="{{URL('/')}}/js/jquery.dataTables.bootstrap.js"></script>
@stop

@section('inline-scripts')
    <script type="text/javascript">
        jQuery(function($) {
            var oTable1 =
                    $('#sample-table-2')
                    //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                            .dataTable( {
                                bAutoWidth: false,
                                "aoColumns": [
                                    { "bSortable": false },
                                    null, null,null, null, null,
                                    { "bSortable": false }
                                ],
                                "aaSorting": [],

                                //,
                                //"sScrollY": "200px",
                                //"bPaginate": false,

                                //"sScrollX": "100%",
                                //"sScrollXInner": "120%",
                                //"bScrollCollapse": true,
                                //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                                //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                                //"iDisplayLength": 50
                            } );
            /**
             var tableTools = new $.fn.dataTable.TableTools( oTable1, {
					"sSwfPath": "../../copy_csv_xls_pdf.swf",
			        "buttons": [
			            "copy",
			            "csv",
			            "xls",
						"pdf",
			            "print"
			        ]
			    } );
             $( tableTools.fnContainer() ).insertBefore('#sample-table-2');
             */


            $(document).on('click', 'th input:checkbox' , function(){
                var that = this;
                $(this).closest('table').find('tr > td:first-child input:checkbox')
                        .each(function(){
                            this.checked = that.checked;
                            $(this).closest('tr').toggleClass('selected');
                        });
            });


            $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
            function tooltip_placement(context, source) {
                var $source = $(source);
                var $parent = $source.closest('table')
                var off1 = $parent.offset();
                var w1 = $parent.width();

                var off2 = $source.offset();
                //var w2 = $source.width();

                if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
                return 'left';
            }

        })
    </script>
    <script>
        function getcontent(id){
            $('#content').html($('#project_'+id).val())
        }
    </script>
    <script>
        function getplan(id){

            $.ajax({
                type:'post',
                url:'{{URL('examine/get')}}',
                data:{
                    project_id:id,
                    _token:'<?php echo csrf_token()?>'
                },
                success:function(data){
                   var json=eval('('+data+')')
                    for(var i=0;i<json.length;i++)
                   $('#plans').append('<tr><td>'+json[i].username+'</td><td>'+json[i].start_time+'</td><td>'+json[i].end_time+'</td><td>'+json[i].content+'</td></tr>')
                }
            })
        }
    </script>
    <script>
        function accept(id,str){
            $.ajax({
                type:'post',
                url:'{{URL('examine/accept')}}',
                data:{
                    'project_id':id,
                    _token:'<?php echo csrf_token()?>'
                },
                success:function(data){
                    if(data==1)
                        $('#'+str+"_"+id).remove()
                }
            })
        }
        function reject(id,str){
            $.ajax({
                type:'post',
                url:'{{URL('examine/reject')}}',
                data:{
                    'project_id':id,
                    _token:'<?php echo csrf_token()?>'
                },
                success:function(data){
                    if(data==1)
                        $('#'+str+"_"+id).remove()


                }
            })
        }
    </script>
    <script>
        $(document).ready(function(){
            $('#sample-table-2_length').remove();
            $('#sample-table-2_filter').remove();
        })

    </script>
@stop