<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Lawyer;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name'=> 'John Doe',
            'email'=> 'john.doe1@cap4labs.com',
            'password'=> bcrypt('password'),
        ]);

        Lawyer::factory(5)->create([
            'user_id' => $user->id
        ]);
         
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
