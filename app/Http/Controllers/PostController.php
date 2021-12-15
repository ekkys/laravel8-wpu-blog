<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', $request('category'));
            $title = ' in '.$category;
        }

        if (request('author')) {
            $author = User::firstWhere('username', $request('author'));
            $title = ' by '. $author;
        }

        return view('posts', [
            "title" => "All Posts". $title,
            "active" => "posts",
            "posts" =>  Post::latest()->filter(request(['cari', 'category', 'author']))->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post", //title halaman
            "active" => "posts",
            "post" => $post
        ]);
    }
}
