<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Category;
use System\Auth\Auth;
use App\Http\Services\ImageUpload;
use App\Http\Requests\Admin\PostRequest;


class PostController extends AdminController{

    public function index()
    {
        $posts = Post::all();
       return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.post.create', compact('categories'));
    }

    public function store()
    {
        $request = new PostRequest();
        $inputs = $request->all();
        $inputs['user_id'] = Auth::user()->id;
        $inputs['status'] = 0;
        $path = 'images/posts/' . date('Y/M/d');
        $name = date('Y_m_d_H_i_s_') . rand(10,99);
        $inputs['image'] = ImageUpload::UploadAndFitImage($request->file('image'), $path, $name, 800, 499);
        Post::create($inputs);
        return redirect('admin/post');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('admin.post.edit', compact('post', 'categories'));
    }

    public function update($id)
    {
        $request = new PostRequest();
        $inputs = $request->all();
        $inputs['id'] = $id;
        $file = $request->file('image');
        if(!empty($file['tmp_name']))
        {
            $path = 'images/posts/' . date('Y/M/d');
           $name = date('Y_m_d_H_i_s_') . rand(10,99);
          $inputs['image'] = ImageUpload::UploadAndFitImage($request->file('image'), $path, $name, 800, 499);
        }
        $inputs['user_id'] = Auth::user()->id;
        $inputs['status'] = 0;
        Post::update($inputs);
        return redirect('admin/post');

    }

    public function destroy($id)
    {
      Post::delete($id);
      return back();
    }

}
