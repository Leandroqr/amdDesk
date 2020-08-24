<?php

use Illuminate\Database\Seeder;

class SeccionesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('secciones')->delete();
        
        \DB::table('secciones')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Soporte',
                'created_at' => '2020-06-01 15:47:29',
                'updated_at' => '2020-06-01 15:47:29',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Desarrollo',
                'created_at' => '2020-06-01 15:47:35',
                'updated_at' => '2020-06-01 15:47:35',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'SGI - Procesos del Negocio',
                'created_at' => '2020-06-01 15:48:01',
                'updated_at' => '2020-06-25 15:24:05',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'SGI - Infraestructura TI',
                'created_at' => '2020-06-01 15:48:15',
                'updated_at' => '2020-06-25 15:22:41',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'SGI - Instalaciones',
                'created_at' => '2020-06-01 15:48:37',
                'updated_at' => '2020-06-25 15:22:55',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'SGI - Ambiente de Producción',
                'created_at' => '2020-06-25 15:24:42',
                'updated_at' => '2020-06-25 15:24:42',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'SGI - Diseño y Desarrollo',
                'created_at' => '2020-06-25 15:25:06',
                'updated_at' => '2020-06-25 15:25:06',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'SGI - Seguridad Informatica',
                'created_at' => '2020-06-25 15:25:54',
                'updated_at' => '2020-06-25 15:25:54',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}