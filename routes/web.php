<?php

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use function PHPUnit\Framework\fileExists;

Route::get('/', function () {
    // DB::listen(function ($query) {
    //     Log::info($query->sql);
    // }); //logging watch query from database
    return view('blogs', [
        'blogs' => Blog::with('category')->get() //call in eager load or lazy load
    ]);
});

Route::get('/blogs/{blog:slug}', function (Blog $blog) {
    return view('blog', [
        'blog' => $blog,
    ]);
})->where('blog', '[A-z\-\d]+'); //whildcardCon

Route::get('/categories/{category:slug}', function (Category $category) {
    // dd($category->blogs);
    return view('blogs', [
        'blogs' => $category->blogs
    ]);
});