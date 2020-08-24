<?php

use Illuminate\Database\Seeder;

class ModeloatencionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('modeloatencion')->delete();
        
        \DB::table('modeloatencion')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Whatsapp',
                'created_at' => '2020-06-01 15:45:07',
                'updated_at' => '2020-06-01 15:45:07',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Teléfono',
                'created_at' => '2020-06-01 15:45:19',
                'updated_at' => '2020-06-01 15:45:19',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'E-mail',
                'created_at' => '2020-06-01 15:45:35',
                'updated_at' => '2020-06-01 15:45:35',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}