<?php

namespace App\Http\Controllers;

use App\Ads;
use App\Post;
use App\Slide;
use App\Comment;
use App\Category;
use System\Auth\Auth;
use System\Database\DBBuilder\DBBuilder;
use App\Http\Requests\UserCommentRequest;

class HomeController extends Controller
{

    public function index(){
        $slides = Slide::all();
        $newestAds = Ads::orderBy('created_at', 'desc')->limit(0, 6)->get();
        $bestAds = Ads::orderBy('view', 'desc')->orderBy('created_at', 'desc')->limit(0, 4)->get();
        $posts = Post::where('published_at', '<=', date('Y-m-d H:i:s'))->orderBy('created_at', 'desc')->limit(0, 4)->get();
        return view('app.index', compact('posts', 'slides', 'newestAds', 'bestAds'));
    }

    public function about()
    {
        return view('app.about');
    }

    public function allAds()
    {
        $ads = Ads::all();
        return view('app.all-ads', compact('ads'));
    }


    public function ads($id)
    {
        $advertise = Ads::find($id);
        $galleries = $advertise->galleries()->get();
        $posts = Post::where('published_at', '<=', date('Y-m-d H:i:s'))->orderBy('created_at', 'desc')->limit(0,4)->get();
        $relatedAds = Ads::where('cat_id', $advertise->cat_id)->where('id', '!=', $id)->orderBy('created_at', 'desc')->limit(0,2)->get();
        $categories = Category::all();
        return view('app.ads', compact('posts', 'galleries', 'advertise', 'relatedAds', 'categories'));

    }

    public function allPost()
    {
        $posts = Post::all();
        return view('app.all-post', compact('posts'));
    }



    public function post($id)
    {
        $post = Post::find($id);
        $posts = Post::where('published_at', '<=', date('Y-m-d H:i:s'))->orderBy('created_at', 'desc')->limit(0,4)->get();
        $categories = Category::all();
        $comments = Comment::where('approved', 1)->whereNull('parent_id')->where('post_id', $id)->get();
        return view('app.post', compact('posts', 'post','categories','comments'));

    }

    public function category($id)
    {
        $category = Category::find($id);
        $ads = $category->ads()->get();
        $posts = $category->posts()->get();
        return view('app.category', compact('posts', 'category', 'ads'));
    }

    public function comment($post_id)
    {
        $request = new UserCommentRequest();
        $inputs = $request->all();
        $inputs['post_id'] = $post_id;
        $inputs['approved'] = 0;
        $inputs['status'] = 0;
        $inputs['user_id'] = Auth::user()->id;
        $comment = Comment::create($inputs);
        return back();
    }

    public function search()
    {
        if(isset($_GET['search']))
        {
            $search = '%' . $_GET['search'] . '%';
            $ads = Ads::where('title', 'LIKE', $search)->whereOr('tag', 'LIKE', $search)->get();
            $posts = Post::where('title', 'LIKE', $search)->get();
            return view('app.search', compact('ads', 'posts'));
        }
        else{
            return back();
        }
    }

    public function ajaxLastPosts()
    {
        //get data
        $posts = Post::where('published_at', '<=', date('Y-m-d H:i:s'))->orderBy('created_at', 'desc')->limit(0,4)->get();
        foreach($posts as $post)
        {
            $post->user = $post->user()->first_name . ' ' . $post->user()->last_name;
            unset($post->user_id);
            $post->created_at = \Morilog\Jalali\Jalalian::forge($post->created_at)->format('%B %d، %Y');
            $post->url = route('home.post', [$post->id]);
        }

        header('Content-type: application/json');
        $result = json_encode($posts, JSON_UNESCAPED_UNICODE);
        echo $result;
        exit;
    }



}