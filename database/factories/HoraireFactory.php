<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Horaire>
 */
class HoraireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
               
        return [
            'jour' => $this->faker->dayOfWeek,
            'heureDebut' => $this->faker->time($format = 'H:i:s'),
            'heureFin' => $this->faker->time($format = 'H:i:s'),
        ];
        
    }
}
