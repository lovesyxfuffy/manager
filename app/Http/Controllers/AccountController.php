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
        $email=$request->input('email');
        $reg="/[0-9A-Za-z_]{1,45}/";
        $reg_email='/^(\w)+(\.\w+)*@(\w)+((\.\w{2,3}){1,3})$/';
        $reg_cn='/^[\x{4e00}-\x{9fa5}]{1,45}$/u';
        $result=array();
        if(!preg_match($reg_email,$email))
            $result['email_err']=1;
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
            $tmp->emial=$email;
            $tmp->save();
            //写cookie session
            return 0;
        }
    }
    function login(Request $request){
        $username=$request->input('username');
        $password=$request->input('password');
        $result=DB::table('user')->where('username',$username)->where('password',$password);

        if($result->count('id')!=1)
            return -1;
        else{
            $user=$result->first(['id','username','admin']);
            session(['user_id'=>$user->id,'username'=>$user->username,'user_admin'=>$user->admin]);
            $response=new Response('0');
            $response->withCookie(Cookie('username',$username))->withCookie(Cookie('password',$password));
            return $response;//view('blank')->withCookie(Cookie('username',$username))->withCookie(Cookie('password',$password));
        }

    }
    public function mail_to(Request $request){
        $email=$request->input('email');
        $username=$request->input("username");
        $result=DB::table('user')->where('username',$username)->where('email',$email);
        if($result->count()==1){
            $password=$result->first(['password'])->password;
            $to = $email;
            $subject = "Test mail";
            $message ="傻逼 你的密码是$password";
            $from = "506247345@qq.com";
            $headers = "From: $from";
            mail($to,$subject,$message,$headers);
            return new Response('0');
        }
    }

}