<?php
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-create', [BlogController::class, 'create']);

Route::get('/blog/{id}', [PostController::class, 'read'])->name('post');

Route::get('/users', [UsersController::class, 'index'])->name('users');
Route::get('/user/{id}', [UserController::class, 'index'])->name('user');



// routes form
Route::post('/comment', [CommentController::class, 'create'])->name('comment.create');
Route::post('/blog/{id}', [CommentController::class, 'delete'])->name('comment.delete');
Route::put('/update/{id}', [CommentController::class, 'update'])->name('comment.update');
Route::get('/comment/{id}/edit', [CommentController::class, 'edit'])->name('comment.edit');