<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activite_enfants')->delete(); // Pour vider la table ; uniquement en dev.
        DB::table('activite_horaires')->delete(); // Pour vider la table ; uniquement en dev.
        DB::table('activites')->delete(); // Pour vider la table ; uniquement en dev.
        DB::table('enfants')->delete(); // Pour vider la table ; uniquement en dev.
        DB::table('users')->delete(); // Pour vider la table ; uniquement en dev.
        DB::table('horaires')->delete(); // Pour vider la table ; uniquement en dev.
    
        $this->call([UserSeeder::class, horaireSeeder::class, ActiviteSeeder::class, EnfantSeeder::class]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
