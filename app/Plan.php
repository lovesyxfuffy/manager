<?php
/**
 * Created by PhpStorm.
 * User: cnzha
 * Date: 2016/3/12
 * Time: 20:23
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{

    protected $table = 'plans';
    public $timestamps = false;
//    protected $fillable = [
//        'author_id', 'time', 'click_num', 'title', 'content'
//    ];
}