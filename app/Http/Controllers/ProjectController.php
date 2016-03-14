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
use App\Plan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProjectController extends Controller
{
    public function enter_project(Request $request, $id)
    {
        session(['pjt_id'=>$id]);
        $pjt = DB::select('select status from project where id = ?', [$id]);
        if(count($pjt) <= 0)
            return view('publish');
        $status = $pjt[0]->status;
        if($status == 1)
        {
            $members = DB::select('select user_id, username from project_user left join user on user_id = user.id where project_id = ? and  status=?', [$id,0]);
            $plans = DB::select('select  plans.id id, start_time, end_time, content, username, name from plans left join user on user_id = user.id where project_id = ?', [$id]);
            $values = '';
            foreach($members as $m)
                $values .= $m->user_id.':'.$m->username.";";
            $values = substr($values, 0, -1);
            return view('publish', ['status' => $status, 'plans' => $plans, 'value' => $values]);
        }
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

    public function new_plan(Request $request)
    {

            if(!$request->has('oper'))
                return Response("表单信息错误", 400);
            //此处应添加验证是否为本人修改
        if($request->input('oper') == 'add' || 'edit')
        {
            if(!($request->has('name') && $request->has('plan_user') && $request->has('start_time') && $request->has('end_time') && $request->has('content')) )
                return Response("表单信息错误", 400);
            if($request->input('oper') == 'add')
                $plan = new Plan;
            else if($request->input('oper') == 'edit')
                $plan = Plan::find($request->input('id'));
            $plan->name = $request->input('name');
            $plan->user_id = $request->get('plan_user');
            $plan->start_time = $request->input('start_time');
            $plan->end_time = $request->input('end_time');
            $plan->content = $request->input('content');
            $plan->project_id = $request->session()->get('pjt_id');
            $plan->save();
            return Response("OK", 200);
        }
        else if($request->input('oper') == 'del')
        {

            $ids = preg_split('/,/', $request->input('id'));
            foreach($ids as $i)
                DB::delete('delete from plans where id = ?', [$i]);
            return Response("OK", 200);
        }
    }
}