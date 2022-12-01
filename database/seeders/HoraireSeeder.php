<?php

namespace Database\Seeders;

use App\Models\Horaire;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HoraireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Horaire::factory()->count(5)->create();
    }
}
