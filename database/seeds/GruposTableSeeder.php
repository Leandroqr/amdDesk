<?php

use Illuminate\Database\Seeder;

class GruposTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('grupos')->delete();
        
        \DB::table('grupos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Nivel 1',
                'created_at' => '2020-06-01 15:47:01',
                'updated_at' => '2020-06-01 15:47:01',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Nivel 2',
                'created_at' => '2020-06-01 15:47:07',
                'updated_at' => '2020-06-01 15:47:07',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Nivel 3',
                'created_at' => '2020-06-01 15:47:14',
                'updated_at' => '2020-06-01 15:47:14',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Nivel 4',
                'created_at' => '2020-06-01 15:47:20',
                'updated_at' => '2020-06-01 15:47:20',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}