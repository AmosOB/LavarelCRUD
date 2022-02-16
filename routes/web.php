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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\BlogPostController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/blog', [App\Http\Controllers\BlogPostController::class, 'PostList'])->name('blog');

Auth::routes();

Route::get('/addpost', [App\Http\Controllers\BlogPostController::class, 'AddPost'])->name('addpost');

Auth::routes();

Route::post('/savepost', [App\Http\Controllers\BlogPostController::class, 'SavePost'])->name('savepost');

Auth::routes();

Route::get('/updatepost/{id}', [App\Http\Controllers\BlogPostController::class, 'UpdatePost'])->name('updatepost');

Auth::routes();

Route::post('/saveupdate/{id}', [App\Http\Controllers\BlogPostController::class, 'SaveUpdate'])->name('saveupdate');

Auth::routes();

Route::get('/deletepost/{id}', [App\Http\Controllers\BlogPostController::class, 'DeletePost'])->name('deletepost');

