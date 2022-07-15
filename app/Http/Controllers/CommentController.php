<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Comments;
use App\Models\Member;

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
    {
        $comments = Comments::latest()->get();

        return view('airfpt.user.create_comment', ['comments' => $comments]);
    }

    public function postCreate_comment(Request $request)
    {
        if (!Auth::user()){
            return view('airfpt.mem_login');
        }else{

            $comments = $request->all();

            $c = new Comments($comments);
    
            $c->save();
    
            $comments = Comments::latest()->get();
    
            return view('airfpt.user.create_comment', ['comments' => $comments]);
        }
    
       
    }

    
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


    public function delete($id)
    {
        $c = Comments::find($id);
        $c->delete();
        return redirect()->route('admin.comment.index');
    }
    public function show_comment($id)
    {
        $c = Comments::find($id);
        return view('airfpt.user.create_comment', ['c' => $c]);
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
