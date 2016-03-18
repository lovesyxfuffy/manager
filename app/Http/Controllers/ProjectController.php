<?php
/**
 * Created by PhpStorm.
 * User: cnzha
 * Date: 2016/3/11
 * Time: 15:30
 */
namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;
use App\Project;
use App\Plan;

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
            $applies = DB::select('select user_id, username from project_user left join user on user_id = user.id where project_id = ? and  status=-1', [$id]);
            $members = DB::select('select user_id, username from project_user left join user on user_id = user.id where project_id = ? and  status=?', [$id,0]);
            $plans = DB::select('select  plans.id id, start_time, end_time, content, username, name from plans left join user on user_id = user.id where project_id = ?', [$id]);
            $expectNum = DB::select('select member_num from project where id = ?', [$id])[0]->member_num;
            $values = '';
            foreach($members as $m)
                $values .= $m->user_id.':'.$m->username.";";
            $values = substr($values, 0, -1);
            return view('publish', ['status' => $status, 'plans' => $plans, 'value' => $values, 'members' => $members, 'totalNum' => $expectNum, 'nowNum' => count($members), 'applies' => $applies, 'pjt_id' => $id]);
        }
        return view('publish', ['status' => $status]);
    }

    public function new_project(Request $request)
    {
        $this->validate($request, [
            'pjt_type' => 'required|numeric',
            'pjt_name' => 'required',
            'pjt_info' => 'required',
            'pjt_reward' => 'required|numeric',
            'pjt_memberNum' => 'required|numeric',
            'pjt_startTime' => 'required|date',
            'pjt_endTime' => 'required|date'
        ]);
        //添加新的project记录
        $pjt = new Project;
        $pjt->name = $request->input('pjt_name');
        $pjt->content = $request->input('pjt_info');
        $pjt->attribute = $request->input('pjt_type');
        $pjt->reward = $request->input('pjt_reward');
        $pjt->member_num = $request->input('pjt_memberNum');
        $pjt->owner_id = $request->session()->get('user_id');
        $pjt->status = 0;
        $pjt->starttime = $request->input('pjt_startTime');
        $pjt->endtime = $request->input('pjt_endTime');

        $pjt->save();

        return redirect('pubilsh/'.$pjt->id);
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
        return Response("表单信息错误", 400);
    }

    public function accept(Request $request)
    {
        $this->validate($request, [
            'project_id' => 'required|numeric',
            'user_id' => 'required|numeric',
        ]);
        DB::update('update project_user set status = 0 where project_id = ? and user_id = ?', [$request->input('project_id'), $request->input('user_id')]);
        return 0;
    }

    public function reject(Request $request)
    {
        $this->validate($request, [
            'project_id' => 'required|numeric',
            'user_id' => 'required|numeric',
        ]);
        DB::delete('delete from project_user where project_id = ? and user_id = ?', [$request->input('project_id'), $request->input('user_id')]);
        return 0;
    }

    public function submit_plan(Request $request)
    {
        $this->validate($request, [
            'project_id' => 'required|numeric',
        ]);
        DB::update('update project set status = 2 where id = ?', [$request->input('project_id')]);
        return 0;
    }

}