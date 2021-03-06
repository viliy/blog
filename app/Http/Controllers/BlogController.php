<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;

class BlogController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::where('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(config('blog.posts_per_page'));
        return view('blog.index', compact('posts'));
    }

    public function showPost($slug)
    {
        $post = Post::whereId($slug)->firstOrFail();
        return view('blog.post')->withPost($post);
    }
}
