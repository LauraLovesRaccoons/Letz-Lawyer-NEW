<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LawyerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->name(),
            'tags' => 'Family,Criminal,Corporate',
            'company' => $this->faker->company(),
            'email' => $this->faker->companyEmail(),
            'website' => $this->faker->url(),
            'location'=> $this->faker->city(),
            'description' => $this->faker->paragraphs(5, true),
        ];
    }
}
