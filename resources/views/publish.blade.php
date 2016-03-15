@extends('blank')

@section('head')
    <link rel="stylesheet" href="{{URL('/')}}/css/select2.css" />
    <link rel="stylesheet" href="{{URL('/')}}/css/jquery-ui.custom.min.css" />
    <link rel="stylesheet" href="{{URL('/')}}/css/chosen.css" />
    <link rel="stylesheet" href="{{URL('/')}}/css/datepicker.css" />
    <link rel="stylesheet" href="{{URL('/')}}/css/bootstrap-timepicker.css" />
    <link rel="stylesheet" href="{{URL('/')}}/css/daterangepicker.css" />
    <link rel="stylesheet" href="{{URL('/')}}/css/bootstrap-datetimepicker.css" />
    <link rel="stylesheet" href="{{URL('/')}}/css/colorpicker.css" />
    <link rel="stylesheet" href="{{URL('/')}}/css/jquery-ui.min.css" />
    <link rel="stylesheet" href="{{URL('/')}}/css/datepicker.css" />
    <link rel="stylesheet" href="{{URL('/')}}/css/ui.jqgrid.css" />
    <script src="{{URL('/')}}/js/ace-extra.min.js"></script>
@stop

@section('title')
    发布项目
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
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <h4 class="lighter">
                <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
                <a href="#modal-wizard" data-toggle="modal" class="pink"> 项目发布进度</a>
            </h4>

            <div class="hr hr-18 hr-double dotted"></div>

            <div class="widget-box">
                <div class="widget-header widget-header-blue widget-header-flat">
                    <h4 class="widget-title lighter">项目进度详情</h4>

                    <div class="widget-toolbar">
                        <label>
                            <small class="green">
                                <b>Validation</b>
                            </small>

                            <input id="skip-validation" type="checkbox" class="ace ace-switch ace-switch-4">
                            <span class="lbl middle"></span>
                        </label>
                    </div>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <!-- #section:plugins/fuelux.wizard -->
                        <div id="fuelux-wizard" data-target="#step-container">
                            <!-- #section:plugins/fuelux.wizard.steps -->
                            <ul class="wizard-steps">
                                <li data-target="#step1" class="active">
                                    <span class="step">1</span>
                                    <span class="title">发布项目</span>
                                </li>

                                <li data-target="#step2" class="{{(isset($status) && ($status >= 0 || $status <= -1))? "active" : ""}}">
                                    <span class="step">2</span>
                                    <span class="title">项目审核结果</span>
                                </li>

                                <li data-target="#step3" class="{{((isset($status) && ($status >= 1)) || $status <= -2)? "active" : ""}}">
                                    <span class="step">3</span>
                                    <span class="title">发布项目排期表</span>
                                </li>

                                <li data-target="#step4" class="{{(isset($status) && ($status >= 2 || $status <= -2))? "active" : ""}}">
                                    <span class="step">4</span>
                                    <span class="title">等待排期表通过</span>
                                </li>
                            </ul>

                            <!-- /section:plugins/fuelux.wizard.steps -->
                        </div>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <hr>

                        <!-- #section:plugins/fuelux.wizard.container -->
                        <div class="step-content pos-rel" id="step-container">

                            <div class="step-pane {{(!isset($status)) ? "active" : ""}}" id="step1">
                                <h3 class="lighter block green">填写项目信息</h3>

                                <form class="form-horizontal" id="sample-form" action="{{url('project')}}" method="POST">
                                    <!-- #section:elements.form.input-state -->
                                    {{ csrf_field() }}


                                    <!-- /section:elements.form.input-state -->
                                    <div class="form-group">
                                        <label for="inputError" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">项目类型</label>

                                        <div class="col-xs-10 col-sm-5">
                                            <select class="chosen-select"  id="form-field-select-3" data-placeholder="Choose a State..." name="pjt_type">
                                                <option value="1">竞赛项目</option>
                                                <option value="2">外包项目</option>
                                                <option value="3">原创项目</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputError2" class="col-xs-12 col-sm-3 control-label no-padding-right">项目名称</label>

                                        <div class="col-xs-12 col-sm-5">
																<span class="input-icon block">
																	<input type="text" id="inputError2" class="width-100" name="pjt_name">

																</span>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="inputError2" class="col-xs-12 col-sm-3 control-label no-padding-right">项目简介</label>

                                        <div class="col-xs-12 col-sm-5">
																<span class="input-icon block">
																	<textarea rows="6" type="text" id="inputError2" class="width-100" name="pjt_info"></textarea>
																</span>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right"  for="form-field-4" disabled="disabled">项目金额</label>

                                        <div class="col-sm-9">
                                            <input class="input-sm" type="text" id="form-field-4" placeholder="" name="pjt_reward" />
                                            <div class="space-2"></div>

                                            <div class="help-block" id="input-size-slider"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-5"  disabled="disabled" >人员总数</label>

                                        <div class="col-sm-9">
                                            <input class="input-sm" type="text" id="form-field-5" placeholder="" name="pjt_memberNum"/>
                                            <div class="space-2"></div>
                                            <div class="help-block" id="input-size-slider-2" ></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-4">项目起止时间</label>
                                        <div class="col-sm-9">
                                           <div class="col-sm-3" style="padding-left: 0px;">

                                               <div class="input-group">
                                                   <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd" name="pjt_startTime" />
																	<span class="input-group-addon">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
                                               </div>
                                           </div>
                                            <div class="col-sm-1"><span style="font-size: large;">至</span></div>
                                            <div class="col-sm-3">
                                                <div class="input-group">
                                                    <input class="form-control date-picker" id="id-date-picker-2" type="text" data-date-format="yyyy-mm-dd" name="pjt_endTime" />
																	<span class="input-group-addon">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-success btn-next" style="margin-left: 80%">
                                </form>


                            </div>

                            <div class="step-pane {{(isset($status) && ($status == 0 || @$status == -1))? "active" : ""}}" id="step2">
                                <div>
                                    <div class="alert alert-success" style="display:none">
                                        <button type="button" class="close" data-dismiss="alert">
                                            <i class="ace-icon fa fa-times"></i>
                                        </button>

                                        <strong>
                                            <i class="ace-icon fa fa-check"></i>
                                            Well done!
                                        </strong>

                                        You successfully read this important alert message.
                                        <br>
                                    </div>

                                    <div class="alert alert-danger" style="{{isset($status) && $status <= -1 ? "" : "display:none"}}">
                                        <button type="button" class="close" data-dismiss="alert">
                                            <i class="ace-icon fa fa-times"></i>
                                        </button>

                                        <strong>
                                            <i class="ace-icon fa fa-times"></i>
                                            提示!
                                        </strong>

                                        您的项目未通过审核！
                                        <br>
                                    </div>

                                    <div class="alert alert-warning" style="{{isset($status) && $status == 0 ? "" : "display:none"}}">
                                        <button type="button" class="close" data-dismiss="alert" style="">
                                            <i class="ace-icon fa fa-times"></i>
                                        </button>
                                        <strong>提示!</strong>

                                        您的项目正在审核阶段，请耐心等待！
                                        <br>
                                    </div>

                                    <div class="alert alert-info" style="display:none">
                                        <button type="button" class="close" data-dismiss="alert">
                                            <i class="ace-icon fa fa-times"></i>
                                        </button>
                                        <strong>Heads up!</strong>

                                        This alert needs your attention, but it's not super important.
                                        <br>
                                    </div>
                                </div>
                            </div>

                            <div class="step-pane {{isset($status) && ($status == 1) ? "active" : "" }}" id="step3">
                                <div class="center">

                                            <!-- PAGE CONTENT BEGINS -->


                                            <table id="grid-table"></table>

                                            <div id="grid-pager"></div>

                                            <script type="text/javascript">
                                                var $path_base = "..";//in Ace demo this will be used for editurl parameter
                                            </script>

                                            <!-- PAGE CONTENT ENDS -->


                                </div>
                                你好
                            </div>

                            <div class="step-pane {{isset($status) && (($status == 2) || $status == -2)? "active" : ""}}" id="step4">
                                <div class="center" style="{{isset($status) && $status >= 2 ? "" : "display:none"}}">
                                    <h3 class="green">恭喜！!</h3>
                                    您的排期已经通过审核！
                                </div>
                                <div class="alert alert-danger" style="{{isset($status) && $status <= -2 ? "" : "display:none"}}">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>

                                    <strong>
                                        <i class="ace-icon fa fa-times"></i>
                                        提示!
                                    </strong>

                                    您的排期未通过审核！
                                    <br>
                                </div>
                            </div>
                        </div>

                        <!-- /section:plugins/fuelux.wizard.container -->
                        <hr>
                        <div class="wizard-actions" style="display:none">
                            <!-- #section:plugins/fuelux.wizard.buttons -->
                            <button class="btn btn-prev" disabled="disabled">
                                <i class="ace-icon fa fa-arrow-left"></i>
                                Prev
                            </button>

                            <button class="btn btn-success btn-next" data-last="Finish">
                                Next

                                <i class="ace-icon fa fa-arrow-right icon-on-right"></i></button>

                            <!-- /section:plugins/fuelux.wizard.buttons -->
                        </div>

                        <!-- /section:plugins/fuelux.wizard -->
                    </div><!-- /.widget-main -->
                </div><!-- /.widget-body -->
            </div>

            <div id="modal-wizard" class="modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" data-target="#modal-step-contents">
                            <ul class="wizard-steps">
                                <li data-target="#modal-step1" class="active">
                                    <span class="step">1</span>
                                    <span class="title">Validation states</span>
                                </li>

                                <li data-target="#modal-step2">
                                    <span class="step">2</span>
                                    <span class="title">Alerts</span>
                                </li>

                                <li data-target="#modal-step3">
                                    <span class="step">3</span>
                                    <span class="title">Payment Info</span>
                                </li>

                                <li data-target="#modal-step4">
                                    <span class="step">4</span>
                                    <span class="title">Other Info</span>
                                </li>
                            </ul>
                        </div>

                        <div class="modal-body step-content" id="modal-step-contents">
                            <div class="step-pane active" id="modal-step1">
                                <div class="center">
                                    <h4 class="blue">Step 1</h4>
                                </div>
                            </div>

                            <div class="step-pane" id="modal-step2">
                                <div class="center">
                                    <h4 class="blue">Step 2</h4>
                                </div>
                            </div>

                            <div class="step-pane" id="modal-step3">
                                <div class="center">
                                    <h4 class="blue">Step 3</h4>
                                </div>
                            </div>

                            <div class="step-pane" id="modal-step4">
                                <div class="center">
                                    <h4 class="blue">Step 4</h4>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer wizard-actions">
                            <button class="btn btn-sm btn-prev" disabled="disabled">
                                <i class="ace-icon fa fa-arrow-left"></i>
                                Prev
                            </button>

                            <button class="btn btn-success btn-sm btn-next" data-last="Finish">
                                Next
                                <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                            </button>

                            <button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
                                <i class="ace-icon fa fa-times"></i>
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div><!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div>

