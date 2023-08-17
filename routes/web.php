<?php

use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\fileExists;

Route::get('/', function () {
    return view('blogs');
});

Route::get('/blogs/{blog}', function ($slug) {
    $path = __DIR__ . "/../resources/blogs/$slug.html";
    if (!file_exists($path)) {
        return redirect('/'); //dd,abort,redirect
    }
    $blog = cache()->remember("posts.$slug", now()->addMinute(), function () use ($path) {
        var_dump("File get Content");
        return file_get_contents($path);
    });
    return view('blog', [
        'blog' => $blog,
    ]);
})->where('blog', '[A-z\-\d]+');//whildcardCon