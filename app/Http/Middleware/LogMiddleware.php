<?php
/**
 * Created by PhpStorm.
 * User: fuffy
 * Date: 2016/3/20
 * Time: 15:56
 */
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use App\Log;
class LogMiddleware{

    public function handle(Request $request,Closure $next){
        $log=new Log();
        $username=session('username');
        $log->username=$username;
        $log->date=date('Y-m-d');
        $log->time=date('h:i:s');
        if($request->isMethod('post')){
            if($request->is('publish')) {
                $log->content = $username . "发布了一个项目" . $request->input('pjt_name');
            }
            elseif($request->is('examine/accept')){
                $project_id=$request->input('project_id');
                $project=Project::find($project_id);
                if($project->status==1)
                    $log->content = '管理员'.$username . "审核通过了项目" . $project->name."，此项目已可以启动";
            }
            elseif(true){

            }//完成排期
             //完成了项目
             //每提交一个排期 看看项目是不是已经完成了
            if (file_put_contents('G:/wamp/www/manager/Log/' . date('Y-m-d') . '.txt', json_encode($log) . "\r\n", FILE_APPEND))
                return $next($request);
        }

        return $next($request);
    }

}