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
    protected $model = Lawyer::class;

    public function definition(): array
    {
        $tags = ['Family', 'Criminal', 'Corporate'];

        return [
            'name' => $this->faker->name(),
            'tags' => implode(',', $tags),
            'company' => $this->faker->company(),
            'email' => $this->faker->companyEmail(),
            'website' => $this->faker->url(),
            'location'=> $this->faker->city(),
            'description' => $this->faker->paragraphs(5, true)
        ];

    
    }
    
  
  
 
}

