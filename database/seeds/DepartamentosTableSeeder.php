<?php

use Illuminate\Database\Seeder;

class DepartamentosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('departamentos')->delete();
        
        \DB::table('departamentos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'ANTIOQUIA',
                'postal_id' => '05',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'ATLANTICO',
                'postal_id' => '08',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'BOGOTA D.C.',
                'postal_id' => '11',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'BOLIVAR',
                'postal_id' => '13',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'BOYACA',
                'postal_id' => '15',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'CALDAS',
                'postal_id' => '17',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'CAQUETA',
                'postal_id' => '18',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'CAUCA',
                'postal_id' => '19',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'CESAR',
                'postal_id' => '20',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'CORDOBA',
                'postal_id' => '23',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'CUNDINAMARCA',
                'postal_id' => '25',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'CHOCO',
                'postal_id' => '27',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'HUILA',
                'postal_id' => '41',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'LA GUAJIRA',
                'postal_id' => '44',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'MAGDALENA',
                'postal_id' => '47',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'META',
                'postal_id' => '50',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'NARIÑO',
                'postal_id' => '52',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'NORTE DE SANTANDER',
                'postal_id' => '54',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'QUINDIO',
                'postal_id' => '63',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'RISARALDA',
                'postal_id' => '66',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'SANTANDER',
                'postal_id' => '68',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'SUCRE',
                'postal_id' => '70',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'TOLIMA',
                'postal_id' => '73',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'VALLE DEL CAUCA',
                'postal_id' => '76',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'ARAUCA',
                'postal_id' => '81',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'CASANARE',
                'postal_id' => '85',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'PUTUMAYO',
                'postal_id' => '86',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'ARCHIPIELAGO DE SAN ANDRES- PROVIDENCIA Y SANTA CATALINA',
                'postal_id' => '88',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'AMAZONAS',
                'postal_id' => '91',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'GUAINIA',
                'postal_id' => '94',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'GUAVIARE',
                'postal_id' => '95',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'VAUPES',
                'postal_id' => '97',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'VICHADA',
                'postal_id' => '99',
                'pais_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'PICHINCHA',
                'postal_id' => '9991',
                'pais_id' => 2,
                'created_at' => '2020-07-01 08:42:03',
                'updated_at' => '2020-07-01 08:42:03',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'GUAYAS',
                'postal_id' => '9992',
                'pais_id' => 2,
                'created_at' => '2020-07-01 08:42:49',
                'updated_at' => '2020-07-01 08:42:49',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'CARCHI',
                'postal_id' => '9993',
                'pais_id' => 2,
                'created_at' => '2020-07-01 08:43:05',
                'updated_at' => '2020-07-01 08:43:05',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}