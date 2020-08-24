<?php

use Illuminate\Database\Seeder;

class SgiactivoincidentesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sgiactivoincidentes')->delete();
        
        \DB::table('sgiactivoincidentes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Gerente- director de operaciones',
                'categoria' => 'Personal',
                'custodio' => '',
                'propietario' => '',
                'valor' => 'Alto',
                'c' => 8,
                'i' => 8,
                'd' => 9,
                'ponderado' => '8.30',
                'clasificacion' => 'Publica',
                'amenazas' => 'Robo de información
Retiro personal
Incapacidad
Poca disponibilidad
Desmotivación
Negligencia
Mal diseño de los procesos
Líder inexperto
Analistas inexpertos
Falta de capacitación- inducción- y sencibilizacion frente a los riesgos.
Falta de normas y reglas claras ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Lideres de area',
                'categoria' => 'Personal',
                'custodio' => 'Gerente- director de operaciones',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Medio',
                'c' => 5,
                'i' => 6,
                'd' => 6,
                'ponderado' => '5.70',
                'clasificacion' => 'Interna',
                'amenazas' => 'Robo de información
Retiro personal
Incapacidad
Poca disponibilidad
Desmotivación
Negligencia
Mal diseño de los procesos
Líder inexperto
Analistas inexpertos
Falta de capacitación- inducción- y sencibilizacion frente a los riesgos.
Falta de normas y reglas claras ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Director comercial',
                'categoria' => 'Personal',
                'custodio' => '',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Medio',
                'c' => 6,
                'i' => 8,
                'd' => 5,
                'ponderado' => '6.30',
                'clasificacion' => 'Publica',
                'amenazas' => 'Robo de información
Retiro personal
Incapacidad
Poca disponibilidad
Desmotivación
Negligencia
Mal diseño de los procesos
Líder inexperto
Analistas inexpertos
Falta de capacitación- inducción- y sencibilizacion frente a los riesgos.
Falta de normas y reglas claras ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'desarrolladores',
                'categoria' => 'Personal',
                'custodio' => 'Gerente- director de operaciones
Lideres de Area',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Alto',
                'c' => 5,
                'i' => 9,
                'd' => 8,
                'ponderado' => '7.30',
                'clasificacion' => 'Reservada',
                'amenazas' => 'Robo de información
Retiro personal
Incapacidad
Poca disponibilidad
Desmotivación
Negligencia
Mal diseño de los procesos
Líder inexperto
Analistas inexpertos
Falta de capacitación- inducción- y sencibilizacion frente a los riesgos.
Falta de normas y reglas claras ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Administrativos',
                'categoria' => 'Personal',
                'custodio' => 'Gerente- director de operaciones',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Alto',
                'c' => 8,
                'i' => 8,
                'd' => 7,
                'ponderado' => '7.70',
                'clasificacion' => 'Interna',
                'amenazas' => 'Robo de información
Retiro personal
Incapacidad
Poca disponibilidad
Desmotivación
Negligencia
Mal diseño de los procesos
Líder inexperto
Analistas inexpertos
Falta de capacitación- inducción- y sencibilizacion frente a los riesgos.
Falta de normas y reglas claras ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Agentes de mesa de ayuda',
                'categoria' => 'Personal',
                'custodio' => 'Gerente- director de operaciones
Lideres de Area',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Alto',
                'c' => 7,
                'i' => 7,
                'd' => 10,
                'ponderado' => '8.00',
                'clasificacion' => 'Interna',
                'amenazas' => 'Robo de información
Retiro personal
Incapacidad
Poca disponibilidad
Desmotivación
Negligencia
Mal diseño de los procesos
Líder inexperto
Analistas inexpertos
Falta de capacitación- inducción- y sencibilizacion frente a los riesgos.
Falta de normas y reglas claras ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Contratistas ',
                'categoria' => 'Personal',
                'custodio' => 'Administrativos',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Alto',
                'c' => 8,
                'i' => 9,
                'd' => 10,
                'ponderado' => '9.00',
                'clasificacion' => 'Interna',
                'amenazas' => 'Robo de información
Retiro personal
Incapacidad
Poca disponibilidad
Desmotivación
Negligencia
Mal diseño de los procesos
Líder inexperto
Analistas inexpertos
Falta de capacitación- inducción- y sencibilizacion frente a los riesgos.
Falta de normas y reglas claras ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Repositorio GIT',
                'categoria' => 'Datos- Información ',
                'custodio' => 'Líder de Desarrollo',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Alto',
                'c' => 6,
                'i' => 9,
                'd' => 7,
                'ponderado' => '7.30',
                'clasificacion' => 'Interna',
                'amenazas' => 'Ataque aplicaciones
Robo de información
Acceso no autorizado
Borrado y alteración
Mal manejo de sistemas y herramientas
Perdida de datos por error de usuario
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Correo electrónico',
                'categoria' => 'Datos- Información ',
                'custodio' => 'Todos',
                'propietario' => 'Director comercial ',
                'valor' => 'Medio',
                'c' => 8,
                'i' => 6,
                'd' => 6,
                'ponderado' => '6.70',
                'clasificacion' => 'Pública',
                'amenazas' => 'Ataque aplicaciones
Robo de información
Acceso no autorizado
Compartir contraseñas o permisos a terceros no autorizados
Manejo inadecuado de datos criticos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Repositorio organizacional',
                'categoria' => 'Datos- Información ',
                'custodio' => 'Todos',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Alto',
                'c' => 9,
                'i' => 5,
                'd' => 8,
                'ponderado' => '7.30',
                'clasificacion' => 'Interna',
                'amenazas' => 'Ataque aplicaciones
Robo de información
Acceso no autorizado
Borrado y alteración
Mal manejo de sistemas y herramientas
Perdida de datos por error de usuario
Compartir contraseñas o permisos a terceros no autorizados
Manejo inadecuado de datos criticos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Bases de datos MySql Alpina Directo',
                'categoria' => 'Datos- Información ',
                'custodio' => 'Líder de Desarrollo. Director de operaciones',
            'propietario' => 'Externo (Alpina)',
                'valor' => 'Muy Alto',
                'c' => 10,
                'i' => 9,
                'd' => 10,
                'ponderado' => '9.70',
                'clasificacion' => 'Reservada',
                'amenazas' => 'Ataque aplicaciones
falta de sistema de parches
Robo de información
Acceso no autorizado
Poca disponibilidad
Copia no autorizada
Borrado y alteración
Pérdida de capacidad de servidores
Mal manejo de sistemas y herramientas
Perdida de datos por error de usuario
Manejo inadecuado de datos criticos
Ausencia de documentación
Manejo inadecuado de contraseñas 
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Bases de datos MySql Distribuidores de Alpina',
                'categoria' => 'Datos- Información ',
                'custodio' => 'Líder de Desarrollo. Director de operaciones',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Muy Alto',
                'c' => 10,
                'i' => 9,
                'd' => 10,
                'ponderado' => '9.70',
                'clasificacion' => 'Reservada',
                'amenazas' => 'Ataque aplicaciones
falta de sistema de parches
Robo de información
Acceso no autorizado
Poca disponibilidad
Copia no autorizada
Borrado y alteración
Pérdida de capacidad de servidores
Mal manejo de sistemas y herramientas
Perdida de datos por error de usuario
Manejo inadecuado de datos criticos
Ausencia de documentación
Manejo inadecuado de contraseñas 
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Bases de datos MySql Otros Distribuidores',
                'categoria' => 'Datos- Información ',
                'custodio' => 'Líder de Desarrollo. Director de operaciones',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Muy Alto',
                'c' => 10,
                'i' => 9,
                'd' => 10,
                'ponderado' => '9.70',
                'clasificacion' => 'Reservada',
                'amenazas' => 'Ataque aplicaciones
falta de sistema de parches
Robo de información
Acceso no autorizado
Poca disponibilidad
Copia no autorizada
Borrado y alteración
Pérdida de capacidad de servidores
Mal manejo de sistemas y herramientas
Perdida de datos por error de usuario
Manejo inadecuado de datos criticos
Ausencia de documentación
Manejo inadecuado de contraseñas 
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Base de datos Oracle Alpina Maestros',
                'categoria' => 'Datos- Información ',
                'custodio' => 'Líder de Desarrollo. Director de operaciones',
            'propietario' => 'Externo (Alpina)',
                'valor' => 'Muy Alto',
                'c' => 10,
                'i' => 9,
                'd' => 10,
                'ponderado' => '9.70',
                'clasificacion' => 'Reservada',
                'amenazas' => 'Ataque aplicaciones
falta de sistema de parches
Robo de información
Acceso no autorizado
Poca disponibilidad
Copia no autorizada
Borrado y alteración
Pérdida de capacidad de servidores
Mal manejo de sistemas y herramientas
Perdida de datos por error de usuario
Manejo inadecuado de datos criticos
Ausencia de documentación
Manejo inadecuado de contraseñas 
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Bases de datos pruebas MySql AMOVIL',
                'categoria' => 'Datos- Información ',
                'custodio' => 'Líder de Desarrollo. Director de operaciones',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Medio',
                'c' => 9,
                'i' => 4,
                'd' => 6,
                'ponderado' => '6.30',
                'clasificacion' => 'Reservada',
                'amenazas' => 'Ataque aplicaciones
falta de sistema de parches
Robo de información
Acceso no autorizado
Poca disponibilidad
Copia no autorizada
Borrado y alteración
Pérdida de capacidad de servidores
Mal manejo de sistemas y herramientas
Perdida de datos por error de usuario
Manejo inadecuado de datos criticos
Ausencia de documentación
Manejo inadecuado de contraseñas 
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Bases de datos pruebas MySql Alpina',
                'categoria' => 'Datos- Información ',
                'custodio' => 'Líder de Desarrollo. Director de operaciones',
            'propietario' => 'Externo (Alpina)',
                'valor' => 'Medio',
                'c' => 9,
                'i' => 4,
                'd' => 6,
                'ponderado' => '6.30',
                'clasificacion' => 'Reservada',
                'amenazas' => 'Ataque aplicaciones
falta de sistema de parches
Robo de información
Acceso no autorizado
Poca disponibilidad
Copia no autorizada
Borrado y alteración
Pérdida de capacidad de servidores
Mal manejo de sistemas y herramientas
Perdida de datos por error de usuario
Manejo inadecuado de datos criticos
Ausencia de documentación
Manejo inadecuado de contraseñas 
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Datos de conexión a servidores',
                'categoria' => 'Datos- Información ',
                'custodio' => 'Administrador de TI. Gerente de operaciones',
                'propietario' => 'Gerente- director de operaciones
Proveedor Betec',
                'valor' => 'Muy Alto',
                'c' => 9,
                'i' => 10,
                'd' => 10,
                'ponderado' => '9.70',
                'clasificacion' => 'Reservada',
                'amenazas' => 'Robo de información
Acceso no autorizado
Manejo inadecuado de contraseñas
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Certificados electrónicos de contribuyentes para FE',
                'categoria' => 'Datos- Información ',
                'custodio' => 'Agentes de mesa de ayuda FE',
                'propietario' => 'Contribuyentes-clientes',
                'valor' => 'Muy Alto',
                'c' => 10,
                'i' => 9,
                'd' => 10,
                'ponderado' => '9.70',
                'clasificacion' => 'Reservada',
                'amenazas' => 'Robo de información
Copia no autorizada
Borrado y alteración
Perdida de datos por error de usuario
Manejo inadecuado de datos criticos
Ausencia de documentación ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Conexiones a bases de datos de los ERP de los contribuyentes para FE',
                'categoria' => 'Datos- Información ',
                'custodio' => 'Agentes de mesa de ayuda FE',
                'propietario' => 'Desarrolladores
',
                'valor' => 'Muy Alto',
                'c' => 10,
                'i' => 9,
                'd' => 10,
                'ponderado' => '9.70',
                'clasificacion' => 'Reservada',
                'amenazas' => 'Robo de información
Acceso no autorizado
Manejo inadecuado de contraseñas
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Documentos electrónicos de los contribuyentes para FE',
                'categoria' => 'Datos- Información ',
                'custodio' => 'Agentes de mesa de ayuda FE',
                'propietario' => 'Gerente- director de operaciones
',
                'valor' => 'Alto',
                'c' => 9,
                'i' => 8,
                'd' => 10,
                'ponderado' => '9.00',
                'clasificacion' => 'Reservada',
                'amenazas' => 'Robo de información
Copia no autorizada
Borrado y alteración
Perdida de datos por error de usuario
Manejo inadecuado de datos criticos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Hojas de vida',
                'categoria' => 'Datos- Información ',
                'custodio' => 'Administrativos',
                'propietario' => 'Amovil administrativo',
                'valor' => 'Bajo',
                'c' => 2,
                'i' => 5,
                'd' => 1,
                'ponderado' => '2.70',
                'clasificacion' => 'Confidencial o Reservada ',
                'amenazas' => 'Perdida de Privacidad de los individuos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Contratos',
                'categoria' => 'Datos- Información ',
                'custodio' => 'Administrativos',
                'propietario' => 'Amovil administrativo',
                'valor' => 'Medio',
                'c' => 6,
                'i' => 9,
                'd' => 5,
                'ponderado' => '6.70',
                'clasificacion' => 'Confidencial o Reservada ',
                'amenazas' => 'Robo de información
Acceso no autorizado
Borrado y alteración',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Imagen corporativa',
                'categoria' => 'Datos- Información ',
                'custodio' => 'Diseñador industrial',
                'propietario' => 'Representante legal ',
                'valor' => 'Bajo',
                'c' => 1,
                'i' => 5,
                'd' => 3,
                'ponderado' => '3.00',
                'clasificacion' => 'Publica',
                'amenazas' => 'Copia no autorizada
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Cervello',
                'categoria' => 'Software',
                'custodio' => '
Equipo de Soporte',
            'propietario' => 'Externo (Alpina)',
                'valor' => 'medio',
                'c' => 6,
                'i' => 7,
                'd' => 7,
                'ponderado' => '6.70',
                'clasificacion' => 'Interna',
                'amenazas' => 'Ataque aplicaciones
Ataque infraestructura tecnológica
Robo de información
Acceso no autorizado
Mal manejo de sistemas y herramientas
Perdida de datos por error de usuario
Ausencia de documentación 
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Sistema Web Data Empresas Amovil',
                'categoria' => 'Software',
                'custodio' => 'Equipo de Soporte',
                'propietario' => 'Lideres de Mesa de Ayuda',
                'valor' => 'Alto',
                'c' => 8,
                'i' => 8,
                'd' => 5,
                'ponderado' => '7.00',
                'clasificacion' => 'Interna',
                'amenazas' => 'Ataque aplicaciones
Ataque infraestructura tecnológica
Robo de información
Acceso no autorizado
Mal manejo de sistemas y herramientas
Perdida de datos por error de usuario
Ausencia de documentación 
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Servidor de versionamiento GitLab',
                'categoria' => 'Software',
                'custodio' => 'Líder de Desarrollo',
                'propietario' => 'Líder de Desarrollo',
                'valor' => 'Medio',
                'c' => 5,
                'i' => 7,
                'd' => 6,
                'ponderado' => '6.00',
                'clasificacion' => 'Reservada',
                'amenazas' => 'Ejecución de software malicioso
Ataque aplicaciones
Ataque infraestructura tecnológica
Acceso no autorizado
Pérdida de capacidad de servidores
Mal manejo de sistemas y herramientas
Manejo inadecuado de contraseñas
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Cliente GIT',
                'categoria' => 'Software',
                'custodio' => 'Equipo de Desarrollo',
                'propietario' => 'Líder de Desarrollo',
                'valor' => 'Bajo',
                'c' => 3,
                'i' => 2,
                'd' => 4,
                'ponderado' => '3.00',
                'clasificacion' => 'Publica',
                'amenazas' => 'Uso de software no oficial
Mal manejo de sistemas y herramientas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Cliente para conexiones a Bases de Datos',
                'categoria' => 'Software',
                'custodio' => 'Equipo de Desarrollo. Líder de Desarrollo. Analistas de Servicio Nivel 2. Gerente de operaciones',
                'propietario' => 'Gerente- director de operaciones
',
                'valor' => 'Bajo',
                'c' => 3,
                'i' => 2,
                'd' => 3,
                'ponderado' => '2.70',
                'clasificacion' => 'Publica',
                'amenazas' => 'Uso de software no oficial
Mal manejo de sistemas y herramientas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Entorno de desarrollo IDE',
                'categoria' => 'Software',
                'custodio' => 'Equipo de Desarrollo. Líder de Desarrollo. Gerente de operaciones',
                'propietario' => 'Gerente- director de operaciones.
Responsable TI',
                'valor' => 'Bajo',
                'c' => 2,
                'i' => 1,
                'd' => 1,
                'ponderado' => '1.30',
                'clasificacion' => 'Publica',
                'amenazas' => 'Uso de software no oficial
Mal manejo de sistemas y herramientas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Herramientas de control remoto',
                'categoria' => 'Software',
                'custodio' => 'Analistas de servicio Nivel 1 y 2
Analistas de FE',
                'propietario' => 'Responsable TI',
                'valor' => 'Bajo',
                'c' => 3,
                'i' => 3,
                'd' => 2,
                'ponderado' => '2.70',
                'clasificacion' => 'Publica',
                'amenazas' => 'Uso de software no oficial
Mal manejo de sistemas y herramientas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Herramientas de comunicación y conferencias',
                'categoria' => 'Software',
                'custodio' => 'Todos',
                'propietario' => 'Gerente- director de operaciones.
Responsable TI',
                'valor' => 'Bajo',
                'c' => 1,
                'i' => 3,
                'd' => 3,
                'ponderado' => '2.30',
                'clasificacion' => 'Publica',
                'amenazas' => 'Uso de software no oficial
Mal manejo de sistemas y herramientas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Microsoft Office 365',
                'categoria' => 'Software',
                'custodio' => 'Todos',
                'propietario' => 'Gerente- director de operaciones.
Responsable TI',
                'valor' => 'Medio',
                'c' => 2,
                'i' => 3,
                'd' => 7,
                'ponderado' => '4.00',
                'clasificacion' => 'Publica',
                'amenazas' => 'Uso de software no oficial
Mal manejo de sistemas y herramientas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Trello',
                'categoria' => 'Software',
                'custodio' => 'Todos',
                'propietario' => 'Todos',
                'valor' => 'Medio',
                'c' => 5,
                'i' => 2,
                'd' => 6,
                'ponderado' => '4.30',
                'clasificacion' => 'Interna',
                'amenazas' => 'Robo de información
Acceso no autorizado',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Herramientas de diseño',
                'categoria' => 'Software',
                'custodio' => 'Diseñador Industrial',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Medio',
                'c' => 6,
                'i' => 2,
                'd' => 5,
                'ponderado' => '4.30',
                'clasificacion' => 'Interna',
                'amenazas' => 'Uso de software no oficial',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Sistemas ERP Externo',
                'categoria' => 'Software',
                'custodio' => 'Desarrolladores Web. Equipo de Soporte',
                'propietario' => 'Clientes con ERP ',
                'valor' => 'Alto',
                'c' => 10,
                'i' => 10,
                'd' => 5,
                'ponderado' => '8.30',
                'clasificacion' => 'Reservada',
                'amenazas' => 'Ataque aplicaciones
Robo de información
Acceso no autorizado
Retiro personal
Copia no autorizada
Borrado y alteración
Perdida de datos por error de usuario
Manejo inadecuado de datos criticos
Manejo inadecuado de contraseñas
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Sistemas ERP interno',
                'categoria' => 'Software',
                'custodio' => 'Administradores',
                'propietario' => 'Xirus',
                'valor' => 'Alto',
                'c' => 9,
                'i' => 9,
                'd' => 7,
                'ponderado' => '8.30',
                'clasificacion' => 'Interna y Reservada',
                'amenazas' => 'Ataque aplicaciones
Robo de información
Acceso no autorizado
Retiro personal
Copia no autorizada
Borrado y alteración
Perdida de datos por error de usuario
Manejo inadecuado de datos criticos
Manejo inadecuado de contraseñas
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Navegadores de internet',
                'categoria' => 'Software',
                'custodio' => 'Todos',
                'propietario' => 'Todos',
                'valor' => 'Bajo',
                'c' => 1,
                'i' => 4,
                'd' => 4,
                'ponderado' => '3.00',
                'clasificacion' => 'Publica',
                'amenazas' => 'Ataque aplicaciones
Robo de información
Acceso no autorizado
Retiro personal
Copia no autorizada
Borrado y alteración
Perdida de datos por error de usuario
Manejo inadecuado de datos criticos
Manejo inadecuado de contraseñas
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
            'name' => 'Herramientas de conexión a servidores (ej. Putty)',
                'categoria' => 'Software',
                'custodio' => 'Líder de Desarrollo. 
Director de operaciones. algunos desarrolladores.
Administrador de servidores',
                'propietario' => 'Cada usuario',
                'valor' => 'Bajo',
                'c' => 4,
                'i' => 3,
                'd' => 4,
                'ponderado' => '3.70',
                'clasificacion' => 'Publica',
                'amenazas' => 'Manejo inadecuado de contraseñas
Compartir contraseñas o permisos a terceros no autorizados
Mal manejo de sistemas y herramientas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Sistemas Operativos',
                'categoria' => 'Software',
                'custodio' => 'Todos',
                'propietario' => 'Gerente-Director de operaciones',
                'valor' => 'Medio',
                'c' => 6,
                'i' => 3,
                'd' => 7,
                'ponderado' => '5.30',
                'clasificacion' => 'Publica',
                'amenazas' => 'Ejecución de software malicioso
Uso de software no oficial
Acceso no autorizado
Mal manejo de sistemas y herramientas
Perdida de datos por error de usuario
Infeccion de sitemas atraves de unidades  portables sin escaneo
Falta de actualizacion de software (procesos y recursos)
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Sistema Web de Gestión Amovil',
                'categoria' => 'Software',
                'custodio' => 'Desarrolladores Web. agentes mesa de ayuda',
                'propietario' => 'Gerente-Director de operaciones',
                'valor' => 'Alto',
                'c' => 8,
                'i' => 8,
                'd' => 10,
                'ponderado' => '8.70',
                'clasificacion' => 'Reservada',
                'amenazas' => 'Ejecución de software malicioso
Ataque aplicaciones
Falta de software de control de versiones
Robo de información
Acceso no autorizado
Pérdida de capacidad de servidores
Mal manejo de sistemas y herramientas
Ausencia de documentación 
Manejo inadecuado de contraseñas
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Sistema Web de Maestros Amovil',
                'categoria' => 'Software',
                'custodio' => 'Desarrolladores Web. Equipo de Soporte',
                'propietario' => 'Gerente-Director de operaciones',
                'valor' => 'Alto',
                'c' => 9,
                'i' => 8,
                'd' => 9,
                'ponderado' => '8.70',
                'clasificacion' => 'Reservada',
                'amenazas' => 'Ejecución de software malicioso
Ataque aplicaciones
Falta de software de control de versiones
Robo de información
Acceso no autorizado
Pérdida de capacidad de servidores
Mal manejo de sistemas y herramientas
Ausencia de documentación 
Manejo inadecuado de contraseñas
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Aplicación Móvil de Preventa Amovil',
                'categoria' => 'Software',
                'custodio' => 'Desarrolladores Móvil. agentes mesa de ayuda',
                'propietario' => 'Gerente-Director de operaciones',
                'valor' => 'Alto',
                'c' => 7,
                'i' => 8,
                'd' => 10,
                'ponderado' => '8.30',
                'clasificacion' => 'Reservada',
                'amenazas' => 'Ejecución de software malicioso
Ataque aplicaciones
Falta de software de control de versiones
Robo de información
Acceso no autorizado
Pérdida de capacidad de servidores
Mal manejo de sistemas y herramientas
Ausencia de documentación 
Manejo inadecuado de contraseñas
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Aplicación Móvil de Autoventa Amovil',
                'categoria' => 'Software',
                'custodio' => 'Desarrolladores Móvil. agentes mesa de ayuda',
                'propietario' => 'Gerente-Director de operaciones',
                'valor' => 'Alto',
                'c' => 7,
                'i' => 8,
                'd' => 10,
                'ponderado' => '8.30',
                'clasificacion' => 'Reservada',
                'amenazas' => 'Ejecución de software malicioso
Ataque aplicaciones
Falta de software de control de versiones
Robo de información
Acceso no autorizado
Pérdida de capacidad de servidores
Mal manejo de sistemas y herramientas
Ausencia de documentación 
Manejo inadecuado de contraseñas
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Aplicación Móvil Supervisores Amovil',
                'categoria' => 'Software',
                'custodio' => 'Desarrolladores Móvil. Lider de desarrollo',
                'propietario' => 'Gerente-Director de operaciones',
                'valor' => 'Alto',
                'c' => 7,
                'i' => 8,
                'd' => 8,
                'ponderado' => '7.70',
                'clasificacion' => 'Reservada',
                'amenazas' => 'Ejecución de software malicioso
Ataque aplicaciones
Falta de software de control de versiones
Robo de información
Acceso no autorizado
Pérdida de capacidad de servidores
Mal manejo de sistemas y herramientas
Ausencia de documentación 
Manejo inadecuado de contraseñas
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Aplicación Móvil Distribución Amovil',
                'categoria' => 'Software',
                'custodio' => 'Desarrolladores Móvil.  agentes mesa de ayuda. lider de desarrollo',
                'propietario' => 'Gerente-Director de operaciones',
                'valor' => 'Alto',
                'c' => 9,
                'i' => 8,
                'd' => 10,
                'ponderado' => '9.00',
                'clasificacion' => 'Reservada',
                'amenazas' => 'Ejecución de software malicioso
Ataque aplicaciones
Falta de software de control de versiones
Robo de información
Acceso no autorizado
Pérdida de capacidad de servidores
Mal manejo de sistemas y herramientas
Ausencia de documentación 
Manejo inadecuado de contraseñas
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Sistema Web Felam Amovil',
                'categoria' => 'Software',
                'custodio' => 'Desarrolladores Web. lider de desarrollo. agentes de servicio FE',
                'propietario' => 'Gerente-Director de operaciones',
                'valor' => 'Alto',
                'c' => 7,
                'i' => 8,
                'd' => 10,
                'ponderado' => '8.30',
                'clasificacion' => 'Reservada',
                'amenazas' => 'Ejecución de software malicioso
Ataque aplicaciones
Falta de software de control de versiones
Robo de información
Acceso no autorizado
Pérdida de capacidad de servidores
Mal manejo de sistemas y herramientas
Ausencia de documentación 
Manejo inadecuado de contraseñas
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Aplicación Móvil Apedir Amovil',
                'categoria' => 'Software',
                'custodio' => 'Desarrolladores Web. lider de desarrollo',
                'propietario' => 'Gerente-Director de operaciones',
                'valor' => 'Alto',
                'c' => 7,
                'i' => 8,
                'd' => 10,
                'ponderado' => '8.30',
                'clasificacion' => 'Reservada',
                'amenazas' => 'Ejecución de software malicioso
Ataque aplicaciones
Falta de software de control de versiones
Robo de información
Acceso no autorizado
Pérdida de capacidad de servidores
Mal manejo de sistemas y herramientas
Ausencia de documentación 
Manejo inadecuado de contraseñas
Compartir contraseñas o permisos a terceros no autorizados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Discos Duros Externos',
                'categoria' => 'MEDIA - Soportes de información',
                'custodio' => 'Gerente-Director de operaciones',
                'propietario' => 'Gerente-Director de operaciones',
                'valor' => 'Alto',
                'c' => 10,
                'i' => 8,
                'd' => 10,
                'ponderado' => '9.30',
                'clasificacion' => 'Confidencial o Reserva',
                'amenazas' => 'Fuego
Daño por agua
Desastres naturales (Terremoto)
Contaminación mecánica
Averia de origen fisico o logico
Corte de suministro eléctrico
Condiciones inadecuadas de temperatura
Errores de usuarios
Errores de administrador
Errores de monitorización o manipulación de monitorización
Alteración accidental  o deliberada de la información
Destrucción de información
Fugas de información o divulgación
Errores de mantenimiento - Actualización de equipos- Mala manupulación
Perdida de equipo -robo
Uso no previsto
Acceso no autorizado
Ataque destructivo
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Disco duro TOSHIBA',
                'categoria' => 'MEDIA - Soportes de información',
                'custodio' => 'Diseñador Industrial',
                'propietario' => 'Gerente-Director de operaciones',
                'valor' => 'Medio',
                'c' => 8,
                'i' => 4,
                'd' => 7,
                'ponderado' => '6.30',
                'clasificacion' => 'Confidencial o Reserva',
                'amenazas' => 'Fuego
Daño por agua
Desastres naturales (Terremoto)
Contaminación mecánica
Averia de origen fisico o logico
Corte de suministro eléctrico
Condiciones inadecuadas de temperatura
Errores de usuarios
Errores de administrador
Errores de monitorización o manipulación de monitorización
Alteración accidental  o deliberada de la información
Destrucción de información
Fugas de información o divulgación
Errores de mantenimiento - Actualización de equipos- Mala manupulación
Perdida de equipo -robo
Uso no previsto
Acceso no autorizado
Ataque destructivo
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Sharepoint',
                'categoria' => 'MEDIA - Soportes de información',
                'custodio' => 'Todos',
                'propietario' => 'Lider SGI
Administración
Gerente- director de operaciones',
                'valor' => 'Alto',
                'c' => 9,
                'i' => 8,
                'd' => 8,
                'ponderado' => '8.30',
                'clasificacion' => 'Interno',
                'amenazas' => 'Errores de usuarios
Errores de administrador
Errores de monitorización o manipulación de monitorización
Alteración accidental  o deliberada de la información
Destrucción de información
Fugas de información o divulgación
Errores de mantenimiento - Actualización de equipos- Mala manupulación
Uso no previsto
Acceso no autorizado
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
            'name' => 'Red Local (LAN)',
                'categoria' => 'COM - Redes de comunicaciones',
                'custodio' => 'Gestión Informática',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Alto',
                'c' => 9,
                'i' => 9,
                'd' => 9,
                'ponderado' => '9.00',
                'clasificacion' => 'Confidencial o Reserva',
                'amenazas' => 'Fallo de servicios de comunicaciones
Errores del administrador
Destrucción de información
Fugas de información
Suplantación de la identidad del usuario
Abuso de privilegios de acceso
Uso no previsto
Acceso no autorizado
Interceptación de información (escucha)
Divulgación de información',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
            'name' => 'Red Local (WIFI)',
                'categoria' => 'COM - Redes de comunicaciones',
                'custodio' => 'Gestión Informática',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Alto',
                'c' => 9,
                'i' => 9,
                'd' => 9,
                'ponderado' => '9.00',
                'clasificacion' => 'Confidencial o Reserva',
                'amenazas' => 'Fallo de servicios de comunicaciones
Errores del administrador
Destrucción de información
Fugas de información
Suplantación de la identidad del usuario
Abuso de privilegios de acceso
Uso no previsto
Acceso no autorizado
Interceptación de información (escucha)
Divulgación de información',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
            'name' => 'Red Privada Virtual (Con Alpina)',
                'categoria' => 'COM - Redes de comunicaciones',
                'custodio' => 'Gestión Informática -Alpina',
                'propietario' => '',
                'valor' => 'Alto',
                'c' => 9,
                'i' => 9,
                'd' => 9,
                'ponderado' => '9.00',
                'clasificacion' => 'Confidencial o Reserva',
                'amenazas' => 'Fallo de servicios de comunicaciones
Errores del administrador
Destrucción de información
Fugas de información
Suplantación de la identidad del usuario
Abuso de privilegios de acceso
Uso no previsto
Acceso no autorizado
Interceptación de información (escucha)
Divulgación de información',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
            'name' => 'Conexión Internet (Fibra Optica) Claro',
                'categoria' => 'COM - Redes de comunicaciones',
                'custodio' => 'Gestión Informática - Claro',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Alto',
                'c' => 9,
                'i' => 8,
                'd' => 10,
                'ponderado' => '9.00',
                'clasificacion' => 'Confidencial o Reserva',
                'amenazas' => 'Fallo de servicios de comunicaciones
Errores del administrador
Destrucción de información
Fugas de información
Suplantación de la identidad del usuario
Abuso de privilegios de acceso
Uso no previsto
Acceso no autorizado
Interceptación de información (escucha)
Divulgación de información',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
            'name' => 'Conexión Internet (Cable) Claro',
                'categoria' => 'COM - Redes de comunicaciones',
                'custodio' => 'Gestión Informática - Claro',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Medio',
                'c' => 9,
                'i' => 5,
                'd' => 6,
                'ponderado' => '6.70',
                'clasificacion' => 'Confidencial o Reserva',
                'amenazas' => 'Fallo de servicios de comunicaciones
Errores del administrador
Destrucción de información
Fugas de información
Suplantación de la identidad del usuario
Abuso de privilegios de acceso
Uso no previsto
Acceso no autorizado
Interceptación de información (escucha)
Divulgación de información',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Servidores Locales',
            'categoria' => 'HW - Equipos Informaticos (Hardware)',
                'custodio' => 'Gestión Informática - Breton',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Muy Alto',
                'c' => 10,
                'i' => 10,
                'd' => 10,
                'ponderado' => '10.00',
                'clasificacion' => 'Confidencial o Reserva',
                'amenazas' => 'Fuego
Daño por agua
Desastres naturales (Terremoto)
Contaminación mecánica
Averia de origen fisico o logico
Corte de suministro eléctrico
Condiciones inadecuadas de temperatura
Errores de administrador
Errores de monitorización o manipulación de monitorización
Caida de sistema por agotamiento de recursos
Errores de configuración
Errores de mantenimiento - Actualización de equipos- Mala manupulación
Abuso de privilegios de acceso
Perdida de equipo o robo
Uso no previsto
Acceso no autorizado
Ataque destructivo
Denegación de servicio
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Laptops ',
            'categoria' => 'HW - Equipos Informaticos (Hardware)',
                'custodio' => 'persona encargada',
                'propietario' => 'Administración',
                'valor' => 'Alto',
                'c' => 8,
                'i' => 8,
                'd' => 10,
                'ponderado' => '8.70',
                'clasificacion' => 'Confidencial o Reservada ',
                'amenazas' => 'Fuego
Daño por agua
Desastres naturales (Terremoto)
Contaminación mecánica
Averia de origen fisico o logico
Corte de suministro eléctrico
Condiciones inadecuadas de temperatura
Errores de administrador
Errores de monitorización o manipulación de monitorización
Caida de sistema por agotamiento de recursos
Errores de configuración
Errores de mantenimiento - Actualización de equipos- Mala manupulación
Abuso de privilegios de acceso
Perdida de equipo o robo
Uso no previsto
Acceso no autorizado
Ataque destructivo
Denegación de servicio
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Celulares moviles',
            'categoria' => 'HW - Equipos Informaticos (Hardware)',
                'custodio' => 'Usuarios con equipos asignados ',
                'propietario' => 'Administración',
                'valor' => 'Medio',
                'c' => 6,
                'i' => 6,
                'd' => 6,
                'ponderado' => '6.00',
                'clasificacion' => 'Confidencial o Reservada ',
                'amenazas' => 'Fuego
Daño por agua
Desastres naturales (Terremoto)
Contaminación mecánica
Averia de origen fisico o logico
Corte de suministro eléctrico
Condiciones inadecuadas de temperatura
Errores de administrador
Errores de monitorización o manipulación de monitorización
Caida de sistema por agotamiento de recursos
Errores de configuración
Errores de mantenimiento - Actualización de equipos- Mala manupulación
Abuso de privilegios de acceso
Perdida de equipo o robo
Uso no previsto
Acceso no autorizado
Ataque destructivo
Denegación de servicio
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Switches Capa 3',
            'categoria' => 'HW - Equipos Informaticos (Hardware)',
                'custodio' => 'Gestión Informática - Breton',
                'propietario' => 'Administrador de los sistemas
Responsable TI',
                'valor' => 'Muy Alto',
                'c' => 10,
                'i' => 9,
                'd' => 10,
                'ponderado' => '9.70',
                'clasificacion' => 'Confidencial o Reservada ',
                'amenazas' => 'Fuego
Daño por agua
Desastres naturales (Terremoto)
Contaminación mecánica
Averia de origen fisico o logico
Corte de suministro eléctrico
Condiciones inadecuadas de temperatura
Errores de administrador
Errores de monitorización o manipulación de monitorización
Caida de sistema por agotamiento de recursos
Errores de configuración
Errores de mantenimiento - Actualización de equipos- Mala manupulación
Abuso de privilegios de acceso
Perdida de equipo o robo
Uso no previsto
Acceso no autorizado
Ataque destructivo
Denegación de servicio
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Switches Capa 2',
            'categoria' => 'HW - Equipos Informaticos (Hardware)',
                'custodio' => 'Gestión Informática - Breton',
                'propietario' => 'Administrador de los sistemas
Responsable TI',
                'valor' => 'Muy Alto',
                'c' => 10,
                'i' => 9,
                'd' => 10,
                'ponderado' => '9.70',
                'clasificacion' => 'Confidencial o Reservada ',
                'amenazas' => 'Fuego
Daño por agua
Desastres naturales (Terremoto)
Contaminación mecánica
Averia de origen fisico o logico
Corte de suministro eléctrico
Condiciones inadecuadas de temperatura
Errores de administrador
Errores de monitorización o manipulación de monitorización
Caida de sistema por agotamiento de recursos
Errores de configuración
Errores de mantenimiento - Actualización de equipos- Mala manupulación
Abuso de privilegios de acceso
Perdida de equipo o robo
Uso no previsto
Acceso no autorizado
Ataque destructivo
Denegación de servicio
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Firewall',
            'categoria' => 'HW - Equipos Informaticos (Hardware)',
                'custodio' => 'Gestión Informática - Breton',
                'propietario' => 'Administrador de los sistemas
Responsable TI',
                'valor' => 'Muy Alto',
                'c' => 10,
                'i' => 9,
                'd' => 10,
                'ponderado' => '9.70',
                'clasificacion' => 'Confidencial o Reservada ',
                'amenazas' => 'Fuego
Daño por agua
Desastres naturales (Terremoto)
Contaminación mecánica
Averia de origen fisico o logico
Corte de suministro eléctrico
Condiciones inadecuadas de temperatura
Errores de administrador
Errores de monitorización o manipulación de monitorización
Caida de sistema por agotamiento de recursos
Errores de configuración
Errores de mantenimiento - Actualización de equipos- Mala manupulación
Abuso de privilegios de acceso
Perdida de equipo o robo
Uso no previsto
Acceso no autorizado
Ataque destructivo
Denegación de servicio
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Punto de acceso inalámbrico',
            'categoria' => 'HW - Equipos Informaticos (Hardware)',
                'custodio' => 'Gestión Informática - Breton',
                'propietario' => 'Gerente- director de operaciones
Responsable TI',
                'valor' => 'Alto',
                'c' => 10,
                'i' => 9,
                'd' => 9,
                'ponderado' => '9.30',
                'clasificacion' => 'Confidencial o Reservada ',
                'amenazas' => 'Fuego
Daño por agua
Desastres naturales (Terremoto)
Contaminación mecánica
Averia de origen fisico o logico
Corte de suministro eléctrico
Condiciones inadecuadas de temperatura
Errores de administrador
Errores de monitorización o manipulación de monitorización
Caida de sistema por agotamiento de recursos
Errores de configuración
Errores de mantenimiento - Actualización de equipos- Mala manupulación
Abuso de privilegios de acceso
Perdida de equipo o robo
Uso no previsto
Acceso no autorizado
Ataque destructivo
Denegación de servicio
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Teléfonos IP',
            'categoria' => 'HW - Equipos Informaticos (Hardware)',
                'custodio' => 'Externo',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Medio',
                'c' => 8,
                'i' => 4,
                'd' => 7,
                'ponderado' => '6.30',
                'clasificacion' => 'Confidencial o Reservada ',
                'amenazas' => 'Fuego
Daño por agua
Desastres naturales (Terremoto)
Contaminación mecánica
Averia de origen fisico o logico
Corte de suministro eléctrico
Condiciones inadecuadas de temperatura
Errores de administrador
Errores de monitorización o manipulación de monitorización
Caida de sistema por agotamiento de recursos
Errores de configuración
Errores de mantenimiento - Actualización de equipos- Mala manupulación
Abuso de privilegios de acceso
Perdida de equipo o robo
Uso no previsto
Acceso no autorizado
Ataque destructivo
Denegación de servicio
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'camaras',
            'categoria' => 'HW - Equipos Informaticos (Hardware)',
                'custodio' => 'Gestión Administrativa',
                'propietario' => 'Gestión Administrativa',
                'valor' => 'Medio',
                'c' => 7,
                'i' => 2,
                'd' => 5,
                'ponderado' => '4.70',
                'clasificacion' => 'Confidencial o Reservada ',
                'amenazas' => 'Fuego
Daño por agua
Desastres naturales (Terremoto)
Contaminación mecánica
Averia de origen fisico o logico
Corte de suministro eléctrico
Condiciones inadecuadas de temperatura
Errores de administrador
Errores de monitorización o manipulación de monitorización
Caida de sistema por agotamiento de recursos
Errores de configuración
Errores de mantenimiento - Actualización de equipos- Mala manupulación
Abuso de privilegios de acceso
Perdida de equipo o robo
Uso no previsto
Acceso no autorizado
Ataque destructivo
Denegación de servicio
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Diademas Auriculares',
            'categoria' => 'HW - Equipos Informaticos (Hardware)',
                'custodio' => 'Gestión Administrativa',
                'propietario' => 'Gestión Administrativa',
                'valor' => 'Bajo',
                'c' => 0,
                'i' => 3,
                'd' => 8,
                'ponderado' => '3.70',
                'clasificacion' => 'Confidencial o Reservada ',
                'amenazas' => 'Fuego
Daño por agua
Desastres naturales (Terremoto)
Contaminación mecánica
Averia de origen fisico o logico
Corte de suministro eléctrico
Condiciones inadecuadas de temperatura
Errores de administrador
Errores de monitorización o manipulación de monitorización
Caida de sistema por agotamiento de recursos
Errores de configuración
Errores de mantenimiento - Actualización de equipos- Mala manupulación
Abuso de privilegios de acceso
Perdida de equipo o robo
Uso no previsto
Acceso no autorizado
Ataque destructivo
Denegación de servicio
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Smart TV  LG',
            'categoria' => 'HW - Equipos Informaticos (Hardware)',
                'custodio' => 'Gestión Administrativa',
                'propietario' => 'Gestión Administrativa',
                'valor' => 'Bajo',
                'c' => 3,
                'i' => 0,
                'd' => 0,
                'ponderado' => '1.00',
                'clasificacion' => 'Interno',
                'amenazas' => 'Fuego
Daño por agua
Desastres naturales (Terremoto)
Contaminación mecánica
Averia de origen fisico o logico
Corte de suministro eléctrico
Condiciones inadecuadas de temperatura
Errores de administrador
Errores de monitorización o manipulación de monitorización
Caida de sistema por agotamiento de recursos
Errores de configuración
Errores de mantenimiento - Actualización de equipos- Mala manupulación
Abuso de privilegios de acceso
Perdida de equipo o robo
Uso no previsto
Acceso no autorizado
Ataque destructivo
Denegación de servicio
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Impresora x2',
            'categoria' => 'HW - Equipos Informaticos (Hardware)',
                'custodio' => 'Gestión Administrativa',
                'propietario' => 'Gestión Administrativa',
                'valor' => 'Bajo',
                'c' => 4,
                'i' => 3,
                'd' => 2,
                'ponderado' => '3.00',
                'clasificacion' => 'Interno',
                'amenazas' => 'Fuego
Daño por agua
Desastres naturales (Terremoto)
Contaminación mecánica
Averia de origen fisico o logico
Corte de suministro eléctrico
Condiciones inadecuadas de temperatura
Errores de administrador
Errores de monitorización o manipulación de monitorización
Caida de sistema por agotamiento de recursos
Errores de configuración
Errores de mantenimiento - Actualización de equipos- Mala manupulación
Abuso de privilegios de acceso
Perdida de equipo o robo
Uso no previsto
Acceso no autorizado
Ataque destructivo
Denegación de servicio
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Telefono Citofono',
            'categoria' => 'HW - Equipos Informaticos (Hardware)',
                'custodio' => 'Gestión Administrativa',
                'propietario' => 'Gestión Administrativa',
                'valor' => 'Despreciable',
                'c' => 0,
                'i' => 2,
                'd' => 0,
                'ponderado' => '0.70',
                'clasificacion' => '',
                'amenazas' => 'Fuego
Daño por agua
Desastres naturales (Terremoto)
Contaminación mecánica
Averia de origen fisico o logico
Corte de suministro eléctrico
Condiciones inadecuadas de temperatura
Errores de administrador
Errores de monitorización o manipulación de monitorización
Caida de sistema por agotamiento de recursos
Errores de configuración
Errores de mantenimiento - Actualización de equipos- Mala manupulación
Abuso de privilegios de acceso
Perdida de equipo o robo
Uso no previsto
Acceso no autorizado
Ataque destructivo
Denegación de servicio
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Monitor - Centro de cabledo',
            'categoria' => 'HW - Equipos Informaticos (Hardware)',
                'custodio' => 'Gerente- director de operaciones
Lider de Proyectos',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Despreciable',
                'c' => 0,
                'i' => 0,
                'd' => 0,
                'ponderado' => '0.00',
                'clasificacion' => 'Confidencial o Reservada ',
                'amenazas' => 'Fuego
Daño por agua
Desastres naturales (Terremoto)
Contaminación mecánica
Averia de origen fisico o logico
Corte de suministro eléctrico
Condiciones inadecuadas de temperatura
Errores de administrador
Errores de monitorización o manipulación de monitorización
Caida de sistema por agotamiento de recursos
Errores de configuración
Errores de mantenimiento - Actualización de equipos- Mala manupulación
Abuso de privilegios de acceso
Perdida de equipo o robo
Uso no previsto
Acceso no autorizado
Ataque destructivo
Denegación de servicio
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Regletas eléctricas - Centro de computo',
                'categoria' => 'Equipamiento auxiliar',
                'custodio' => 'Gerente- director de operaciones
Lider de Proyectos',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Alto',
                'c' => 9,
                'i' => 9,
                'd' => 9,
                'ponderado' => '9.00',
                'clasificacion' => 'Interna',
                'amenazas' => 'Roturas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'UPS - Fuente de alimentación ininterrumpida - Centro de computo',
                'categoria' => 'Equipamiento auxiliar',
                'custodio' => 'Gerente- director de operaciones
Lider de Proyectos',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Alto',
                'c' => 9,
                'i' => 9,
                'd' => 9,
                'ponderado' => '9.00',
                'clasificacion' => 'Interna',
                'amenazas' => 'Roturas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Equipo de climatización - Centro de computo',
                'categoria' => 'Equipamiento auxiliar',
                'custodio' => 'Gerente- director de operaciones
Lider de Proyectos',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Alto',
                'c' => 8,
                'i' => 8,
                'd' => 6,
                'ponderado' => '7.30',
                'clasificacion' => 'Publica',
                'amenazas' => 'Falta de mantenimiento y limpieza
Acumulación de germenes u otro tipo de  sustancias organicas.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Cableado estructurado de datos - Centro de computo',
                'categoria' => 'Equipamiento auxiliar',
                'custodio' => 'Gerente- director de operaciones
Lider de Proyectos',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Alto',
                'c' => 9,
                'i' => 8,
                'd' => 10,
                'ponderado' => '9.00',
                'clasificacion' => 'Interna',
                'amenazas' => 'Falla eléctrica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Cableado eléctrico - Centro de computo',
                'categoria' => 'Equipamiento auxiliar',
                'custodio' => 'Gerente- director de operaciones
Lider de Proyectos',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Muy Alto',
                'c' => 9,
                'i' => 10,
                'd' => 10,
                'ponderado' => '9.70',
                'clasificacion' => 'Interna',
                'amenazas' => 'Sobrecarga electrica
Cables expuestos y cortocircuitos debido al desgaste',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
            'name' => 'Internos - Mensajeria y Comunicación (WhatsApp - Skype -Teams- planner o Trello)',
                'categoria' => 'Servicios',
                'custodio' => 'Todos',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Medio',
                'c' => 8,
                'i' => 4,
                'd' => 3,
                'ponderado' => '5.00',
                'clasificacion' => 'Interno',
                'amenazas' => 'Errores de los usuarios
Errores del administrador
Destrucción de información
Fugas de información
Caída del sistema por agotamiento de recursos
Abuso de privilegios de acceso
Acceso no autorizado
Repudio
Divulgación de información',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Directorio de Activos',
                'categoria' => 'Servicios',
            'custodio' => 'Administrador TI (externo)
Lider de desarrollo',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Muy Alto',
                'c' => 10,
                'i' => 10,
                'd' => 10,
                'ponderado' => '10.00',
                'clasificacion' => 'Interno',
                'amenazas' => 'Errores de los usuarios
Errores del administrador
Destrucción de información
Fugas de información
Caída del sistema por agotamiento de recursos
Abuso de privilegios de acceso
Acceso no autorizado
Repudio
Divulgación de información',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Internos - Servicios de WiFi',
                'categoria' => 'Servicios',
                'custodio' => 'Gestión Informática - Breton',
                'propietario' => 'Administrador de los sistemas
',
                'valor' => 'Alto',
                'c' => 8,
                'i' => 8,
                'd' => 9,
                'ponderado' => '8.30',
                'clasificacion' => 'Confidencial o Reserva',
                'amenazas' => 'Errores de los usuarios
Errores del administrador
Destrucción de información
Fugas de información
Caída del sistema por agotamiento de recursos
Abuso de privilegios de acceso
Acceso no autorizado
Repudio
Divulgación de información',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Internos - Conexión a la base de datos',
                'categoria' => 'Servicios',
                'custodio' => 'Lider de desarrollo',
                'propietario' => 'Gerente- director de operaciones
Lider de desarrollo',
                'valor' => 'Muy Alto',
                'c' => 10,
                'i' => 10,
                'd' => 10,
                'ponderado' => '10.00',
                'clasificacion' => 'Confidencial o Reserva',
                'amenazas' => 'Errores de los usuarios
Errores del administrador
Destrucción de información
Fugas de información
Caída del sistema por agotamiento de recursos
Abuso de privilegios de acceso
Acceso no autorizado
Repudio
Divulgación de información',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Internos - Almacenamiento de ficheros',
                'categoria' => 'Servicios',
                'custodio' => 'Gestión Informática - Breton',
                'propietario' => 'Administrador de los sistemas
Gerente- director de operaciones
',
                'valor' => 'Alto',
                'c' => 10,
                'i' => 9,
                'd' => 7,
                'ponderado' => '8.70',
                'clasificacion' => 'Confidencial o Reserva',
                'amenazas' => 'Errores de los usuarios
Errores del administrador
Destrucción de información
Fugas de información
Caída del sistema por agotamiento de recursos
Abuso de privilegios de acceso
Acceso no autorizado
Repudio
Divulgación de información',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Internos - Tranferencia de ficheros',
                'categoria' => 'Servicios',
                'custodio' => 'Gestión Informática - Breton',
                'propietario' => 'Administrador de los sistemas
Gerente- director de operaciones
',
                'valor' => 'Alto',
                'c' => 10,
                'i' => 9,
                'd' => 7,
                'ponderado' => '8.70',
                'clasificacion' => 'Confidencial o Reserva',
                'amenazas' => 'Errores de los usuarios
Errores del administrador
Destrucción de información
Fugas de información
Caída del sistema por agotamiento de recursos
Abuso de privilegios de acceso
Acceso no autorizado
Repudio
Divulgación de información',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Contratados - Mantenimiento preventivo a Equipos de Computo',
                'categoria' => 'Servicios',
                'custodio' => 'Gestión Administrativa',
                'propietario' => 'Gerente- director de operaciones
Administrativos',
                'valor' => 'Medio',
                'c' => 3,
                'i' => 7,
                'd' => 6,
                'ponderado' => '5.30',
                'clasificacion' => 'Confidencial o Reserva',
                'amenazas' => 'Errores de los usuarios
Errores del administrador
Destrucción de información
Fugas de información
Caída del sistema por agotamiento de recursos
Abuso de privilegios de acceso
Acceso no autorizado
Repudio
Divulgación de información',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Contratados - Conexión a Internet - Principal',
                'categoria' => 'Servicios',
                'custodio' => 'Gestión Administrativa',
                'propietario' => 'Gerente- director de operaciones
Administrativos',
                'valor' => 'Alto',
                'c' => 4,
                'i' => 8,
                'd' => 10,
                'ponderado' => '7.30',
                'clasificacion' => 'Confidencial o Reserva',
                'amenazas' => 'Errores de los usuarios
Errores del administrador
Destrucción de información
Fugas de información
Caída del sistema por agotamiento de recursos
Abuso de privilegios de acceso
Acceso no autorizado
Repudio
Divulgación de información',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Contratados - Conexión a Internet - Respaldo',
                'categoria' => 'Servicios',
                'custodio' => 'Gestión Administrativa',
                'propietario' => 'Gerente- director de operaciones
Administrativos',
                'valor' => 'Medio',
                'c' => 3,
                'i' => 7,
                'd' => 10,
                'ponderado' => '6.70',
                'clasificacion' => 'Confidencial o Reserva',
                'amenazas' => 'Errores de los usuarios
Errores del administrador
Destrucción de información
Fugas de información
Caída del sistema por agotamiento de recursos
Abuso de privilegios de acceso
Acceso no autorizado
Repudio
Divulgación de información',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Contratados - Correo electrónico',
                'categoria' => 'Servicios',
                'custodio' => 'Director comercial ',
                'propietario' => 'Director comercial ',
                'valor' => 'Medio',
                'c' => 6,
                'i' => 8,
                'd' => 6,
                'ponderado' => '6.70',
                'clasificacion' => 'Confidencial o Reserva',
                'amenazas' => 'Errores de los usuarios
Errores del administrador
Destrucción de información
Fugas de información
Caída del sistema por agotamiento de recursos
Abuso de privilegios de acceso
Acceso no autorizado
Repudio
Divulgación de información',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Contratados - Hosting',
                'categoria' => 'Servicios',
                'custodio' => 'Gerente- director de operaciones
Gestión Informática - Breton',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Muy Alto',
                'c' => 9,
                'i' => 10,
                'd' => 10,
                'ponderado' => '9.70',
                'clasificacion' => 'Confidencial o Reserva',
                'amenazas' => 'Errores de los usuarios
Errores del administrador
Destrucción de información
Fugas de información
Caída del sistema por agotamiento de recursos
Abuso de privilegios de acceso
Acceso no autorizado
Repudio
Divulgación de información',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Contratados - Aseo',
                'categoria' => 'Servicios',
                'custodio' => 'Gestión Administrativa',
                'propietario' => 'Gerente- director de operaciones
Administrativos',
                'valor' => 'Medio',
                'c' => 5,
                'i' => 8,
                'd' => 7,
                'ponderado' => '6.70',
                'clasificacion' => 'Confidencial o Reserva',
                'amenazas' => 'Errores de los usuarios
Errores del administrador
Destrucción de información
Fugas de información
Caída del sistema por agotamiento de recursos
Abuso de privilegios de acceso
Acceso no autorizado
Repudio
Divulgación de información',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Contratados - Correspondencia',
                'categoria' => 'Servicios',
                'custodio' => 'Gestión Administrativa',
                'propietario' => 'Gestión Administrativa',
                'valor' => 'Medio',
                'c' => 5,
                'i' => 5,
                'd' => 5,
                'ponderado' => '5.00',
                'clasificacion' => 'Confidencial o Reserva',
                'amenazas' => 'Errores de los usuarios
Errores del administrador
Destrucción de información
Fugas de información
Caída del sistema por agotamiento de recursos
Abuso de privilegios de acceso
Acceso no autorizado
Repudio
Divulgación de información',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
            'name' => 'A terceros - Software de aplicación (App Preventa - App Distribución)',
                'categoria' => 'Servicios',
                'custodio' => 'Lider de desarrollo. Agentes Mesa de ayuda',
                'propietario' => 'Gerente- director de operaciones',
                'valor' => 'Alto',
                'c' => 7,
                'i' => 10,
                'd' => 10,
                'ponderado' => '9.00',
                'clasificacion' => 'Confidencial o Reserva',
                'amenazas' => 'Errores de los usuarios
Errores del administrador
Destrucción de información
Fugas de información
Caída del sistema por agotamiento de recursos
Abuso de privilegios de acceso
Acceso no autorizado
Repudio
Divulgación de información',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'A terceros - Mesa de ayuda',
                'categoria' => 'Servicios',
                'custodio' => 'Gestión de Soporte',
                'propietario' => 'lideres de area
Gerente- director de operaciones',
                'valor' => 'Alto',
                'c' => 6,
                'i' => 9,
                'd' => 10,
                'ponderado' => '8.30',
                'clasificacion' => 'Confidencial o Reserva',
                'amenazas' => 'Errores de los usuarios
Errores del administrador
Destrucción de información
Fugas de información
Caída del sistema por agotamiento de recursos
Abuso de privilegios de acceso
Acceso no autorizado
Repudio
Divulgación de información',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'A terceros - Visita comercial al cliente',
                'categoria' => 'Servicios',
                'custodio' => 'Area  comercial. Director comercial ',
                'propietario' => 'Director comercial.
Gerente- director de operaciones',
                'valor' => 'Medio',
                'c' => 4,
                'i' => 7,
                'd' => 7,
                'ponderado' => '6.00',
                'clasificacion' => 'Interno',
                'amenazas' => 'Errores de los usuarios
Errores del administrador
Destrucción de información
Fugas de información
Caída del sistema por agotamiento de recursos
Abuso de privilegios de acceso
Acceso no autorizado
Repudio
Divulgación de información',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'A terceros - Capacitación a cliente',
                'categoria' => 'Servicios',
                'custodio' => 'Gestión de Soporte. desarrolladores',
                'propietario' => 'Lideres de area',
                'valor' => 'Medio',
                'c' => 3,
                'i' => 8,
                'd' => 7,
                'ponderado' => '6.00',
                'clasificacion' => 'Interno',
                'amenazas' => 'Errores de los usuarios
Errores del administrador
Destrucción de información
Fugas de información
Caída del sistema por agotamiento de recursos
Abuso de privilegios de acceso
Acceso no autorizado
Repudio
Divulgación de información',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'A terceros - Telefonia IP',
                'categoria' => 'Servicios',
                'custodio' => 'Gestión de Soporte',
                'propietario' => 'lideres de area
Gerente- director de operaciones',
                'valor' => 'Medio',
                'c' => 5,
                'i' => 6,
                'd' => 8,
                'ponderado' => '6.30',
                'clasificacion' => 'Interno',
                'amenazas' => 'Errores de los usuarios
Errores del administrador
Destrucción de información
Fugas de información
Caída del sistema por agotamiento de recursos
Abuso de privilegios de acceso
Acceso no autorizado
Repudio
Divulgación de información',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Aire Acondicionado',
                'categoria' => 'Instalaciones',
                'custodio' => 'Administrativos',
                'propietario' => 'Gerente- director de operaciones
Administrativos',
                'valor' => 'Medio',
                'c' => 0,
                'i' => 8,
                'd' => 8,
                'ponderado' => '5.30',
                'clasificacion' => 'Confidencial o Reservada ',
                'amenazas' => 'Fuego
Daño por agua
Fenomeno sismico
Errores de monitorización
Alteración accidental o deliberada de la información
Destrucción de la información
Fugas o divulgación de información
Uso no previsto
Acceso no autorizado
Ataque destructivo
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Videovigilancia',
                'categoria' => 'Instalaciones',
                'custodio' => 'Gerente- director de operaciones
Administrativos',
                'propietario' => 'Gerente- director de operaciones
Administrativos',
                'valor' => 'Alto',
                'c' => 6,
                'i' => 7,
                'd' => 9,
                'ponderado' => '7.30',
                'clasificacion' => 'Confidencial o Reservada ',
                'amenazas' => 'Fuego
Daño por agua
Fenomeno sismico
Errores de monitorización
Alteración accidental o deliberada de la información
Destrucción de la información
Fugas o divulgación de información
Uso no previsto
Acceso no autorizado
Ataque destructivo
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Control de Accesos',
                'categoria' => 'Instalaciones',
                'custodio' => 'Administrativos',
                'propietario' => 'Gerente- director de operaciones
Administrativos',
                'valor' => 'Alto',
                'c' => 6,
                'i' => 8,
                'd' => 9,
                'ponderado' => '7.70',
                'clasificacion' => 'Confidencial o Reservada ',
                'amenazas' => 'Fuego
Daño por agua
Fenomeno sismico
Errores de monitorización
Alteración accidental o deliberada de la información
Destrucción de la información
Fugas o divulgación de información
Uso no previsto
Acceso no autorizado
Ataque destructivo
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}