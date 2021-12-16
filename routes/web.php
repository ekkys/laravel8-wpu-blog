<?php

// use App\Models\Post;
// use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;


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

    Route::get('/home', function () {
        return view('home', [
            "title" => "Home",
            "active" => "home",
        ]);
    });
    Route::get('/about', function () {
        return view('about', [
            "title" => "About",
            "active" => "about",
            "name" => "Ekky Sukmawati",
            "email" => "ekkys99@gmail.com",
            "image" => "ekky.jpg"
        ]);
    });



    // halaman single post
    // wild card { slug } : untuk mengambil apapun dari isi slash nya /
    // function ($slug) : slug dijadikan parameter agar bisa digunakan di function tersebut
    // Route::get('posts/{slug}',[PostController::class, 'show']);


    // Route sebaris
    Route::get('/posts', [PostController::class, 'index']);
    Route::get('posts/{post:slug}',[PostController::class, 'show']);

    //Category slug
    Route::get('/categories/{category:slug}', function (Category $category) {
        return view('posts', [
            'title' => "Post by Category : $category->name",
            "active" => "posts",
            'posts' => $category->posts->load('category', 'author'),
        ]);
    });

    //Author
    // Route::get('/authors/{author:username}', function(User $author){
    //     return view('posts', [
    //         'title' => "Post By Author : $author->name",
    //         "active" => "posts",
    //         'posts' => $author->posts->load('category', 'author'),
    //     ]);
    // });

    //Categories
    Route::get('/categories', function() {
        return view('categories',[
            'title' => "Categories",
            'active' => "categories",
            'categories' => Category::all()
        ]);
    });

    //login
    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'authanticate']);
    Route::post('/logout', [LoginController::class, 'logout']);

    //register
    Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
    Route::post('/register', [RegisterController::class, 'store']);

    //dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);



