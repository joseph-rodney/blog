<?php

use App\Models\Post;
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

Route::get('', function () {
    $posts = Post::all();
    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post}', function ($slug) {

    return view('post', [
        'post' => Post::find($slug)
    ]);
})->where('post', '[A-z_\-]+');

Route::get('contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about');
});

Route::get('/', function () { //keep in mind this as has not used the vmc technique
    return view('welcome');
});