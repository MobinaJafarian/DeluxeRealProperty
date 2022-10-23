<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Http\Requests\Admin\CommentRequest;
use System\Auth\Auth;



class CommentController extends AdminController{

    public function index()
    {
        $comments = Comment::all();
        return view('admin.comment.index', compact('comments'));
    }

    public function show($id)
    {
        $comment = Comment::find($id);
        return view('admin.comment.show', compact('comment'));
    }

    public function approved($id)
    {
        $comment = Comment::find($id);
        if($comment->approved == 0)
        {
          $comment = Comment::update(['id' => $id, 'approved' => 1]);
        }
        else{
          $comment = Comment::update(['id' => $id, 'approved' => 0]);
        }
        return back();
    }

    public function answer($id)
    {
      $comment = Comment::find($id);
      $request = new CommentRequest();
      $inputs = $request->all();
      $inputs['user_id'] = Auth::user()->id;
      $inputs['post_id'] = $comment->post_id;
      $inputs['parent_id'] = $comment->id;
      $inputs['approved'] = 1;
      $inputs['status'] = 0;
      Comment::create($inputs);
      return back();
    }


}
