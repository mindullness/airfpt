<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Comments;
use App\Models\Member;
use App\Http\Requests\CommentsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comments::latest()->get();
        return view('admin.comment.index', ['comments' => $comments]);
    }


    public function create_comment()
    {$comments = null;
        if(Auth::guard('web')->check()){
            $member = Auth::guard('web')->user();
            $comments = Comments::where([
                ['mem_id',$member->id],
            ])->get();
        }
  
        return view('airfpt.user.create_comment', ['comments' => $comments]);
    }

    public function postCreate_comment(CommentsRequest $request)
    {
        if (!Auth::user()) {
            return view('airfpt.mem_login');
        } else {
            $member = Auth::guard('web')->user();
            $comments = $request->all();
            $c = new Comments($comments);
            $c->mem_id = $member->id; // lấy được id của user ở auth phía trên, gán vô field user_id trong bảng comment
            $c->user_name = $member->username;
            $c->save();

            $comments = Comments::latest()->get();

            return redirect()->back();
           
        }
    }


    // public function postCreate_comment(Request $request)
    // {
    //     if (!Auth::user()){
    //         return view('airfpt.mem_login');
    //     }else{

    //         $comments = $request->all();

    //         $c = new Comments($comments);

    //         $c->save();

    //         $comments = Comments::latest()->get();

    //         return view('airfpt.user.create_comment', ['comments' => $comments]);
    //     }


    // }
    // public function postReply_comment(Request $request)
    // {
    //     // request: cần lấy được 1. userid, 2. nội dung reply, 3. comment id (để biết reply cho comment nào)
    //     // Save vào db -> update comment
    //     // comment id = 1 -> update reply_userid, reply vào row có id = 1
    //     $comment = $request->all();

    //     $currentComment = Comments::find($id);
    //     $member = Member::find(Auth::id());
    //     $currentComment->reply_userid = $member->id;
    //     $currentComment->reply = $reply;
    //     $currentComment->save();

    //     $comments = Comments::latest()->get();

    //     return view('airfpt.user.create_comment', ['comments' => $comments]);
    // }

    /*
1 user -> có thể có nhiều comments
1 comment -> chỉ được comment bơi 1 user
-> Quan hệ giữa user - comment: 1 - n
-> Trong bảng comment, thêm field userID 

---
1 reply -> chỉ reply được cho 1 comment
1 comment -> có thể có 1 hoặc nhiều reply
-> Quan hệ giữa comment - reply: 1 - 1
-> Cần thêm 1 bảng reply_comment
*/
    public function reply($id)
    {
        $c = Comments::find($id);
        return view('admin.comment.reply', ['c' => $c]);
    }

    public function addReply(Request $request, $id)
    {
        $comments = $request->all();
        $c = Comments::find($id);
        $c->mem_id = $comments['mem_id'];
        $c->user_name = $comments['user_name'];
        $c->comment = $comments['comment'];
        $c->reply = $comments['reply'];
        $c->created_at = $comments['created_at'];
        $c->save();
        return redirect()->back();
    }


    public function delete_cmt($id)
    {
        $c = Comments::find($id);
        $c->delete();
        return redirect()->route('admin.comment.index');
    }

    // public function homeNews(){
    //     $allNews = Comment::latest()->paginate(4);
    //     return view('airfpt.user.homeNews',['allNews'=>$allNews]);
    // }


    // public function passenger_info() {
    //     return view('airfpt.user.passenger_info');
    // }

    //Destination
}
