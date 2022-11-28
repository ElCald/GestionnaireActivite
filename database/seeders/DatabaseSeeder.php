<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('activite_enfant')->delete(); // Pour vider la table ; uniquement en dev.
        DB::table('activites')->delete(); // Pour vider la table ; uniquement en dev.
        DB::table('enfants')->delete(); // Pour vider la table ; uniquement en dev.
        DB::table('users')->delete(); // Pour vider la table ; uniquement en dev.

        $this->call([UserSeeder::class, ActiviteSeeder::class, EnfantSeeder::class]);
    }

}
