<?php
/**
 * Created by PhpStorm.
 * User: fuffy
 * Date: 2016/3/22
 * Time: 23:27
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\User_tmp;
use DB;
use App\Log;
class DashBoardController extends Controller{
    public function time_line(){
        $logs_today=Log::read( date('Y-m-d'));
        $logs_today=str_replace("\r",'',$logs_today);
        $logs_today=str_replace("\n",'',$logs_today);
        $logs_today=substr($logs_today,0,strlen($logs_today)-1);

        $logs_yesterday=Log::read( date('Y-m-d',time()-24*3600));
        $logs_yesterday=str_replace("\r",'',$logs_yesterday);
        $logs_yesterday=str_replace("\n",'',$logs_yesterday);
        $logs_yesterday=substr($logs_yesterday,0,strlen($logs_yesterday)-1);
        //return var_dump(json_decode('['.$logs_today.']'));
        return view('timeline')->with('logs_today',json_decode('['.$logs_today.']'))->with('logs_yesterday',json_decode('['.$logs_yesterday.']'));


    }
}