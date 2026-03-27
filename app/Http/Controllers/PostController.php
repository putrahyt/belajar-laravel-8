<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::latest()->get();
        return view('posts', [
            'title' => 'All Posts',
            // 'posts' => Post::all()
            'posts' => $data,
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Single Post',
            // 'post' => Post::find($slug)
            'post' => $post
        ]);
    }
}
