<?php

namespace Database\Factories;

use App\Models\Lawyer;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lawyer as Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lawyer>
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Model>
 */
class LawyerFactory extends Factory
{
    protected $model = Lawyer::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     
     */


    public function definition(): array
    {
        // a 6 times loop to generate 6 random specialty ids
        $specialty = [];
        for ($i = 0; $i < 6; $i++) {
            $specialty[] = $this->faker->numberBetween(1, 32); // Generate 6 random ids from 1 and 32 - dupes can happen though
        }

        return [
            'company' => $this->faker->company(),
            'specialty' => [],                              // ?
            'location' => $this->faker->address(),
            'languages' => $this->faker->paragraphs(1, true),   // placeholder text for now
            'email' => $this->faker->companyEmail(),
            'phone' => $this->faker->phoneNumber(),
            'website' => $this->faker->url(),
            'logo' => $this->faker->imageUrl("https://thispersondoesnotexist.com/"),
            'description' => $this->faker->paragraphs(5, true),
            //
            'hidden' => true,   // generated accounts have a hidden flag for future use - disabling accounts w/o deleting them for example
        ];
    }
}