@stop
@section('scripts')
    <script src="{{URL('/')}}/js/fuelux/fuelux.wizard.min.js"></script>
    <script src="{{URL('/')}}/js/jquery.validate.min.js"></script>
    <script src="{{URL('/')}}/js/additional-methods.min.js"></script>
    <script src="{{URL('/')}}/js/bootbox.min.js"></script>
    <script src="{{URL('/')}}/js/jquery.maskedinput.min.js"></script>
    <script src="{{URL('/')}}/js/select2.min.js"></script>
    <script src="{{URL('/')}}/js/jquery-ui.custom.min.js"></script>
    <script src="{{URL('/')}}/js/jquery.ui.touch-punch.min.js"></script>
    <script src="{{URL('/')}}/js/chosen.jquery.min.js"></script>
    <script src="{{URL('/')}}/js/fuelux/fuelux.spinner.min.js"></script>
    <script src="{{URL('/')}}/js/date-time/bootstrap-datepicker.min.js"></script>
    <script src="{{URL('/')}}/js/date-time/bootstrap-timepicker.min.js"></script>
    <script src="{{URL('/')}}/js/date-time/moment.min.js"></script>
    <script src="{{URL('/')}}/js/date-time/daterangepicker.min.js"></script>
    <script src="{{URL('/')}}/js/date-time/bootstrap-datetimepicker.min.js"></script>
    <script src="{{URL('/')}}/js/bootstrap-colorpicker.min.js"></script>
    <script src="{{URL('/')}}/js/jquery.knob.min.js"></script>
    <script src="{{URL('/')}}/js/jquery.autosize.min.js"></script>
    <script src="{{URL('/')}}/js/jquery.inputlimiter.1.3.1.min.js"></script>
    <script src="{{URL('/')}}/js/jquery.maskedinput.min.js"></script>
    <script src="{{URL('/')}}/js/bootstrap-tag.min.js"></script>
    <script src="{{URL('/')}}/js/typeahead.jquery.min.js"></script>
    <script src="{{URL('/')}}/js/date-time/bootstrap-datepicker.min.js"></script>
    <script src="{{URL('/')}}/js/jqGrid/jquery.jqGrid.min.js"></script>
    <script src="{{URL('/')}}/js/jqGrid/i18n/grid.locale-en.js"></script>
    <!-- inline scripts related to this page -->
