<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Lawyer;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed Users
        User::factory(10)->create();

        // Seed a specific user
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        // Seed Lawyers associated with the user
        Lawyer::factory(5)->create([
            'user_id' => $user->id,
        ]);

        // Seed Categories
        Category::factory(5)->create();

        // Seed Posts associated with categories
        Post::factory(10)->create([
            'category_id' => function () {
                return Category::factory()->create()->id;
            },
        ]);

        
    }
}
