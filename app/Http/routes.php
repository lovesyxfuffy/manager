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

Route::get('/', function () {
    return view('welcome');
});
Route::get('show/{view}', function ($view) {
    return view($view);
});
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
    //
});
Route::group(['prefix'=>'post'],function(){
    Route::get('all', 'PostController@get_all_post');

    Route::post('/', 'PostController@new_post');

    Route::get('/{id}', 'PostController@enter_post');

    Route::post('reply', 'ReplyController@new_reply');

});