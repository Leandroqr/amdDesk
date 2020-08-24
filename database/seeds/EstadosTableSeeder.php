<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('estados')->delete();
        
        \DB::table('estados')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Abierto',
                'color' => NULL,
                'created_at' => '2020-06-01 15:46:19',
                'updated_at' => '2020-06-01 15:46:19',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Pendiente Acción Usuario',
                'color' => NULL,
                'created_at' => '2020-06-01 15:46:31',
                'updated_at' => '2020-06-01 15:46:31',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Cerrado',
                'color' => '#000000',
                'created_at' => '2020-06-01 15:46:45',
                'updated_at' => '2020-06-16 00:37:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}