<?php

namespace Database\Factories;

use App\Models\Lawyer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lawyer>
 */
class LawyerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Lawyer::class;
    public function definition(): array
    {
        

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            // Add other fields as needed
        ];
    }
}
