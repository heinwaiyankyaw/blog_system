<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('blogs');
});

Route::get('/blogs/{blog}', function ($fileName) {
    $path = __DIR__ . "/../resources/blogs/$fileName.html";
    $blog = file_get_contents($path);
    return view('blog', [
        'blog' => $blog,
    ]);
});
