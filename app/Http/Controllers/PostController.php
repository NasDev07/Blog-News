<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // $post = Post::with('category', 'author');
        $post = Post::all();
        return view('welcome', ['posttList' => $post]);
    }

    // public function show(Post $post)
    // {
    //     return view('post', [
    //         "title" => "Single Post",
    //         "post" => $post,
    //         "active" => "posts",
    //     ]);
    // }
}
