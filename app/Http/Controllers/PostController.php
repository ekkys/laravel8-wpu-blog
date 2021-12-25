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
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in '.$category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by '. $author->name;
        }

        // if (request('categories')) {
        //     $category = Category::firstWhere('slug', request('category'));
        //     $title = ' in '.$category->name;
        // }

        return view('posts', [
            "title" => "All Articles". $title,
            "active" => "posts",
            "posts" =>  Post::latest()->filter(request(['cari', 'category', 'author']))->paginate(7)->withQueryString()
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
