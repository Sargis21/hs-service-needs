<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            ['img' => 'services-1.jpg', 'title' => 'Best Services for you', 'text' => 'Our template is simple and effective. This is an alternating simple content with a squared size image. Menu hover is #9CC and text #FFF'],
            ['img' => 'services-2.jpg', 'title' => 'Customer Satisfaction', 'text' => 'Feel free to contact TemplateMo for any kind of question. If you wish to support us, you can make a PayPal donation. Thank you.'],
            ['img' => 'services-3.jpg', 'title' => 'Template Usage', 'text' => 'You are free to use this template for your website either commercial or personal.']
        ]); 
    }
}
