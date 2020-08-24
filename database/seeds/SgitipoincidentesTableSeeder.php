<?php

use Illuminate\Database\Seeder;

class SgitipoincidentesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sgitipoincidentes')->delete();
        
        \DB::table('sgitipoincidentes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Interno',
                'created_at' => '2020-06-23 12:11:46',
                'updated_at' => '2020-06-23 12:11:46',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Externo',
                'created_at' => '2020-06-23 12:12:01',
                'updated_at' => '2020-06-23 12:12:01',
            ),
            2 => 
            array (
                'id' => 3,
            'name' => 'Ambos(Int/ext)',
                'created_at' => '2020-06-23 12:12:34',
                'updated_at' => '2020-06-23 12:12:34',
            ),
        ));
        
        
    }
}