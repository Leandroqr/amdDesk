<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'dashboard',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:01:18',
                'updated_at' => '2020-06-11 15:01:18',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'file-manager',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:01:18',
                'updated_at' => '2020-06-11 15:01:18',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'langfile-manager',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:01:18',
                'updated_at' => '2020-06-11 15:01:18',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'backup-manager',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:01:18',
                'updated_at' => '2020-06-11 15:01:18',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'log-manager',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:01:18',
                'updated_at' => '2020-06-11 15:01:18',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'settings',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:01:18',
                'updated_at' => '2020-06-11 15:01:18',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'page-manager',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:01:18',
                'updated_at' => '2020-06-11 15:01:18',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'permission-manager',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:01:18',
                'updated_at' => '2020-06-11 15:01:18',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'menu-crud',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:01:19',
                'updated_at' => '2020-06-11 15:01:19',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'news-crud ',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:01:19',
                'updated_at' => '2020-06-11 15:01:19',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'edit articles',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:01:19',
                'updated_at' => '2020-06-11 15:01:19',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'delete articles',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:01:19',
                'updated_at' => '2020-06-11 15:01:19',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'publish articles',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:01:19',
                'updated_at' => '2020-06-11 15:01:19',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'unpublish articles',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:01:19',
                'updated_at' => '2020-06-11 15:01:19',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'autenticacion',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:36:28',
                'updated_at' => '2020-06-11 15:41:27',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'user-manager',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:37:00',
                'updated_at' => '2020-06-11 15:37:00',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'role-manager',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:37:18',
                'updated_at' => '2020-06-11 15:37:18',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Menú Área Empresa',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:41:06',
                'updated_at' => '2020-06-25 11:41:35',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Menú Países',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:42:59',
                'updated_at' => '2020-06-25 11:39:36',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Menú Departamentos',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:43:26',
                'updated_at' => '2020-06-25 11:42:13',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Menú Clientes',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:44:00',
                'updated_at' => '2020-06-25 11:52:32',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Menú Tipo Cliente',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:44:35',
                'updated_at' => '2020-06-25 11:48:25',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Menú Ciudades',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:44:49',
                'updated_at' => '2020-06-25 11:45:05',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Menú Data',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:45:22',
                'updated_at' => '2020-06-25 11:40:17',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Menú Soporte',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:45:59',
                'updated_at' => '2020-06-25 11:52:52',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Menú Secciones',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:46:36',
                'updated_at' => '2020-06-25 12:01:38',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Menú Grupos',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:46:55',
                'updated_at' => '2020-06-25 12:04:51',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Menú Aplicaciones',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:48:04',
                'updated_at' => '2020-06-25 12:05:06',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Menú Matriz Soporte',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:48:39',
                'updated_at' => '2020-06-25 12:06:04',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Menú Estados',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:49:02',
                'updated_at' => '2020-06-25 12:07:00',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Menú Modelo de Atención',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:49:27',
                'updated_at' => '2020-06-25 12:08:19',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Menú Tickets Soporte',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:50:17',
                'updated_at' => '2020-06-25 12:25:17',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Área BI',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:50:48',
                'updated_at' => '2020-06-25 12:29:33',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Informe1',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:51:35',
                'updated_at' => '2020-06-25 12:30:49',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Informe2',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:51:59',
                'updated_at' => '2020-06-25 12:30:59',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Menú Área de Usuarios',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 16:22:25',
                'updated_at' => '2020-06-25 12:22:51',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'back_end',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 16:23:24',
                'updated_at' => '2020-06-11 16:23:24',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Ver Tickets',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Ver detalle Tickets',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Crear Tickets',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Editar Tickets',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Borrar Tickets',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Ver Clientes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Ver detalle Clientes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Crear Clientes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Editar Clientes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Borrar Clientes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Ver Aplicaciones',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Ver detalle Aplicaciones',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Crear Aplicaciones',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Editar Aplicaciones',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Borrar Aplicaciones',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Ver Ciudades',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Ver detalle Ciudades',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Crear Ciudades',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Editar Ciudades',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Borrar Ciudades',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Ver Departamentos',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Ver detalle Departamentos',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Crear Departamentos',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Editar Departamentos',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Borrar Departamentos',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Ver Estados',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Ver detalle Estados',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Crear Estados',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Editar Estados',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Borrar Estados',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Ver Grupos',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Ver detalle Grupos',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Crear Grupos',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Editar Grupos',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Borrar Grupos',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Ver Matriz Soporte',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Ver detalle Matriz Soporte',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Crear Matriz Soporte',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Editar Matriz Soporte',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Borrar Matriz Soporte',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Ver Modelo Atencion',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Ver detalle Modelo Atencion',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Crear Modelo Atencion',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Editar Modelo Atencion',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Borrar Modelo Atencion',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Ver Paises',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Ver detalle Paises',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Crear Paises',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Editar Paises',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Borrar Paises',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Ver Secciones',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Ver detalle Secciones',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Crear Secciones',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Editar Secciones',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Borrar Secciones',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Ver SgiActivoIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Ver detalle SgiActivoIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Crear SgiActivoIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Editar SgiActivoIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Borrar SgiActivoIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Ver SgiEstadoActualIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Ver detalle SgiEstadoActualIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Crear SgiEstadoActualIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Editar SgiEstadoActualIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Borrar SgiEstadoActualIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Ver SgiLugarIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Ver detalle SgiLugarIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Crear SgiLugarIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Editar SgiLugarIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Borrar SgiLugarIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Ver SgiMatrizIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Ver detalle SgiMatrizIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Crear SgiMatrizIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Editar SgiMatrizIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Borrar SgiMatrizIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Ver SgiPrioridadIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Ver detalle SgiPrioridadIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Crear SgiPrioridadIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Editar SgiPrioridadIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Borrar SgiPrioridadIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Ver SgiTicketIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Ver detalle SgiTicketIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Crear SgiTicketIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Editar SgiTicketIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Borrar SgiTicketIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Ver SgiTipoIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Ver detalle SgiTipoIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Crear SgiTipoIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Editar SgiTipoIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Borrar SgiTipoIncidentes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Ver Tipo Clientes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'Ver detalle Tipo Clientes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Crear Tipo Clientes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Editar Tipo Clientes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Borrar Tipo Clientes',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Menú SGI',
                'guard_name' => 'web',
                'created_at' => '2020-06-25 12:14:44',
                'updated_at' => '2020-06-25 12:14:44',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Menú Activo de Información',
                'guard_name' => 'web',
                'created_at' => '2020-06-25 12:15:38',
                'updated_at' => '2020-06-25 12:15:38',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Menú Estado Actual',
                'guard_name' => 'web',
                'created_at' => '2020-06-25 12:16:34',
                'updated_at' => '2020-06-25 12:16:34',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'Menú Estado SGI',
                'guard_name' => 'web',
                'created_at' => '2020-06-25 12:17:11',
                'updated_at' => '2020-06-25 12:17:11',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Menú Lugar SGI',
                'guard_name' => 'web',
                'created_at' => '2020-06-25 12:18:05',
                'updated_at' => '2020-06-25 12:18:05',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Menú Matriz SGI',
                'guard_name' => 'web',
                'created_at' => '2020-06-25 12:18:56',
                'updated_at' => '2020-06-25 12:18:56',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Menú Prioridad SGI',
                'guard_name' => 'web',
                'created_at' => '2020-06-25 12:19:49',
                'updated_at' => '2020-06-25 12:19:49',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Menú Tipo Incidente SGI',
                'guard_name' => 'web',
                'created_at' => '2020-06-25 12:20:28',
                'updated_at' => '2020-06-25 12:20:28',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Menú Tickets Todos',
                'guard_name' => 'web',
                'created_at' => '2020-06-25 12:26:28',
                'updated_at' => '2020-06-27 07:27:56',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Menú Tickets SGI',
                'guard_name' => 'web',
                'created_at' => '2020-06-25 12:27:25',
                'updated_at' => '2020-06-25 12:27:25',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Ver Todos Tickets',
                'guard_name' => 'web',
                'created_at' => '2020-06-26 18:54:24',
                'updated_at' => '2020-06-26 18:54:24',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Ver detalle Todos Tickets',
                'guard_name' => 'web',
                'created_at' => '2020-06-26 18:54:51',
                'updated_at' => '2020-06-26 18:54:51',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Crear Todos Tickets',
                'guard_name' => 'web',
                'created_at' => '2020-06-26 18:55:09',
                'updated_at' => '2020-06-26 18:55:09',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Editar Todos Tickets',
                'guard_name' => 'web',
                'created_at' => '2020-06-26 18:55:27',
                'updated_at' => '2020-06-26 18:55:27',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Borrar Todos Tickets',
                'guard_name' => 'web',
                'created_at' => '2020-06-26 18:55:42',
                'updated_at' => '2020-06-26 18:55:42',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Activity',
                'guard_name' => 'web',
                'created_at' => '2020-07-02 15:22:02',
                'updated_at' => '2020-07-02 15:22:02',
            ),
        ));
        
        
    }
}