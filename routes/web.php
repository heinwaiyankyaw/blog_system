<?php

use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\fileExists;

Route::get('/', function () {
    return view('blogs');
});

Route::get('/blogs/{blog}', function ($fileName) {
    $path = __DIR__ . "/../resources/blogs/$fileName.html";
    if (!file_exists($path)) {
        return redirect('/'); //dd,abort,redirect
    }
    $blog = file_get_contents($path);
    return view('blog', [
        'blog' => $blog,
    ]);
});
