<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $PROJECT_SUBMIT=0;
    protected $PROJECT_SUBMIT_ACCEPTED=1;
    protected $PROJECT_PLAN_SUBMIT=2;
    protected $PROJECT_PLAN_ACCEPTED_AND_START=3;
    protected $PROJECT_FINISHED=4;
    protected $PROJECT_SUBMIT_REJECTED=-1;
    protected $PROJECT_PLAN_REJECTED=-3;

    protected $JOIN_QUERY_SUBMIT=-1;
    protected $JOIN_QUERY_ACCEPTED=0;

    protected $PLAN_SUBMIT=0;
    protected $PLAN_FINISHED_SUBMIT=-1;
    protected $PLAN_FINISHED_ACCEPTED=1;
}
