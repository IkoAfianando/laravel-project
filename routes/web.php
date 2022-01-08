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
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Iko Afianando",
        "email" => "ikoafianando123@gmail.com",
        "image" => "iko.png"
    ]);
});



Route::get('/blog', function () {
    return view('posts', [
        "title" => "Posts",
    ]);
});
