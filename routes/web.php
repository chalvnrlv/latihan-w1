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
            'author' => 'Reza Farrel',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, maiores sit minima esse reprehenderit sed excepturi voluptate voluptatibus, aspernatur nemo delectus assumenda molestias deserunt labore praesentium provident impedit ratione error!'
        ],
        [
            'title' => 'LOREM IPSUM 3',
            'author' => 'Chalvin Farrel',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, quidem distinctio perspiciatis fugiat aperiam eligendi. Perspiciatis ea expedita eius inventore in tempore architecto, nostrum error at animi ex, hic recusandae.'
        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contacts'], ['nama' => 'Chalvin Reza']);
});