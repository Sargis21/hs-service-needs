<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_pages')->insert([
            'title' => 'Diagoona HTML Template Test',
            'text_1' => 'Diagoona is provided by TemplateMo website. You are allowed to use this template for your websites. You are NOT allowed to redistribute this template ZIP file for a download purpose on any template collection website.3',
            'text_2' => 'Diagoona is Bootstrap v4.4.1 layout. This BG is 50% transparent. You can set the background images auto play settings (true or false in line number 33) in templatemo-script.js file in js folder.'
        ]); 
    }
}