@stop
@section('inline-scripts')
    <script>
        $('.chosen-select').chosen({allow_single_deselect:true});
        //resize the chosen on window resize

        $(window)
                .off('resize.chosen')
                .on('resize.chosen', function() {
                    $('.chosen-select').each(function() {
                        var $this = $(this);
                        $this.next().css({'width': $this.parent().width()});
                    })
                }).trigger('resize.chosen');

    </script>
    <script>
        $( "#input-size-slider" ).css('width','620px').slider({
            value:1,
            range: "min",
            min: 1,
            max: 15,
            step: 0.5,
            slide: function( event, ui ) {
                var val = parseInt(ui.value*1000);
                $('#form-field-4').val(val);
            }
        });
    </script>
    <script>
        $( "#input-size-slider-2" ).css('width','220px').slider({
            value:1,
            range: "min",
            min: 1,
            max: 15,
            step: 1,
            slide: function( event, ui ) {
                var val = parseInt(ui.value);
                $('#form-field-5').val(val);
            }
        });
    </script>
    <script>
        $('.date-picker').datepicker({
                    autoclose: true,
                    todayHighlight: true
                })
                //show datepicker when clicking on the icon
                .next().on(ace.click_event, function(){
            $(this).prev().focus();
        });
    </script>
    <script type="text/javascript">
        var count = 1;
        @if(session('error'))
                alert('{{session('error')}}');
        @endif
        var grid_data =
                [
                        @if(isset($status) && $status == 1)
                            @foreach($plans as $plan)
                            {id:'{{$plan->id}}',name:"{{$plan->name}}",content:"{{$plan->content}}",plan_user:"{{$plan->username}}",start_time:"{{$plan->start_time}}", end_time:"{{$plan->end_time}}"},
                            @endforeach
                        @endif
                ];



        jQuery(function($) {
            var grid_selector = "#grid-table";
            var pager_selector = "#grid-pager";

            //resize to fit page size
            $(window).on('resize.jqGrid', function () {
                $(grid_selector).jqGrid( 'setGridWidth', $(".page-content").width()*0.9);
            })
            //resize on sidebar collapse/expand
            var parent_column = $(grid_selector).closest('[class*="col-"]');
            $(document).on('settings.ace.jqGrid' , function(ev, event_name, collapsed) {
                if( event_name === 'sidebar_collapsed' || event_name === 'main_container_fixed' ) {
                    //setTimeout is for webkit only to give time for DOM changes and then redraw!!!
                    setTimeout(function() {
                        $(grid_selector).jqGrid( 'setGridWidth', parent_column.width() );
                    }, 0);
                }
            })



            jQuery(grid_selector).jqGrid({
                //direction: "rtl",

                //subgrid options
                subGrid : true,
                //subGridModel: [{ name : ['No','Item Name','Qty'], width : [55,200,80] }],
                //datatype: "xml",
                subGridOptions : {

                    minusicon  : "ace-icon fa fa-minus center bigger-110 blue",
                    openicon : "ace-icon fa fa-chevron-right center orange"
                },
                //for this example we are using local data
                subGridRowExpanded: function (subgridDivId, rowId) {
                    var subgridTableId = subgridDivId + "_t";
                    $("#" + subgridDivId).html("<table id='" + subgridTableId + "'></table>");
                    $("#" + subgridTableId).jqGrid({
                        datatype: 'local',
                        data: subgrid_data,
                        colNames: ['No','Item Name','Qty'],
                        colModel: [
                            { name: 'id', width: 50 },
                            { name: 'name', width: 150 },
                            { name: 'qty', width: 50 }
                        ]
                    });
                },



                data: grid_data,
                datatype: "local",
                height: 250,
                colNames:[' ', '任务名称','任务负责人','任务开始时间', '任务结束时间', '内容'],
                colModel:[
                    {name:'myac',index:'', width:80, fixed:true, sortable:false, resize:false,
                        formatter:'actions',
                        formatoptions:{
                            keys:true,
                            //delbutton: false,//disable delete button

                            delOptions:{recreateForm: true, beforeShowForm:beforeDeleteCallback},
                            //editformbutton:true, editOptions:{recreateForm: true, beforeShowForm:beforeEditCallback}
                        }
                    },
                    {name:'name',index:'name', width:60, sorttype:"int", editable: true},
                    {name:'plan_user',index:'plan_user', width:90, editable: true,edittype:"select", editoptions:{value:"{{@$value}}"}},//value:"FE:FedEx;IN:InTime;TN:TNT;AR:ARAMEX"}},
                    {name:'start_time',index:'start_time',width:90, editable:true, sorttype:"date",unformat: pickDate},
                    {name:'end_time',index:'end_time',width:90, editable:true, sorttype:"date",unformat: pickDate},
                    {name:'content',index:'content', width:150,editable: true,edittype:"textarea",editoptions:{size:"40",maxlength:"60"}},

                ],

                viewrecords : true,
                rowNum:10,
                rowList:[10,20,30],
                pager : pager_selector,
                altRows: true,
                //toppager: true,

                multiselect: true,
                //multikey: "ctrlKey",
                multiboxonly: true,

                loadComplete : function() {
                    var table = this;
                    setTimeout(function(){
                        styleCheckbox(table);

                        updateActionIcons(table);
                        updatePagerIcons(table);
                        enableTooltips(table);
                    }, 0);
                },

                editurl: "{{url('/project/plan')}}",//nothing is saved
                caption: "jqGrid with inline editing"

                //,autowidth: true,


                /**
                 ,
                 grouping:true,
                 groupingView : {
						 groupField : ['name'],
						 groupDataSorted : true,
						 plusicon : 'fa fa-chevron-down bigger-110',
						 minusicon : 'fa fa-chevron-up bigger-110'
					},
                 caption: "Grouping"
                 */

            });
            $(window).triggerHandler('resize.jqGrid');//trigger window resize to make the grid get the correct size



            //enable search/filter toolbar
            //jQuery(grid_selector).jqGrid('filterToolbar',{defaultSearch:true,stringResult:true})
            //jQuery(grid_selector).filterToolbar({});


            //switch element when editing inline
            function aceSwitch( cellvalue, options, cell ) {
                setTimeout(function(){
                    $(cell) .find('input[type=checkbox]')
                            .addClass('ace ace-switch ace-switch-5')
                            .after('<span class="lbl"></span>');
                }, 0);
            }
            //enable datepicker
            function pickDate( cellvalue, options, cell ) {
                setTimeout(function(){
                    $(cell) .find('input[type=text]')
                            .datepicker({format:'yyyy-mm-dd' , autoclose:true});
                }, 0);
            }


            //navButtons
            jQuery(grid_selector).jqGrid('navGrid',pager_selector,
                    { 	//navbar options
                        edit: true,
                        editicon : 'ace-icon fa fa-pencil blue',
                        add: true,
                        addicon : 'ace-icon fa fa-plus-circle purple',
                        del: true,
                        delicon : 'ace-icon fa fa-trash-o red',
                        search: true,
                        searchicon : 'ace-icon fa fa-search orange',
                        refresh: true,
                        refreshicon : 'ace-icon fa fa-refresh green',
                        view: true,
                        viewicon : 'ace-icon fa fa-search-plus grey',
                    },
                    {
                        //edit record form
                        //closeAfterEdit: true,
                        //width: 700,
                        recreateForm: true,
                        beforeShowForm : function(e) {
                            var form = $(e[0]);
                            form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
                            style_edit_form(form);
                        }
                    },
                    {
                        //new record form
                        //width: 700,
                        closeAfterAdd: true,
                        recreateForm: true,
                        viewPagerButtons: false,
                        beforeShowForm : function(e) {
                            var form = $(e[0]);
                            form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar')
                                    .wrapInner('<div class="widget-header" />')
                            style_edit_form(form);
                        }
                    },
                    {
                        //delete record form
                        recreateForm: true,
                        beforeShowForm : function(e) {
                            var form = $(e[0]);
                            if(form.data('styled')) return false;

                            form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
                            style_delete_form(form);

                            form.data('styled', true);
                        },
                        onClick : function(e) {
                            alert(1);
                        }
                    },
                    {
                        //search form
                        recreateForm: true,
                        afterShowSearch: function(e){
                            var form = $(e[0]);
                            form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />')
                            style_search_form(form);
                        },
                        afterRedraw: function(){
                            style_search_filters($(this));
                        }
                        ,
                        multipleSearch: true,
                        /**
                         multipleGroup:true,
                         showQuery: true
                         */
                    },
                    {
                        //view record form
                        recreateForm: true,
                        beforeShowForm: function(e){
                            var form = $(e[0]);
                            form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />')
                        }
                    }
            )



            function style_edit_form(form) {
                //enable datepicker on "sdate" field and switches for "stock" field
                form.find('input[name=sdate]').datepicker({format:'yyyy-mm-dd' , autoclose:true})
                        .end().find('input[name=stock]')
                        .addClass('ace ace-switch ace-switch-5').after('<span class="lbl"></span>');
                //don't wrap inside a label element, the checkbox value won't be submitted (POST'ed)
                //.addClass('ace ace-switch ace-switch-5').wrap('<label class="inline" />').after('<span class="lbl"></span>');

                //update buttons classes
                var buttons = form.next().find('.EditButton .fm-button');
                buttons.addClass('btn btn-sm').find('[class*="-icon"]').hide();//ui-icon, s-icon
                buttons.eq(0).addClass('btn-primary').prepend('<i class="ace-icon fa fa-check"></i>');
                buttons.eq(1).prepend('<i class="ace-icon fa fa-times"></i>')

                buttons = form.next().find('.navButton a');
                buttons.find('.ui-icon').hide();
                buttons.eq(0).append('<i class="ace-icon fa fa-chevron-left"></i>');
                buttons.eq(1).append('<i class="ace-icon fa fa-chevron-right"></i>');
            }

            function style_delete_form(form) {
                var buttons = form.next().find('.EditButton .fm-button');
                buttons.addClass('btn btn-sm btn-white btn-round').find('[class*="-icon"]').hide();//ui-icon, s-icon
                buttons.eq(0).addClass('btn-danger').prepend('<i class="ace-icon fa fa-trash-o"></i>');
                buttons.eq(1).addClass('btn-default').prepend('<i class="ace-icon fa fa-times"></i>')
            }

            function style_search_filters(form) {
                form.find('.delete-rule').val('X');
                form.find('.add-rule').addClass('btn btn-xs btn-primary');
                form.find('.add-group').addClass('btn btn-xs btn-success');
                form.find('.delete-group').addClass('btn btn-xs btn-danger');
            }
            function style_search_form(form) {
                var dialog = form.closest('.ui-jqdialog');
                var buttons = dialog.find('.EditTable')
                buttons.find('.EditButton a[id*="_reset"]').addClass('btn btn-sm btn-info').find('.ui-icon').attr('class', 'ace-icon fa fa-retweet');
                buttons.find('.EditButton a[id*="_query"]').addClass('btn btn-sm btn-inverse').find('.ui-icon').attr('class', 'ace-icon fa fa-comment-o');
                buttons.find('.EditButton a[id*="_search"]').addClass('btn btn-sm btn-purple').find('.ui-icon').attr('class', 'ace-icon fa fa-search');
            }

            function beforeDeleteCallback(e) {
                var form = $(e[0]);
                if(form.data('styled')) return false;

                form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
                style_delete_form(form);

                form.data('styled', true);
            }

            function beforeEditCallback(e) {
                var form = $(e[0]);
                form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
                style_edit_form(form);
            }



            //it causes some flicker when reloading or navigating grid
            //it may be possible to have some custom formatter to do this as the grid is being created to prevent this
            //or go back to default browser checkbox styles for the grid
            function styleCheckbox(table) {
                /**
                 $(table).find('input:checkbox').addClass('ace')
                 .wrap('<label />')
                 .after('<span class="lbl align-top" />')


                 $('.ui-jqgrid-labels th[id*="_cb"]:first-child')
                 .find('input.cbox[type=checkbox]').addClass('ace')
                 .wrap('<label />').after('<span class="lbl align-top" />');
                 */
            }


            //unlike navButtons icons, action icons in rows seem to be hard-coded
            //you can change them like this in here if you want
            function updateActionIcons(table) {
                /**
                 var replacement =
                 {
                     'ui-ace-icon fa fa-pencil' : 'ace-icon fa fa-pencil blue',
                     'ui-ace-icon fa fa-trash-o' : 'ace-icon fa fa-trash-o red',
                     'ui-icon-disk' : 'ace-icon fa fa-check green',
                     'ui-icon-cancel' : 'ace-icon fa fa-times red'
                 };
                 $(table).find('.ui-pg-div span.ui-icon').each(function(){
						var icon = $(this);
						var $class = $.trim(icon.attr('class').replace('ui-icon', ''));
						if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
					})
                 */
            }

            //replace icons with FontAwesome icons like above
            function updatePagerIcons(table) {
                var replacement =
                {
                    'ui-icon-seek-first' : 'ace-icon fa fa-angle-double-left bigger-140',
                    'ui-icon-seek-prev' : 'ace-icon fa fa-angle-left bigger-140',
                    'ui-icon-seek-next' : 'ace-icon fa fa-angle-right bigger-140',
                    'ui-icon-seek-end' : 'ace-icon fa fa-angle-double-right bigger-140'
                };
                $('.ui-pg-table:not(.navtable) > tbody > tr > .ui-pg-button > .ui-icon').each(function(){
                    var icon = $(this);
                    var $class = $.trim(icon.attr('class').replace('ui-icon', ''));

                    if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
                })
            }

            function enableTooltips(table) {
                $('.navtable .ui-pg-button').tooltip({container:'body'});
                $(table).find('.ui-pg-div').tooltip({container:'body'});
            }

            //var selr = jQuery(grid_selector).jqGrid('getGridParam','selrow');

            $(document).on('ajaxloadstart', function(e) {
                $(grid_selector).jqGrid('GridUnload');
                $('.ui-jqdialog').remove();
            });
        });
    </script>
@stop