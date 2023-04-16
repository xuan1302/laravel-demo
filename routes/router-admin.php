<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\PostsController;

Route::prefix('admin')->group(function(){
    Route::get('/login',[AuthController::class,'getLogin'])->name('login.admin');
    Route::post('/login',[AuthController::class,'postLogin'])->name('admin.post.login');

});

Route::group(['prefix' => 'admin', 'middleware' => ['auth.admin']], function(){
    Route::get('/',[DashboardController::class,'index'])->name('admin.dashboard');
    Route::get('/logout',[AuthController::class,'logout'])->name('admin.logout');
    Route::get('/users',[UserController::class,'getAllUser'])->name('admin.all.users');
    Route::get('/posts',[PostsController::class,'getAllPosts'])->name('admin.all.posts');

    Route::get('/posts/add',[PostsController::class,'getAddPost'])->name('admin.add.posts');
    Route::post('/posts/add',[PostsController::class,'postAddPost'])->name('admin.post.add.posts');

    Route::get('/categories',[PostsController::class,'getCategories'])->name('admin.add.categories');
    Route::post('/categories',[PostsController::class,'postCategories'])->name('admin.post.add.categories');
});
