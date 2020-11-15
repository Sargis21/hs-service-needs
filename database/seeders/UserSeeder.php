<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Shirikchyan',
            'email' => 'hs-service-needs@hs-service-needs.com',
            'password' => '$2y$10$.vb9NFATgSxILyeCo.oAqeyr6e0bxv0bOe0c6XIdqRrUHIMyX.HhG'
        ]); 
    }
}
