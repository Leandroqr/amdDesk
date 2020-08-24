<?php

use Illuminate\Database\Seeder;

class CiudadesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ciudades')->delete();
        
        \DB::table('ciudades')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'MEDELLIN',
                'dvpola_id' => '05001',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'ABEJORRAL',
                'dvpola_id' => '05002',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'ABRIAQUI',
                'dvpola_id' => '05004',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'ALEJANDRIA',
                'dvpola_id' => '05021',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'AMAGA',
                'dvpola_id' => '05030',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'AMALFI',
                'dvpola_id' => '05031',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'ANDES',
                'dvpola_id' => '05034',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'ANGELOPOLIS',
                'dvpola_id' => '05036',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'ANGOSTURA',
                'dvpola_id' => '05038',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'ANORI',
                'dvpola_id' => '05040',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'SANTA FE DE ANTIOQUIA',
                'dvpola_id' => '05042',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'ANZA',
                'dvpola_id' => '05044',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'APARTADO',
                'dvpola_id' => '05045',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'ARBOLETES',
                'dvpola_id' => '05051',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'ARGELIA',
                'dvpola_id' => '05055',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'ARMENIA',
                'dvpola_id' => '05059',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'BARBOSA',
                'dvpola_id' => '05079',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'BELMIRA',
                'dvpola_id' => '05086',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'BELLO',
                'dvpola_id' => '05088',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'BETANIA',
                'dvpola_id' => '05091',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'BETULIA',
                'dvpola_id' => '05093',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'CIUDAD BOLIVAR',
                'dvpola_id' => '05101',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'BRICEÑO',
                'dvpola_id' => '05107',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'BURITICA',
                'dvpola_id' => '05113',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'CACERES',
                'dvpola_id' => '05120',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'CAICEDO',
                'dvpola_id' => '05125',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'CALDAS',
                'dvpola_id' => '05129',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'CAMPAMENTO',
                'dvpola_id' => '05134',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'CAÑASGORDAS',
                'dvpola_id' => '05138',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'CARACOLI',
                'dvpola_id' => '05142',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'CARAMANTA',
                'dvpola_id' => '05145',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'CAREPA',
                'dvpola_id' => '05147',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'EL CARMEN DE VIBORAL',
                'dvpola_id' => '05148',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'CAROLINA',
                'dvpola_id' => '05150',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'CAUCASIA',
                'dvpola_id' => '05154',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'CHIGORODO',
                'dvpola_id' => '05172',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'CISNEROS',
                'dvpola_id' => '05190',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'COCORNA',
                'dvpola_id' => '05197',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'CONCEPCION',
                'dvpola_id' => '05206',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'CONCORDIA',
                'dvpola_id' => '05209',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'COPACABANA',
                'dvpola_id' => '05212',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'DABEIBA',
                'dvpola_id' => '05234',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'DONMATIAS',
                'dvpola_id' => '05237',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'EBEJICO',
                'dvpola_id' => '05240',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'EL BAGRE',
                'dvpola_id' => '05250',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'ENTRERRIOS',
                'dvpola_id' => '05264',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'ENVIGADO',
                'dvpola_id' => '05266',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'FREDONIA',
                'dvpola_id' => '05282',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'FRONTINO',
                'dvpola_id' => '05284',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'GIRALDO',
                'dvpola_id' => '05306',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'GIRARDOTA',
                'dvpola_id' => '05308',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'GOMEZ PLATA',
                'dvpola_id' => '05310',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'GRANADA',
                'dvpola_id' => '05313',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'GUADALUPE',
                'dvpola_id' => '05315',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'GUARNE',
                'dvpola_id' => '05318',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'GUATAPE',
                'dvpola_id' => '05321',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'HELICONIA',
                'dvpola_id' => '05347',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'HISPANIA',
                'dvpola_id' => '05353',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'ITAGUI',
                'dvpola_id' => '05360',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'ITUANGO',
                'dvpola_id' => '05361',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'JARDIN',
                'dvpola_id' => '05364',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'JERICO',
                'dvpola_id' => '05368',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'LA CEJA',
                'dvpola_id' => '05376',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'LA ESTRELLA',
                'dvpola_id' => '05380',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'LA PINTADA',
                'dvpola_id' => '05390',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'LA UNION',
                'dvpola_id' => '05400',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'LIBORINA',
                'dvpola_id' => '05411',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'MACEO',
                'dvpola_id' => '05425',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'MARINILLA',
                'dvpola_id' => '05440',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'MONTEBELLO',
                'dvpola_id' => '05467',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'MURINDO',
                'dvpola_id' => '05475',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'MUTATA',
                'dvpola_id' => '05480',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'NARIÑO',
                'dvpola_id' => '05483',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'NECOCLI',
                'dvpola_id' => '05490',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'NECHI',
                'dvpola_id' => '05495',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'OLAYA',
                'dvpola_id' => '05501',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'PEÑOL',
                'dvpola_id' => '05541',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'PEQUE',
                'dvpola_id' => '05543',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'PUEBLORRICO',
                'dvpola_id' => '05576',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'PUERTO BERRIO',
                'dvpola_id' => '05579',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'PUERTO NARE',
                'dvpola_id' => '05585',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'PUERTO TRIUNFO',
                'dvpola_id' => '05591',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'REMEDIOS',
                'dvpola_id' => '05604',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'RETIRO',
                'dvpola_id' => '05607',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'RIONEGRO',
                'dvpola_id' => '05615',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'SABANALARGA',
                'dvpola_id' => '05628',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'SABANETA',
                'dvpola_id' => '05631',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'SALGAR',
                'dvpola_id' => '05642',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'SAN ANDRES DE CUERQUIA',
                'dvpola_id' => '05647',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'SAN CARLOS',
                'dvpola_id' => '05649',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'SAN FRANCISCO',
                'dvpola_id' => '05652',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'SAN JERONIMO',
                'dvpola_id' => '05656',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'SAN JOSE DE LA MONTAÑA',
                'dvpola_id' => '05658',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'SAN JUAN DE URABA',
                'dvpola_id' => '05659',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'SAN LUIS',
                'dvpola_id' => '05660',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'SAN PEDRO DE LOS MILAGROS',
                'dvpola_id' => '05664',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'SAN PEDRO DE URABA',
                'dvpola_id' => '05665',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'SAN RAFAEL',
                'dvpola_id' => '05667',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'SAN ROQUE',
                'dvpola_id' => '05670',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'SAN VICENTE FERRER',
                'dvpola_id' => '05674',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'SANTA BARBARA',
                'dvpola_id' => '05679',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'SANTA ROSA DE OSOS',
                'dvpola_id' => '05686',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'SANTO DOMINGO',
                'dvpola_id' => '05690',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'EL SANTUARIO',
                'dvpola_id' => '05697',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'SEGOVIA',
                'dvpola_id' => '05736',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'SONSON',
                'dvpola_id' => '05756',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'SOPETRAN',
                'dvpola_id' => '05761',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'TAMESIS',
                'dvpola_id' => '05789',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'TARAZA',
                'dvpola_id' => '05790',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'TARSO',
                'dvpola_id' => '05792',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'TITIRIBI',
                'dvpola_id' => '05809',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'TOLEDO',
                'dvpola_id' => '05819',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'TURBO',
                'dvpola_id' => '05837',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'URAMITA',
                'dvpola_id' => '05842',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'URRAO',
                'dvpola_id' => '05847',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'VALDIVIA',
                'dvpola_id' => '05854',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'VALPARAISO',
                'dvpola_id' => '05856',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'VEGACHI',
                'dvpola_id' => '05858',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'VENECIA',
                'dvpola_id' => '05861',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'VIGIA DEL FUERTE',
                'dvpola_id' => '05873',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'YALI',
                'dvpola_id' => '05885',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'YARUMAL',
                'dvpola_id' => '05887',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'YOLOMBO',
                'dvpola_id' => '05890',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'YONDO',
                'dvpola_id' => '05893',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'ZARAGOZA',
                'dvpola_id' => '05895',
                'dep_id' => '05',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'BARRANQUILLA',
                'dvpola_id' => '08001',
                'dep_id' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'BARANOA',
                'dvpola_id' => '08078',
                'dep_id' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'CAMPO DE LA CRUZ',
                'dvpola_id' => '08137',
                'dep_id' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'CANDELARIA',
                'dvpola_id' => '08141',
                'dep_id' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'GALAPA',
                'dvpola_id' => '08296',
                'dep_id' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'JUAN DE ACOSTA',
                'dvpola_id' => '08372',
                'dep_id' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'LURUACO',
                'dvpola_id' => '08421',
                'dep_id' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'MALAMBO',
                'dvpola_id' => '08433',
                'dep_id' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'MANATI',
                'dvpola_id' => '08436',
                'dep_id' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'PALMAR DE VARELA',
                'dvpola_id' => '08520',
                'dep_id' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'PIOJO',
                'dvpola_id' => '08549',
                'dep_id' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'POLONUEVO',
                'dvpola_id' => '08558',
                'dep_id' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'PONEDERA',
                'dvpola_id' => '08560',
                'dep_id' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'PUERTO COLOMBIA',
                'dvpola_id' => '08573',
                'dep_id' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'REPELON',
                'dvpola_id' => '08606',
                'dep_id' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'SABANAGRANDE',
                'dvpola_id' => '08634',
                'dep_id' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'SABANALARGA',
                'dvpola_id' => '08638',
                'dep_id' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'SANTA LUCIA',
                'dvpola_id' => '08675',
                'dep_id' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'SANTO TOMAS',
                'dvpola_id' => '08685',
                'dep_id' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'SOLEDAD',
                'dvpola_id' => '08758',
                'dep_id' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'SUAN',
                'dvpola_id' => '08770',
                'dep_id' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'TUBARA',
                'dvpola_id' => '08832',
                'dep_id' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'USIACURI',
                'dvpola_id' => '08849',
                'dep_id' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'BOGOTA, D.C.',
                'dvpola_id' => '11001',
                'dep_id' => '11',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'CARTAGENA DE INDIAS',
                'dvpola_id' => '13001',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'ACHI',
                'dvpola_id' => '13006',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'ALTOS DEL ROSARIO',
                'dvpola_id' => '13030',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'ARENAL',
                'dvpola_id' => '13042',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'ARJONA',
                'dvpola_id' => '13052',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'ARROYOHONDO',
                'dvpola_id' => '13062',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'BARRANCO DE LOBA',
                'dvpola_id' => '13074',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'CALAMAR',
                'dvpola_id' => '13140',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'CANTAGALLO',
                'dvpola_id' => '13160',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'CICUCO',
                'dvpola_id' => '13188',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'CORDOBA',
                'dvpola_id' => '13212',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'CLEMENCIA',
                'dvpola_id' => '13222',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'EL CARMEN DE BOLIVAR',
                'dvpola_id' => '13244',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'EL GUAMO',
                'dvpola_id' => '13248',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'EL PEÑON',
                'dvpola_id' => '13268',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'HATILLO DE LOBA',
                'dvpola_id' => '13300',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'MAGANGUE',
                'dvpola_id' => '13430',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'MAHATES',
                'dvpola_id' => '13433',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'MARGARITA',
                'dvpola_id' => '13440',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'MARIA LA BAJA',
                'dvpola_id' => '13442',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'MONTECRISTO',
                'dvpola_id' => '13458',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'MOMPOS',
                'dvpola_id' => '13468',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'MORALES',
                'dvpola_id' => '13473',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'NOROSI',
                'dvpola_id' => '13490',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'PINILLOS',
                'dvpola_id' => '13549',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'REGIDOR',
                'dvpola_id' => '13580',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'RIO VIEJO',
                'dvpola_id' => '13600',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'SAN CRISTOBAL',
                'dvpola_id' => '13620',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'SAN ESTANISLAO',
                'dvpola_id' => '13647',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'SAN FERNANDO',
                'dvpola_id' => '13650',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'SAN JACINTO',
                'dvpola_id' => '13654',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'SAN JACINTO DEL CAUCA',
                'dvpola_id' => '13655',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'SAN JUAN NEPOMUCENO',
                'dvpola_id' => '13657',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'SAN MARTIN DE LOBA',
                'dvpola_id' => '13667',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'SAN PABLO',
                'dvpola_id' => '13670',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'SANTA CATALINA',
                'dvpola_id' => '13673',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'SANTA ROSA',
                'dvpola_id' => '13683',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'SANTA ROSA DEL SUR',
                'dvpola_id' => '13688',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'SIMITI',
                'dvpola_id' => '13744',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'SOPLAVIENTO',
                'dvpola_id' => '13760',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'TALAIGUA NUEVO',
                'dvpola_id' => '13780',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'TIQUISIO',
                'dvpola_id' => '13810',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'TURBACO',
                'dvpola_id' => '13836',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'TURBANA',
                'dvpola_id' => '13838',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'VILLANUEVA',
                'dvpola_id' => '13873',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'ZAMBRANO',
                'dvpola_id' => '13894',
                'dep_id' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'TUNJA',
                'dvpola_id' => '15001',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'ALMEIDA',
                'dvpola_id' => '15022',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'AQUITANIA',
                'dvpola_id' => '15047',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'ARCABUCO',
                'dvpola_id' => '15051',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'BELEN',
                'dvpola_id' => '15087',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'BERBEO',
                'dvpola_id' => '15090',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'BETEITIVA',
                'dvpola_id' => '15092',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'BOAVITA',
                'dvpola_id' => '15097',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'BOYACA',
                'dvpola_id' => '15104',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'BRICEÑO',
                'dvpola_id' => '15106',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'BUENAVISTA',
                'dvpola_id' => '15109',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'BUSBANZA',
                'dvpola_id' => '15114',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'CALDAS',
                'dvpola_id' => '15131',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'CAMPOHERMOSO',
                'dvpola_id' => '15135',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'CERINZA',
                'dvpola_id' => '15162',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'CHINAVITA',
                'dvpola_id' => '15172',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'CHIQUINQUIRA',
                'dvpola_id' => '15176',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'CHISCAS',
                'dvpola_id' => '15180',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'CHITA',
                'dvpola_id' => '15183',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'CHITARAQUE',
                'dvpola_id' => '15185',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'CHIVATA',
                'dvpola_id' => '15187',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'CIENEGA',
                'dvpola_id' => '15189',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'COMBITA',
                'dvpola_id' => '15204',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'COPER',
                'dvpola_id' => '15212',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'CORRALES',
                'dvpola_id' => '15215',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'COVARACHIA',
                'dvpola_id' => '15218',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'CUBARA',
                'dvpola_id' => '15223',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'CUCAITA',
                'dvpola_id' => '15224',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'CUITIVA',
                'dvpola_id' => '15226',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'CHIQUIZA',
                'dvpola_id' => '15232',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'CHIVOR',
                'dvpola_id' => '15236',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'DUITAMA',
                'dvpola_id' => '15238',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'EL COCUY',
                'dvpola_id' => '15244',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'EL ESPINO',
                'dvpola_id' => '15248',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'FIRAVITOBA',
                'dvpola_id' => '15272',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'FLORESTA',
                'dvpola_id' => '15276',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'GACHANTIVA',
                'dvpola_id' => '15293',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'GAMEZA',
                'dvpola_id' => '15296',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'GARAGOA',
                'dvpola_id' => '15299',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'GUACAMAYAS',
                'dvpola_id' => '15317',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'GUATEQUE',
                'dvpola_id' => '15322',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'GUAYATA',
                'dvpola_id' => '15325',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'GUICAN DE LA SIERRA',
                'dvpola_id' => '15332',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'IZA',
                'dvpola_id' => '15362',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'JENESANO',
                'dvpola_id' => '15367',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'JERICO',
                'dvpola_id' => '15368',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'LABRANZAGRANDE',
                'dvpola_id' => '15377',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'LA CAPILLA',
                'dvpola_id' => '15380',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'LA VICTORIA',
                'dvpola_id' => '15401',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'LA UVITA',
                'dvpola_id' => '15403',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'VILLA DE LEYVA',
                'dvpola_id' => '15407',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'MACANAL',
                'dvpola_id' => '15425',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'MARIPI',
                'dvpola_id' => '15442',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'MIRAFLORES',
                'dvpola_id' => '15455',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'name' => 'MONGUA',
                'dvpola_id' => '15464',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 251,
                'name' => 'MONGUI',
                'dvpola_id' => '15466',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 252,
                'name' => 'MONIQUIRA',
                'dvpola_id' => '15469',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 253,
                'name' => 'MOTAVITA',
                'dvpola_id' => '15476',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 254,
                'name' => 'MUZO',
                'dvpola_id' => '15480',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 255,
                'name' => 'NOBSA',
                'dvpola_id' => '15491',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 256,
                'name' => 'NUEVO COLON',
                'dvpola_id' => '15494',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 257,
                'name' => 'OICATA',
                'dvpola_id' => '15500',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 258,
                'name' => 'OTANCHE',
                'dvpola_id' => '15507',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 259,
                'name' => 'PACHAVITA',
                'dvpola_id' => '15511',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 260,
                'name' => 'PAEZ',
                'dvpola_id' => '15514',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 261,
                'name' => 'PAIPA',
                'dvpola_id' => '15516',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 262,
                'name' => 'PAJARITO',
                'dvpola_id' => '15518',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 263,
                'name' => 'PANQUEBA',
                'dvpola_id' => '15522',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 264,
                'name' => 'PAUNA',
                'dvpola_id' => '15531',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 265,
                'name' => 'PAYA',
                'dvpola_id' => '15533',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 266,
                'name' => 'PAZ DE RIO',
                'dvpola_id' => '15537',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 267,
                'name' => 'PESCA',
                'dvpola_id' => '15542',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'name' => 'PISBA',
                'dvpola_id' => '15550',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 269,
                'name' => 'PUERTO BOYACA',
                'dvpola_id' => '15572',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 270,
                'name' => 'QUIPAMA',
                'dvpola_id' => '15580',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'id' => 271,
                'name' => 'RAMIRIQUI',
                'dvpola_id' => '15599',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'id' => 272,
                'name' => 'RAQUIRA',
                'dvpola_id' => '15600',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'id' => 273,
                'name' => 'RONDON',
                'dvpola_id' => '15621',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'id' => 274,
                'name' => 'SABOYA',
                'dvpola_id' => '15632',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'id' => 275,
                'name' => 'SACHICA',
                'dvpola_id' => '15638',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'id' => 276,
                'name' => 'SAMACA',
                'dvpola_id' => '15646',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'id' => 277,
                'name' => 'SAN EDUARDO',
                'dvpola_id' => '15660',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'id' => 278,
                'name' => 'SAN JOSE DE PARE',
                'dvpola_id' => '15664',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'id' => 279,
                'name' => 'SAN LUIS DE GACENO',
                'dvpola_id' => '15667',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'id' => 280,
                'name' => 'SAN MATEO',
                'dvpola_id' => '15673',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'id' => 281,
                'name' => 'SAN MIGUEL DE SEMA',
                'dvpola_id' => '15676',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'id' => 282,
                'name' => 'SAN PABLO DE BORBUR',
                'dvpola_id' => '15681',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'id' => 283,
                'name' => 'SANTANA',
                'dvpola_id' => '15686',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'id' => 284,
                'name' => 'SANTA MARIA',
                'dvpola_id' => '15690',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'name' => 'SANTA ROSA DE VITERBO',
                'dvpola_id' => '15693',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'name' => 'SANTA SOFIA',
                'dvpola_id' => '15696',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
                'name' => 'SATIVANORTE',
                'dvpola_id' => '15720',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'name' => 'SATIVASUR',
                'dvpola_id' => '15723',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'id' => 289,
                'name' => 'SIACHOQUE',
                'dvpola_id' => '15740',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'id' => 290,
                'name' => 'SOATA',
                'dvpola_id' => '15753',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'id' => 291,
                'name' => 'SOCOTA',
                'dvpola_id' => '15755',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'id' => 292,
                'name' => 'SOCHA',
                'dvpola_id' => '15757',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'id' => 293,
                'name' => 'SOGAMOSO',
                'dvpola_id' => '15759',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'id' => 294,
                'name' => 'SOMONDOCO',
                'dvpola_id' => '15761',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'id' => 295,
                'name' => 'SORA',
                'dvpola_id' => '15762',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'id' => 296,
                'name' => 'SOTAQUIRA',
                'dvpola_id' => '15763',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'id' => 297,
                'name' => 'SORACA',
                'dvpola_id' => '15764',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'id' => 298,
                'name' => 'SUSACON',
                'dvpola_id' => '15774',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'name' => 'SUTAMARCHAN',
                'dvpola_id' => '15776',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'id' => 300,
                'name' => 'SUTATENZA',
                'dvpola_id' => '15778',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'id' => 301,
                'name' => 'TASCO',
                'dvpola_id' => '15790',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'id' => 302,
                'name' => 'TENZA',
                'dvpola_id' => '15798',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'id' => 303,
                'name' => 'TIBANA',
                'dvpola_id' => '15804',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'id' => 304,
                'name' => 'TIBASOSA',
                'dvpola_id' => '15806',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'id' => 305,
                'name' => 'TINJACA',
                'dvpola_id' => '15808',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'id' => 306,
                'name' => 'TIPACOQUE',
                'dvpola_id' => '15810',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'id' => 307,
                'name' => 'TOCA',
                'dvpola_id' => '15814',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'id' => 308,
                'name' => 'TOGUI',
                'dvpola_id' => '15816',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'id' => 309,
                'name' => 'TOPAGA',
                'dvpola_id' => '15820',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'id' => 310,
                'name' => 'TOTA',
                'dvpola_id' => '15822',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'id' => 311,
                'name' => 'TUNUNGUA',
                'dvpola_id' => '15832',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'id' => 312,
                'name' => 'TURMEQUE',
                'dvpola_id' => '15835',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'id' => 313,
                'name' => 'TUTA',
                'dvpola_id' => '15837',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'id' => 314,
                'name' => 'TUTAZA',
                'dvpola_id' => '15839',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'id' => 315,
                'name' => 'ÚMBITA',
                'dvpola_id' => '15842',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'id' => 316,
                'name' => 'VENTAQUEMADA',
                'dvpola_id' => '15861',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'id' => 317,
                'name' => 'VIRACACHA',
                'dvpola_id' => '15879',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'id' => 318,
                'name' => 'ZETAQUIRA',
                'dvpola_id' => '15897',
                'dep_id' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'id' => 319,
                'name' => 'MANIZALES',
                'dvpola_id' => '17001',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'id' => 320,
                'name' => 'AGUADAS',
                'dvpola_id' => '17013',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'id' => 321,
                'name' => 'ANSERMA',
                'dvpola_id' => '17042',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'id' => 322,
                'name' => 'ARANZAZU',
                'dvpola_id' => '17050',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'id' => 323,
                'name' => 'BELALCAZAR',
                'dvpola_id' => '17088',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'id' => 324,
                'name' => 'CHINCHINA',
                'dvpola_id' => '17174',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'name' => 'FILADELFIA',
                'dvpola_id' => '17272',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'id' => 326,
                'name' => 'LA DORADA',
                'dvpola_id' => '17380',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'id' => 327,
                'name' => 'LA MERCED',
                'dvpola_id' => '17388',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'id' => 328,
                'name' => 'MANZANARES',
                'dvpola_id' => '17433',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'id' => 329,
                'name' => 'MARMATO',
                'dvpola_id' => '17442',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'id' => 330,
                'name' => 'MARQUETALIA',
                'dvpola_id' => '17444',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'id' => 331,
                'name' => 'MARULANDA',
                'dvpola_id' => '17446',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'id' => 332,
                'name' => 'NEIRA',
                'dvpola_id' => '17486',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'id' => 333,
                'name' => 'NORCASIA',
                'dvpola_id' => '17495',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'id' => 334,
                'name' => 'PACORA',
                'dvpola_id' => '17513',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'id' => 335,
                'name' => 'PALESTINA',
                'dvpola_id' => '17524',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'id' => 336,
                'name' => 'PENSILVANIA',
                'dvpola_id' => '17541',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'id' => 337,
                'name' => 'RIOSUCIO',
                'dvpola_id' => '17614',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'name' => 'RISARALDA',
                'dvpola_id' => '17616',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'id' => 339,
                'name' => 'SALAMINA',
                'dvpola_id' => '17653',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'id' => 340,
                'name' => 'SAMANA',
                'dvpola_id' => '17662',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'id' => 341,
                'name' => 'SAN JOSE',
                'dvpola_id' => '17665',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'id' => 342,
                'name' => 'SUPIA',
                'dvpola_id' => '17777',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'id' => 343,
                'name' => 'VICTORIA',
                'dvpola_id' => '17867',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'id' => 344,
                'name' => 'VILLAMARIA',
                'dvpola_id' => '17873',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'id' => 345,
                'name' => 'VITERBO',
                'dvpola_id' => '17877',
                'dep_id' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'id' => 346,
                'name' => 'FLORENCIA',
                'dvpola_id' => '18001',
                'dep_id' => '18',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'id' => 347,
                'name' => 'ALBANIA',
                'dvpola_id' => '18029',
                'dep_id' => '18',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'id' => 348,
                'name' => 'BELEN DE LOS ANDAQUIES',
                'dvpola_id' => '18094',
                'dep_id' => '18',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'id' => 349,
                'name' => 'CARTAGENA DEL CHAIRA',
                'dvpola_id' => '18150',
                'dep_id' => '18',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'id' => 350,
                'name' => 'CURILLO',
                'dvpola_id' => '18205',
                'dep_id' => '18',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'id' => 351,
                'name' => 'EL DONCELLO',
                'dvpola_id' => '18247',
                'dep_id' => '18',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'id' => 352,
                'name' => 'EL PAUJIL',
                'dvpola_id' => '18256',
                'dep_id' => '18',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'id' => 353,
                'name' => 'LA MONTAÑITA',
                'dvpola_id' => '18410',
                'dep_id' => '18',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'id' => 354,
                'name' => 'MILAN',
                'dvpola_id' => '18460',
                'dep_id' => '18',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'id' => 355,
                'name' => 'MORELIA',
                'dvpola_id' => '18479',
                'dep_id' => '18',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'id' => 356,
                'name' => 'PUERTO RICO',
                'dvpola_id' => '18592',
                'dep_id' => '18',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'id' => 357,
                'name' => 'SAN JOSE DEL FRAGUA',
                'dvpola_id' => '18610',
                'dep_id' => '18',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'id' => 358,
                'name' => 'SAN VICENTE DEL CAGUAN',
                'dvpola_id' => '18753',
                'dep_id' => '18',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'id' => 359,
                'name' => 'SOLANO',
                'dvpola_id' => '18756',
                'dep_id' => '18',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'id' => 360,
                'name' => 'SOLITA',
                'dvpola_id' => '18785',
                'dep_id' => '18',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'id' => 361,
                'name' => 'VALPARAISO',
                'dvpola_id' => '18860',
                'dep_id' => '18',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'id' => 362,
                'name' => 'POPAYAN',
                'dvpola_id' => '19001',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'id' => 363,
                'name' => 'ALMAGUER',
                'dvpola_id' => '19022',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'id' => 364,
                'name' => 'ARGELIA',
                'dvpola_id' => '19050',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'id' => 365,
                'name' => 'BALBOA',
                'dvpola_id' => '19075',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'id' => 366,
                'name' => 'BOLIVAR',
                'dvpola_id' => '19100',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'id' => 367,
                'name' => 'BUENOS AIRES',
                'dvpola_id' => '19110',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'id' => 368,
                'name' => 'CAJIBIO',
                'dvpola_id' => '19130',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'id' => 369,
                'name' => 'CALDONO',
                'dvpola_id' => '19137',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'id' => 370,
                'name' => 'CALOTO',
                'dvpola_id' => '19142',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'id' => 371,
                'name' => 'CORINTO',
                'dvpola_id' => '19212',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'id' => 372,
                'name' => 'EL TAMBO',
                'dvpola_id' => '19256',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'id' => 373,
                'name' => 'FLORENCIA',
                'dvpola_id' => '19290',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'id' => 374,
                'name' => 'GUACHENE',
                'dvpola_id' => '19300',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'id' => 375,
                'name' => 'GUAPI',
                'dvpola_id' => '19318',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'id' => 376,
                'name' => 'INZA',
                'dvpola_id' => '19355',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'id' => 377,
                'name' => 'JAMBALO',
                'dvpola_id' => '19364',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'id' => 378,
                'name' => 'LA SIERRA',
                'dvpola_id' => '19392',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'id' => 379,
                'name' => 'LA VEGA',
                'dvpola_id' => '19397',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'id' => 380,
                'name' => 'LOPEZ DE MICAY',
                'dvpola_id' => '19418',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'id' => 381,
                'name' => 'MERCADERES',
                'dvpola_id' => '19450',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'id' => 382,
                'name' => 'MIRANDA',
                'dvpola_id' => '19455',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'id' => 383,
                'name' => 'MORALES',
                'dvpola_id' => '19473',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'id' => 384,
                'name' => 'PADILLA',
                'dvpola_id' => '19513',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'id' => 385,
                'name' => 'PAEZ',
                'dvpola_id' => '19517',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'id' => 386,
                'name' => 'PATIA',
                'dvpola_id' => '19532',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'id' => 387,
                'name' => 'PIAMONTE',
                'dvpola_id' => '19533',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'id' => 388,
                'name' => 'PIENDAMO - TUNIA',
                'dvpola_id' => '19548',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'id' => 389,
                'name' => 'PUERTO TEJADA',
                'dvpola_id' => '19573',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'id' => 390,
                'name' => 'PURACE',
                'dvpola_id' => '19585',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'id' => 391,
                'name' => 'ROSAS',
                'dvpola_id' => '19622',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'id' => 392,
                'name' => 'SAN SEBASTIAN',
                'dvpola_id' => '19693',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'id' => 393,
                'name' => 'SANTANDER DE QUILICHAO',
                'dvpola_id' => '19698',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'id' => 394,
                'name' => 'SANTA ROSA',
                'dvpola_id' => '19701',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'id' => 395,
                'name' => 'SILVIA',
                'dvpola_id' => '19743',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'id' => 396,
                'name' => 'SOTARA PAISPAMBA',
                'dvpola_id' => '19760',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'id' => 397,
                'name' => 'SUAREZ',
                'dvpola_id' => '19780',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'id' => 398,
                'name' => 'SUCRE',
                'dvpola_id' => '19785',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'id' => 399,
                'name' => 'TIMBIO',
                'dvpola_id' => '19807',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'id' => 400,
                'name' => 'TIMBIQUI',
                'dvpola_id' => '19809',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'id' => 401,
                'name' => 'TORIBIO',
                'dvpola_id' => '19821',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'id' => 402,
                'name' => 'TOTORO',
                'dvpola_id' => '19824',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'id' => 403,
                'name' => 'VILLA RICA',
                'dvpola_id' => '19845',
                'dep_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'id' => 404,
                'name' => 'VALLEDUPAR',
                'dvpola_id' => '20001',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'id' => 405,
                'name' => 'AGUACHICA',
                'dvpola_id' => '20011',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'id' => 406,
                'name' => 'AGUSTIN CODAZZI',
                'dvpola_id' => '20013',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'id' => 407,
                'name' => 'ASTREA',
                'dvpola_id' => '20032',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'id' => 408,
                'name' => 'BECERRIL',
                'dvpola_id' => '20045',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'id' => 409,
                'name' => 'BOSCONIA',
                'dvpola_id' => '20060',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'id' => 410,
                'name' => 'CHIMICHAGUA',
                'dvpola_id' => '20175',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'id' => 411,
                'name' => 'CHIRIGUANA',
                'dvpola_id' => '20178',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'id' => 412,
                'name' => 'CURUMANI',
                'dvpola_id' => '20228',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'id' => 413,
                'name' => 'EL COPEY',
                'dvpola_id' => '20238',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'id' => 414,
                'name' => 'EL PASO',
                'dvpola_id' => '20250',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'id' => 415,
                'name' => 'GAMARRA',
                'dvpola_id' => '20295',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'id' => 416,
                'name' => 'GONZALEZ',
                'dvpola_id' => '20310',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'id' => 417,
                'name' => 'LA GLORIA',
                'dvpola_id' => '20383',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'id' => 418,
                'name' => 'LA JAGUA DE IBIRICO',
                'dvpola_id' => '20400',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'id' => 419,
                'name' => 'MANAURE BALCON DEL CESAR',
                'dvpola_id' => '20443',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'id' => 420,
                'name' => 'PAILITAS',
                'dvpola_id' => '20517',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'id' => 421,
                'name' => 'PELAYA',
                'dvpola_id' => '20550',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'id' => 422,
                'name' => 'PUEBLO BELLO',
                'dvpola_id' => '20570',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'id' => 423,
                'name' => 'RIO DE ORO',
                'dvpola_id' => '20614',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'id' => 424,
                'name' => 'LA PAZ',
                'dvpola_id' => '20621',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'id' => 425,
                'name' => 'SAN ALBERTO',
                'dvpola_id' => '20710',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'id' => 426,
                'name' => 'SAN DIEGO',
                'dvpola_id' => '20750',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'id' => 427,
                'name' => 'SAN MARTIN',
                'dvpola_id' => '20770',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'id' => 428,
                'name' => 'TAMALAMEQUE',
                'dvpola_id' => '20787',
                'dep_id' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'id' => 429,
                'name' => 'MONTERIA',
                'dvpola_id' => '23001',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'id' => 430,
                'name' => 'AYAPEL',
                'dvpola_id' => '23068',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'id' => 431,
                'name' => 'BUENAVISTA',
                'dvpola_id' => '23079',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'id' => 432,
                'name' => 'CANALETE',
                'dvpola_id' => '23090',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'id' => 433,
                'name' => 'CERETE',
                'dvpola_id' => '23162',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'id' => 434,
                'name' => 'CHIMA',
                'dvpola_id' => '23168',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'id' => 435,
                'name' => 'CHINU',
                'dvpola_id' => '23182',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'id' => 436,
                'name' => 'CIENAGA DE ORO',
                'dvpola_id' => '23189',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'id' => 437,
                'name' => 'COTORRA',
                'dvpola_id' => '23300',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'id' => 438,
                'name' => 'LA APARTADA',
                'dvpola_id' => '23350',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'id' => 439,
                'name' => 'LORICA',
                'dvpola_id' => '23417',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'id' => 440,
                'name' => 'LOS CORDOBAS',
                'dvpola_id' => '23419',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'id' => 441,
                'name' => 'MOMIL',
                'dvpola_id' => '23464',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'id' => 442,
                'name' => 'MONTELIBANO',
                'dvpola_id' => '23466',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'id' => 443,
                'name' => 'MOÑITOS',
                'dvpola_id' => '23500',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'id' => 444,
                'name' => 'PLANETA RICA',
                'dvpola_id' => '23555',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'id' => 445,
                'name' => 'PUEBLO NUEVO',
                'dvpola_id' => '23570',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'id' => 446,
                'name' => 'PUERTO ESCONDIDO',
                'dvpola_id' => '23574',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'id' => 447,
                'name' => 'PUERTO LIBERTADOR',
                'dvpola_id' => '23580',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'id' => 448,
                'name' => 'PURISIMA DE LA CONCEPCION',
                'dvpola_id' => '23586',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'id' => 449,
                'name' => 'SAHAGUN',
                'dvpola_id' => '23660',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'id' => 450,
                'name' => 'SAN ANDRES DE SOTAVENTO',
                'dvpola_id' => '23670',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'id' => 451,
                'name' => 'SAN ANTERO',
                'dvpola_id' => '23672',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'id' => 452,
                'name' => 'SAN BERNARDO DEL VIENTO',
                'dvpola_id' => '23675',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'id' => 453,
                'name' => 'SAN CARLOS',
                'dvpola_id' => '23678',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'id' => 454,
                'name' => 'SAN JOSE DE URE',
                'dvpola_id' => '23682',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'id' => 455,
                'name' => 'SAN PELAYO',
                'dvpola_id' => '23686',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'id' => 456,
                'name' => 'TIERRALTA',
                'dvpola_id' => '23807',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'id' => 457,
                'name' => 'TUCHIN',
                'dvpola_id' => '23815',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'id' => 458,
                'name' => 'VALENCIA',
                'dvpola_id' => '23855',
                'dep_id' => '23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'id' => 459,
                'name' => 'AGUA DE DIOS',
                'dvpola_id' => '25001',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'id' => 460,
                'name' => 'ALBAN',
                'dvpola_id' => '25019',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'id' => 461,
                'name' => 'ANAPOIMA',
                'dvpola_id' => '25035',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'id' => 462,
                'name' => 'ANOLAIMA',
                'dvpola_id' => '25040',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'id' => 463,
                'name' => 'ARBELAEZ',
                'dvpola_id' => '25053',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'id' => 464,
                'name' => 'BELTRAN',
                'dvpola_id' => '25086',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'id' => 465,
                'name' => 'BITUIMA',
                'dvpola_id' => '25095',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'id' => 466,
                'name' => 'BOJACA',
                'dvpola_id' => '25099',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'id' => 467,
                'name' => 'CABRERA',
                'dvpola_id' => '25120',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'id' => 468,
                'name' => 'CACHIPAY',
                'dvpola_id' => '25123',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'id' => 469,
                'name' => 'CAJICA',
                'dvpola_id' => '25126',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'id' => 470,
                'name' => 'CAPARRAPI',
                'dvpola_id' => '25148',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'id' => 471,
                'name' => 'CAQUEZA',
                'dvpola_id' => '25151',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            471 => 
            array (
                'id' => 472,
                'name' => 'CARMEN DE CARUPA',
                'dvpola_id' => '25154',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            472 => 
            array (
                'id' => 473,
                'name' => 'CHAGUANI',
                'dvpola_id' => '25168',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            473 => 
            array (
                'id' => 474,
                'name' => 'CHIA',
                'dvpola_id' => '25175',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            474 => 
            array (
                'id' => 475,
                'name' => 'CHIPAQUE',
                'dvpola_id' => '25178',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            475 => 
            array (
                'id' => 476,
                'name' => 'CHOACHI',
                'dvpola_id' => '25181',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            476 => 
            array (
                'id' => 477,
                'name' => 'CHOCONTA',
                'dvpola_id' => '25183',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            477 => 
            array (
                'id' => 478,
                'name' => 'COGUA',
                'dvpola_id' => '25200',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            478 => 
            array (
                'id' => 479,
                'name' => 'COTA',
                'dvpola_id' => '25214',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            479 => 
            array (
                'id' => 480,
                'name' => 'CUCUNUBA',
                'dvpola_id' => '25224',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            480 => 
            array (
                'id' => 481,
                'name' => 'EL COLEGIO',
                'dvpola_id' => '25245',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            481 => 
            array (
                'id' => 482,
                'name' => 'EL PEÑON',
                'dvpola_id' => '25258',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            482 => 
            array (
                'id' => 483,
                'name' => 'EL ROSAL',
                'dvpola_id' => '25260',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            483 => 
            array (
                'id' => 484,
                'name' => 'FACATATIVA',
                'dvpola_id' => '25269',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            484 => 
            array (
                'id' => 485,
                'name' => 'FOMEQUE',
                'dvpola_id' => '25279',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            485 => 
            array (
                'id' => 486,
                'name' => 'FOSCA',
                'dvpola_id' => '25281',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            486 => 
            array (
                'id' => 487,
                'name' => 'FUNZA',
                'dvpola_id' => '25286',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            487 => 
            array (
                'id' => 488,
                'name' => 'FUQUENE',
                'dvpola_id' => '25288',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            488 => 
            array (
                'id' => 489,
                'name' => 'FUSAGASUGA',
                'dvpola_id' => '25290',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            489 => 
            array (
                'id' => 490,
                'name' => 'GACHALA',
                'dvpola_id' => '25293',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            490 => 
            array (
                'id' => 491,
                'name' => 'GACHANCIPA',
                'dvpola_id' => '25295',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            491 => 
            array (
                'id' => 492,
                'name' => 'GACHETA',
                'dvpola_id' => '25297',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            492 => 
            array (
                'id' => 493,
                'name' => 'GAMA',
                'dvpola_id' => '25299',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            493 => 
            array (
                'id' => 494,
                'name' => 'GIRARDOT',
                'dvpola_id' => '25307',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            494 => 
            array (
                'id' => 495,
                'name' => 'GRANADA',
                'dvpola_id' => '25312',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            495 => 
            array (
                'id' => 496,
                'name' => 'GUACHETA',
                'dvpola_id' => '25317',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            496 => 
            array (
                'id' => 497,
                'name' => 'GUADUAS',
                'dvpola_id' => '25320',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            497 => 
            array (
                'id' => 498,
                'name' => 'GUASCA',
                'dvpola_id' => '25322',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            498 => 
            array (
                'id' => 499,
                'name' => 'GUATAQUI',
                'dvpola_id' => '25324',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            499 => 
            array (
                'id' => 500,
                'name' => 'GUATAVITA',
                'dvpola_id' => '25326',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('ciudades')->insert(array (
            0 => 
            array (
                'id' => 501,
                'name' => 'GUAYABAL DE SIQUIMA',
                'dvpola_id' => '25328',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 502,
                'name' => 'GUAYABETAL',
                'dvpola_id' => '25335',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 503,
                'name' => 'GUTIERREZ',
                'dvpola_id' => '25339',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 504,
                'name' => 'JERUSALEN',
                'dvpola_id' => '25368',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 505,
                'name' => 'JUNIN',
                'dvpola_id' => '25372',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 506,
                'name' => 'LA CALERA',
                'dvpola_id' => '25377',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 507,
                'name' => 'LA MESA',
                'dvpola_id' => '25386',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 508,
                'name' => 'LA PALMA',
                'dvpola_id' => '25394',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 509,
                'name' => 'LA PEÑA',
                'dvpola_id' => '25398',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 510,
                'name' => 'LA VEGA',
                'dvpola_id' => '25402',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 511,
                'name' => 'LENGUAZAQUE',
                'dvpola_id' => '25407',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 512,
                'name' => 'MACHETA',
                'dvpola_id' => '25426',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 513,
                'name' => 'MADRID',
                'dvpola_id' => '25430',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 514,
                'name' => 'MANTA',
                'dvpola_id' => '25436',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 515,
                'name' => 'MEDINA',
                'dvpola_id' => '25438',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 516,
                'name' => 'MOSQUERA',
                'dvpola_id' => '25473',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 517,
                'name' => 'NARIÑO',
                'dvpola_id' => '25483',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 518,
                'name' => 'NEMOCON',
                'dvpola_id' => '25486',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 519,
                'name' => 'NILO',
                'dvpola_id' => '25488',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 520,
                'name' => 'NIMAIMA',
                'dvpola_id' => '25489',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 521,
                'name' => 'NOCAIMA',
                'dvpola_id' => '25491',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 522,
                'name' => 'VENECIA',
                'dvpola_id' => '25506',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 523,
                'name' => 'PACHO',
                'dvpola_id' => '25513',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 524,
                'name' => 'PAIME',
                'dvpola_id' => '25518',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 525,
                'name' => 'PANDI',
                'dvpola_id' => '25524',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 526,
                'name' => 'PARATEBUENO',
                'dvpola_id' => '25530',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 527,
                'name' => 'PASCA',
                'dvpola_id' => '25535',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 528,
                'name' => 'PUERTO SALGAR',
                'dvpola_id' => '25572',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 529,
                'name' => 'PULI',
                'dvpola_id' => '25580',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 530,
                'name' => 'QUEBRADANEGRA',
                'dvpola_id' => '25592',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 531,
                'name' => 'QUETAME',
                'dvpola_id' => '25594',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 532,
                'name' => 'QUIPILE',
                'dvpola_id' => '25596',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 533,
                'name' => 'APULO',
                'dvpola_id' => '25599',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 534,
                'name' => 'RICAURTE',
                'dvpola_id' => '25612',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 535,
                'name' => 'SAN ANTONIO DEL TEQUENDAMA',
                'dvpola_id' => '25645',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 536,
                'name' => 'SAN BERNARDO',
                'dvpola_id' => '25649',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 537,
                'name' => 'SAN CAYETANO',
                'dvpola_id' => '25653',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 538,
                'name' => 'SAN FRANCISCO',
                'dvpola_id' => '25658',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 539,
                'name' => 'SAN JUAN DE RIOSECO',
                'dvpola_id' => '25662',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 540,
                'name' => 'SASAIMA',
                'dvpola_id' => '25718',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 541,
                'name' => 'SESQUILE',
                'dvpola_id' => '25736',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 542,
                'name' => 'SIBATE',
                'dvpola_id' => '25740',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 543,
                'name' => 'SILVANIA',
                'dvpola_id' => '25743',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 544,
                'name' => 'SIMIJACA',
                'dvpola_id' => '25745',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 545,
                'name' => 'SOACHA',
                'dvpola_id' => '25754',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 546,
                'name' => 'SOPO',
                'dvpola_id' => '25758',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 547,
                'name' => 'SUBACHOQUE',
                'dvpola_id' => '25769',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 548,
                'name' => 'SUESCA',
                'dvpola_id' => '25772',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 549,
                'name' => 'SUPATA',
                'dvpola_id' => '25777',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 550,
                'name' => 'SUSA',
                'dvpola_id' => '25779',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 551,
                'name' => 'SUTATAUSA',
                'dvpola_id' => '25781',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 552,
                'name' => 'TABIO',
                'dvpola_id' => '25785',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 553,
                'name' => 'TAUSA',
                'dvpola_id' => '25793',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 554,
                'name' => 'TENA',
                'dvpola_id' => '25797',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 555,
                'name' => 'TENJO',
                'dvpola_id' => '25799',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 556,
                'name' => 'TIBACUY',
                'dvpola_id' => '25805',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 557,
                'name' => 'TIBIRITA',
                'dvpola_id' => '25807',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 558,
                'name' => 'TOCAIMA',
                'dvpola_id' => '25815',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 559,
                'name' => 'TOCANCIPA',
                'dvpola_id' => '25817',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 560,
                'name' => 'TOPAIPI',
                'dvpola_id' => '25823',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 561,
                'name' => 'UBALA',
                'dvpola_id' => '25839',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 562,
                'name' => 'UBAQUE',
                'dvpola_id' => '25841',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 563,
                'name' => 'VILLA DE SAN DIEGO DE UBATE',
                'dvpola_id' => '25843',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 564,
                'name' => 'UNE',
                'dvpola_id' => '25845',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 565,
                'name' => 'ÚTICA',
                'dvpola_id' => '25851',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 566,
                'name' => 'VERGARA',
                'dvpola_id' => '25862',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 567,
                'name' => 'VIANI',
                'dvpola_id' => '25867',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 568,
                'name' => 'VILLAGOMEZ',
                'dvpola_id' => '25871',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 569,
                'name' => 'VILLAPINZON',
                'dvpola_id' => '25873',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 570,
                'name' => 'VILLETA',
                'dvpola_id' => '25875',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 571,
                'name' => 'VIOTA',
                'dvpola_id' => '25878',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 572,
                'name' => 'YACOPI',
                'dvpola_id' => '25885',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 573,
                'name' => 'ZIPACON',
                'dvpola_id' => '25898',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 574,
                'name' => 'ZIPAQUIRA',
                'dvpola_id' => '25899',
                'dep_id' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 575,
                'name' => 'QUIBDO',
                'dvpola_id' => '27001',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 576,
                'name' => 'ACANDI',
                'dvpola_id' => '27006',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 577,
                'name' => 'ALTO BAUDO',
                'dvpola_id' => '27025',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 578,
                'name' => 'ATRATO',
                'dvpola_id' => '27050',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 579,
                'name' => 'BAGADO',
                'dvpola_id' => '27073',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 580,
                'name' => 'BAHIA SOLANO',
                'dvpola_id' => '27075',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 581,
                'name' => 'BAJO BAUDO',
                'dvpola_id' => '27077',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 582,
                'name' => 'BOJAYA',
                'dvpola_id' => '27099',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 583,
                'name' => 'EL CANTON DEL SAN PABLO',
                'dvpola_id' => '27135',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 584,
                'name' => 'CARMEN DEL DARIEN',
                'dvpola_id' => '27150',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 585,
                'name' => 'CERTEGUI',
                'dvpola_id' => '27160',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 586,
                'name' => 'CONDOTO',
                'dvpola_id' => '27205',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 587,
                'name' => 'EL CARMEN DE ATRATO',
                'dvpola_id' => '27245',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 588,
                'name' => 'EL LITORAL DEL SAN JUAN',
                'dvpola_id' => '27250',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 589,
                'name' => 'ISTMINA',
                'dvpola_id' => '27361',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 590,
                'name' => 'JURADO',
                'dvpola_id' => '27372',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 591,
                'name' => 'LLORO',
                'dvpola_id' => '27413',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 592,
                'name' => 'MEDIO ATRATO',
                'dvpola_id' => '27425',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 593,
                'name' => 'MEDIO BAUDO',
                'dvpola_id' => '27430',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 594,
                'name' => 'MEDIO SAN JUAN',
                'dvpola_id' => '27450',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 595,
                'name' => 'NOVITA',
                'dvpola_id' => '27491',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 596,
                'name' => 'NUQUI',
                'dvpola_id' => '27495',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 597,
                'name' => 'RIO IRO',
                'dvpola_id' => '27580',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 598,
                'name' => 'RIO QUITO',
                'dvpola_id' => '27600',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 599,
                'name' => 'RIOSUCIO',
                'dvpola_id' => '27615',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 600,
                'name' => 'SAN JOSE DEL PALMAR',
                'dvpola_id' => '27660',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 601,
                'name' => 'SIPI',
                'dvpola_id' => '27745',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 602,
                'name' => 'TADO',
                'dvpola_id' => '27787',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 603,
                'name' => 'UNGUIA',
                'dvpola_id' => '27800',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 604,
                'name' => 'UNION PANAMERICANA',
                'dvpola_id' => '27810',
                'dep_id' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 605,
                'name' => 'NEIVA',
                'dvpola_id' => '41001',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 606,
                'name' => 'ACEVEDO',
                'dvpola_id' => '41006',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 607,
                'name' => 'AGRADO',
                'dvpola_id' => '41013',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 608,
                'name' => 'AIPE',
                'dvpola_id' => '41016',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 609,
                'name' => 'ALGECIRAS',
                'dvpola_id' => '41020',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 610,
                'name' => 'ALTAMIRA',
                'dvpola_id' => '41026',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 611,
                'name' => 'BARAYA',
                'dvpola_id' => '41078',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 612,
                'name' => 'CAMPOALEGRE',
                'dvpola_id' => '41132',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 613,
                'name' => 'COLOMBIA',
                'dvpola_id' => '41206',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 614,
                'name' => 'ELIAS',
                'dvpola_id' => '41244',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 615,
                'name' => 'GARZON',
                'dvpola_id' => '41298',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 616,
                'name' => 'GIGANTE',
                'dvpola_id' => '41306',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 617,
                'name' => 'GUADALUPE',
                'dvpola_id' => '41319',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 618,
                'name' => 'HOBO',
                'dvpola_id' => '41349',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 619,
                'name' => 'ÍQUIRA',
                'dvpola_id' => '41357',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 620,
                'name' => 'ISNOS',
                'dvpola_id' => '41359',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 621,
                'name' => 'LA ARGENTINA',
                'dvpola_id' => '41378',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 622,
                'name' => 'LA PLATA',
                'dvpola_id' => '41396',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 623,
                'name' => 'NATAGA',
                'dvpola_id' => '41483',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 624,
                'name' => 'OPORAPA',
                'dvpola_id' => '41503',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 625,
                'name' => 'PAICOL',
                'dvpola_id' => '41518',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 626,
                'name' => 'PALERMO',
                'dvpola_id' => '41524',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 627,
                'name' => 'PALESTINA',
                'dvpola_id' => '41530',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 628,
                'name' => 'PITAL',
                'dvpola_id' => '41548',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 629,
                'name' => 'PITALITO',
                'dvpola_id' => '41551',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 630,
                'name' => 'RIVERA',
                'dvpola_id' => '41615',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 631,
                'name' => 'SALADOBLANCO',
                'dvpola_id' => '41660',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 632,
                'name' => 'SAN AGUSTIN',
                'dvpola_id' => '41668',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 633,
                'name' => 'SANTA MARIA',
                'dvpola_id' => '41676',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 634,
                'name' => 'SUAZA',
                'dvpola_id' => '41770',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 635,
                'name' => 'TARQUI',
                'dvpola_id' => '41791',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 636,
                'name' => 'TESALIA',
                'dvpola_id' => '41797',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 637,
                'name' => 'TELLO',
                'dvpola_id' => '41799',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 638,
                'name' => 'TERUEL',
                'dvpola_id' => '41801',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 639,
                'name' => 'TIMANA',
                'dvpola_id' => '41807',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 640,
                'name' => 'VILLAVIEJA',
                'dvpola_id' => '41872',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 641,
                'name' => 'YAGUARA',
                'dvpola_id' => '41885',
                'dep_id' => '41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 642,
                'name' => 'RIOHACHA',
                'dvpola_id' => '44001',
                'dep_id' => '44',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 643,
                'name' => 'ALBANIA',
                'dvpola_id' => '44035',
                'dep_id' => '44',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 644,
                'name' => 'BARRANCAS',
                'dvpola_id' => '44078',
                'dep_id' => '44',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 645,
                'name' => 'DIBULLA',
                'dvpola_id' => '44090',
                'dep_id' => '44',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 646,
                'name' => 'DISTRACCION',
                'dvpola_id' => '44098',
                'dep_id' => '44',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 647,
                'name' => 'EL MOLINO',
                'dvpola_id' => '44110',
                'dep_id' => '44',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 648,
                'name' => 'FONSECA',
                'dvpola_id' => '44279',
                'dep_id' => '44',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 649,
                'name' => 'HATONUEVO',
                'dvpola_id' => '44378',
                'dep_id' => '44',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 650,
                'name' => 'LA JAGUA DEL PILAR',
                'dvpola_id' => '44420',
                'dep_id' => '44',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 651,
                'name' => 'MAICAO',
                'dvpola_id' => '44430',
                'dep_id' => '44',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 652,
                'name' => 'MANAURE',
                'dvpola_id' => '44560',
                'dep_id' => '44',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 653,
                'name' => 'SAN JUAN DEL CESAR',
                'dvpola_id' => '44650',
                'dep_id' => '44',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 654,
                'name' => 'URIBIA',
                'dvpola_id' => '44847',
                'dep_id' => '44',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 655,
                'name' => 'URUMITA',
                'dvpola_id' => '44855',
                'dep_id' => '44',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 656,
                'name' => 'VILLANUEVA',
                'dvpola_id' => '44874',
                'dep_id' => '44',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 657,
                'name' => 'SANTA MARTA',
                'dvpola_id' => '47001',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 658,
                'name' => 'ALGARROBO',
                'dvpola_id' => '47030',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 659,
                'name' => 'ARACATACA',
                'dvpola_id' => '47053',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 660,
                'name' => 'ARIGUANI',
                'dvpola_id' => '47058',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 661,
                'name' => 'CERRO DE SAN ANTONIO',
                'dvpola_id' => '47161',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 662,
                'name' => 'CHIVOLO',
                'dvpola_id' => '47170',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 663,
                'name' => 'CIENAGA',
                'dvpola_id' => '47189',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 664,
                'name' => 'CONCORDIA',
                'dvpola_id' => '47205',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 665,
                'name' => 'EL BANCO',
                'dvpola_id' => '47245',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 666,
                'name' => 'EL PIÑON',
                'dvpola_id' => '47258',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 667,
                'name' => 'EL RETEN',
                'dvpola_id' => '47268',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 668,
                'name' => 'FUNDACION',
                'dvpola_id' => '47288',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 669,
                'name' => 'GUAMAL',
                'dvpola_id' => '47318',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 670,
                'name' => 'NUEVA GRANADA',
                'dvpola_id' => '47460',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 671,
                'name' => 'PEDRAZA',
                'dvpola_id' => '47541',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 672,
                'name' => 'PIJIÑO DEL CARMEN',
                'dvpola_id' => '47545',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 673,
                'name' => 'PIVIJAY',
                'dvpola_id' => '47551',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 674,
                'name' => 'PLATO',
                'dvpola_id' => '47555',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 675,
                'name' => 'PUEBLOVIEJO',
                'dvpola_id' => '47570',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 676,
                'name' => 'REMOLINO',
                'dvpola_id' => '47605',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 677,
                'name' => 'SABANAS DE SAN ÁNGEL',
                'dvpola_id' => '47660',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 678,
                'name' => 'SALAMINA',
                'dvpola_id' => '47675',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 679,
                'name' => 'SAN SEBASTIAN DE BUENAVISTA',
                'dvpola_id' => '47692',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 680,
                'name' => 'SAN ZENON',
                'dvpola_id' => '47703',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 681,
                'name' => 'SANTA ANA',
                'dvpola_id' => '47707',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 682,
                'name' => 'SANTA BARBARA DE PINTO',
                'dvpola_id' => '47720',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 683,
                'name' => 'SITIONUEVO',
                'dvpola_id' => '47745',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 684,
                'name' => 'TENERIFE',
                'dvpola_id' => '47798',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 685,
                'name' => 'ZAPAYAN',
                'dvpola_id' => '47960',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 686,
                'name' => 'ZONA BANANERA',
                'dvpola_id' => '47980',
                'dep_id' => '47',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 687,
                'name' => 'VILLAVICENCIO',
                'dvpola_id' => '50001',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 688,
                'name' => 'ACACIAS',
                'dvpola_id' => '50006',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 689,
                'name' => 'BARRANCA DE UPIA',
                'dvpola_id' => '50110',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 690,
                'name' => 'CABUYARO',
                'dvpola_id' => '50124',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 691,
                'name' => 'CASTILLA LA NUEVA',
                'dvpola_id' => '50150',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 692,
                'name' => 'CUBARRAL',
                'dvpola_id' => '50223',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 693,
                'name' => 'CUMARAL',
                'dvpola_id' => '50226',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 694,
                'name' => 'EL CALVARIO',
                'dvpola_id' => '50245',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 695,
                'name' => 'EL CASTILLO',
                'dvpola_id' => '50251',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 696,
                'name' => 'EL DORADO',
                'dvpola_id' => '50270',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 697,
                'name' => 'FUENTE DE ORO',
                'dvpola_id' => '50287',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 698,
                'name' => 'GRANADA',
                'dvpola_id' => '50313',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 699,
                'name' => 'GUAMAL',
                'dvpola_id' => '50318',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 700,
                'name' => 'MAPIRIPAN',
                'dvpola_id' => '50325',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 701,
                'name' => 'MESETAS',
                'dvpola_id' => '50330',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 702,
                'name' => 'LA MACARENA',
                'dvpola_id' => '50350',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 703,
                'name' => 'URIBE',
                'dvpola_id' => '50370',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 704,
                'name' => 'LEJANIAS',
                'dvpola_id' => '50400',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 705,
                'name' => 'PUERTO CONCORDIA',
                'dvpola_id' => '50450',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 706,
                'name' => 'PUERTO GAITAN',
                'dvpola_id' => '50568',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 707,
                'name' => 'PUERTO LOPEZ',
                'dvpola_id' => '50573',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 708,
                'name' => 'PUERTO LLERAS',
                'dvpola_id' => '50577',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 709,
                'name' => 'PUERTO RICO',
                'dvpola_id' => '50590',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 710,
                'name' => 'RESTREPO',
                'dvpola_id' => '50606',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 711,
                'name' => 'SAN CARLOS DE GUAROA',
                'dvpola_id' => '50680',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 712,
                'name' => 'SAN JUAN DE ARAMA',
                'dvpola_id' => '50683',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 713,
                'name' => 'SAN JUANITO',
                'dvpola_id' => '50686',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 714,
                'name' => 'SAN MARTIN',
                'dvpola_id' => '50689',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 715,
                'name' => 'VISTAHERMOSA',
                'dvpola_id' => '50711',
                'dep_id' => '50',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 716,
                'name' => 'PASTO',
                'dvpola_id' => '52001',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 717,
                'name' => 'ALBAN',
                'dvpola_id' => '52019',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 718,
                'name' => 'ALDANA',
                'dvpola_id' => '52022',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 719,
                'name' => 'ANCUYA',
                'dvpola_id' => '52036',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 720,
                'name' => 'ARBOLEDA',
                'dvpola_id' => '52051',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 721,
                'name' => 'BARBACOAS',
                'dvpola_id' => '52079',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 722,
                'name' => 'BELEN',
                'dvpola_id' => '52083',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 723,
                'name' => 'BUESACO',
                'dvpola_id' => '52110',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 724,
                'name' => 'COLON',
                'dvpola_id' => '52203',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 725,
                'name' => 'CONSACA',
                'dvpola_id' => '52207',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 726,
                'name' => 'CONTADERO',
                'dvpola_id' => '52210',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 727,
                'name' => 'CORDOBA',
                'dvpola_id' => '52215',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 728,
                'name' => 'CUASPUD CARLOSAMA',
                'dvpola_id' => '52224',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 729,
                'name' => 'CUMBAL',
                'dvpola_id' => '52227',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 730,
                'name' => 'CUMBITARA',
                'dvpola_id' => '52233',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 731,
                'name' => 'CHACHAGUI',
                'dvpola_id' => '52240',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 732,
                'name' => 'EL CHARCO',
                'dvpola_id' => '52250',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 733,
                'name' => 'EL PEÑOL',
                'dvpola_id' => '52254',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 734,
                'name' => 'EL ROSARIO',
                'dvpola_id' => '52256',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 735,
                'name' => 'EL TABLON DE GOMEZ',
                'dvpola_id' => '52258',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 736,
                'name' => 'EL TAMBO',
                'dvpola_id' => '52260',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 737,
                'name' => 'FUNES',
                'dvpola_id' => '52287',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 738,
                'name' => 'GUACHUCAL',
                'dvpola_id' => '52317',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 739,
                'name' => 'GUAITARILLA',
                'dvpola_id' => '52320',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 740,
                'name' => 'GUALMATAN',
                'dvpola_id' => '52323',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 741,
                'name' => 'ILES',
                'dvpola_id' => '52352',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 742,
                'name' => 'IMUES',
                'dvpola_id' => '52354',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 743,
                'name' => 'IPIALES',
                'dvpola_id' => '52356',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 744,
                'name' => 'LA CRUZ',
                'dvpola_id' => '52378',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 745,
                'name' => 'LA FLORIDA',
                'dvpola_id' => '52381',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 746,
                'name' => 'LA LLANADA',
                'dvpola_id' => '52385',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 747,
                'name' => 'LA TOLA',
                'dvpola_id' => '52390',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 748,
                'name' => 'LA UNION',
                'dvpola_id' => '52399',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 749,
                'name' => 'LEIVA',
                'dvpola_id' => '52405',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 750,
                'name' => 'LINARES',
                'dvpola_id' => '52411',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 751,
                'name' => 'LOS ANDES',
                'dvpola_id' => '52418',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 752,
                'name' => 'MAGUI',
                'dvpola_id' => '52427',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 753,
                'name' => 'MALLAMA',
                'dvpola_id' => '52435',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 754,
                'name' => 'MOSQUERA',
                'dvpola_id' => '52473',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 755,
                'name' => 'NARIÑO',
                'dvpola_id' => '52480',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 756,
                'name' => 'OLAYA HERRERA',
                'dvpola_id' => '52490',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 757,
                'name' => 'OSPINA',
                'dvpola_id' => '52506',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 758,
                'name' => 'FRANCISCO PIZARRO',
                'dvpola_id' => '52520',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 759,
                'name' => 'POLICARPA',
                'dvpola_id' => '52540',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 760,
                'name' => 'POTOSI',
                'dvpola_id' => '52560',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 761,
                'name' => 'PROVIDENCIA',
                'dvpola_id' => '52565',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 762,
                'name' => 'PUERRES',
                'dvpola_id' => '52573',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 763,
                'name' => 'PUPIALES',
                'dvpola_id' => '52585',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 764,
                'name' => 'RICAURTE',
                'dvpola_id' => '52612',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 765,
                'name' => 'ROBERTO PAYAN',
                'dvpola_id' => '52621',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 766,
                'name' => 'SAMANIEGO',
                'dvpola_id' => '52678',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 767,
                'name' => 'SANDONA',
                'dvpola_id' => '52683',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 768,
                'name' => 'SAN BERNARDO',
                'dvpola_id' => '52685',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 769,
                'name' => 'SAN LORENZO',
                'dvpola_id' => '52687',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 770,
                'name' => 'SAN PABLO',
                'dvpola_id' => '52693',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'id' => 771,
                'name' => 'SAN PEDRO DE CARTAGO',
                'dvpola_id' => '52694',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'id' => 772,
                'name' => 'SANTA BARBARA',
                'dvpola_id' => '52696',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'id' => 773,
                'name' => 'SANTACRUZ',
                'dvpola_id' => '52699',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'id' => 774,
                'name' => 'SAPUYES',
                'dvpola_id' => '52720',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'id' => 775,
                'name' => 'TAMINANGO',
                'dvpola_id' => '52786',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'id' => 776,
                'name' => 'TANGUA',
                'dvpola_id' => '52788',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'id' => 777,
                'name' => 'SAN ANDRES DE TUMACO',
                'dvpola_id' => '52835',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'id' => 778,
                'name' => 'TUQUERRES',
                'dvpola_id' => '52838',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'id' => 779,
                'name' => 'YACUANQUER',
                'dvpola_id' => '52885',
                'dep_id' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'id' => 780,
                'name' => 'SAN JOSE DE CUCUTA',
                'dvpola_id' => '54001',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'id' => 781,
                'name' => 'ÁBREGO',
                'dvpola_id' => '54003',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'id' => 782,
                'name' => 'ARBOLEDAS',
                'dvpola_id' => '54051',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'id' => 783,
                'name' => 'BOCHALEMA',
                'dvpola_id' => '54099',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'id' => 784,
                'name' => 'BUCARASICA',
                'dvpola_id' => '54109',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'id' => 785,
                'name' => 'CACOTA',
                'dvpola_id' => '54125',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'id' => 786,
                'name' => 'CACHIRA',
                'dvpola_id' => '54128',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'id' => 787,
                'name' => 'CHINACOTA',
                'dvpola_id' => '54172',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'id' => 788,
                'name' => 'CHITAGA',
                'dvpola_id' => '54174',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'id' => 789,
                'name' => 'CONVENCION',
                'dvpola_id' => '54206',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'id' => 790,
                'name' => 'CUCUTILLA',
                'dvpola_id' => '54223',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'id' => 791,
                'name' => 'DURANIA',
                'dvpola_id' => '54239',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'id' => 792,
                'name' => 'EL CARMEN',
                'dvpola_id' => '54245',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'id' => 793,
                'name' => 'EL TARRA',
                'dvpola_id' => '54250',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'id' => 794,
                'name' => 'EL ZULIA',
                'dvpola_id' => '54261',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'id' => 795,
                'name' => 'GRAMALOTE',
                'dvpola_id' => '54313',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'id' => 796,
                'name' => 'HACARI',
                'dvpola_id' => '54344',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'id' => 797,
                'name' => 'HERRAN',
                'dvpola_id' => '54347',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'id' => 798,
                'name' => 'LABATECA',
                'dvpola_id' => '54377',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'id' => 799,
                'name' => 'LA ESPERANZA',
                'dvpola_id' => '54385',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'id' => 800,
                'name' => 'LA PLAYA',
                'dvpola_id' => '54398',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'id' => 801,
                'name' => 'LOS PATIOS',
                'dvpola_id' => '54405',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'id' => 802,
                'name' => 'LOURDES',
                'dvpola_id' => '54418',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'id' => 803,
                'name' => 'MUTISCUA',
                'dvpola_id' => '54480',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'id' => 804,
                'name' => 'OCAÑA',
                'dvpola_id' => '54498',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'id' => 805,
                'name' => 'PAMPLONA',
                'dvpola_id' => '54518',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'id' => 806,
                'name' => 'PAMPLONITA',
                'dvpola_id' => '54520',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'id' => 807,
                'name' => 'PUERTO SANTANDER',
                'dvpola_id' => '54553',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'id' => 808,
                'name' => 'RAGONVALIA',
                'dvpola_id' => '54599',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'id' => 809,
                'name' => 'SALAZAR',
                'dvpola_id' => '54660',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'id' => 810,
                'name' => 'SAN CALIXTO',
                'dvpola_id' => '54670',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'id' => 811,
                'name' => 'SAN CAYETANO',
                'dvpola_id' => '54673',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'id' => 812,
                'name' => 'SANTIAGO',
                'dvpola_id' => '54680',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'id' => 813,
                'name' => 'SARDINATA',
                'dvpola_id' => '54720',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'id' => 814,
                'name' => 'SILOS',
                'dvpola_id' => '54743',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'id' => 815,
                'name' => 'TEORAMA',
                'dvpola_id' => '54800',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'id' => 816,
                'name' => 'TIBU',
                'dvpola_id' => '54810',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'id' => 817,
                'name' => 'TOLEDO',
                'dvpola_id' => '54820',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'id' => 818,
                'name' => 'VILLA CARO',
                'dvpola_id' => '54871',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'id' => 819,
                'name' => 'VILLA DEL ROSARIO',
                'dvpola_id' => '54874',
                'dep_id' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'id' => 820,
                'name' => 'ARMENIA',
                'dvpola_id' => '63001',
                'dep_id' => '63',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'id' => 821,
                'name' => 'BUENAVISTA',
                'dvpola_id' => '63111',
                'dep_id' => '63',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'id' => 822,
                'name' => 'CALARCA',
                'dvpola_id' => '63130',
                'dep_id' => '63',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'id' => 823,
                'name' => 'CIRCASIA',
                'dvpola_id' => '63190',
                'dep_id' => '63',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'id' => 824,
                'name' => 'CORDOBA',
                'dvpola_id' => '63212',
                'dep_id' => '63',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'id' => 825,
                'name' => 'FILANDIA',
                'dvpola_id' => '63272',
                'dep_id' => '63',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'id' => 826,
                'name' => 'GENOVA',
                'dvpola_id' => '63302',
                'dep_id' => '63',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'id' => 827,
                'name' => 'LA TEBAIDA',
                'dvpola_id' => '63401',
                'dep_id' => '63',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'id' => 828,
                'name' => 'MONTENEGRO',
                'dvpola_id' => '63470',
                'dep_id' => '63',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'id' => 829,
                'name' => 'PIJAO',
                'dvpola_id' => '63548',
                'dep_id' => '63',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'id' => 830,
                'name' => 'QUIMBAYA',
                'dvpola_id' => '63594',
                'dep_id' => '63',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'id' => 831,
                'name' => 'SALENTO',
                'dvpola_id' => '63690',
                'dep_id' => '63',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'id' => 832,
                'name' => 'PEREIRA',
                'dvpola_id' => '66001',
                'dep_id' => '66',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'id' => 833,
                'name' => 'APIA',
                'dvpola_id' => '66045',
                'dep_id' => '66',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'id' => 834,
                'name' => 'BALBOA',
                'dvpola_id' => '66075',
                'dep_id' => '66',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'id' => 835,
                'name' => 'BELEN DE UMBRIA',
                'dvpola_id' => '66088',
                'dep_id' => '66',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'id' => 836,
                'name' => 'DOSQUEBRADAS',
                'dvpola_id' => '66170',
                'dep_id' => '66',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'id' => 837,
                'name' => 'GUATICA',
                'dvpola_id' => '66318',
                'dep_id' => '66',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'id' => 838,
                'name' => 'LA CELIA',
                'dvpola_id' => '66383',
                'dep_id' => '66',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'id' => 839,
                'name' => 'LA VIRGINIA',
                'dvpola_id' => '66400',
                'dep_id' => '66',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'id' => 840,
                'name' => 'MARSELLA',
                'dvpola_id' => '66440',
                'dep_id' => '66',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'id' => 841,
                'name' => 'MISTRATO',
                'dvpola_id' => '66456',
                'dep_id' => '66',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'id' => 842,
                'name' => 'PUEBLO RICO',
                'dvpola_id' => '66572',
                'dep_id' => '66',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'id' => 843,
                'name' => 'QUINCHIA',
                'dvpola_id' => '66594',
                'dep_id' => '66',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'id' => 844,
                'name' => 'SANTA ROSA DE CABAL',
                'dvpola_id' => '66682',
                'dep_id' => '66',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'id' => 845,
                'name' => 'SANTUARIO',
                'dvpola_id' => '66687',
                'dep_id' => '66',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'id' => 846,
                'name' => 'BUCARAMANGA',
                'dvpola_id' => '68001',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'id' => 847,
                'name' => 'AGUADA',
                'dvpola_id' => '68013',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'id' => 848,
                'name' => 'ALBANIA',
                'dvpola_id' => '68020',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'id' => 849,
                'name' => 'ARATOCA',
                'dvpola_id' => '68051',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'id' => 850,
                'name' => 'BARBOSA',
                'dvpola_id' => '68077',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'id' => 851,
                'name' => 'BARICHARA',
                'dvpola_id' => '68079',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'id' => 852,
                'name' => 'BARRANCABERMEJA',
                'dvpola_id' => '68081',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'id' => 853,
                'name' => 'BETULIA',
                'dvpola_id' => '68092',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'id' => 854,
                'name' => 'BOLIVAR',
                'dvpola_id' => '68101',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'id' => 855,
                'name' => 'CABRERA',
                'dvpola_id' => '68121',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'id' => 856,
                'name' => 'CALIFORNIA',
                'dvpola_id' => '68132',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'id' => 857,
                'name' => 'CAPITANEJO',
                'dvpola_id' => '68147',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'id' => 858,
                'name' => 'CARCASI',
                'dvpola_id' => '68152',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'id' => 859,
                'name' => 'CEPITA',
                'dvpola_id' => '68160',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'id' => 860,
                'name' => 'CERRITO',
                'dvpola_id' => '68162',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'id' => 861,
                'name' => 'CHARALA',
                'dvpola_id' => '68167',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'id' => 862,
                'name' => 'CHARTA',
                'dvpola_id' => '68169',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'id' => 863,
                'name' => 'CHIMA',
                'dvpola_id' => '68176',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'id' => 864,
                'name' => 'CHIPATA',
                'dvpola_id' => '68179',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'id' => 865,
                'name' => 'CIMITARRA',
                'dvpola_id' => '68190',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'id' => 866,
                'name' => 'CONCEPCION',
                'dvpola_id' => '68207',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'id' => 867,
                'name' => 'CONFINES',
                'dvpola_id' => '68209',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'id' => 868,
                'name' => 'CONTRATACION',
                'dvpola_id' => '68211',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'id' => 869,
                'name' => 'COROMORO',
                'dvpola_id' => '68217',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'id' => 870,
                'name' => 'CURITI',
                'dvpola_id' => '68229',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'id' => 871,
                'name' => 'EL CARMEN DE CHUCURI',
                'dvpola_id' => '68235',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'id' => 872,
                'name' => 'EL GUACAMAYO',
                'dvpola_id' => '68245',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'id' => 873,
                'name' => 'EL PEÑON',
                'dvpola_id' => '68250',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'id' => 874,
                'name' => 'EL PLAYON',
                'dvpola_id' => '68255',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'id' => 875,
                'name' => 'ENCINO',
                'dvpola_id' => '68264',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'id' => 876,
                'name' => 'ENCISO',
                'dvpola_id' => '68266',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'id' => 877,
                'name' => 'FLORIAN',
                'dvpola_id' => '68271',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'id' => 878,
                'name' => 'FLORIDABLANCA',
                'dvpola_id' => '68276',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'id' => 879,
                'name' => 'GALAN',
                'dvpola_id' => '68296',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'id' => 880,
                'name' => 'GAMBITA',
                'dvpola_id' => '68298',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'id' => 881,
                'name' => 'GIRON',
                'dvpola_id' => '68307',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'id' => 882,
                'name' => 'GUACA',
                'dvpola_id' => '68318',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'id' => 883,
                'name' => 'GUADALUPE',
                'dvpola_id' => '68320',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'id' => 884,
                'name' => 'GUAPOTA',
                'dvpola_id' => '68322',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'id' => 885,
                'name' => 'GUAVATA',
                'dvpola_id' => '68324',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'id' => 886,
                'name' => 'GUEPSA',
                'dvpola_id' => '68327',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'id' => 887,
                'name' => 'HATO',
                'dvpola_id' => '68344',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'id' => 888,
                'name' => 'JESUS MARIA',
                'dvpola_id' => '68368',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'id' => 889,
                'name' => 'JORDAN',
                'dvpola_id' => '68370',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'id' => 890,
                'name' => 'LA BELLEZA',
                'dvpola_id' => '68377',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'id' => 891,
                'name' => 'LANDAZURI',
                'dvpola_id' => '68385',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'id' => 892,
                'name' => 'LA PAZ',
                'dvpola_id' => '68397',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'id' => 893,
                'name' => 'LEBRIJA',
                'dvpola_id' => '68406',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'id' => 894,
                'name' => 'LOS SANTOS',
                'dvpola_id' => '68418',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'id' => 895,
                'name' => 'MACARAVITA',
                'dvpola_id' => '68425',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'id' => 896,
                'name' => 'MALAGA',
                'dvpola_id' => '68432',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'id' => 897,
                'name' => 'MATANZA',
                'dvpola_id' => '68444',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'id' => 898,
                'name' => 'MOGOTES',
                'dvpola_id' => '68464',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'id' => 899,
                'name' => 'MOLAGAVITA',
                'dvpola_id' => '68468',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'id' => 900,
                'name' => 'OCAMONTE',
                'dvpola_id' => '68498',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'id' => 901,
                'name' => 'OIBA',
                'dvpola_id' => '68500',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'id' => 902,
                'name' => 'ONZAGA',
                'dvpola_id' => '68502',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'id' => 903,
                'name' => 'PALMAR',
                'dvpola_id' => '68522',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'id' => 904,
                'name' => 'PALMAS DEL SOCORRO',
                'dvpola_id' => '68524',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'id' => 905,
                'name' => 'PARAMO',
                'dvpola_id' => '68533',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'id' => 906,
                'name' => 'PIEDECUESTA',
                'dvpola_id' => '68547',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'id' => 907,
                'name' => 'PINCHOTE',
                'dvpola_id' => '68549',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'id' => 908,
                'name' => 'PUENTE NACIONAL',
                'dvpola_id' => '68572',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'id' => 909,
                'name' => 'PUERTO PARRA',
                'dvpola_id' => '68573',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'id' => 910,
                'name' => 'PUERTO WILCHES',
                'dvpola_id' => '68575',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'id' => 911,
                'name' => 'RIONEGRO',
                'dvpola_id' => '68615',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'id' => 912,
                'name' => 'SABANA DE TORRES',
                'dvpola_id' => '68655',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'id' => 913,
                'name' => 'SAN ANDRES',
                'dvpola_id' => '68669',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'id' => 914,
                'name' => 'SAN BENITO',
                'dvpola_id' => '68673',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'id' => 915,
                'name' => 'SAN GIL',
                'dvpola_id' => '68679',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'id' => 916,
                'name' => 'SAN JOAQUIN',
                'dvpola_id' => '68682',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'id' => 917,
                'name' => 'SAN JOSE DE MIRANDA',
                'dvpola_id' => '68684',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'id' => 918,
                'name' => 'SAN MIGUEL',
                'dvpola_id' => '68686',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'id' => 919,
                'name' => 'SAN VICENTE DE CHUCURI',
                'dvpola_id' => '68689',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'id' => 920,
                'name' => 'SANTA BARBARA',
                'dvpola_id' => '68705',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'id' => 921,
                'name' => 'SANTA HELENA DEL OPON',
                'dvpola_id' => '68720',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'id' => 922,
                'name' => 'SIMACOTA',
                'dvpola_id' => '68745',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'id' => 923,
                'name' => 'SOCORRO',
                'dvpola_id' => '68755',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'id' => 924,
                'name' => 'SUAITA',
                'dvpola_id' => '68770',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'id' => 925,
                'name' => 'SUCRE',
                'dvpola_id' => '68773',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'id' => 926,
                'name' => 'SURATA',
                'dvpola_id' => '68780',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'id' => 927,
                'name' => 'TONA',
                'dvpola_id' => '68820',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'id' => 928,
                'name' => 'VALLE DE SAN JOSE',
                'dvpola_id' => '68855',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'id' => 929,
                'name' => 'VELEZ',
                'dvpola_id' => '68861',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'id' => 930,
                'name' => 'VETAS',
                'dvpola_id' => '68867',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'id' => 931,
                'name' => 'VILLANUEVA',
                'dvpola_id' => '68872',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'id' => 932,
                'name' => 'ZAPATOCA',
                'dvpola_id' => '68895',
                'dep_id' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'id' => 933,
                'name' => 'SINCELEJO',
                'dvpola_id' => '70001',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'id' => 934,
                'name' => 'BUENAVISTA',
                'dvpola_id' => '70110',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'id' => 935,
                'name' => 'CAIMITO',
                'dvpola_id' => '70124',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'id' => 936,
                'name' => 'COLOSO',
                'dvpola_id' => '70204',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'id' => 937,
                'name' => 'COROZAL',
                'dvpola_id' => '70215',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'id' => 938,
                'name' => 'COVEÑAS',
                'dvpola_id' => '70221',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'id' => 939,
                'name' => 'CHALAN',
                'dvpola_id' => '70230',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'id' => 940,
                'name' => 'EL ROBLE',
                'dvpola_id' => '70233',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'id' => 941,
                'name' => 'GALERAS',
                'dvpola_id' => '70235',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'id' => 942,
                'name' => 'GUARANDA',
                'dvpola_id' => '70265',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'id' => 943,
                'name' => 'LA UNION',
                'dvpola_id' => '70400',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'id' => 944,
                'name' => 'LOS PALMITOS',
                'dvpola_id' => '70418',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'id' => 945,
                'name' => 'MAJAGUAL',
                'dvpola_id' => '70429',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'id' => 946,
                'name' => 'MORROA',
                'dvpola_id' => '70473',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'id' => 947,
                'name' => 'OVEJAS',
                'dvpola_id' => '70508',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'id' => 948,
                'name' => 'PALMITO',
                'dvpola_id' => '70523',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'id' => 949,
                'name' => 'SAMPUES',
                'dvpola_id' => '70670',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'id' => 950,
                'name' => 'SAN BENITO ABAD',
                'dvpola_id' => '70678',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'id' => 951,
                'name' => 'SAN JUAN DE BETULIA',
                'dvpola_id' => '70702',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'id' => 952,
                'name' => 'SAN MARCOS',
                'dvpola_id' => '70708',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'id' => 953,
                'name' => 'SAN ONOFRE',
                'dvpola_id' => '70713',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'id' => 954,
                'name' => 'SAN PEDRO',
                'dvpola_id' => '70717',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'id' => 955,
                'name' => 'SAN LUIS DE SINCE',
                'dvpola_id' => '70742',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'id' => 956,
                'name' => 'SUCRE',
                'dvpola_id' => '70771',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'id' => 957,
                'name' => 'SANTIAGO DE TOLU',
                'dvpola_id' => '70820',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'id' => 958,
                'name' => 'SAN JOSE DE TOLUVIEJO',
                'dvpola_id' => '70823',
                'dep_id' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'id' => 959,
                'name' => 'IBAGUE',
                'dvpola_id' => '73001',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'id' => 960,
                'name' => 'ALPUJARRA',
                'dvpola_id' => '73024',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'id' => 961,
                'name' => 'ALVARADO',
                'dvpola_id' => '73026',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'id' => 962,
                'name' => 'AMBALEMA',
                'dvpola_id' => '73030',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'id' => 963,
                'name' => 'ANZOATEGUI',
                'dvpola_id' => '73043',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'id' => 964,
                'name' => 'ARMERO',
                'dvpola_id' => '73055',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'id' => 965,
                'name' => 'ATACO',
                'dvpola_id' => '73067',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'id' => 966,
                'name' => 'CAJAMARCA',
                'dvpola_id' => '73124',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'id' => 967,
                'name' => 'CARMEN DE APICALA',
                'dvpola_id' => '73148',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'id' => 968,
                'name' => 'CASABIANCA',
                'dvpola_id' => '73152',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'id' => 969,
                'name' => 'CHAPARRAL',
                'dvpola_id' => '73168',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'id' => 970,
                'name' => 'COELLO',
                'dvpola_id' => '73200',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'id' => 971,
                'name' => 'COYAIMA',
                'dvpola_id' => '73217',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            471 => 
            array (
                'id' => 972,
                'name' => 'CUNDAY',
                'dvpola_id' => '73226',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            472 => 
            array (
                'id' => 973,
                'name' => 'DOLORES',
                'dvpola_id' => '73236',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            473 => 
            array (
                'id' => 974,
                'name' => 'ESPINAL',
                'dvpola_id' => '73268',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            474 => 
            array (
                'id' => 975,
                'name' => 'FALAN',
                'dvpola_id' => '73270',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            475 => 
            array (
                'id' => 976,
                'name' => 'FLANDES',
                'dvpola_id' => '73275',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            476 => 
            array (
                'id' => 977,
                'name' => 'FRESNO',
                'dvpola_id' => '73283',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            477 => 
            array (
                'id' => 978,
                'name' => 'GUAMO',
                'dvpola_id' => '73319',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            478 => 
            array (
                'id' => 979,
                'name' => 'HERVEO',
                'dvpola_id' => '73347',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            479 => 
            array (
                'id' => 980,
                'name' => 'HONDA',
                'dvpola_id' => '73349',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            480 => 
            array (
                'id' => 981,
                'name' => 'ICONONZO',
                'dvpola_id' => '73352',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            481 => 
            array (
                'id' => 982,
                'name' => 'LERIDA',
                'dvpola_id' => '73408',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            482 => 
            array (
                'id' => 983,
                'name' => 'LIBANO',
                'dvpola_id' => '73411',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            483 => 
            array (
                'id' => 984,
                'name' => 'SAN SEBASTIAN DE MARIQUITA',
                'dvpola_id' => '73443',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            484 => 
            array (
                'id' => 985,
                'name' => 'MELGAR',
                'dvpola_id' => '73449',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            485 => 
            array (
                'id' => 986,
                'name' => 'MURILLO',
                'dvpola_id' => '73461',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            486 => 
            array (
                'id' => 987,
                'name' => 'NATAGAIMA',
                'dvpola_id' => '73483',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            487 => 
            array (
                'id' => 988,
                'name' => 'ORTEGA',
                'dvpola_id' => '73504',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            488 => 
            array (
                'id' => 989,
                'name' => 'PALOCABILDO',
                'dvpola_id' => '73520',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            489 => 
            array (
                'id' => 990,
                'name' => 'PIEDRAS',
                'dvpola_id' => '73547',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            490 => 
            array (
                'id' => 991,
                'name' => 'PLANADAS',
                'dvpola_id' => '73555',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            491 => 
            array (
                'id' => 992,
                'name' => 'PRADO',
                'dvpola_id' => '73563',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            492 => 
            array (
                'id' => 993,
                'name' => 'PURIFICACION',
                'dvpola_id' => '73585',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            493 => 
            array (
                'id' => 994,
                'name' => 'RIOBLANCO',
                'dvpola_id' => '73616',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            494 => 
            array (
                'id' => 995,
                'name' => 'RONCESVALLES',
                'dvpola_id' => '73622',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            495 => 
            array (
                'id' => 996,
                'name' => 'ROVIRA',
                'dvpola_id' => '73624',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            496 => 
            array (
                'id' => 997,
                'name' => 'SALDAÑA',
                'dvpola_id' => '73671',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            497 => 
            array (
                'id' => 998,
                'name' => 'SAN ANTONIO',
                'dvpola_id' => '73675',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            498 => 
            array (
                'id' => 999,
                'name' => 'SAN LUIS',
                'dvpola_id' => '73678',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1000,
                'name' => 'SANTA ISABEL',
                'dvpola_id' => '73686',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('ciudades')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'name' => 'SUAREZ',
                'dvpola_id' => '73770',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1002,
                'name' => 'VALLE DE SAN JUAN',
                'dvpola_id' => '73854',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1003,
                'name' => 'VENADILLO',
                'dvpola_id' => '73861',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1004,
                'name' => 'VILLAHERMOSA',
                'dvpola_id' => '73870',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1005,
                'name' => 'VILLARRICA',
                'dvpola_id' => '73873',
                'dep_id' => '73',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1006,
                'name' => 'CALI',
                'dvpola_id' => '76001',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1007,
                'name' => 'ALCALA',
                'dvpola_id' => '76020',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1008,
                'name' => 'ANDALUCIA',
                'dvpola_id' => '76036',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1009,
                'name' => 'ANSERMANUEVO',
                'dvpola_id' => '76041',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1010,
                'name' => 'ARGELIA',
                'dvpola_id' => '76054',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1011,
                'name' => 'BOLIVAR',
                'dvpola_id' => '76100',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1012,
                'name' => 'BUENAVENTURA',
                'dvpola_id' => '76109',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1013,
                'name' => 'GUADALAJARA DE BUGA',
                'dvpola_id' => '76111',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1014,
                'name' => 'BUGALAGRANDE',
                'dvpola_id' => '76113',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1015,
                'name' => 'CAICEDONIA',
                'dvpola_id' => '76122',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1016,
                'name' => 'CALIMA',
                'dvpola_id' => '76126',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1017,
                'name' => 'CANDELARIA',
                'dvpola_id' => '76130',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1018,
                'name' => 'CARTAGO',
                'dvpola_id' => '76147',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1019,
                'name' => 'DAGUA',
                'dvpola_id' => '76233',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1020,
                'name' => 'EL ÁGUILA',
                'dvpola_id' => '76243',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1021,
                'name' => 'EL CAIRO',
                'dvpola_id' => '76246',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1022,
                'name' => 'EL CERRITO',
                'dvpola_id' => '76248',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1023,
                'name' => 'EL DOVIO',
                'dvpola_id' => '76250',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1024,
                'name' => 'FLORIDA',
                'dvpola_id' => '76275',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1025,
                'name' => 'GINEBRA',
                'dvpola_id' => '76306',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1026,
                'name' => 'GUACARI',
                'dvpola_id' => '76318',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1027,
                'name' => 'JAMUNDI',
                'dvpola_id' => '76364',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1028,
                'name' => 'LA CUMBRE',
                'dvpola_id' => '76377',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1029,
                'name' => 'LA UNION',
                'dvpola_id' => '76400',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1030,
                'name' => 'LA VICTORIA',
                'dvpola_id' => '76403',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1031,
                'name' => 'OBANDO',
                'dvpola_id' => '76497',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1032,
                'name' => 'PALMIRA',
                'dvpola_id' => '76520',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1033,
                'name' => 'PRADERA',
                'dvpola_id' => '76563',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1034,
                'name' => 'RESTREPO',
                'dvpola_id' => '76606',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1035,
                'name' => 'RIOFRIO',
                'dvpola_id' => '76616',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1036,
                'name' => 'ROLDANILLO',
                'dvpola_id' => '76622',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1037,
                'name' => 'SAN PEDRO',
                'dvpola_id' => '76670',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1038,
                'name' => 'SEVILLA',
                'dvpola_id' => '76736',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1039,
                'name' => 'TORO',
                'dvpola_id' => '76823',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1040,
                'name' => 'TRUJILLO',
                'dvpola_id' => '76828',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1041,
                'name' => 'TULUA',
                'dvpola_id' => '76834',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1042,
                'name' => 'ULLOA',
                'dvpola_id' => '76845',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1043,
                'name' => 'VERSALLES',
                'dvpola_id' => '76863',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1044,
                'name' => 'VIJES',
                'dvpola_id' => '76869',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1045,
                'name' => 'YOTOCO',
                'dvpola_id' => '76890',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1046,
                'name' => 'YUMBO',
                'dvpola_id' => '76892',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1047,
                'name' => 'ZARZAL',
                'dvpola_id' => '76895',
                'dep_id' => '76',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1048,
                'name' => 'ARAUCA',
                'dvpola_id' => '81001',
                'dep_id' => '81',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1049,
                'name' => 'ARAUQUITA',
                'dvpola_id' => '81065',
                'dep_id' => '81',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1050,
                'name' => 'CRAVO NORTE',
                'dvpola_id' => '81220',
                'dep_id' => '81',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1051,
                'name' => 'FORTUL',
                'dvpola_id' => '81300',
                'dep_id' => '81',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1052,
                'name' => 'PUERTO RONDON',
                'dvpola_id' => '81591',
                'dep_id' => '81',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1053,
                'name' => 'SARAVENA',
                'dvpola_id' => '81736',
                'dep_id' => '81',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1054,
                'name' => 'TAME',
                'dvpola_id' => '81794',
                'dep_id' => '81',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1055,
                'name' => 'YOPAL',
                'dvpola_id' => '85001',
                'dep_id' => '85',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1056,
                'name' => 'AGUAZUL',
                'dvpola_id' => '85010',
                'dep_id' => '85',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1057,
                'name' => 'CHAMEZA',
                'dvpola_id' => '85015',
                'dep_id' => '85',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1058,
                'name' => 'HATO COROZAL',
                'dvpola_id' => '85125',
                'dep_id' => '85',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1059,
                'name' => 'LA SALINA',
                'dvpola_id' => '85136',
                'dep_id' => '85',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1060,
                'name' => 'MANI',
                'dvpola_id' => '85139',
                'dep_id' => '85',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1061,
                'name' => 'MONTERREY',
                'dvpola_id' => '85162',
                'dep_id' => '85',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1062,
                'name' => 'NUNCHIA',
                'dvpola_id' => '85225',
                'dep_id' => '85',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1063,
                'name' => 'OROCUE',
                'dvpola_id' => '85230',
                'dep_id' => '85',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1064,
                'name' => 'PAZ DE ARIPORO',
                'dvpola_id' => '85250',
                'dep_id' => '85',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1065,
                'name' => 'PORE',
                'dvpola_id' => '85263',
                'dep_id' => '85',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1066,
                'name' => 'RECETOR',
                'dvpola_id' => '85279',
                'dep_id' => '85',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1067,
                'name' => 'SABANALARGA',
                'dvpola_id' => '85300',
                'dep_id' => '85',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1068,
                'name' => 'SACAMA',
                'dvpola_id' => '85315',
                'dep_id' => '85',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1069,
                'name' => 'SAN LUIS DE PALENQUE',
                'dvpola_id' => '85325',
                'dep_id' => '85',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1070,
                'name' => 'TAMARA',
                'dvpola_id' => '85400',
                'dep_id' => '85',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1071,
                'name' => 'TAURAMENA',
                'dvpola_id' => '85410',
                'dep_id' => '85',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1072,
                'name' => 'TRINIDAD',
                'dvpola_id' => '85430',
                'dep_id' => '85',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1073,
                'name' => 'VILLANUEVA',
                'dvpola_id' => '85440',
                'dep_id' => '85',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1074,
                'name' => 'MOCOA',
                'dvpola_id' => '86001',
                'dep_id' => '86',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1075,
                'name' => 'COLON',
                'dvpola_id' => '86219',
                'dep_id' => '86',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1076,
                'name' => 'ORITO',
                'dvpola_id' => '86320',
                'dep_id' => '86',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1077,
                'name' => 'PUERTO ASIS',
                'dvpola_id' => '86568',
                'dep_id' => '86',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1078,
                'name' => 'PUERTO CAICEDO',
                'dvpola_id' => '86569',
                'dep_id' => '86',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1079,
                'name' => 'PUERTO GUZMAN',
                'dvpola_id' => '86571',
                'dep_id' => '86',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1080,
                'name' => 'PUERTO LEGUIZAMO',
                'dvpola_id' => '86573',
                'dep_id' => '86',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1081,
                'name' => 'SIBUNDOY',
                'dvpola_id' => '86749',
                'dep_id' => '86',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1082,
                'name' => 'SAN FRANCISCO',
                'dvpola_id' => '86755',
                'dep_id' => '86',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1083,
                'name' => 'SAN MIGUEL',
                'dvpola_id' => '86757',
                'dep_id' => '86',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1084,
                'name' => 'SANTIAGO',
                'dvpola_id' => '86760',
                'dep_id' => '86',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1085,
                'name' => 'VALLE DEL GUAMUEZ',
                'dvpola_id' => '86865',
                'dep_id' => '86',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1086,
                'name' => 'VILLAGARZON',
                'dvpola_id' => '86885',
                'dep_id' => '86',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1087,
                'name' => 'SAN ANDRES',
                'dvpola_id' => '88001',
                'dep_id' => '88',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1088,
                'name' => 'PROVIDENCIA',
                'dvpola_id' => '88564',
                'dep_id' => '88',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1089,
                'name' => 'LETICIA',
                'dvpola_id' => '91001',
                'dep_id' => '91',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1090,
                'name' => 'EL ENCANTO',
                'dvpola_id' => '91263',
                'dep_id' => '91',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1091,
                'name' => 'LA CHORRERA',
                'dvpola_id' => '91405',
                'dep_id' => '91',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1092,
                'name' => 'LA PEDRERA',
                'dvpola_id' => '91407',
                'dep_id' => '91',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1093,
                'name' => 'LA VICTORIA',
                'dvpola_id' => '91430',
                'dep_id' => '91',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1094,
                'name' => 'MIRITI - PARANA',
                'dvpola_id' => '91460',
                'dep_id' => '91',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1095,
                'name' => 'PUERTO ALEGRIA',
                'dvpola_id' => '91530',
                'dep_id' => '91',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1096,
                'name' => 'PUERTO ARICA',
                'dvpola_id' => '91536',
                'dep_id' => '91',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1097,
                'name' => 'PUERTO NARIÑO',
                'dvpola_id' => '91540',
                'dep_id' => '91',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1098,
                'name' => 'PUERTO SANTANDER',
                'dvpola_id' => '91669',
                'dep_id' => '91',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1099,
                'name' => 'TARAPACA',
                'dvpola_id' => '91798',
                'dep_id' => '91',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1100,
                'name' => 'INIRIDA',
                'dvpola_id' => '94001',
                'dep_id' => '94',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1101,
                'name' => 'BARRANCOMINAS',
                'dvpola_id' => '94343',
                'dep_id' => '94',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1102,
                'name' => 'MAPIRIPANA',
                'dvpola_id' => '94663',
                'dep_id' => '94',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1103,
                'name' => 'SAN FELIPE',
                'dvpola_id' => '94883',
                'dep_id' => '94',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1104,
                'name' => 'PUERTO COLOMBIA',
                'dvpola_id' => '94884',
                'dep_id' => '94',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1105,
                'name' => 'LA GUADALUPE',
                'dvpola_id' => '94885',
                'dep_id' => '94',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1106,
                'name' => 'CACAHUAL',
                'dvpola_id' => '94886',
                'dep_id' => '94',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1107,
                'name' => 'PANA PANA',
                'dvpola_id' => '94887',
                'dep_id' => '94',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1108,
                'name' => 'MORICHAL',
                'dvpola_id' => '94888',
                'dep_id' => '94',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1109,
                'name' => 'SAN JOSE DEL GUAVIARE',
                'dvpola_id' => '95001',
                'dep_id' => '95',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1110,
                'name' => 'CALAMAR',
                'dvpola_id' => '95015',
                'dep_id' => '95',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1111,
                'name' => 'EL RETORNO',
                'dvpola_id' => '95025',
                'dep_id' => '95',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1112,
                'name' => 'MIRAFLORES',
                'dvpola_id' => '95200',
                'dep_id' => '95',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1113,
                'name' => 'MITU',
                'dvpola_id' => '97001',
                'dep_id' => '97',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1114,
                'name' => 'CARURU',
                'dvpola_id' => '97161',
                'dep_id' => '97',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1115,
                'name' => 'PACOA',
                'dvpola_id' => '97511',
                'dep_id' => '97',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1116,
                'name' => 'TARAIRA',
                'dvpola_id' => '97666',
                'dep_id' => '97',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1117,
                'name' => 'PAPUNAHUA',
                'dvpola_id' => '97777',
                'dep_id' => '97',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1118,
                'name' => 'YAVARATE',
                'dvpola_id' => '97889',
                'dep_id' => '97',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1119,
                'name' => 'PUERTO CARREÑO',
                'dvpola_id' => '99001',
                'dep_id' => '99',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1120,
                'name' => 'LA PRIMAVERA',
                'dvpola_id' => '99524',
                'dep_id' => '99',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1121,
                'name' => 'SANTA ROSALIA',
                'dvpola_id' => '99624',
                'dep_id' => '99',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1122,
                'name' => 'CUMARIBO',
                'dvpola_id' => '99773',
                'dep_id' => '99',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1123,
                'name' => 'QUITO',
                'dvpola_id' => '999101',
                'dep_id' => NULL,
                'created_at' => '2020-07-01 08:43:54',
                'updated_at' => '2020-07-01 08:43:54',
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1124,
                'name' => 'GUAYAQUIL',
                'dvpola_id' => '999201',
                'dep_id' => NULL,
                'created_at' => '2020-07-01 08:44:26',
                'updated_at' => '2020-07-01 08:44:26',
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1125,
                'name' => 'SAN GABRIEL',
                'dvpola_id' => '999301',
                'dep_id' => NULL,
                'created_at' => '2020-07-01 08:44:45',
                'updated_at' => '2020-07-01 08:44:45',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}