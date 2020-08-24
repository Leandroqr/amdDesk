<?php

use Illuminate\Database\Seeder;

class SgiestadoincidentesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sgiestadoincidentes')->delete();
        
        \DB::table('sgiestadoincidentes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Abierto',
                'created_at' => '2020-06-23 12:09:43',
                'updated_at' => '2020-06-23 12:09:43',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Cerrado',
                'created_at' => '2020-06-23 12:09:52',
                'updated_at' => '2020-06-23 12:09:52',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Pendiente de resolución al ser escalado',
                'created_at' => '2020-06-23 12:10:11',
                'updated_at' => '2020-06-23 12:10:11',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Pendiente de evidencia',
                'created_at' => '2020-06-23 12:10:23',
                'updated_at' => '2020-06-23 12:10:23',
            ),
        ));
        
        
    }
}