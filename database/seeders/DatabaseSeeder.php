<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Blog::truncate();
        User::factory()->create();

        $frontend = Category::create([
            'name' => 'frontend',
            'slug' => 'frontend'
        ]);

        $backend = Category::create([
            'name' => 'backend',
            'slug' => 'backend'
        ]);

        Blog::create([
            'title' => 'HTML AND CSS',
            'slug' => 'html-and-css',
            'intro' => 'This is about HTML AND CSS',
            'body' => 'Culpa dolor qui nostrud veniam labore excepteur nisi nisi pariatur cupidatat proident occaecat. In aliqua anim proident tempor eiusmod sit nisi pariatur cillum do excepteur magna. Lorem irure commodo et pariatur commodo nulla. Laborum fugiat ex qui deserunt sint et cupidatat.',
            'category_id' => $frontend->id
        ]);

        Blog::create([
            'title' => "What is Pure PHP?",
            'slug' => 'pure-php',
            'intro' => "This is about pure PHP.",
            'body' => 'Amet duis excepteur nisi magna eiusmod sit. Sit ad ullamco irure sunt Lorem sunt esse sint qui ad aute amet. Ex tempor officia qui id. Proident sunt occaecat nulla ea commodo nulla labore.',
            'category_id' => $backend->id,
        ]);
    }
}
