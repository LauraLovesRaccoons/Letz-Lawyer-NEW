<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Lawyer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();

        \App\Models\User::factory()->create([
           'name' => 'Test User',
             'email' => 'test@example.com',
             'password'=> bcrypt('password'),
         ]);
         
         Lawyer::factory(5)->create([
            'user_id' => $user->id
        ]);
    }
}
