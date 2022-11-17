<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\Post;
use Auth;

class CommentController extends Controller
{
    public function comment_submit(Request $request)
    {
        $request->validate([
          'name' => 'required',
          'email' => 'required|email',
          'comment' => 'required',
        ]);

        $comment = new Comment();

        $comment->post_id = $request->post_id;
        $comment->person_name = $request->name;
        $comment->person_email = $request->email;
        $comment->person_comment = $request->comment;
        $comment->person_type = 'Visitor';
        $comment->person_status = 0;
        $comment->save();
      
        return redirect()->back()->with('success', 'Thank You For Your Comment. Admin Will Check it Soon..');
    }

    public function reply_submit(Request $request)
    {
        $request->validate([
          'name' => 'required',
          'email' => 'required|email',
          'comment' => 'required',
        ]);

        $reply = new Reply();

        $reply->post_id = $request->post_id;
        $reply->comment_id = $request->comment_id;
        $reply->person_name = $request->name;
        $reply->person_email = $request->email;
        $reply->person_comment = $request->comment;
        $reply->person_type = 'Visitor';
        $reply->person_status = 0;
        $reply->save();
      
        return redirect()->back()->with('success', 'Thank You For Your Reply. Admin Will Check it Soon..');
    }

    public function admin_comment_submit(Request $request)
    {
      $request->validate([
        'comment' => 'required'
      ]);

      $comment = new Comment();

      $comment->post_id = $request->post_id;
      $comment->person_name = Auth::guard('admin')->user()->name;
      $comment->person_email = Auth::guard('admin')->user()->email;;
      $comment->person_comment = $request->comment;
      $comment->person_type = 'Admin';
      $comment->person_status = 1;
      $comment->save();
    
      return redirect()->back()->with('success', 'Comment Is Submitted Successfully..');
    }

    public function admin_reply_submit(Request $request)
    {
      $request->validate([
        'comment' => 'required'
      ]);

      $reply = new Reply();

      $reply->post_id = $request->post_id;
      $reply->comment_id = $request->comment_id;
      $reply->person_name = Auth::guard('admin')->user()->name;
      $reply->person_email = Auth::guard('admin')->user()->email;;
      $reply->person_comment = $request->comment;
      $reply->person_type = 'Admin';
      $reply->person_status = 1;
      $reply->save();
    
      return redirect()->back()->with('success', 'Reply Is Submitted Successfully..');
    }
}
