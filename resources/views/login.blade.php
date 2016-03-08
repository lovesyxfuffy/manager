<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />

    <title>Login Page - Ace Admin</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{URL('/')}}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{URL('/')}}/css/font-awesome.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="{{URL('/')}}/css/ace-fonts.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{URL('/')}}/css/ace.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{URL('/')}}/css/ace-part2.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="{{URL('/')}}/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{URL('/')}}/css/ace-ie.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="{{URL('/')}}/css/ace.onpage-help.css" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="{{URL('/')}}/js/html5shiv.js"></script>
    <script src="{{URL('/')}}/js/respond.min.js"></script>

    <![endif]-->
    <style type="text/css">
    .error{
        border-color:red !important;
    }
    </style>

</head>

<body class="login-layout">

<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="center">
                        <h1>
                            <i class="ace-icon fa fa-leaf green"></i>
                            <span class="red">山东大学</span>
                            <span class="white" id="id-text2">创新平台</span>
                        </h1>
                        <h4 class="blue" id="id-company-text">学生创新项目管理平台</h4>
                    </div>

                    <div class="space-6"></div>

                    <div class="position-relative">
                        <div id="login-box" class="login-box visible widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header blue lighter bigger">
                                        <i class="ace-icon fa fa-coffee green"></i>
                                        请输入您的账号密码
                                    </h4>

                                    <div class="space-6"></div>

                                    <form id="login_form">
                                        {{csrf_field()}}
                                        <fieldset>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="username" placeholder="用户名" />
															<i class="ace-icon fa fa-user"></i>
														</span>
                                            </label>

                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" name="password" placeholder="密码" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
                                            </label>

                                            <div class="space"></div>

                                            <div class="clearfix">
                                                <label class="inline">
                                                    <input type="checkbox" name="keep-login" class="ace" />
                                                    <span class="lbl"> 保存登陆状态</span>
                                                </label>

                                                <button type="button" onclick="loginFun()" class="width-35 pull-right btn btn-sm btn-primary">
                                                    <i class="ace-icon fa fa-key"></i>
                                                    <span class="bigger-110">登陆</span>
                                                </button>
                                            </div>

                                            <div class="space-4"></div>
                                        </fieldset>
                                    </form>


                                </div><!-- /.widget-main -->

                                <div class="toolbar clearfix">
                                    <div>
                                        <a href="#" data-target="#forgot-box" class="forgot-password-link">
                                            <i class="ace-icon fa fa-arrow-left"></i>
                                            忘记密码
                                        </a>
                                    </div>

                                    <div>
                                        <a href="#" data-target="#signup-box" class="user-signup-link">
                                            没有账号，先去注册
                                            <i class="ace-icon fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- /.widget-body -->
                        </div><!-- /.login-box -->

                        <div id="forgot-box" class="forgot-box widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header red lighter bigger">
                                        <i class="ace-icon fa fa-key"></i>
                                        找回密码
                                    </h4>

                                    <div class="space-6"></div>
                                    <p>
                                        输入您账号绑定的邮箱，我们将会把密码发送给您
                                    </p>

                                    <form>
                                        {{csrf_field()}}
                                        <fieldset>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
                                            </label>

                                            <div class="clearfix">
                                                <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                                                    <i class="ace-icon fa fa-lightbulb-o"></i>
                                                    <span class="bigger-110">发送!</span>
                                                </button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div><!-- /.widget-main -->

                                <div class="toolbar center">
                                    <a href="#" data-target="#login-box" class="back-to-login-link">
                                        返回登陆
                                        <i class="ace-icon fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div><!-- /.widget-body -->
                        </div><!-- /.forgot-box -->

                        <div id="signup-box" class="signup-box widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header green lighter bigger">
                                        <i class="ace-icon fa fa-users blue"></i>
                                        新用户注册
                                    </h4>

                                    <div class="space-6"></div>
                                    <p> 输入您的信息: </p>

                                    <form id="register_form" >
                                        {{csrf_field()}}
                                        <fieldset>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" id="reg_usrnm" class="form-control" name="username" placeholder="用户名" />
															<i class="ace-icon fa fa-user"></i>
														</span>
                                            </label>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" id="reg_eml" class="form-control" name="email" placeholder="常用邮箱" />
															<i class="ace-icon fa fa-user"></i>
														</span>
                                            </label>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" id="reg_psw" class="form-control" name="password" placeholder="密码" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
                                            </label>

                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" id="reg_psw_agn" class="form-control" name="password_again" placeholder="再次输入密码" />
															<i class="ace-icon fa fa-retweet"></i>
														</span>
                                            </label>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" id="reg_rlnm" class="form-control" name="realname" placeholder="真实姓名" />
															<i class="ace-icon fa fa-exclamation-circle"></i>
														</span>
                                            </label>
                                            <label class="block clearfix">
                                                <div class="control-group">
                                                    <label class="control-label bolder blue">用户身份</label>

                                                    <div class="radio" style="display:inline-block">
                                                        <label>
                                                            <input name="identity" value="student" type="radio" class="ace">
                                                            <span class="lbl">学生</span>
                                                        </label>
                                                    </div>

                                                    <div class="radio" style="display:inline-block">
                                                        <label>
                                                            <input name="identity" value="teacher" type="radio" class="ace">
                                                            <span class="lbl">教师</span>
                                                        </label>
                                                    </div>

                                                    <div class="radio" style="display:inline-block">
                                                        <label>
                                                            <input name="identity" value="company" type="radio" class="ace">
                                                            <span class="lbl">企业</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </label>
                                            <label class="block">
                                                <input type="checkbox" name="check"  class="ace" />
														<span class="lbl">
															我同意
															<a href="#">用户条例</a>
														</span>
                                            </label>

                                            <div class="space-24"></div>

                                            <div class="clearfix">
                                                <button type="reset" class="width-30 pull-left btn btn-sm">
                                                    <i class="ace-icon fa fa-refresh"></i>
                                                    <span class="bigger-110">重置</span>
                                                </button>

                                                <button onclick="checkFun()" type="button" class="width-65 pull-right btn btn-sm btn-success">
                                                    <span class="bigger-110" >注册</span>

                                                    <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                </button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>

                                <div class="toolbar center">
                                    <a href="#" data-target="#login-box" class="back-to-login-link">
                                        <i class="ace-icon fa fa-arrow-left"></i>
                                        返回登陆
                                    </a>
                                </div>
                            </div><!-- /.widget-body -->
                        </div><!-- /.signup-box -->
                    </div><!-- /.position-relative -->

                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.main-content -->
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='{{URL('/')}}/js/jquery.min.js'>"+"<"+"/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='{{URL('/')}}/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='{{URL('/')}}/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function($) {
        $(document).on('click', '.toolbar a[data-target]', function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            $('.widget-box.visible').removeClass('visible');//hide others
            $(target).addClass('visible');//show target
        });
    });

    $('body').attr('class', 'login-layout blur-login');
    $('#id-text2').attr('class', 'white');
    $('#id-company-text').attr('class', 'light-blue');

