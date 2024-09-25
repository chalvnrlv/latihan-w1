<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About'], ['nama' => 'Chalvin Reza']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function(Post $post) {

    return view('post', ['title' => 'Article', 'post' => $post]);
}); 

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contacts'], ['nama' => 'Chalvin Reza']);
});