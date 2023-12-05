<?php

namespace Database\Factories;

use Faker\Guesser\Name;
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
    public function definition(): array
    {
        return [
            'company' => $this->faker->name(),
            'specialty' => [2, 3, 15, 5, 6, 12, 18, 30, 7, 19, 28, 1, 0],   // this gives 12 valid entries including the other and the 13 is an empty one
            'location' => $this->faker->location(),
            'languages' => "English, Spanish, Luxembourgish",   // a fixed string for languages also ' can be used
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'logo' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraphs(6, true),     // paragraphs for the about me
            'website' => $this->faker->url(),
        ];
    }
}
