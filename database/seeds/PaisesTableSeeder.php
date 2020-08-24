<?php

use Illuminate\Database\Seeder;

class PaisesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('paises')->delete();
        
        \DB::table('paises')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descripcion' => 'COLOMBIA',
                'postal_id' => 'CO',
                'created_at' => '2020-06-01 15:43:56',
                'updated_at' => '2020-06-01 15:43:56',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'descripcion' => 'ECUADOR',
                'postal_id' => 'EC',
                'created_at' => '2020-07-01 08:42:18',
                'updated_at' => '2020-07-01 08:42:18',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}