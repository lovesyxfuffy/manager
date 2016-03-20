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
            if($username!=''&&$password!=''){
                $result = DB::table('user')->where('username', $username)->where('password', $password);
                if ($result->count('id')==1) {
<<<<<<< HEAD
                    $id = $result->first(['id'])->id;
                    $admin = $result->first(['admin'])->admin;
                    session(['user_id' => $id]);
                    session(['user_admin' => $admin]);
                    session(['item' => $request->input('item')]);
=======
                    $user = $result->first(['id','username']);
                    session(['user_id' => $user->id]);
                    session(['username'=>$user->username]);
>>>>>>> bfcf36b5a705a1a0a431f697f3a514babba680dd
                    return $next($request);
                } else

                    return redirect('account/login');
            }
            else{
                return redirect('account/login');
            }
        }
        else{
            return $next($request);
        }
    }
}
