<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use function PHPUnit\Framework\fileExists;

Route::get('/', function () {
    return view('blogs', [
        'blogs' => Blog::all(),
    ]);
});

Route::get('/blogs/{blog:slug}', function (Blog $blog) {
    return view('blog', [
        'blog' => $blog,
    ]);
})->where('blog', '[A-z\-\d]+');//whildcardCon