<?php
/**
 * Created by PhpStorm.
 * User: cnzha
 * Date: 2016/3/1
 * Time: 16:19
 */
namespace App\Http\Controllers;

use App\Post;
use App\Reply;
use DB;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    /**
     * 发表新的帖子
     *
     * @return int status
     * 0为成功，1为session缺失（暂时不会出现），2为表单项缺失
     */
    public function new_post(Request $request)
    {
        if(!($request->has('title') && $request->has('content')))
            return 2;

        //添加新的post记录
        $post = new Post;
        //用户id应从session中获取，暂时默认为1，
        $post->author_id = 1; //$post->author_id = $request->session()->get('uid');
        $post->create_time = date("Y-m-d H:i:s");
        $post->modify_time = date("Y-m-d H:i:s");
        $post->click_num = 0;
        $post->reply_num = 0;
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->status = 1;
        $post->save();

        //同时作为回复的一楼
        $reply = new Reply;
        //添加type为图片回复备用
        $reply->type = 1;
        $reply->post_id = $post->id;
        $reply->post_time = date("Y-m-d H:i:s");
        $reply->content = $request->input('content');
        $reply->author_id = 1;  //$reply->author_id = $request->sessin()->get('uid');
        $reply->save();
        return 0;
    }

    /**
     * @param  int  $start(可为空， 默认为0)
     * @param  int  $num(可为空，默认为10)
     * 获得指定条数的的帖子
     * @return json
     * 返回值包括title, author_id, click_time, create_time项
     */
    public function get_all_post(Request $request)
    {
        $start = $request->has('start') ? $request->input('start') : 0;
        $num = $request->has('num') ? $request->input('num') : 10;
        $posts = DB::select('select id, title, author_id, click_num, reply_num, create_time  from posts order by modify_time limit ?, ?', [$start, $num]);
        /*foreach($posts as $post)
        {
            $name = DB::select('select username from users where id = ?', [$post->author_id]);
            $post->author_name = $name[0];
        }*/
        return view('forum', ['posts' => $posts]);
    }

    /**
     * 获取帖子总数目
     * @return mixed
     */
    public function get_total_num()
    {
        $num = DB::select('select count(id) from posts');
        return $num;
    }

    /**
     * 获取指定帖子的所有回复
     */
    public function enter_post(Request $request, $id)
    {
        /*if(!$request->has('post_id'))
            return 2;
        else
            $post_id = $request->input('post_id');*/
        $post_id = $id;
        $replies = DB::select('select type, author_id, post_time, content from replies where post_id = ?', [$post_id]);
        DB::update('update posts set click_num = click_num+1 where id = ?', [$post_id]);
        return view('post', ['replies' => $replies, "post_id" => $post_id]);
        //return json_encode($replies);
    }
}