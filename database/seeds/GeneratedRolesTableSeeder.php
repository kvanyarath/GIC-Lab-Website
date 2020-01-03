<?php

use Illuminate\Database\Seeder;

class GeneratedRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Editor',
                'display_name' => 'Content Editor',
                'created_at' => '2019-07-26 10:24:54',
                'updated_at' => '2019-07-26 10:24:54',
            ),
        ));
        
        
    }
}