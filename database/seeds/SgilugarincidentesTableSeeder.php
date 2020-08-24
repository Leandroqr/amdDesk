<?php

use Illuminate\Database\Seeder;

class SgilugarincidentesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sgilugarincidentes')->delete();
        
        \DB::table('sgilugarincidentes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Oficina Principal',
                'created_at' => '2020-06-18 11:22:04',
                'updated_at' => '2020-06-18 11:22:04',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Área especifica de la empresa',
                'created_at' => '2020-06-23 12:06:24',
                'updated_at' => '2020-06-23 12:06:24',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Instalaciones del cliente',
                'created_at' => '2020-06-23 12:06:39',
                'updated_at' => '2020-06-23 12:06:39',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Instalaciones del Proveedor',
                'created_at' => '2020-06-23 12:07:01',
                'updated_at' => '2020-06-23 12:07:01',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'En la Nube-remoto',
                'created_at' => '2020-06-23 12:07:21',
                'updated_at' => '2020-06-23 12:07:21',
            ),
            5 => 
            array (
                'id' => 6,
            'name' => 'Instalaciones externas (calle, Homeoffice)',
                'created_at' => '2020-06-23 12:07:49',
                'updated_at' => '2020-06-23 12:07:49',
            ),
        ));
        
        
    }
}