<?php

use Illuminate\Database\Seeder;

class AplicacionesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('aplicaciones')->delete();
        
        \DB::table('aplicaciones')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Preventa',
                'created_at' => '2020-06-01 15:40:57',
                'updated_at' => '2020-06-01 15:40:57',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Autoventa',
                'created_at' => '2020-06-01 15:41:23',
                'updated_at' => '2020-06-01 15:41:23',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Distribución',
                'created_at' => '2020-06-01 15:41:39',
                'updated_at' => '2020-06-01 15:41:39',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Felam',
                'created_at' => '2020-06-01 15:41:46',
                'updated_at' => '2020-06-01 15:41:46',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Apedir',
                'created_at' => '2020-06-01 15:41:52',
                'updated_at' => '2020-06-01 15:41:52',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Web Gestión',
                'created_at' => '2020-06-01 15:42:01',
                'updated_at' => '2020-06-01 15:42:01',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Web Maestros',
                'created_at' => '2020-06-01 15:42:11',
                'updated_at' => '2020-06-01 15:42:11',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Salud',
                'created_at' => '2020-06-01 15:42:20',
                'updated_at' => '2020-06-01 15:42:20',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Certificado Electrónico',
                'created_at' => '2020-06-01 15:42:30',
                'updated_at' => '2020-06-01 15:42:30',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Supervisores',
                'created_at' => '2020-06-01 15:42:41',
                'updated_at' => '2020-06-01 15:42:41',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Erp',
                'created_at' => '2020-06-01 15:42:48',
                'updated_at' => '2020-06-01 15:42:48',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Web Pedidos Distribuidor',
                'created_at' => '2020-06-01 15:43:28',
                'updated_at' => '2020-06-01 15:43:28',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Mobicontrol',
                'created_at' => '2020-06-01 15:43:38',
                'updated_at' => '2020-06-09 20:07:35',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Sistema de Integración',
                'created_at' => '2020-07-01 18:26:45',
                'updated_at' => '2020-07-01 18:26:45',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}