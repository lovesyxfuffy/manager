@extends('blank')

@section('title')
项目管理
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
    <h3 class="header smaller red">Small Style</h3>

    <div class="row">
        <!-- #section:pages/pricing.small-header -->
        <div class="col-xs-4 col-sm-3 pricing-span-header">
            <div class="widget-box transparent">
                <div class="widget-header">
                    <h5 class="widget-title bigger lighter">Package Name</h5>
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

        <!-- /section:pages/pricing.small-header -->

        <!-- #section:pages/pricing.small-body -->
        <div class="col-xs-8 col-sm-9 pricing-span-body">
            <div class="pricing-span">
                <div class="widget-box pricing-box-small widget-color-red3">
                    <div class="widget-header">
                        <h5 class="widget-title bigger lighter">Basic</h5>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main no-padding">
                            <ul class="list-unstyled list-striped pricing-table">
                                <li> 10 GB </li>
                                <li> 200 GB </li>
                                <li> 100 </li>
                                <li> 10 </li>
                                <li> $10 </li>

                                <li>
                                    <i class="ace-icon fa fa-times red"></i>
                                </li>
                            </ul>

                        </div>

                        <div>
                            <a href="#" class="btn btn-block btn-sm btn-danger">
                                <span>参与</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pricing-span">
                <div class="widget-box pricing-box-small widget-color-orange">
                    <div class="widget-header">
                        <h5 class="widget-title bigger lighter">Starter</h5>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main no-padding">
                            <ul class="list-unstyled list-striped pricing-table">
                                <li> 50 GB </li>
                                <li> 1 TB </li>
                                <li> 1000 </li>
                                <li> 100 </li>
                                <li> $25 </li>

                                <li>
                                    <i class="ace-icon fa fa-check green"></i>
                                    1
                                </li>
                            </ul>

                            <div class="price">
															<span class="label label-lg label-inverse arrowed-in arrowed-in-right">
																$10
																<small>/month</small>
															</span>
                            </div>
                        </div>

                        <div>
                            <a href="#" class="btn btn-block btn-sm btn-warning">
                                <span>Buy</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pricing-span">
                <div class="widget-box pricing-box-small widget-color-blue">
                    <div class="widget-header">
                        <h5 class="widget-title bigger lighter">Business</h5>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main no-padding">
                            <ul class="list-unstyled list-striped pricing-table">
                                <li> 200 GB </li>
                                <li> Unlimited </li>
                                <li> 1000 </li>
                                <li> 200 </li>
                                <li> $25 </li>

                                <li>
                                    <i class="ace-icon fa fa-check green"></i>
                                    1
                                </li>
                            </ul>

                            <div class="price">
															<span class="label label-lg label-inverse arrowed-in arrowed-in-right">
																$15
																<small>/month</small>
															</span>
                            </div>
                        </div>

                        <div>
                            <a href="#" class="btn btn-block btn-sm btn-primary">
                                <span>Buy</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pricing-span">
                <div class="widget-box pricing-box-small widget-color-green">
                    <div class="widget-header">
                        <h5 class="widget-title bigger lighter">Unlimited</h5>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main no-padding">
                            <ul class="list-unstyled list-striped pricing-table">
                                <li> Unlimited </li>
                                <li> Unlimited </li>
                                <li> Unlimited </li>
                                <li> Unlimited </li>
                                <li> $50 </li>

                                <li>
                                    <i class="ace-icon fa fa-check green"></i>
                                    2
                                </li>
                            </ul>

                            <div class="price">
															<span class="label label-lg label-inverse arrowed-in arrowed-in-right">
																$25
																<small>/month</small>
															</span>
                            </div>
                        </div>

                        <div>
                            <a href="#" class="btn btn-block btn-sm btn-success">
                                <span>Buy</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pricing-span">
                <div class="widget-box pricing-box-small widget-color-grey">
                    <div class="widget-header">
                        <h5 class="widget-title bigger lighter">Extreme</h5>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main no-padding">
                            <ul class="list-unstyled list-striped pricing-table">
                                <li> Unlimited </li>
                                <li> Unlimited </li>
                                <li> Unlimited </li>
                                <li> Unlimited </li>
                                <li> $100 </li>

                                <li>
                                    <i class="ace-icon fa fa-check green"></i>
                                    3
                                </li>
                            </ul>

                            <div class="price">
															<span class="label label-lg label-inverse arrowed-in arrowed-in-right">
																$30
																<small>/month</small>
															</span>
                            </div>
                        </div>

                        <div>
                            <a href="#" class="btn btn-block btn-sm btn-grey">
                                <span>Buy</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /section:pages/pricing.small-body -->
    </div><!-- PAGE CONTENT ENDS -->

@stop

@section('scripts')

@stop

@section('inline-scripts')

@stop