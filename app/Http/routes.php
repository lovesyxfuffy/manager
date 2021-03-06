<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/',[ 'middleware'=>'check-login',function () {
        return view('welcome');
    }]);
    Route::get('/welcome',[ 'middleware'=>'check-login',function () {
        return view('welcome');
    }]);
    Route::get('show/{view}', function ($view) {
        return view($view);
    });
    //
});
Route::group(['prefix'=>'post', 'middleware' => ['web', 'check-login']],function(){
    Route::get('all', 'PostController@get_all_post');//显示所有

    Route::post('/', ['uses' => 'PostController@new_post']);//发布帖子

    Route::post('reply',['uses' =>  'ReplyController@new_reply']);//

    Route::get('/{id}', 'PostController@enter_post');

});

Route::group(['prefix'=>'publish', 'middleware' => ['web-no-csrf', 'check-login']],function(){

    Route::get('/{id}', 'ProjectController@enter_project');//发布界面
    Route::get('/', function(){
        return view('publish');
    });
    Route::post('accept', ['uses' => 'ProjectController@accept']);  //同意成员申请
    Route::post('reject', ['uses' => 'ProjectController@reject']);  //拒绝成员申请
    Route::post('submit_plan', ['uses' => 'ProjectController@submit_plan']);  //提交排期

    Route::post('/', ['uses' => 'ProjectController@new_Project']);//发布项目
    Route::post('plan', ['uses' => 'ProjectController@new_plan']);//添加排期
});



Route::group(['prefix'=>'account','middleware' => 'web'],function(){
   Route::get('login',function(){
       return view('login');
   });
   Route::post('register/check','AccountController@register_check');
   Route::post('login','AccountController@login');
   Route::get('mail_to','AccountController@mail_to');
});
Route::group(['prefix'=>'examine','middleware'=>'web'],function(){
    Route::get('/','ExamineController@view');//审核项目
    Route::post('get','ExamineController@get');
    Route::post('reject','ExamineController@reject');
    Route::post('accept','ExamineController@accept');
});
Route::group(['prefix'=>'project','middleware'=>['web', 'check-login']],function(){
    Route::get('/{sign}','ManagerController@view');//项目管理
    Route::post('join','ManagerController@join');
    Route::get('content/{id}','ManagerController@content_view');//单个项目详情
    Route::post('plan/{sign}','ManagerController@plan');
});
Route::group(['prefix'=>'dashboard','middleware'=>['web', 'check-login']],function(){
    Route::get('time-line','DashBoardController@time_line');
});