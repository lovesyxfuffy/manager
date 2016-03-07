<?php
/**
 * Created by PhpStorm.
 * User: fuffy
 * Date: 2016/3/7
 * Time: 21:58
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\User_tmp;
use DB;
class AccountController extends Controller{
    function register_check(Request $request){
        $username=$request->input('username');
        $password=$request->input('password');
        $password_again=$request->input('password_again');
        $realname=$request->input('realname');
        $identity=$request->input('identity');
        $check=$request->input('check');
        $reg="/[0-9A-Za-z_]{1,45}/";
        $reg_cn='/^[\x{4e00}-\x{9fa5}]{1,45}$/u';
        $result=array();
        if(!preg_match($reg,$username))
            $result['username_err']=1;
        if(!preg_match($reg,$password))
            $result['password_err']=1;
        if(!preg_match($reg_cn,$realname))
            $result['realname_err']=1;
        if($check==''||$check!='on')
            $result['check_err']=1;
        if($identity==''||($identity!='student'&&$identity!='company'&&$identity!='teacher'))
            $result['identity_err']=1;
        if($password!=$password_again)
            $result['password_again_err']=1;
        if(count($result)!=0)
        return json_encode($result);
        else{
            $tmp=new User_tmp();
            $tmp->username=$username;
            $tmp->password=$password;
            $tmp->realname=$realname;
            if($identity=="学生")
                $tmp->identity=0;
            else if($identity=="教师")
                $tmp->identity=1;
            else if($identity=='企业')
                $tmp->identity=2;
            $tmp->save();
            //写cookie session
            return 0;
        }
    }
    function login(Request $request){
        $username=$request->input('username');
        $password=$request->input('password');
        $count=DB::table('user')->where('username',$username)->where('password',$password)->count('id');
        if($count!=1)
            return -1;
        else
            return 0;//写cookie和session
    }
}