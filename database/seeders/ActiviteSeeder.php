<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Activite;
use App\Models\ActiviteHoraires;

class ActiviteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Activite::create([
            'nom' => 'Natation',
            'description' => 'Piscine',
        ]);

        Activite::create([
            'nom' => 'Garderie',
            'description' => 'Garde d\'enfant',
        ]);

        Activite::create([
            'nom' => 'Aqua-Poney',
            'description' => 'Poney non fournis',
        ]);


        /*$activite = DB::table('activites')->pluck('id');
        $horaire = DB::table('horaires')->pluck('id');
        $faker = \Faker\Factory::create();
        foreach($activite as $idActivite) {
            for($i = 0; $i < 2; $i++) {
                ActiviteHoraires::create([
                    'activite_id' => $idActivite,
                    'horaire_id' => $faker->randomElement($horaire)
                ]);
            }
        }*/
    }
}
