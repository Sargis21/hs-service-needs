<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'title' => 'About Diagoona Template',
            'about_1' => 'Cras quam urna, interdum at posuere ac, tincidunt ut ipsum. Nam condimentum placerat enim. Nullam euismod sapien.',
            'about_2' => 'Nunc id hendrerit nunc. Etiam ultricies arcu sem, vel dapibus lacus lacinia quis. Nunc auctor placerat nisi ac ultrices.',
            'about_3' => 'Vestibulum imperdiet hendrerit nibh. Integer sit amet lacus et nunc auctor tincidunt eu ac sapien. Ut suscipit velit eget faucibus finibus.',
            'about_4' => 'Prasent eget enim vitae sapien egestas aliquet non quis neque. Duis pharetra varius massa, ut bibendum tortor sodales ac.'
        ]); 
    }
}
