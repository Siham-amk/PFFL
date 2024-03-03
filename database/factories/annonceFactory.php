<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\annonce>
 */
class annonceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'adresse' => fake()->name(),
            'ville' => fake()->name(),
            'type' => fake()->name(),
            'nbchambre' => fake()->numerify(),
            'surface' => fake()->numerify(),
            'prix' => fake()->numerify(),
            
            'proprietaire' =>fake()-> numerify(),

           
            // 'remember_token' => Str::random(10),
        ];
           
    }
}
