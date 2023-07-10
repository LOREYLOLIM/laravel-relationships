<?php

use App\Models\Phone;
use App\Models\User;
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
    return view('welcome', compact('users'));
});
