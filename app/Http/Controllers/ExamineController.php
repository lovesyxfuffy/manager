<?php
/**
 * Created by PhpStorm.
 * User: fuffy
 * Date: 2016/3/14
 * Time: 3:36
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Project;
use DB;
use App\Log;
class ExamineController extends Controller{

    function view(Request $request){
        $project_wait=DB::table('project')->where('status','=',$this->PROJECT_SUBMIT)->get();
        $project_plan=DB::table('project')->where('status','=',$this->PROJECT_PLAN_SUBMIT)->get();
        return view('examine')->with('project_wait',$project_wait)->with('project_plan',$project_plan);
    }
    function get(Request $request){

        $project_id=$request->input('project_id');
        $result=DB::table('plans')->join('user',function($join){
            $join->on('user.id','=','plans.user_id');
        })->where('project_id','=',$project_id)->get(['username','start_time','end_time','content']);
        return json_encode($result);
    }
    function accept(Request $request){
        $project_id=$request->input('project_id');
        $project=Project::find($project_id);
        if($project->status==$this->PROJECT_PLAN_SUBMIT){
            $log=new Log();
            $log->content='管理员通过了'.User::find($project->owner_id)->username.'提交的 项目'.$project->name.'的审核，项目正式开始';
            $log->sign='project_start';
            $log->save();
        }
        $project->status+=1;
        $project->save();
        return 1;
    }
    function reject(Request $request){
        $project_id=$request->input('project_id');
        $result=DB::table('project')->where('id','=',$project_id)->first();
        if($result->status==$this->PROJECT_PLAN_SUBMIT){
            $result->update(['status'=>$this->PROJECT_PLAN_REJECTED]);
            DB::table('plans')->where('project_id','=',$project_id)->delete();
        }
        elseif($result->status==$this->PROJECT_SUBMIT){
            $result->update(['status'=>$this->PROJECT_SUBMIT_REJECTED]);
        }
        return 1;
    }

}