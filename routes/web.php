<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Wati",
        "email" => "ekkys99@gmail.com",
        "image" => "ekky.jpg"
    ]);
});

$blog_posts = [

        [
            "title" => "Judul Post Pertama",
            "author" => "Ekky Sukmawati",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et obcaecati impedit reprehenderit consectetur recusandae, voluptatum fugit cupiditate illo earum, porro quibusdam. Culpa voluptatum, totam delectus odit nisi tenetur sunt iusto? Vero perspiciatis suscipit veniam aperiam voluptas qui facilis iusto totam nemo, laboriosam cum nisi, consequuntur ipsa, velit dolorum rem sapiente error mollitia tempora! Nam nostrum culpa porro, et at eveniet qui, veritatis facere voluptatem veniam voluptatum delectus blanditiis in adipisci, aspernatur molestias quidem quas odio reiciendis eos. Quam animi earum temporibus quod in! Aperiam est expedita vitae tempora repudiandae quod, ut ab doloribus sunt non cupiditate pariatur eligendi odit quibusdam."
        ],
        [
            "title" => "Judul Post Pertama",
            "author" => "Ekky Sukmawati",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et obcaecati impedit reprehenderit consectetur recusandae, voluptatum fugit cupiditate illo earum, porro quibusdam. Culpa voluptatum, totam delectus odit nisi tenetur sunt iusto? Vero perspiciatis suscipit veniam aperiam voluptas qui facilis iusto totam nemo, laboriosam cum nisi, consequuntur ipsa, velit dolorum rem sapiente error mollitia tempora! Nam nostrum culpa porro, et at eveniet qui, veritatis facere voluptatem veniam voluptatum delectus blanditiis in adipisci, aspernatur molestias quidem quas odio reiciendis eos. Quam animi earum temporibus quod in! Aperiam est expedita vitae tempora repudiandae quod, ut ab doloribus sunt non cupiditate pariatur eligendi odit quibusdam."
        ]

    ];
        Route::get('/blog', function () {
    return view('posts', [
        "title"=> "Posts",
    ]);
});