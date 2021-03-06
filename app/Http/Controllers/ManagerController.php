<?php
/**
 * Created by PhpStorm.
 * User: fuffy
 * Date: 2016/3/14
 * Time: 18:30
 */
namespace App\Http\Controllers;
use App\Log;
use App\Project;
use App\User;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Mockery\CountValidator\Exception;

class ManagerController extends Controller{
    function view($sign){
        $user_id=session('user_id');
        $result=DB::table('project')->join('user',function($join){
            $join->on('user.id','=','project.owner_id');
        })->where('status','=',$this->PROJECT_SUBMIT_ACCEPTED)->where('owner_id','<>',$user_id)->get(['user.id as user_id','project.id as id','content','starttime','endtime','attribute','username','name','reward']);

        $length=count($result);
        for($i=0;$i<$length;$i++){
            $project_id=$result[$i]->id;

            if(DB::table('project_user')->where('project_id',$project_id)->where('user_id',$user_id)->count()!=0){

                unset($result[$i]);
            }
        }
        $color=array('red','orange','blue','green','grey');
        $button=array('danger','warning','primary','success','grey');
        $my_projects=DB::table('project')->leftjoin('project_user',function($join){
            $join->on('project.id','=','project_user.project_id');
        })->where('project_user.user_id','=',$user_id)->orwhere('project.owner_id','=',$user_id)->get(['project.status','member_num','name','id','owner_id']);
        foreach($my_projects as $mp){
            if($mp->status==$this->PROJECT_SUBMIT_ACCEPTED){
                $apply_count=DB::table('project_user')->where('project_id',$mp->id)->where('status',$this->JOIN_QUERY_SUBMIT)->count();
                if($apply_count!=0)
                    $mp->message="有".$apply_count."条加入项目申请";
                else
                    $mp->message="无新消息";
                $mp->percent=DB::table('project_user')->where('project_id',$mp->id)->where('status',$this->JOIN_QUERY_ACCEPTED)->count()/($mp->member_num-1);
            }
            else if($mp->status==$this->PROJECT_PLAN_ACCEPTED_AND_START){

                $mp->percent=DB::table('plans')->where('project_id',$mp->id)->where('status',$this->PLAN_FINISHED_ACCEPTED)->count()/DB::table('plans')->where('project_id',$mp->id)->count();
                $apply_count=DB::table('plans')->where('project_id',$mp->id)->where('status',$this->PLAN_FINISHED_SUBMIT)->count();
                if($apply_count!=0)
                    $mp->message="有".$apply_count."条完成任务申请";
                else
                    $mp->message="无新消息";
            }
            else{
                $mp->percent=1;
                $mp->message="无新消息";
            }
        }
        //return var_dump($result);
        if($sign=='my-projects')
            return view('projects')->with('my_projects',$my_projects);
        elseif ($sign=='projects-join')
            return view('projects_joinable')->with('projects',$result)->with('color',$color)->with('button',$button);

    }
    function join(Request $request){
        $project_id=$request->input('project_id');
        DB::table('project_user')->insert(['user_id'=>session('user_id'),'project_id'=>$project_id,'status'=>'-1']);
        return 0;
    }
    function content_view(Request $request,$id){
        $project=DB::table('project')->where('id',$id)->where('status',$this->PROJECT_PLAN_ACCEPTED_AND_START)->orwhere('status',$this->PROJECT_FINISHED)->first();
        $member_names=DB::table('project_user')->join('user',function($join){
            $join->on('user.id','=','user_id');
        })->where('project_id',$id)->get(['username']);
        $owner_name=DB::table('user')->where('id',$project->owner_id)->get(['username'])[0]->username;
        $plans=DB::table('plans')->where('project_id',$project->id)->join('user',function($join){
            $join->on('user.id','=','user_id');
        })->get(['name','content','start_time','username','end_time','user.id as user_id','plans.id as id','status','project_id']);
        $finish=0;
        foreach($plans as $plan){
            if($plan->status==$this->PLAN_FINISHED_ACCEPTED){
                $finish++;
            }
        }
        $percent=$finish/count($plans)*100;
        return view('project_content')->with('project',$project)->with('member_names',$member_names)->with('owner_name',$owner_name)->with('plans',$plans)->with('percent',$percent);
    }
    function plan(Request $request,$sign){
        if($sign=='submit'){
            $plan_id=$request->input('plan_id');
            DB::table('plans')->where('id',$plan_id)->update(['status'=>$this->PLAN_FINISHED_SUBMIT]);
            return 1;
        }
        elseif($sign=='accept'){
            $plan_id=$request->input('plan_id');
            DB::table('plans')->where('id',$plan_id)->update(['status'=>$this->PLAN_FINISHED_ACCEPTED]);
            $plan=DB::table('plans')->where('id',$plan_id)->get(['name','content','project_id','user_id'])[0];
            $project=Project::find($plan->project_id);
            $log=new Log();
            $log->content=User::find($plan->user_id)->username.'完成了项目'.$project->name."中的".$plan->name."任务";
            $log->more=$plan->content;
            $log->sign='plan_finished';
            $log->save();
            if(DB::table('plans')->where('id',$project->id)->where('status',"<>",$this->PLAN_FINISHED_ACCEPTED)->count('id')==0){
                DB::table('project')->where('id',$plan->project_id)->update(['status'=>$this->PROJECT_FINISHED]);
                $log2=new Log();
                $log2->content='项目'.$project->name."已完成";
                $log2->sign='project_finished';
                $log2->project_id=$project->id;
                $log2->save();
            }
            return 1;

        }
        elseif($sign=='reject'){
            $plan_id=$request->input('plan_id');
            DB::table('plans')->where('id',$plan_id)->update(['status'=>$this->PLAN_SUBMIT]);
            return 1;
        }

    }
}