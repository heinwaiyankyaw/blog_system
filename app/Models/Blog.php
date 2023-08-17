<?php

namespace App\Models;

use Illuminate\Support\Facades\File;

use function PHPSTORM_META\map;

class Blog
{
    public static function all()
    {
        $files = File::files(resource_path("blogs"));
        return array_map(function ($file) {
            return $file->getContents();
        }, $files);
    }

    public static  function find($slug)
    {
        $path = resource_path("blogs/$slug.html");
        if (!file_exists($path)) {
            return redirect('/');
        }
        return cache()->remember("posts.$slug", now()->addMinute(), function () use ($path) {
            return file_get_contents($path);
        });
    }
}
