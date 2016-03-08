<?php
/**
 * Created by PhpStorm.
 * User: fuffy
 * Date: 2016/3/8
 * Time: 15:00
 */
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use DB;
class CheckLogin{

    public function handle(Request $request,Closure $next){
        $user_id=session('user_id');
        if($user_id=='') {
            $username = $request->cookie('username');
            $password = $request->cookie('password');
            $result = DB::table('user')->where('username', $username)->where('password', $password)->first(['id']);
            $id = $result->id;
            if ($id != '') {
                session(['user_id' => $id]);
                return $next($request);
            } else
                redirect('account/login');
        }
        else{
            return $next($request);
        }
    }
}
