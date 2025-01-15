<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return $post;
});

Route::get('/posts/{post}', [PostController::class, 'show'])
    ->name('posts.name');

Route::middleware('auth')->group(function () {
    Route::get('/posts', [PostController::class, 'index']);
});

// Menampilkan daftar postingan berdasarkan kategori
Route::get('/categories/{category}/posts',
    [CategoryController::class, 'posts']
);

Route::fallback(function () {
    return view('errors');
});
