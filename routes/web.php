<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use function PHPUnit\Framework\fileExists;

Route::get('/', function () {
    return view('blogs', [
        'blogs' => Blog::all(),
    ]);
});

Route::get('/blogs/{blog}', function ($slug) {
    return view('blog', [
        'blog' =>  Blog::find($slug),
    ]);
})->where('blog', '[A-z\-\d]+');//whildcardCon