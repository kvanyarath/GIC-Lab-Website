<?php

use Illuminate\Database\Seeder;

class GeneratedMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
        ));
        
        
    }
}