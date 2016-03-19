<?php
/**
 * Created by PhpStorm.
 * User: cnzha
 * Date: 2016/3/2
 * Time: 19:54
 */
namespace App\Http\Controllers;

use App\Post;
use App\Reply;
use DB;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReplyController extends Controller
{

    /**
     * 发表新的回复
     */

    public function new_reply(Request $request)
    {
        $this->validate($request, [
            'post_id' => 'required|numeric',
            'content' => 'required',
        ]);

        $post_id = $request->input('post_id');
        $reply = new Reply;
        //添加type为图片回复备用
        $reply->type = 1;
        $reply->post_id = $post_id;
        $reply->post_time = date("Y-m-d H:i:s");
        $reply->content = $request->input('content');
        $reply->author_id = $request->session()->get('user_id');
        $reply->save();
        $post=Post::find($post_id);

        $post->modify_time=date("Y-m-d H:i:s");
        $post->save();
        DB::update('update posts set reply_num = reply_num+1 where id = ?', [$post_id]);
        return redirect('post/'.$post_id);
    }
}