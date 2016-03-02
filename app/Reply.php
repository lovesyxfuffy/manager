<?php
/**
 * Created by PhpStorm.
 * User: cnzha
 * Date: 2016/3/1
 * Time: 20:02
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    /**
     *  id int primary key auto_increment, author_id int, create_time datetime, click_num int, title varchar(200), content TEXT, status int
     *
     * ID
     * author_id
     * create_time
     * modify_time
     * click_num
     * title
     * content
     * status   1   默认值
     */
    protected $table = 'replies';
    public $timestamps = false;
//    protected $fillable = [
//        'author_id', 'time', 'click_num', 'title', 'content'
//    ];
}