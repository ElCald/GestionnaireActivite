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
        $tabJour = array("Lunid", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
        $tabJournee = array("matin", "apres-midi", "matin / apres-midi");
        return [
            'jour' => $tabJour[rand(0,6)],
            'journee' => $tabJournee[rand(0,2)],
        ];
        
    }
}
