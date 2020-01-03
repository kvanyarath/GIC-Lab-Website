<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlideShowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slide_shows')->insert([
            [
            	'title' => 'slide_1.jpg',
            	'description' => null,
            	'image_id' => null
            ],
            [
            	'title' => 'slide_2.jpg',
            	'description' => null,
            	'image_id' => null
            ],
            [
            	'title' => 'slide_3.png',
            	'description' => null,
            	'image_id' => null
            ],
            [
            	'title' => 'slide_4.jpg',
            	'description' => null,
            	'image_id' => null
            ],
            [
            	'title' => 'slide_5.jpg',
            	'description' => null,
            	'image_id' => null
            ]
        ]);
    }
}
