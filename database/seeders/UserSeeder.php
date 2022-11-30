<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Compte admin
        User::create([
            'name' => 'Chuck Norris',
            'email' => 'gmail@chuck-norris.com',
            'email_verified_at' => now(),
            'password' => bcrypt('chucknorris'), // password
            'remember_token' => '',
            'admin' => true,
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'), // password
            'remember_token' => '',
            'admin' => true,
        ]);

        //Compte utilisateur
        User::create([
            'name' => 'Beta tester',
            'email' => 'test@test.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234'), // password
            'remember_token' => '',
            'admin' => false,
        ]);

        User::factory()->count(5)->create();
    }
}
