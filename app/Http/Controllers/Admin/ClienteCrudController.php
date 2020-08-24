<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ClienteRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;


/**
 * Class ClienteCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ClienteCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->role_model = $role_model = config('backpack.permissionmanager.models.role');
        $this->permission_model = $permission_model = config('backpack.permissionmanager.models.permission');

        $this->crud->setModel('App\Models\Cliente');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/cliente');
        $this->crud->setEntityNameStrings('cliente', 'clientes');

        if (backpack_user()->can('Ver Clientes')) {
            $this->crud->hasAccess('list');
        } else {
            $this->crud->denyAccess('list');
        }

        if (backpack_user()->can('Ver detalle Clientes')) {
            $this->crud->hasAccess('show');
        } else {
            $this->crud->denyAccess('show');
        }

        if (backpack_user()->can('Crear Clientes')) {
            $this->crud->hasAccess('create');
        } else {
            $this->crud->denyAccess('create');
        }

        if (backpack_user()->can('Editar Clientes')) {
            $this->crud->hasAccess('update');
        } else {
            $this->crud->denyAccess('update');
        }

        if (backpack_user()->can('Borrar Clientes')) {
            $this->crud->hasAccess('delete');
        } else {
            $this->crud->denyAccess('delete');
        }
    }


    /**
     * Used with AJAX in the list view (datatables) to show extra information about that row that didn't fit in the table.
     * It defaults to showing some dummy text.
     *
     * It's enabled by:
     * - setting: $crud->details_row = true;
     * - adding the details route for the entity; ex: Route::get('page/{id}/details', 'PageCrudController@showDetailsRow');
     * - adding a view with the following name to change what the row actually contains: app/resources/views/vendor/backpack/crud/details_row.blade.php
     */
    // public function showDetailsRow($id)
    // {
    //     $this->crud->hasAccessOrFail('details_row');

    //     $this->data['entry'] = $this->crud->getEntry($id);
    //     $this->data['crud'] = $this->crud;
    //     $this->crud->addColumns([
    //     [
    //             'label'             => 'Razón Social',
    //             'type'              => 'text',
    //             'name'              => 'razon_social',
    //     ],
    //     ]);

    //     // load the view from /resources/views/vendor/backpack/crud/ if it exists, otherwise load the one in the package
    //     return view('crud::details_row', $this->data);
    // }



    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->enableDetailsRow();
        $this->crud->setDetailsRowView('vendor.backpack.crud.details_row.cliente');
        CRUD::enableExportButtons();
        //$this->crud->setFromDb();
        $this->crud->addColumns([
            [
                'label'             => 'Nombre de Vista Amovil',
                'type'              => 'text',
                'name'              => 'name',
            ],
            // [
            //     'label'             => 'Usuario',
            //     'name'              => 'user_id',
            //     'type'              => 'select',
            //     'entity'            => 'users',
            //     'attribute'         => 'name',
            // ],
            // [
            //     'label'             => 'Tipo Id.',
            //     'type'              => 'select_from_array',
            //     'name'              => 'nit_id',
            //     'options'           => [
            //         'NT' => 'NIT','CC'=>'CEDULA DE CIUDADANIA', 'CE' => 'CEDULA DE EXTRANJERIA' ],
            // ],
            // [
            //     'label'             => 'Número Id.',
            //     'type'              => 'number',
            //     'name'              => 'nit',
            // ],
            // [
            //     'label'             => 'Dv',
            //     'type'              => 'number',
            //     'name'              => 'dv',
            // ],
            // [
            //     'label'             => 'Primer Nombre',
            //     'type'              => 'text',
            //     'name'              => 'nombre1',
            //     ],
            // [
            //     'label'             => 'Segundo Nombre',
            //     'type'              => 'text',
            //     'name'              => 'nombre2',
            // ],
            // [
            //     'label'             => 'Primer Apellido',
            //     'type'              => 'text',
            //     'name'              => 'apellido1',
            // ],
            // [
            //     'label'             => 'Segundo Apellido',
            //     'type'              => 'text',
            //     'name'              => 'apellido2',
            // ],
            // [
            //     'label'             => 'Razón Social',
            //     'type'              => 'text',
            //     'name'              => 'razon_social',
            // ],
            // [
            //     'label'             => 'Activo',
            //     'type'              => 'check',
            //     'name'              => 'activo',
            // ],
            // [
            //     'label'             => 'País',
            //     'type'              => 'select',
            //     'name'              => 'pais_id',
            //     'entity'            => 'paises',
            //     'attribute'         => 'descripcion',
            // ],
            // [
            //     'label'             => 'Departamento',
            //     'type'              => 'select',
            //     'name'              => 'departamento_id',
            //     'entity'            => 'departamentos',
            //     'attribute'         => 'name',
            //     'tab'               => 'Ubicación',
            // ],
            // [
            //     'label'             => 'Ciudad',
            //     'type'              => 'select',
            //     'name'              => 'ciudades',
            //     'entity'            => 'ciudades',
            //     'attribute'         => 'name',
            // ],
            // [
            //     'label'             => 'Dirección',
            //     'type'              => 'address',
            //     'name'              => 'direccion',
            // ],
            // [
            //     'label'             => 'Teléfono o Celular Cliente(1)',
            //     'type'              => 'number',
            //     'name'              => 'telefono1',
            // ],
            // [
            //     'label'             => 'Teléfono o Celular Cliente(2)',
            //     'type'              => 'number',
            //     'name'              => 'telefono2',
            // ],
            // [
            //     'label'             => 'Correo Electrónico',
            //     'type'              => 'email',
            //     'name'              => 'email_cliente',
            // ],
            // [
            //     'label'             => 'Última Capacitación',
            //     'type'              => 'datetime',
            //     'name'              => 'capacitacion',
            // ],
            // [
            //     'label'             => 'Núm. de Agencia',
            //     'type'              => 'number',
            //     'name'              => 'agencia_id',
            // ],
            [
                'label'             => 'Tipo de Cliente',
                'type'              => 'select',
                'name'              => 'tipocl_id',
                'entity'            => 'Tipocls',
                'attribute'         => 'name',
            ],
            [
                'label'             => 'Id BD',
                'type'              => 'number',
                'name'              => 'base_id',
            ],
            [
                'label'             => 'Clave',
                'type'              => 'number',
                'name'              => 'clave_id',
            ],
            [
                'label'             => 'Nombre BD',
                'type'              => 'text',
                'name'              => 'base_nombre',
            ],
            [
                'label'             => 'Nombre del Servidor',
                'type'              => 'text',
                'name'              => 'servidor_nombre',
            ],
            // [
            //     'label'             => 'Ip del Servidor BD',
            //     'type'              => 'text',
            //     'name'              => 'servidor_ip',
            // ],
            // [
            //     'label'             => 'Url Web Gestión',
            //     'type'              => 'url',
            //     'name'              => 'webgestion_url',
            // ],
            // [
            //     'label'             => 'Ver. Prev.',
            //     'type'              => 'text',
            //     'name'              => 'version_nombre',
            // ],
            // [
            //     'label'             => 'Erp',
            //     'type'              => 'text',
            //     'name'              => 'erp_nombre',
            // ],
            // [
            //     'label'             => 'Proveedor de Datos',
            //     'type'              => 'text',
            //     'name'              => 'prov_datos',
            // ],
            // [
            //     'label'             => 'Preventa',
            //     'type'              => 'check',
            //     'name'              => 'preventa',
            // ],
            // [
            //     'label'             => 'Autoventa',
            //     'type'              => 'check',
            //     'name'              => 'autoventa',
            // ],
            // [
            //     'label'             => 'Distribución',
            //     'type'              => 'check',
            //     'name'              => 'distribucion',
            // ],
            // [
            //     'label'             => 'Supervisores',
            //     'type'              => 'check',
            //     'name'              => 'supervisor',
            // ],
            // [
            //     'label'             => 'Apedir',
            //     'type'              => 'check',
            //     'name'              => 'apedir',
            // ],
            // [
            //     'label'             => 'Erp',
            //     'type'              => 'check',
            //     'name'              => 'erp',
            // ],
            // [
            //     'label'             => 'Salud',
            //     'type'              => 'check',
            //     'name'              => 'salud',
            // ],
            // [
            //     'label'             => 'Ramo',
            //     'type'              => 'check',
            //     'name'              => 'ramo',
            // ],
            // [
            //     'label'             => 'Felam',
            //     'type'              => 'check',
            //     'name'              => 'felam',
            // ],
            // [
            //     'label'             => 'Facturación Electrónica',
            //     'type'              => 'check',
            //     'name'              => 'fac_electronica',
            // ],
            // [
            //     'label'             => 'Cert. Electónico Felam',
            //     'type'              => 'check',
            //     'name'              => 'cert_felam',
            // ],
            // [
            //     'label'             => 'Fecha Inicial C.E.',
            //     'type'              => 'datetime',
            //     'name'              => 'cert_felam_i',
            // ],
            // [
            //     'label'             => 'Fecha Final C.E.',
            //     'type'              => 'datetime',
            //     'name'              => 'cert_felam_f',
            // ],
            // [
            //     'label'             => 'Contrato Felam',
            //     'type'              => 'check',
            //     'name'              => 'contrato_felam',
            // ],
            // [
            //     'label'             => 'Contrato Aplicaciones',
            //     'type'              => 'check',
            //     'name'              => 'contrato_app',
            // ],
            // [
            //     'label'             => 'Contribuyente',
            //     'type'              => 'text',
            //     'name'              => 'contribuyente_id',
            // ],
            // [
            //     'label'             => 'Número de Contrato',
            //     'type'              => 'text',
            //     'name'              => 'contrato_numero',
            // ],
            // [
            //     'label'             => 'Observación',
            //     'type'              => 'text',
            //     'name'              => 'observacion',
            // ],
            // [
            //     'label'             => 'Archivo de Contratos',
            //     'type'              => 'browse_multiple',
            //     'name'              => 'contrato_imagen',
            // ],
            // [
            //     'label'             => 'Nombre Gerente',
            //     'type'              => 'text',
            //     'name'              => 'nombre_contacto1',
            // ],
            // [
            //     'label'             => 'Teléfono Gerente',
            //     'type'              => 'number',
            //     'name'              => 'telefono_contacto1',
            // ],
            // [
            //     'label'             => 'Cargo G',
            //     'type'              => 'text',
            //     'name'              => 'cargo_contacto1',
            // ],
            // [
            //     'label'             => 'E-mail Gerente',
            //     'type'              => 'email',
            //     'name'              => 'email_contacto1',
            // ],
            // [
            //     'label'             => 'Nombre Supervisor',
            //     'type'              => 'text',
            //     'name'              => 'nombre_contacto2',
            // ],
            // [
            //     'label'             => 'Teléfono Supervisor',
            //     'type'              => 'number',
            //     'name'              => 'telefono_contacto2',
            // ],
            // [
            //     'label'             => 'Cargo S',
            //     'type'              => 'text',
            //     'name'              => 'cargo_contacto2',
            // ],
            // [
            //     'label'             => 'E-mail Supervisor',
            //     'type'              => 'email',
            //     'name'              => 'email_contacto2',
            // ],
            // [
            //     'label'             => 'Nombre Contabilidad',
            //     'type'              => 'text',
            //     'name'              => 'nombre_contacto3',
            // ],
            // [
            //     'label'             => 'Teléfono Contabilidad',
            //     'type'              => 'number',
            //     'name'              => 'telefono_contacto3',
            // ],
            // [
            //     'label'             => 'Cargo C',
            //     'type'              => 'text',
            //     'name'              => 'cargo_contacto3',
            // ],
            // [
            //     'label'             => 'E-mail Contabilidad',
            //     'type'              => 'email',
            //     'name'              => 'email_contacto3',
            // ],
            // [
            //     'label'             => 'Nombre Pagos',
            //     'type'              => 'text',
            //     'name'              => 'nombre_contacto4',
            // ],
            // [
            //     'label'             => 'Teléfono Pagos',
            //     'type'              => 'number',
            //     'name'              => 'telefono_contacto4',
            // ],
            // [
            //     'label'             => 'Cargo P',
            //     'type'              => 'text',
            //     'name'              => 'cargo_contacto4',
            // ],
            // [
            //     'label'             => 'E-mail Pagos',
            //     'type'              => 'email',
            //     'name'              => 'email_contacto4',
            // ],
            // [
            //     'label'             => 'Nombre Facturador',
            //     'type'              => 'text',
            //     'name'              => 'nombre_contacto5',
            // ],
            // [
            //     'label'             => 'Teléfono Facturador',
            //     'type'              => 'number',
            //     'name'              => 'telefono_contacto5',
            // ],
            // [
            //     'label'             => 'Cargo F',
            //     'type'              => 'text',
            //     'name'              => 'cargo_contacto5',
            // ],
            // [
            //     'label'             => 'E-mail Facturador',
            //     'type'              => 'email',
            //     'name'              => 'email_contacto5',
            // ],
        ]);
    }


    protected function setupShowOperation()
    {
        $this->crud->set('show.setFromDb', false);
        $this->crud->getTitle(); // get the Title for the create action
        $this->crud->getHeading(); // get the Heading for the create action
        $this->crud->getSubheading(); // get the Subheading for the create action
        $this->crud->setTitle('Clientes'); // set the Title for the create action
        $this->crud->setHeading('Clientes'); // set the Heading for the create action
        $this->crud->setSubheading('Clientes Ver'); // set the Subheading for the create action
        //$this->setupListOperation();

        $this->crud->addColumns([
            [
                'label'             => 'Usuario',
                'name'              => 'user_id',
                'type'              => 'select',
                'entity'            => 'users',
                'attribute'         => 'name',
            ],
            [
                'label'             => 'Tipo Id.',
                'type'              => 'select_from_array',
                'name'              => 'nit_id',
                'options'           => [
                    'NT' => 'NIT', 'CC' => 'CEDULA DE CIUDADANIA', 'CE' => 'CEDULA DE EXTRANJERIA'
                ],
            ],
            [
                'label'             => 'Número Id.',
                'type'              => 'number',
                'name'              => 'nit',
            ],
            [
                'label'             => 'Dv',
                'type'              => 'number',
                'name'              => 'dv',
            ],
            [
                'label'             => 'Primer Nombre',
                'type'              => 'text',
                'name'              => 'nombre1',
            ],
            [
                'label'             => 'Segundo Nombre',
                'type'              => 'text',
                'name'              => 'nombre2',
            ],
            [
                'label'             => 'Primer Apellido',
                'type'              => 'text',
                'name'              => 'apellido1',
            ],
            [
                'label'             => 'Segundo Apellido',
                'type'              => 'text',
                'name'              => 'apellido2',
            ],
            [
                'label'             => 'Nombre de Vista Amovil',
                'type'              => 'text',
                'name'              => 'name',
            ],
            [
                'label'             => 'Razón Social',
                'type'              => 'text',
                'name'              => 'razon_social',
            ],
            [
                'label'             => 'Activo',
                'type'              => 'check',
                'name'              => 'activo',
            ],
            [
                'label'             => 'País',
                'type'              => 'select',
                'name'              => 'pais_id',
                'entity'            => 'paises',
                'attribute'         => 'descripcion',
            ],
            [
                'label'             => 'Departamento',
                'type'              => 'select',
                'name'              => 'departamento_id',
                'entity'            => 'departamentos',
                'attribute'         => 'name',
                'tab'               => 'Ubicación',
            ],
            [
                'label'             => 'Ciudad',
                'type'              => 'select',
                'name'              => 'ciudades',
                'entity'            => 'ciudades',
                'attribute'         => 'name',
            ],
            [
                'label'             => 'Dirección',
                'type'              => 'address',
                'name'              => 'direccion',
            ],
            [
                'label'             => 'Teléfono o Celular Cliente(1)',
                'type'              => 'number',
                'name'              => 'telefono1',
            ],
            [
                'label'             => 'Teléfono o Celular Cliente(2)',
                'type'              => 'number',
                'name'              => 'telefono2',
            ],
            [
                'label'             => 'Correo Electrónico',
                'type'              => 'email',
                'name'              => 'email_cliente',
            ],
            [
                'label'             => 'Última Capacitación',
                'type'              => 'datetime',
                'name'              => 'capacitacion',
            ],
            [
                'label'             => 'Núm. de Agencia',
                'type'              => 'number',
                'name'              => 'agencia_id',
            ],
            [
                'label'             => 'Tipo de Cliente',
                'type'              => 'select',
                'name'              => 'tipocl_id',
                'entity'            => 'Tipocls',
                'attribute'         => 'name',
            ],
            [
                'label'             => 'Id BD',
                'type'              => 'number',
                'name'              => 'base_id',
            ],
            [
                'label'             => 'Clave',
                'type'              => 'number',
                'name'              => 'clave_id',
            ],
            [
                'label'             => 'Nombre BD',
                'type'              => 'text',
                'name'              => 'base_nombre',
            ],
            [
                'label'             => 'Nombre del Servidor',
                'type'              => 'text',
                'name'              => 'servidor_nombre',
            ],
            [
                'label'             => 'Ip del Servidor BD',
                'type'              => 'text',
                'name'              => 'servidor_ip',
            ],
            [
                'label'             => 'Url Web Gestión',
                'type'              => 'url',
                'name'              => 'webgestion_url',
            ],
            [
                'label'             => 'Ver. Prev.',
                'type'              => 'text',
                'name'              => 'version_nombre',
            ],
            [
                'label'             => 'Erp',
                'type'              => 'text',
                'name'              => 'erp_nombre',
            ],
            [
                'label'             => 'Proveedor de Datos',
                'type'              => 'text',
                'name'              => 'prov_datos',
            ],
            [
                'label'             => 'Preventa',
                'type'              => 'check',
                'name'              => 'preventa',
            ],
            [
                'label'             => 'Autoventa',
                'type'              => 'check',
                'name'              => 'autoventa',
            ],
            [
                'label'             => 'Distribución',
                'type'              => 'check',
                'name'              => 'distribucion',
            ],
            [
                'label'             => 'Supervisores',
                'type'              => 'check',
                'name'              => 'supervisor',
            ],
            [
                'label'             => 'Apedir',
                'type'              => 'check',
                'name'              => 'apedir',
            ],
            [
                'label'             => 'Erp',
                'type'              => 'check',
                'name'              => 'erp',
            ],
            [
                'label'             => 'Salud',
                'type'              => 'check',
                'name'              => 'salud',
            ],
            [
                'label'             => 'Ramo',
                'type'              => 'check',
                'name'              => 'ramo',
            ],
            [
                'label'             => 'Felam',
                'type'              => 'check',
                'name'              => 'felam',
            ],
            [
                'label'             => 'Facturación Electrónica',
                'type'              => 'check',
                'name'              => 'fac_electronica',
            ],
            [
                'label'             => 'Cert. Electónico Felam',
                'type'              => 'check',
                'name'              => 'cert_felam',
            ],
            [
                'label'             => 'Fecha Inicial C.E.',
                'type'              => 'datetime',
                'name'              => 'cert_felam_i',
            ],
            [
                'label'             => 'Fecha Final C.E.',
                'type'              => 'datetime',
                'name'              => 'cert_felam_f',
            ],
            [
                'label'             => 'Contrato Felam',
                'type'              => 'check',
                'name'              => 'contrato_felam',
            ],
            [
                'label'             => 'Contrato Aplicaciones',
                'type'              => 'check',
                'name'              => 'contrato_app',
            ],
            [
                'label'             => 'Contribuyente',
                'type'              => 'text',
                'name'              => 'contribuyente_id',
            ],
            [
                'label'             => 'Número de Contrato',
                'type'              => 'text',
                'name'              => 'contrato_numero',
            ],
            [
                'label'             => 'Observación',
                'type'              => 'text',
                'name'              => 'observacion',
            ],
            [
                'label'             => 'Archivo de Contratos',
                'type'              => 'browse_multiple',
                'name'              => 'contrato_imagen',
            ],
            [
                'label'             => 'Nombre Gerente',
                'type'              => 'text',
                'name'              => 'nombre_contacto1',
            ],
            [
                'label'             => 'Teléfono Gerente',
                'type'              => 'number',
                'name'              => 'telefono_contacto1',
            ],
            [
                'label'             => 'Cargo G',
                'type'              => 'text',
                'name'              => 'cargo_contacto1',
            ],
            [
                'label'             => 'E-mail Gerente',
                'type'              => 'email',
                'name'              => 'email_contacto1',
            ],
            [
                'label'             => 'Nombre Supervisor',
                'type'              => 'text',
                'name'              => 'nombre_contacto2',
            ],
            [
                'label'             => 'Teléfono Supervisor',
                'type'              => 'number',
                'name'              => 'telefono_contacto2',
            ],
            [
                'label'             => 'Cargo S',
                'type'              => 'text',
                'name'              => 'cargo_contacto2',
            ],
            [
                'label'             => 'E-mail Supervisor',
                'type'              => 'email',
                'name'              => 'email_contacto2',
            ],
            [
                'label'             => 'Nombre Contabilidad',
                'type'              => 'text',
                'name'              => 'nombre_contacto3',
            ],
            [
                'label'             => 'Teléfono Contabilidad',
                'type'              => 'number',
                'name'              => 'telefono_contacto3',
            ],
            [
                'label'             => 'Cargo C',
                'type'              => 'text',
                'name'              => 'cargo_contacto3',
            ],
            [
                'label'             => 'E-mail Contabilidad',
                'type'              => 'email',
                'name'              => 'email_contacto3',
            ],
            [
                'label'             => 'Nombre Pagos',
                'type'              => 'text',
                'name'              => 'nombre_contacto4',
            ],
            [
                'label'             => 'Teléfono Pagos',
                'type'              => 'number',
                'name'              => 'telefono_contacto4',
            ],
            [
                'label'             => 'Cargo P',
                'type'              => 'text',
                'name'              => 'cargo_contacto4',
            ],
            [
                'label'             => 'E-mail Pagos',
                'type'              => 'email',
                'name'              => 'email_contacto4',
            ],
            [
                'label'             => 'Nombre Facturador',
                'type'              => 'text',
                'name'              => 'nombre_contacto5',
            ],
            [
                'label'             => 'Teléfono Facturador',
                'type'              => 'number',
                'name'              => 'telefono_contacto5',
            ],
            [
                'label'             => 'Cargo F',
                'type'              => 'text',
                'name'              => 'cargo_contacto5',
            ],
            [
                'label'             => 'E-mail Facturador',
                'type'              => 'email',
                'name'              => 'email_contacto5',
            ],
        ]);


        $this->crud->set('show.contentClass', 'col-md-12');
    }
    protected function setupCreateOperation()
    {
        $this->crud->setValidation(ClienteRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        //$this->crud->setFromDb();
        $this->crud->setOperationSetting('contentClass', 'form-group col-md-12 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light');

        $this->crud->addFields(static::getFieldsArrayForSimpleTab());
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    public static function getFieldsArrayForSimpleTab()
    {
        return [

            [
                'name'              => 'user_id',
                'type'              => 'hidden',
                'entity'            => 'user_id',
                'attribute'         => 'id',
                'value'             =>  backpack_user()->id,
            ],
            [
                'label'             => 'Tipo Id.',
                'type'              => 'select2_from_array',
                'name'              => 'nit_id',
                'options'           => [
                    'NT' => 'NIT','CC'=>'CEDULA DE CIUDADANIA', 'CE' => 'CEDULA DE EXTRANJERIA' ],
                'allows null'       => false,
                'default'           => 'NT',
                'tab'               => 'Básicos',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Número Id.',
                'type'              => 'number',
                'name'              => 'nit',
                'tab'               => 'Básicos',
                'attributes'        => ['limit' => 30, 'required' => true],
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Dv',
                'type'              => 'number',
                'name'              => 'dv',
                'tab'               => 'Básicos',
                'attributes'        => ['min' => 0, 'max' => 9],
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Primer Nombre',
                'type'              => 'text',
                'name'              => 'nombre1',
                'tab'               => 'Básicos',
                'attributes'        => ['limit' => 30],
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
                ],
            [
                'label'             => 'Segundo Nombre',
                'type'              => 'text',
                'name'              => 'nombre2',
                'tab'               => 'Básicos',
                'attributes'        => ['limit' => 30],
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Primer Apellido',
                'type'              => 'text',
                'name'              => 'apellido1',
                'tab'               => 'Básicos',
                'attributes'        => ['limit' => 30],
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Segundo Apellido',
                'type'              => 'text',
                'name'              => 'apellido2',
                'tab'               => 'Básicos',
                'attributes'        => ['limit' => 30],
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Nombre de Vista Amovil',
                'type'              => 'text',
                'name'              => 'name',
                'tab'               => 'Básicos',
                'attributes'        => ['limit' => 30, 'required' => true],
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-12 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Razón Social',
                'type'              => 'text',
                'name'              => 'razon_social',
                'tab'               => 'Básicos',
                'attributes'        => ['limit' => 30, 'required' => true],
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-12 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Activo',
                'type'              => 'toggle',
                'view_namespace'    => 'toggle-field-for-backpack::fields',
                'name'              => 'activo',
                'tab'               => 'Básicos',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-1 h-25 shadow-lg p-2 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'País',
                'type'              => 'select2',
                'name'              => 'pais_id',
                'entity'            => 'pais_id',
                'attribute'         => 'descripcion',
                'tab'               => 'Ubicación',
                'wrapperAttributes' => ['class' => 'form-group col-md-4 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Departamento',
                'type'              => 'select2',
                'name'              => 'departamento_id',
                'entity'            => 'departamento_id',
                'attribute'         => 'name',
                'tab'               => 'Ubicación',
                'wrapperAttributes' => ['class' => 'form-group col-md-4 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Ciudad',
                'type'              => 'select2',
                'name'              => 'ciudad_id',
                'entity'            => 'ciudad_id',
                'attribute'         => 'name',
                'tab'               => 'Ubicación',
                'wrapperAttributes' => ['class' => 'form-group col-md-4 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Dirección',
                'type'              => 'address',
                'name'              => 'direccion',
                'tab'               => 'Ubicación',
                'attributes'        => ['limit' => 100],
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-12 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Teléfono o Celular Cliente(1)',
                'type'              => 'number',
                'name'              => 'telefono1',
                'tab'               => 'Ubicación',
                'attributes'        => ['limit' => 15],
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Teléfono o Celular Cliente(2)',
                'type'              => 'number',
                'name'              => 'telefono2',
                'tab'               => 'Ubicación',
                'attributes'        => ['limit' => 15],
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Correo Electrónico',
                'type'              => 'email',
                'name'              => 'email_cliente',
                'tab'               => 'Ubicación',
                'attributes'        => ['limit' => 30],
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Última Capacitación',
                'type'              => 'datetime_picker',
                'name'              => 'capacitacion',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Núm. de Agencia',
                'type'              => 'number',
                'name'              => 'agencia_id',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Tipo de Cliente',
                'type'              => 'select2',
                'name'              => 'tipocl_id',
                'entity'            => 'Tipocl_id',
                'attribute'         => 'name',
                'tab'               => 'Amovil',
                'wrapperAttributes' => ['class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Id BD',
                'type'              => 'number',
                'name'              => 'base_id',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-1 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Clave',
                'type'              => 'number',
                'name'              => 'clave_id',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-1 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Nombre BD',
                'type'              => 'text',
                'name'              => 'base_nombre',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Nombre del Servidor',
                'type'              => 'text',
                'name'              => 'servidor_nombre',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Ip del Servidor BD',
                'type'              => 'text',
                'name'              => 'servidor_ip',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Url Web Gestión',
                'type'              => 'url',
                'name'              => 'webgestion_url',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Ver. Prev.',
                'type'              => 'text',
                'name'              => 'version_nombre',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-1 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Erp',
                'type'              => 'text',
                'name'              => 'erp_nombre',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Proveedor de Datos Moviles',
                'type'              => 'text',
                'name'              => 'prov_datos',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Preventa',
                'type'              => 'toggle',
                'view_namespace'    => 'toggle-field-for-backpack::fields',
                'name'              => 'preventa',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Autoventa',
                'type'              => 'toggle',
                'view_namespace'    => 'toggle-field-for-backpack::fields',
                'name'              => 'autoventa',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Distribución',
                'type'              => 'toggle',
                'view_namespace'    => 'toggle-field-for-backpack::fields',
                'name'              => 'distribucion',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Supervisores',
                'type'              => 'toggle',
                'view_namespace'    => 'toggle-field-for-backpack::fields',
                'name'              => 'supervisor',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Apedir',
                'type'              => 'toggle',
                'view_namespace'    => 'toggle-field-for-backpack::fields',
                'name'              => 'apedir',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Erp',
                'type'              => 'toggle',
                'view_namespace'    => 'toggle-field-for-backpack::fields',
                'name'              => 'erp',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Salud',
                'type'              => 'toggle',
                'view_namespace'    => 'toggle-field-for-backpack::fields',
                'name'              => 'salud',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Ramo',
                'type'              => 'toggle',
                'view_namespace'    => 'toggle-field-for-backpack::fields',
                'name'              => 'ramo',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Felam',
                'type'              => 'toggle',
                'view_namespace'    => 'toggle-field-for-backpack::fields',
                'name'              => 'felam',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Facturación Electrónica',
                'type'              => 'toggle',
                'view_namespace'    => 'toggle-field-for-backpack::fields',
                'name'              => 'fac_electronica',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Cert. Electónico Felam',
                'type'              => 'toggle',
                'view_namespace'    => 'toggle-field-for-backpack::fields',
                'name'              => 'cert_felam',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Fecha Inicial C.E.',
                'type'              => 'datetime_picker',
                'name'              => 'cert_felam_i',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Fecha Final C.E.',
                'type'              => 'datetime_picker',
                'name'              => 'cert_felam_f',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Contrato Felam',
                'type'              => 'toggle',
                'view_namespace'    => 'toggle-field-for-backpack::fields',
                'name'              => 'contrato_felam',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-2 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Contrato Aplicaciones',
                'type'              => 'toggle',
                'view_namespace'    => 'toggle-field-for-backpack::fields',
                'name'              => 'contrato_app',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-2 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Contribuyente',
                'type'              => 'text',
                'name'              => 'contribuyente_id',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],

            [
                'label'             => 'Número de Contrato',
                'type'              => 'text',
                'name'              => 'contrato_numero',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Observación',
                'type'              => 'textarea',
                'name'              => 'observacion',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Archivo de Contratos',
                'type'              => 'browse_multiple',
                'name'              => 'contrato_imagen',
                'tab'               => 'Amovil',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Nombre Gerente',
                'type'              => 'text',
                'name'              => 'nombre_contacto1',
                'tab'               => 'Contactos',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Teléfono Gerente',
                'type'              => 'number',
                'name'              => 'telefono_contacto1',
                'tab'               => 'Contactos',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Cargo G',
                'type'              => 'text',
                'name'              => 'cargo_contacto1',
                'tab'               => 'Contactos',
                'default'           => 'GERENTE',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'E-mail Gerente',
                'type'              => 'email',
                'name'              => 'email_contacto1',
                'tab'               => 'Contactos',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Nombre Supervisor',
                'type'              => 'text',
                'name'              => 'nombre_contacto2',
                'tab'               => 'Contactos',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Teléfono Supervisor',
                'type'              => 'number',
                'name'              => 'telefono_contacto2',
                'tab'               => 'Contactos',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Cargo S',
                'type'              => 'text',
                'name'              => 'cargo_contacto2',
                'tab'               => 'Contactos',
                'default'           => 'SUPERVISOR',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'E-mail Supervisor',
                'type'              => 'email',
                'name'              => 'email_contacto2',
                'tab'               => 'Contactos',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Nombre Contabilidad',
                'type'              => 'text',
                'name'              => 'nombre_contacto3',
                'tab'               => 'Contactos',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Teléfono Contabilidad',
                'type'              => 'number',
                'name'              => 'telefono_contacto3',
                'tab'               => 'Contactos',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Cargo C',
                'type'              => 'text',
                'name'              => 'cargo_contacto3',
                'tab'               => 'Contactos',
                'default'           => 'CONTABILIDAD',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'E-mail Contabilidad',
                'type'              => 'email',
                'name'              => 'email_contacto3',
                'tab'               => 'Contactos',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Nombre Pagos',
                'type'              => 'text',
                'name'              => 'nombre_contacto4',
                'tab'               => 'Contactos',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Teléfono Pagos',
                'type'              => 'number',
                'name'              => 'telefono_contacto4',
                'tab'               => 'Contactos',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Cargo P',
                'type'              => 'text',
                'name'              => 'cargo_contacto4',
                'tab'               => 'Contactos',
                'default'           => 'PAGOS',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'E-mail Pagos',
                'type'              => 'email',
                'name'              => 'email_contacto4',
                'tab'               => 'Contactos',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Nombre Facturador',
                'type'              => 'text',
                'name'              => 'nombre_contacto5',
                'tab'               => 'Contactos',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Teléfono Facturador',
                'type'              => 'number',
                'name'              => 'telefono_contacto5',
                'tab'               => 'Contactos',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Cargo F',
                'type'              => 'text',
                'name'              => 'cargo_contacto5',
                'tab'               => 'Contactos',
                'default'           => 'FACTURADOR',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'E-mail Facturador',
                'type'              => 'email',
                'name'              => 'email_contacto5',
                'tab'               => 'Contactos',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
        ];
    }
}
