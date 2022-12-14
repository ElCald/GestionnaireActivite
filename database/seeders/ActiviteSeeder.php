<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Activite;
use App\Models\ActiviteHoraires;
use App\Models\HoraireActivite;

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
            'taille' => 12,
        ]);

        Activite::create([
            'nom' => 'Garderie',
            'description' => 'Garde d\'enfant',
            'taille' => 24,
        ]);

        Activite::create([
            'nom' => 'Aqua-Poney',
            'description' => 'Poney non fournis',
            'taille' => 5,
        ]);

        $horaires = DB::table('horaires')->pluck('id');
        $activites = DB::table('activites')->pluck('id');
        $faker = \Faker\Factory::create();
        
        foreach($activites as $idActivites){
            for($i=0; $i<rand(1,3); $i++){
                HoraireActivite::create([
                    'activite_id' => $idActivites,
                    'horaire_id' => $faker->randomElement($horaires)
                ]);
            }
        }//fin foreach


    }
}
