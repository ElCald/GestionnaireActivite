<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Enfant;
use App\Models\ActiviteEnfant;

class EnfantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('enfants')->truncate();

        Enfant::factory()->count(5)->create();

        $enfants = DB::table('enfants')->pluck('id');
        $activites = DB::table('activites')->pluck('id');
        $faker = \Faker\Factory::create();
        
        foreach($enfants as $idEnfants){
            for($i=0; $i<rand(1,3); $i++){
                ActiviteEnfant::create([
                    'enfant_id' => $idEnfants,
                    'activite_id' => $faker->randomElement($activites)
                ]);
            }
            
        }//fin foreach
    }
}
