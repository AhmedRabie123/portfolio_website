<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\Post;

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
}