</script>
<script>
    $('form').click(function(){
        $(this).find('.error').removeClass("error")
    })
    function checkFun(){
        $.ajax({
            type:"post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('c ontent')},
            url:"{{URL('account/register/check')}}",
            data:$('#register_form').serialize(),
            success:function(data,status){
                //console.log(status)
                if(status=='success'){
                    var json=eval('('+data+')')
                    console.log(json)
                    if(json.username_err==1){
                        $("#reg_usrnm").addClass('error')
                    }
                    if(json.password_err==1){
                        $("#reg_psw").addClass('error')
                    }
                    if(json.realname_err==1){
                        $("#reg_rlnm").addClass('error')
                    }
                    if(json.password_again_err==1){
                        $("#reg_psw_agn").addClass('error')
                    }
                    if(json.identity_err==1){
                        alert("请选择身份")
                    }
                    if(json.check_err==1){
                        alert("请同意用户条例")
                    }
                }
            }
        })
    }

</script>
<script>
    function loginFun(){
        $.ajax({
            type:"post",
            data:$('#login_form').serialize(),

            url:"{{URL('account/login')}}",
            success:function(data,status){
                if(data==0)
                        alert("登陆成功")
                else if(data==-1)
                        alert("登录失败")
            }

        })
    }
</script>
</body>
</html>
