<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TickethdRequest;
use App\Models\Tickethd;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudColumn;
use Illuminate\Http\Resources\CollectsResources;
use Illuminate\Support\Facades\Request;
use Symfony\Component\Finder\Finder;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TickethdCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TickethdCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation {store as traitStore;}


    public function setup()
    {
        $this->role_model = $role_model = config('backpack.permissionmanager.models.role');
        $this->permission_model = $permission_model = config('backpack.permissionmanager.models.permission');

        $this->crud->setModel('App\Models\Tickethd');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/tickethd');
        $this->crud->setEntityNameStrings('Ticket Soporte', 'Tickets Soporte');
        //$tickethd = Tickethd::firstWhere('estado_id', 3);



        if (backpack_user()->can('Ver Tickets')) {
            $this->crud->hasAccess('list');
        } else {
            $this->crud->denyAccess('list');
        }

        if (backpack_user()->can('Ver detalle Tickets')) {
            $this->crud->hasAccess('show');
        } else {
            $this->crud->denyAccess('show');
        }

        if (backpack_user()->can('Crear Tickets')) {
            $this->crud->hasAccess('create');
        } else {
            $this->crud->denyAccess('create');
        }

        if (backpack_user()->can('Editar Tickets')) {
            $this->crud->hasAccess('update');
        } else {
            $this->crud->denyAccess('update');
        }

        if (backpack_user()->can('Borrar Tickets')) {
            $this->crud->hasAccess('delete');
        } else {
            $this->crud->denyAccess('delete');
        }
    }
    public function store()
    {
        // do something before validation, before save, before everything; for example:
    // $this->crud->request->request->add(['author_id'=> backpack_user()->id]);
        // $this->crud->addField(['type' => 'hidden', 'name' => 'author_id']);
    // $this->crud->request->request->remove('password_confirmation');
        // $this->crud->removeField('password_confirmation');

    $response = $this->traitStore();
    \Alert::success('Tu has grabado con Éxito')->flash();
    \Alert::info($this->crud->getCurrentEntry()->getKey())->flash();
    return $response;
    }

    protected function setupListOperation()


    {

        $this->addCustomCrudFilters();
        $this->crud->getTitle(); // get the Title for the create action
        $this->crud->getHeading(); // get the Heading for the create action
        $this->crud->getSubheading(); // get the Subheading for the create action
        $this->crud->setTitle('Tickets Soporte'); // set the Title for the create action
        $this->crud->setHeading('Tickets Soporte'); // set the Heading for the create action
        $this->crud->setSubheading('Tickets Soporte'); // set the Subheading for the create action
        $this->crud->set('setFromDb', false);
        $this->crud->addClause('where', 'estado_id', '!=', '3')->get();
        $this->crud->addColumns([
            [
                'label' => 'Número de Ticket',
                'name' => 'id',
                'type' => 'text',
            ],
            [
                'label' => 'Cervello',
                'name' => 'sistema_id',
                'type' => 'text',
            ],
            [
                'name' => 'created_at',
                'type' => 'datetime',
            ],
        ]);
        $this->crud->addColumn([   // 1-n relationship
            'label'     => 'Usuario', // Table column heading
            'type'      => 'select',
            'name'      => 'user_id', // the column that contains the ID of that connected entity;
            'entity'    => 'Users', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\User", // foreign key model
            // 'wrapper'   => [
            //     'href' => function ($crud, $column, $entry, $related_key) {
            //         return backpack_url('User/'.$related_key.'/show');
            //     },
            // ],
        ],);
        $this->crud->addColumn([   // 1-n relationship
            'label'     => 'Cliente', // Table column heading
            'type'      => 'select',
            'name'      => 'cliente_id', // the column that contains the ID of that connected entity;
            'entity'    => 'Clientes', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\Cliente", // foreign key model
            // 'wrapper'   => [
            //     'href' => function ($crud, $column, $entry, $related_key) {
            //         return backpack_url('User/'.$related_key.'/show');
            //     },
            // ],
        ],);
        $this->crud->addColumn([   // 1-n relationship
            'label'     => 'Modelo Atención', // Table column heading
            'type'      => 'select',
            'name'      => 'modeloatencion_id', // the column that contains the ID of that connected entity;
            'entity'    => 'Modeloatencion', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\Modeloatencion", // foreign key model
            // 'wrapper'   => [
            //     'href' => function ($crud, $column, $entry, $related_key) {
            //         return backpack_url('User/'.$related_key.'/show');
            //     },
            // ],
        ],);
        $this->crud->addColumn([   // 1-n relationship
            'label'     => 'Aplicaciones', // Table column heading
            'type'      => 'select',
            'name'      => 'aplicacion_id', // the column that contains the ID of that connected entity;
            'entity'    => 'Aplicaciones', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\Aplicacion", // foreign key model
            // 'wrapper'   => [
            //     'href' => function ($crud, $column, $entry, $related_key) {
            //         return backpack_url('User/'.$related_key.'/show');
            //     },
            // ],
        ],);
        $this->crud->addColumn([   // 1-n relationship
            'label'     => 'Matriz', // Table column heading
            'type'      => 'select',
            'name'      => 'matrizop_id', // the column that contains the ID of that connected entity;
            'entity'    => 'Matrizops', // the method that defines the relationship in your Model
            'attribute' => 'descripcion', // foreign key attribute that is shown to user
            'model'     => "\App\Models\Matrizop", // foreign key model
            'wrapper'   => [
                'href' => function ($crud, $column, $entry, $related_key) {
                    return backpack_url('matrizop/' . $related_key . '/show');
                },
            ],
        ],);
        $this->crud->addColumn([   // 1-n relationship
            'label'     => 'Estado', // Table column heading
            'type'      => 'select',
            'name'      => 'estado_id', // the column that contains the ID of that connected entity;
            'entity'    => 'Estados', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\Estado", // foreign key model
            // 'wrapper'   => [
            //     'href' => function ($crud, $column, $entry, $related_key) {
            //         return backpack_url('User/'.$related_key.'/show');
            //     },
            // ],
        ],);
        $this->crud->addColumn([   // 1-n relationship
            'label'     => 'Sección', // Table column heading
            'type'      => 'select',
            'name'      => 'seccion_id', // the column that contains the ID of that connected entity;
            'entity'    => 'Secciones', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\Seccion", // foreign key model
            // 'wrapper'   => [
            //     'href' => function ($crud, $column, $entry, $related_key) {
            //         return backpack_url('User/'.$related_key.'/show');
            //     },
            // ],
        ],);
        $this->crud->addColumn([   // 1-n relationship
            'label'     => 'Grupo', // Table column heading
            'type'      => 'select',
            'name'      => 'grupo_id', // the column that contains the ID of that connected entity;
            'entity'    => 'Grupos', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\Grupo", // foreign key model
            // 'wrapper'   => [
            //     'href' => function ($crud, $column, $entry, $related_key) {
            //         return backpack_url('User/'.$related_key.'/show');
            //     },
            // ],
        ],);
        $this->crud->addColumn([   // 1-n relationship
            'label'     => 'Último Usuario que Editó', // Table column heading
            'type'      => 'select',
            'name'      => 'asignacion_n1', // the column that contains the ID of that connected entity;
            'entity'    => 'asignaciones_n1', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\User", // foreign key model
            // 'wrapper'   => [
            //     'href' => function ($crud, $column, $entry, $related_key) {
            //         return backpack_url('User/'.$related_key.'/show');
            //     },
            // ],
        ],);
        $this->crud->addColumn([   // 1-n relationship
            'label'     => 'Asignacion N2', // Table column heading
            'type'      => 'select',
            'name'      => 'asignacion_n2', // the column that contains the ID of that connected entity;
            'entity'    => 'asignaciones_n2', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\User", // foreign key model
            // 'wrapper'   => [
            //     'href' => function ($crud, $column, $entry, $related_key) {
            //         return backpack_url('User/'.$related_key.'/show');
            //     },
            // ],
        ],);
        $this->crud->addColumn([   // 1-n relationship
            'label'     => 'Asignacion N3', // Table column heading
            'type'      => 'select',
            'name'      => 'asignacion_n3', // the column that contains the ID of that connected entity;
            'entity'    => 'asignaciones_n3', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\User", // foreign key model
            // 'wrapper'   => [
            //     'href' => function ($crud, $column, $entry, $related_key) {
            //         return backpack_url('User/'.$related_key.'/show');
            //     },
            // ],
        ],);
        $this->crud->addColumn([   // 1-n relationship
            'label'     => 'Asignacion N4', // Table column heading
            'type'      => 'select',
            'name'      => 'asignacion_n4', // the column that contains the ID of that connected entity;
            'entity'    => 'asignaciones_n4', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\User", // foreign key model
            // 'wrapper'   => [
            //     'href' => function ($crud, $column, $entry, $related_key) {
            //         return backpack_url('User/'.$related_key.'/show');
            //     },
            // ],
        ],);
        $this->crud->addColumn([   // SimpleMDE
            'name'  => 'descripcion',
            'label' => 'Descripción',
            'type'  => 'markdown',
        ]);
        $this->crud->addColumn([   // SimpleMDE
            'name'  => 'solucion',
            'label' => 'Solución',
            'type'  => 'markdown',
        ]);
        $this->crud->addColumn([   // SimpleMDE
            'name'  => 'observaciones',
            'label' => 'Observaciones',
            'type'  => 'markdown',
        ]);


        //$this->crud->enableDetailsRow();
        //$this->crud->setDetailsRowView('vendor.backpack.crud.details_row.tickethd');
        $this->crud->enableExportButtons();
        //$this->crud->addButtonFromModelFunction('line', 'open_google', 'openGoogle', 'beginning');



    }

    protected function addCustomCrudFilters()
    {


        $this->crud->addFilter(
            [ // daterange filter
                'type' => 'date_range',
                'name' => 'created_at',
                'label' => 'Rango de Fecha',
                'date_range_options' => [
                    //'format' => 'YYYY/MM/DD',
                    //'locale' => ['format' => 'YYYY/MM/DD'],
                    'showDropdowns' => true,
                    'showWeekNumbers' => true
                ]
            ],
            true,
            function ($value) { // if the filter is active, apply these constraints
                $dates = json_decode($value);
                $this->crud->addClause('where', 'created_at', '>=', $dates->from . " 00:00:00");
                $this->crud->addClause('where', 'created_at', '<=', $dates->to . " 23:59:59");
            }
        );

        $this->crud->addFilter([ // select2 filter
            'name' => 'estado_id',
            'type' => 'select2',
            'label' => 'Estado',
        ], function () {
            return \App\Models\Estado::all()->keyBy('id')->pluck('name', 'id')->toArray();
        }, function ($value) { // if the filter is active
            $this->crud->addClause('where', 'estado_id', $value);
        });
    }


    protected function setupShowOperation()
    {
        $this->crud->set('show.setFromDb', false);
        $this->crud->getTitle(); // get the Title for the create action
        $this->crud->getHeading(); // get the Heading for the create action
        $this->crud->getSubheading(); // get the Subheading for the create action
        $this->crud->setTitle('Tickets Soporte'); // set the Title for the create action
        $this->crud->setHeading('Tickets Soporte'); // set the Heading for the create action
        $this->crud->setSubheading('Ver Tickets de Soporte'); // set the Subheading for the create action
        $this->setupListOperation();


        $this->crud->set('show.contentClass', 'col-md-12');
    }


    protected function setupCreateOperation()
    {

        $this->crud->setValidation(TickethdRequest::class);
        $this->crud->getTitle(); // get the Title for the create action
        $this->crud->getHeading(); // get the Heading for the create action
        $this->crud->getSubheading(); // get the Subheading for the create action
        $this->crud->setTitle('Tickets Soporte'); // set the Title for the create action
        $this->crud->setHeading('Tickets Soporte'); // set the Heading for the create action
        $this->crud->setSubheading('Crear un Tickets de Soporte'); // set the Subheading for the create action


        // TODO: remove setFromDb() and manually define Fields
        //$this->crud->setFromDb();

        $this->crud->setOperationSetting('contentClass', 'form-group col-md-12 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light bold-labels bg-down');

        $this->crud->addFields(static::getFieldsArrayForSimpleTab());

    }

    protected function setupUpdateOperation()
    {

        $this->crud->setValidation(TickethdRequest::class);


        $this->crud->getTitle(); // get the Title for the create action
        $this->crud->getHeading(); // get the Heading for the create action
        $this->crud->getSubheading(); // get the Subheading for the create action
        $this->crud->setTitle('Tickets Soporte'); // set the Title for the create action
        $this->crud->setHeading('Tickets Soporte'); // set the Heading for the create action
        $this->crud->setSubheading('Editar Tickets de Soporte'); // set the Subheading for the create action
        $this->crud->addField(
            [
                'label' => 'Número de Ticket',
                'name' => 'id',
                'type' => 'number',
                'tab'               => 'Datos del Ticket',
                'attributes' => [
                    'readonly'    => 'readonly',
                    //'disabled'    => 'disabled',
                ], // change the HTML attributes of your input
                'tab'               => 'Datos del Ticket',
                //'value'             =>  backpack_auth()->user()->id,
                'wrapperAttributes' => ['class' => 'input col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-light bg-dark'],
            ]
            );
        $this->setupCreateOperation();


        //$this->crud->removeField('id');
        $this->crud->removeField('user_id');
        //$item = $this->crud->getEntry($entry_id);

    }





    public static function getFieldsArrayForSimpleTab()
    {
        return [
            // [
            //     'label' => 'Número de Ticket',
            //     'name' => 'id',
            //     'type' => 'number',
            //     'attributes' => [
            //         'readonly'    => 'readonly',
            //         'disabled'    => 'disabled',
            //     ], // change the HTML attributes of your input
            //     'tab'               => 'Datos del Ticket',
            //     //'value'             =>  backpack_auth()->user()->id,
            //     'wrapperAttributes' => ['class' => 'input col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-light bg-dark'],
            // ],
            [
                'name'              => 'user_id',
                'type'              => 'hidden',
                'entity'            => 'Users',
                'attribute'         => 'id',
                'value'             =>  backpack_auth()->user()->id,
            ],
            [
                'label'             => 'Modelo de Atención',
                'type'              => 'select2',
                'name'              => 'modeloatencion_id',
                'entity'            => 'Modeloatencion',
                'attribute'         => 'name',
                'tab'               => 'Datos del Ticket',
                'attributes'        => ['required' => true],
                'wrapperAttributes' => ['class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Cliente',
                'type'              => 'select2',
                'name'              => 'cliente_id',
                'entity'            => 'Clientes',
                'attribute'         => 'name',
                'tab'               => 'Datos del Ticket',
                'attributes'        => ['required' => true],
                'wrapperAttributes' => ['class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Aplicación',
                'type'              => 'select2',
                'name'              => 'aplicacion_id',
                'entity'            => 'Aplicaciones',
                'attribute'         => 'name',
                'tab'               => 'Datos del Ticket',
                'attributes'        => ['required' => true],
                'wrapperAttributes' => ['class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Cervello',
                'type'              => 'text',
                'name'              => 'sistema_id',
                'tab'               => 'Datos del Ticket',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Sección',
                'type'              => 'select2',
                'name'              => 'seccion_id',
                'entity'            => 'Secciones',
                'default'           => '1',
                'attributes'        => ['required' => true],
                'attribute'         => 'name',
                'tab'               => 'Datos del Ticket',
                'wrapperAttributes' => ['class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Matriz Operativa',
                'type'              => 'select2',
                'name'              => 'matrizop_id',
                'entity'            => 'Matrizops',
                'attribute'         => 'descripcion',
                'attributes'        => ['required' => true],
                'tab'               => 'Datos del Ticket',
                'wrapperAttributes' => ['class' => 'form-group col-md-4 row-15h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],

            [
                'label'             => 'Nivel de Soporte',
                'type'              => 'select2',
                'name'              => 'grupo_id',
                'entity'            => 'Grupos',
                'attribute'         => 'name',
                'attributes'        => ['required' => true],
                'default'           => '1',
                'tab'               => 'Datos del Ticket',
                'wrapperAttributes' => ['class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Estado',
                'type'              => 'select2',
                'name'              => 'estado_id',
                'entity'            => 'Estados',
                'attribute'         => 'name',
                'attributes'        => ['required' => true],
                'default'           => '1',
                'tab'               => 'Datos del Ticket',
                'wrapperAttributes' => ['class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Fecha de Cerrado',
                'type'              => 'datetime_picker',
                'name'              => 'completed_at',
                'tab'               => 'Datos del Ticket',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Descripción',
                'type'              => 'easymde',
                'name'              => 'descripcion',
                'tab'               => 'Datos del Ticket',
                'default'           => 'Nombre:
Código empleado:
Cargo:
Empresa:
Canal:DS
Celular:
Correo: ---
App:
Placa/Zona:
Doc. T.:
Caso:',
                'wrapperAttributes' => [

                    'class' => 'col-md-6 shadow-lg p-1 mb-2 bg-light bg-light',
                ],

            ],
            [
                'label'             => 'Solución:',
                'type'              => 'easymde',
                'name'              => 'solucion',
                'tab'               => 'Datos del Ticket',
                'default'           => 'Diagnóstico:
Acciones Realizadas:
Nombre del usuario que confirma el cierre:
Método de confirmación:',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            // [
            //     'label'             => 'Nombre:',
            //     'type'              => 'text',
            //     'name'              => 'solicitante_nombre',
            //     'tab'               => 'Solicitante',
            //     'wrapperAttributes' => [
            //         'class' => 'input-group-text col-md-7 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
            //     ],
            // ],
            // [
            //     'label'             => 'Código o Cédula:',
            //     'type'              => 'text',
            //     'name'              => 'solicitante_codigo',
            //     'tab'               => 'Solicitante',
            //     'wrapperAttributes' => [
            //         'class' => 'input-group-text col-md-7 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
            //     ],
            // ],
            // [
            //     'label'             => 'Cargo:',
            //     'type'              => 'text',
            //     'name'              => 'solicitante_cargo',
            //     'tab'               => 'Solicitante',
            //     'wrapperAttributes' => [
            //         'class' => 'input-group-text col-md-7 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
            //     ],
            // ],
            // [
            //     'label'             => 'Canal:',
            //     'type'              => 'text',
            //     'name'              => 'solicitante_canal',
            //     'tab'               => 'Solicitante',
            //     'wrapperAttributes' => [
            //         'class' => 'input-group-text col-md-7 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
            //     ],
            // ],
            // [
            //     'label'             => 'Teléfono:',
            //     'type'              => 'text',
            //     'name'              => 'solicitante_celular',
            //     'tab'               => 'Solicitante',
            //     'wrapperAttributes' => [
            //         'class' => 'input-group-text col-md-7 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
            //     ],
            // ],
            //[
            //     'label'             => 'Correo:',
            //     'type'              => 'text',
            //     'name'              => 'solicitante_correo',
            //     'tab'               => 'Solicitante',
            //     'wrapperAttributes' => [
            //         'class' => 'input-group-text col-md-7 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
            //     ],
            // ],
            // [
            //     'label'             => 'Placa / Zona:',
            //     'type'              => 'text',
            //     'name'              => 'solicitante_placa_zona',
            //     'tab'               => 'Solicitante',
            //     'wrapperAttributes' => [
            //         'class' => 'input-group-text col-md-7 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
            //     ],
            // ],
            //
            // [
            //     'label'             => 'Documento de Transporte:',
            //     'type'              => 'text',
            //     'name'              => 'solicitante_doc_transporte',
            //     'tab'               => 'Solicitante',
            //     'wrapperAttributes' => [
            //         'class' => 'input-group-text col-md-7 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
            //     ],
            // ],

            [
                'label'             => 'Último Usuario que Editó',
                'type'              => 'hidden',
                'name'              => 'asignacion_n1',
                'entity'            => 'Asignaciones_n1',
                'attribute'         => 'name',
                'attributes' => [
                    'readonly'    => 'readonly',
                    //'disabled'    => 'disabled',
                ], // change the HTML attributes of your input
                'tab'               => 'Transferido',
                'value'             =>  backpack_auth()->user()->id,
                //'wrapperAttributes' => ['class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Nivel 2',
                'type'              => 'select2',
                'name'              => 'asignacion_n2',
                'entity'            => 'Asignaciones_n2',
                'attribute'         => 'name',
                'tab'               => 'Transferido',
                'wrapperAttributes' => ['class' => 'form-group col-md-4 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Nivel 3',
                'type'              => 'select2',
                'name'              => 'asignacion_n3',
                'entity'            => 'Asignaciones_n3',
                'attribute'         => 'name',
                'tab'               => 'Transferido',
                'wrapperAttributes' => ['class' => 'form-group col-md-4 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Nivel 4',
                'type'              => 'select2',
                'name'              => 'asignacion_n4',
                'entity'            => 'Asignaciones_n4',
                'attribute'         => 'name',
                'tab'               => 'Transferido',
                'wrapperAttributes' => ['class' => 'form-group col-md-4 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'     => 'Archivos Adjuntos:',
                'type'      => 'browse_multiple',
                'name'      => 'adjuntos',
                'tab'       => 'Transferido',
                'wrapper'   => ['class' => 'form-group col-md-12 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',],
            ],
            [
                'label'             => 'Transferido a:',
                'type'              => 'tinymce',
                'name'              => 'transferencia',
                'tab'               => 'Transferido',
                'wrapperAttributes' => ['class' => 'form-group col-md-6 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Observaciones:',
                'type'              => 'tinymce',
                'name'              => 'observaciones',
                'tab'               => 'Transferido',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],


        ];
    }
}
