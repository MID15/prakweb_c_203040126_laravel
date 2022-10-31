<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;

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
        "tittle" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "active" => "about",
        "name" => "Mochamad Indra Wahyudi",
        "email" => "mindraw595@gmail.com",
        "image" => "profile1.png"
    ]);
});

Route::get('/categories', function () {
    return view('categories', [
        'tittle' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});



Route::get('/blog', [PostController::class, 'index']);

// halaman Single Posts
Route::get('posts/{post:slug}', [PostController::class, 'show']);
