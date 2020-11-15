<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'title' => 'Contact Us',
            'text' => 'Etiam et egestas arcu. Fusce congue quis elit vitae commodo. Cras neque mauris, vehicula in ipsum sit amet, faucibus aliquam arcu.',
        ]); 
    }
}
