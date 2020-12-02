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
 
 use App\Http\Controllers\Postcontroller;
 Route::resource('post',Postcontroller::class);
//  Route::get('post',[Postcontroller::class,'index']);
//  Route::get('post/create',[Postcontroller::class,'create'])->name('post.create');
//  Route::post('post',[Postcontroller::class,'store'])->name('post.store');
//  Route::get("post/{post}", [Postcontroller::class,"show"])
//  ->name("post.show");

// Route::get("post/{post}/edit", [Postcontroller::class,"edit"])
// ->name("post.edit");

// Route::put("post/{post}", [Postcontroller::class,"update"])
// ->name("post.update");

// Route::delete("post/{post}", [Postcontroller::class,"destroy"])
// ->name("post.delete");







 ////////////
// Route::get('bloger',[PostsController::class,'getPosts']);
// Route::get('post/{posttitle}',[PostsController::class,'posttitle']);

// //lec3
// Route::get('posts',[PostsController::class,'displayPosts'])->name("posts");
// Route::get('posts/add',[PostsController::class,'createPost'])->name("posts.add");
// Route::post('posts/show',[PostsController::class,'insertPost'])->name("posts.show");
   


// Route::get('/', function () {
//     return view('welcome');
// });
