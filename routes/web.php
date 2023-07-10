<?php

use App\Models\Comment;
use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\CategoryPost;
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
    $phone = User::find(1);
    $phone = User::find(1)->phone;
//    return $phone;
//    $user = Phone::find(1);
    $user = Phone::find(1)->user;
//    return $user;
    $users = User::all();
    $comments = Post::find(2)->comments;
//    dd($comments);
    $post = Comment::find(5)->post;
//    dd($post);
    $posts = Post::with('comments')->get();
//    dd($posts);
    $postcategory = Post::with('categories')->get();
//    dd($postcategory);
    $categories = Category::with('posts')->get();
//    dd($categories);

    return view('welcome', compact('users', 'posts', 'postcategory', 'categories'));
});
