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
class ExamineController extends Controller{

    function view(Request $request){
        $project_wait=DB::table('project')->where('status','=','0')->get();
        $project_plan=DB::table('project')->where('status','=','2')->get();
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
        $project->status+=1;
        $project->save();
        return 1;
    }
    function reject(Request $request){
        $project_id=$request->input('project_id');
        $result=DB::table('project')->where('id','=',$project_id);
        if($result->first()->status=='2'){
            $result->update(['status'=>'-3']);
            DB::table('plans')->where('project_id','=',$project_id)->delete();
        }
        else{
            $result->update(['status'=>'-1']);
        }
        return 1;
    }

}