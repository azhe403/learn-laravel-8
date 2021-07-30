<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/posts/delete/{post:slug}', [PostController::class, 'delete']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category:slug}', [CategoryController::class, 'get']);

Route::get('/authors/{author:username}', [AuthorController::class, 'get']);

Route::get('/about-me', [AboutController::class, 'index']);
Route::get('/about-laravel', [AboutController::class, 'laravel']);

//Route::get('/categories', function () {
//    return view('categories', [
//        'title' => 'Post Categories',
//        'categories' => Category::all()
//    ]);
//});

//Route::get('/categories/{category:slug}', function (Category $category) {
//    return view('posts', [
//        'title' => "Post by Category: " . $category->name,
//        'posts' => $category->posts->load('category', 'author'),
//        'category' => $category->name
//    ]);
//});

//Route::get('/authors/{author:username}', function (User $author) {
//    return view('posts', [
//        'title' => 'Post by Author: ' . $author->name,
//        'posts' => $author->post->load('category', 'author'),
//    ]);
//});


//Route::get('/about', function () {
//    return view('about', [
//        "title" => "About",
//        "name" => "Azhe-kun",
//        "email" => "admin@azhe.my.id",
//        "quotes" => "On Error Resume Next"
//    ]);
//});

//Route::get('/laravel', function () {
//    return view('welcome');
//});
