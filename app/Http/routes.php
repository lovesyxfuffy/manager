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
Route::group(['prefix'=>'post'],function(){
    Route::get('all', 'PostController@get_all_post');//显示所有

    Route::post('/', 'PostController@new_post');//发布帖子

    Route::post('reply', 'ReplyController@new_reply');//

    Route::get('/{id}', 'PostController@enter_post');


});
Route::group(['prefix'=>'account','middleware' => 'web'],function(){
   Route::get('login',function(){
       return view('login');
   });
   Route::post('register/check','AccountController@register_check');
   Route::post('login','AccountController@login');
});