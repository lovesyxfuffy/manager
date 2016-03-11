<?php
/**
 * Created by PhpStorm.
 * User: cnzha
 * Date: 2016/3/11
 * Time: 15:30
 */
namespace App\Http\Controllers;
use DB;
use App\User;
use App\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProjectController extends Controller
{
    public function enter_project(Request $request, $id)
    {
        $pjt = DB::select('select status from project where id = ?', [$id]);
        $status = $pjt[0]->status;
        return view('publish', ['status' => $status]);
    }

    public function new_project(Request $request)
    {
        if(!($request->has('pjt_type') && $request->has('pjt_name') && $request->has('pjt_info') && $request->has('pjt_reward') && $request->has('pjt_memberNum') && $request->has('pjt_startTime') && $request->has('pjt_endTime')) )
            return redirect('show/publish')->with('error', '表单信息有误');
        //添加新的project记录
        $pjt = new Project;
        $pjt->name = $request->input('pjt_name');
        $pjt->content = $request->input('pjt_info');
        $pjt->attribute = $request->input('pjt_type');
        $pjt->reward = $request->input('pjt_reward');
        $pjt->status = 0;
        $pjt->starttime = $request->input('pjt_startTime');
        $pjt->endtime = $request->input('pjt_endTime');
        $pjt->save();

        return redirect('project/'.$pjt->id);
    }
}