<?php
/**
 * Created by PhpStorm.
 * User: fuffy
 * Date: 2016/3/14
 * Time: 18:30
 */
namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ManagerController extends Controller{
    function view(){
        $user_id=session('user_id');
        $result=DB::table('project')->join('user',function($join){
            $join->on('user.id','=','project.owner_id');
        })->where('status','=','1')->where('owner_id','<>',$user_id)->get(['user.id as user_id','project.id as id','content','starttime','endtime','attribute','username','name','reward']);

        $length=count($result);
        for($i=0;$i<$length;$i++){
            $project_id=$result[$i]->id;

            if(DB::table('project_user')->where('project_id',$project_id)->where('user_id',$user_id)->count()!=0){

                unset($result[$i]);
            }
        }
        $color=array('red','orange','blue','green','grey');
        $button=array('danger','warning','primary','success','grey');
        $my_projects=DB::table('project')->join('project_user',function($join){
            $join->on('project.id','=','project_user.project_id');
        })->where('project_user.user_id','=',$user_id)->orwhere('project.owner_id','=',$user_id)->get(['project.status','member_num','name','id']);
        foreach($my_projects as $mp){
            if($mp->status==1){
                $mp->message="有".DB::table('project_user')->where('status',-1)->count()."条加入项目申请";
                $mp->percent=DB::table('project_user')->where('status',0)->count()/($mp->member_num-1);
            }
            else if($mp->status==4){
                $query=DB::table('plan')->where('project_id',$mp->id);
                $mp->percent=$query->where('status',1)/$mp->member_num;
                $mp->message="有".$query->where('status',-1)->count()."条完成任务申请";
            }
            else{
                $mp->percent=1;
                $mp->message="无新消息";
            }
        }
        //return var_dump($result);
        return view('projects')->with('projects',$result)->with('color',$color)->with('button',$button)->with('my_projects',$my_projects);
    }
    function join(Request $request){
        $project_id=$request->input('project_id');
        DB::table('project_user')->insert(['user_id'=>session('user_id'),'project_id'=>$project_id,'status'=>'-1']);
        return 0;
    }
}