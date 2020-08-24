<?php

use Illuminate\Database\Seeder;

class TipoclsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipocls')->delete();
        
        \DB::table('tipocls')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Directo Alpina',
                'created_at' => '2020-06-01 15:44:13',
                'updated_at' => '2020-06-01 15:44:13',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Distribuidor Alpina',
                'created_at' => '2020-06-01 15:44:21',
                'updated_at' => '2020-06-01 15:44:21',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Distribuidor Varios',
                'created_at' => '2020-06-01 15:44:32',
                'updated_at' => '2020-06-01 15:44:32',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}