<?php

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('blogs', [
        'blogs' => Blog::latest()->get()
    ]);
});

Route::get('/blogs/{blog:slug}', function (Blog $blog) {
    return view('blog', [
        'blog' => $blog,
    ]);
})->where('blog', '[A-z\-\d]+');

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('blogs', [
        'blogs' => $category->blogs
    ]);
});


Route::get('/users/{user:user_name}', function (User $user) {
    // dd($username->blogs);
    return view('blogs', [
        'blogs' => $user->blogs
    ]);
});