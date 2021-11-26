<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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

//Route dengan Closure ( function tanpa nama function () {} )

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Ekky Sukmawati",
        "email" => "ekkys99@gmail.com",
        "image" => "ekky.jpg"
    ]);
});



// halaman single post
// wild card { slug } : untuk mengambil apapun dari isi slash nya /
// function ($slug) : slug dijadikan parameter agar bisa digunakan di function tersebut
// Route::get('posts/{slug}',[PostController::class, 'show']);


// Route sebariss

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}',[PostController::class, 'show']);
