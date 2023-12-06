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
