<?php

use Illuminate\Database\Seeder;

class SgiestadoactualincidentesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sgiestadoactualincidentes')->delete();
        
        \DB::table('sgiestadoactualincidentes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Sucediendo',
                'created_at' => '2020-06-23 12:08:35',
                'updated_at' => '2020-06-23 12:08:35',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Sucedió',
                'created_at' => '2020-06-23 12:08:46',
                'updated_at' => '2020-06-30 09:27:33',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Sucede Nuevamente',
                'created_at' => '2020-06-23 12:09:01',
                'updated_at' => '2020-06-30 09:27:24',
            ),
        ));
        
        
    }
}