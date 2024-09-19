<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About'], ['nama' => 'Chalvin Reza']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'title' => 'LOREM IPSUM 1',
            'author' => 'Chalvin Reza',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam voluptatibus velit illo explicabo! Unde nobis vel nam. Saepe itaque aperiam ipsum ab est, voluptas rerum sed at delectus unde odio.'
        ],
        [
            'title' => 'LOREM IPSUM 2',
            'author' => 'Chalvin Reza',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam voluptatibus velit illo explicabo! Unde nobis vel nam. Saepe itaque aperiam ipsum ab est, voluptas rerum sed at delectus unde odio.'
        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contacts'], ['nama' => 'Chalvin Reza']);
});