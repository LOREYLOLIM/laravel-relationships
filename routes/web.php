<?php

use App\Models\Comment;
use App\Models\Country;
use App\Models\Mechanic;
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
    $phone = User::with('phone')->get();
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
    $countries  = Country::with('posts')->get();
//    dd($countries);
    $mechanics = Mechanic::with('carOwner')->get();
//    dd($mechanics);

    return view('welcome', compact('users', 'phone', 'posts', 'postcategory', 'categories', 'countries', 'mechanics'));
});
