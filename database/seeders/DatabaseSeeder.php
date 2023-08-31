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

        $frontend = Category::factory()->create(['name' => 'frontend']);
        $backend = Category::factory()->create(['name' => 'backend']);

        $userOne = User::factory()->create(['name' => "Austin"]);
        $userTwo = User::factory()->create(['name' => "David"]);
        Blog::factory(2)->create(['category_id' => $frontend->id, 'user_id' => $userTwo]);
        Blog::factory(4)->create(['category_id' => $backend->id, 'user_id' => $userOne]);
    }
}