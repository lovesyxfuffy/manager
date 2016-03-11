<?php
/**
 * Created by PhpStorm.
 * User: cnzha
 * Date: 2016/3/11
 * Time: 15:54
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $table = 'project';
    public $timestamps = false;
//    protected $fillable = [
//        'author_id', 'time', 'click_num', 'title', 'content'
//    ];
}