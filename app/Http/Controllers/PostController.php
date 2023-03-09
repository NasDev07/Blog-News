<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::where('slug', request('category'))->first();
            $title = 'in ' . $category;
        }

        if (request('author')) {
            $author = User::where('name', request('author'))->first();
            $title = 'by ' . $author;
        }

        return view('welcome', [
            "title" => "All Posts" . $title,
            "dataList" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(10)->withQueryString()
        ]);
    }

    // public function show(Post $post)
    // {
    //     return view('components.sigle-post', [
    //         "title" => "Single Post",
    //         "post" => $post,
    //     ]);
    // }

    public function show($id)
    {
        try {
            $post = Post::findOrFail($id);
            return view('components.sigle-post', ['post' => $post]);
        } catch (Exception $e) {
            return "tidak ada data";
        }
    }
}
