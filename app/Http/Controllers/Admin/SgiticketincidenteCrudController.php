<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SgiticketincidenteRequest;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudColumn;
use Illuminate\Http\Resources\CollectsResources;
use Illuminate\Support\Facades\Request;
use Symfony\Component\Finder\Finder;
use App\Models\Sgiticketincidente;
use phpDocumentor\Reflection\Element;
use Symfony\Component\VarDumper\VarDumper;

/**
 * Class SgiticketincidenteCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SgiticketincidenteCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation {store as traitStore;}

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Sgiticketincidente::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/sgiticketincidente');
        CRUD::setEntityNameStrings('Ticket Incidente', 'Tickets Incidentes');

        if (backpack_user()->can('Ver SgiTicketIncidentes')) {
            $this->crud->hasAccess('list');
        } else {
            $this->crud->denyAccess('list');
        }

        if (backpack_user()->can('Ver detalle SgiTicketIncidentes')) {
            $this->crud->hasAccess('show');
        } else {
            $this->crud->denyAccess('show');
        }

        if (backpack_user()->can('Crear SgiTicketIncidentes')) {
            $this->crud->hasAccess('create');
        } else {
            $this->crud->denyAccess('create');
        }

        if (backpack_user()->can('Editar SgiTicketIncidentes')) {
            $this->crud->hasAccess('update');
        } else {
            $this->crud->denyAccess('update');
        }

        if (backpack_user()->can('Borrar SgiTicketIncidentes')) {
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

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::setFromDb(); // columns
        $this->crud->enableExportButtons();
        $this->addCustomCrudFilters();
        $this->crud->setTitle('Tickets SGI'); // set the Title for the create action
        $this->crud->setHeading('Tickets SGI'); // set the Heading for the create action
        $this->crud->setSubheading('Lista Tickets SGI'); // set the Subheading for the create action
        //$this->crud->set('setFromDb', false);
        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
        $this->crud->addColumns([
            [
                'label' => 'Número de Ticket',
                'name' => 'id',
                'type' => 'text',
            ],
            [
                'label'=> 'Fecha de Creación',
                'name' => 'created_at',
                'type' => 'datetime',
            ],
        ]);
        $this->crud->addColumn([   // 1-n relationship
            'label'     => 'Usuario Reporta', // Table column heading
            'type'      => 'select',
            'tab'       => 'Identificación',
            'name'      => 'user_id', // the column that contains the ID of that connected entity;
            'entity'    => 'Users', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\User", // foreign key model
            // 'wrapper'   => [
            //     'href' => function ($crud, $column, $entry, $related_key) {
            //         return backpack_url('User/'.$related_key.'/show');
            //     },
            // ],
        ]);
        $this->crud->addColumn([   // 1-n relationship
            'label'     => 'Usuario Editó', // Table column heading
            'type'      => 'select',
            'tab'       => 'Identificación',
            'name'      => 'useract_id', // the column that contains the ID of that connected entity;
            'entity'    => 'Usersact', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\User", // foreign key model
            // 'wrapper'   => [
            //     'href' => function ($crud, $column, $entry, $related_key) {
            //         return backpack_url('User/'.$related_key.'/show');
            //     },
            // ],
        ]);
        $this->crud->addColumn([   // 1-n relationship
            'label'     => 'Lugar de Incidencia', // Table column heading
            'type'      => 'select',
            'tab'       => 'Identificación',
            'name'      => 'lugar_id', // the column that contains the ID of that connected entity;
            'entity'    => 'Lugares', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\sgilugarincidente", // foreign key model
            // 'wrapper'   => [
            //     'href' => function ($crud, $column, $entry, $related_key) {
            //         return backpack_url('User/'.$related_key.'/show');
            //     },
            // ],
        ]);
        $this->crud->addColumn([   // fecha
            'label' => 'Fecha de Reporte',
            'tab'       => 'Identificación',
            'name' => 'incidente_at',
            'type' => 'datetime',
        ]);
        $this->crud->addColumn([   // 1-n relationship
            'label'     => 'Estado Actual de Incidencia', // Table column heading
            'type'      => 'select',
            'name'      => 'estadoactual_id', // the column that contains the ID of that connected entity;
            'entity'    => 'Estadoactual', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\sgiestadoactualincidente", // foreign key model
            // 'wrapper'   => [
            //     'href' => function ($crud, $column, $entry, $related_key) {
            //         return backpack_url('User/'.$related_key.'/show');
            //     },
            // ],
        ]);
        $this->crud->addColumn([   // 1-n relationship
            'label'     => 'Tipo de Incidencia', // Table column heading
            'type'      => 'select',
            'name'      => 'tipo_id', // the column that contains the ID of that connected entity;
            'entity'    => 'Tipo', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\sgitipoincidente", // foreign key model
            // 'wrapper'   => [
            //     'href' => function ($crud, $column, $entry, $related_key) {
            //         return backpack_url('User/'.$related_key.'/show');
            //     },
            // ],
        ]);
        $this->crud->addColumn([   // SimpleMDE
            'name'  => 'descripcion',
            'label' => 'Descripción',
            'type'  => 'markdown',
        ]);
        // $this->crud->addColumn([
        //     'name' => 'impacto',
        //     'label' => 'Impactos Adversos',
        //     'type' => 'check',
        // ]);
        $this->crud->addColumn([   // SimpleMDE
            'name'  => 'descripcionimpacto',
            'label' => 'Descripción Impacto',
            'type'  => 'markdown',
        ]);
        // $this->crud->addColumn([
        //     'name' => 'vulnerabilidad',
        //     'label' => 'Vulnerabilidad',
        //     'type' => 'check',
        // ]);
        $this->crud->addColumn([   // SimpleMDE
            'name'  => 'descripcionvulnerabilidad',
            'label' => 'Descripción Vulnerabilidad',
            'type'  => 'markdown',
        ]);
        $this->crud->addColumn([
            'name' => 'causante',
            'label' => '¿Se conoce el causante?',
            'type' => 'check',
        ]);
        $this->crud->addColumn([   // SimpleMDE
            'name'  => 'nombrecausante',
            'label' => 'Nombre del Causante',
            'type'  => 'markdown',
        ]);
        $this->crud->addColumn([
            'name' => 'violacion',
            'label' => '¿Violación Política o Procedimiento?',
            'type' => 'check',
        ]);
        $this->crud->addColumn([   // 1-n relationship
            'label'     => 'Tipo de Incidencia', // Table column heading
            'type'      => 'select',
            'name'      => 'activo_id', // the column that contains the ID of that connected entity;
            'entity'    => 'Activo', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\sgiactivoincidente", // foreign key model
            // 'wrapper'   => [
            //     'href' => function ($crud, $column, $entry, $related_key) {
            //         return backpack_url('User/'.$related_key.'/show');
            //     },
            // ],
        ]);
        $this->crud->addColumn([   // 1-n relationship
            'label'     => 'Descripción de la Matriz', // Table column heading
            'type'      => 'select',
            'name'      => 'matriz_id', // the column that contains the ID of that connected entity;
            'entity'    => 'Matriz', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\sgimatrizincidente", // foreign key model
            // 'wrapper'   => [
            //     'href' => function ($crud, $column, $entry, $related_key) {
            //         return backpack_url('User/'.$related_key.'/show');
            //     },
            // ],
        ]);
        $this->crud->addColumn([
            'name' => 'evidencia',
            'label' => '¿Existe Evidencia Digital?',
            'type' => 'check',
        ]);
        $this->crud->addColumn([
            'name' => 'evidenciaurl',
            'label' => 'Link de la Evidencia',
            'type' => 'url',
        ]);
        $this->crud->addColumn([   // 1-n relationship
            'label'     => 'Grupo Responsable:', // Table column heading
            'type'      => 'select',
            'name'      => 'seccion_id', // the column that contains the ID of that connected entity;
            'entity'    => 'Seccion', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\Seccion", // foreign key model
            // 'wrapper'   => [
            //     'href' => function ($crud, $column, $entry, $related_key) {
            //         return backpack_url('User/'.$related_key.'/show');
            //     },
            // ],
        ]);
        $this->crud->addColumn([   // 1-n relationship
            'label'     => 'Asignación Responsable Seguimiento', // Table column heading
            'type'      => 'select',
            'name'      => 'asignacion', // the column that contains the ID of that connected entity;
            'entity'    => 'Users', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\User", // foreign key model
            // 'wrapper'   => [
            //     'href' => function ($crud, $column, $entry, $related_key) {
            //         return backpack_url('User/'.$related_key.'/show');
            //     },
            // ],
        ]);
        $this->crud->addColumns([
            [
                'label'             => 'Procesos Afectados',
                'type'              => 'select2_from_array',
                'name'              => 'procesos',
                'options'           => [
                    9 => 'Procesos de Apoyo', 18 => 'Procesos Operativos no críticos/estratégicos', 30 => 'Procesos operativos críticos/sistemas'
                ],
            ],
            [
                'label'             => 'Usuarios Afectados',
                'type'              => 'select2_from_array',
                'name'              => 'usuarios',
                'options'           => [
                    12 => '1-50', 24 => '51-100', 40 => '+ 301'
                ],
            ],
            [
                'label'             => 'Recursos Afectados',
                'type'              => 'select2_from_array',
                'name'              => 'recursos',
                'options'           => [
                    9 => 'Equipos Locales', 18 => 'Conexión a Internet/redes', 30 => 'Sistemas, correo electrónico'
                ],
            ],
            [
                'label'             => 'Urgencia',
                'type'              => 'select2_from_array',
                'name'              => 'urgencia',
                'options'           => [
                    9 => 'Se opera con fallas', 18 => 'se  opera con fallas criticas', 30 => 'No se puede operar'
                ],
            ],
            [
                'label'             => 'Prioridad',
                'type'              => 'select2_from_array',
                'name'              => 'prioridad',
                'options'           => [
                    'Baja' => 'Baja', 'Media' => 'Media', 'Alta' => 'Alta'
                ],
            ],
        ]);
        $this->crud->addColumn([
            'name' => 'respuesta',
            'label' => '¿Hay Respuesta a la Incidencia?',
            'type' => 'check',
        ]);
        $this->crud->addColumn([   // fecha
            'label' => 'Fecha y Hora Inicio de la Incidencia',
            'name' => 'inicio_at',
            'type' => 'datetime',
        ]);
        $this->crud->addColumn([   // fecha
            'label' => 'Fecha y Hora Fin de la Incidencia',
            'name' => 'fin_at',
            'type' => 'datetime',
        ]);
        $this->crud->addColumn([   // SimpleMDE
            'name'  => 'acciones',
            'label' => 'Acciones Realizadas',
            'type'  => 'markdown',
        ]);
        $this->crud->addColumn([   // SimpleMDE
            'name'  => 'pendientes',
            'label' => 'Acciones Pendientes',
            'type'  => 'markdown',
        ]);
        $this->crud->addColumn([   // 1-n relationship
            'label'     => 'Estado Ticket', // Table column heading
            'type'      => 'select',
            'name'      => 'estado_id', // the column that contains the ID of that connected entity;
            'entity'    => 'Estado', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\sgiestadoincidente", // foreign key model
            // 'wrapper'   => [
            //     'href' => function ($crud, $column, $entry, $related_key) {
            //         return backpack_url('User/'.$related_key.'/show');
            //     },
            // ],
        ]);
        $this->crud->addColumn([   // SimpleMDE
            'name'  => 'lecciones',
            'label' => 'Lecciones Aprendidas',
            'type'  => 'markdown',
        ]);
        $this->crud->addColumn([   // SimpleMDE
            'name'  => 'responsablesolucion',
            'label' => 'Nombre Responsable de dar Solución',
            'type'  => 'text',
        ]);
        $this->crud->addColumn([   // fecha
            'label' => 'Fecha y Hora Ultima Actualización del Ticket',
            'name' => 'update_at',
            'type' => 'datetime',
        ]);

    }


    protected function setupShowOperation()
    {
        $this->crud->getTitle(); // get the Title for the create action
        $this->crud->getHeading(); // get the Heading for the create action
        $this->crud->getSubheading(); // get the Subheading for the create action
        $this->crud->setTitle('Tickets SGI'); // set the Title for the create action
        $this->crud->setHeading('Tickets SGI'); // set the Heading for the create action
        $this->crud->setSubheading('Detalle Tickets SGI'); // set the Subheading for the create action
        $this->setupListOperation();


        $this->crud->set('show.contentClass', 'col-md-12');
    }
    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(SgiticketincidenteRequest::class);

       // CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */

        $this->crud->setTitle('Tickets SGI'); // set the Title for the create action
        $this->crud->setHeading('Tickets SGI'); // set the Heading for the create action
        $this->crud->setSubheading('Crear un Tickets SGI'); // set the Subheading for the create action
        $this->crud->setOperationSetting('contentClass', 'form-group col-md-12 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light bold-labels bg-down');

        $this->crud->addFields([[
                'label'             => 'Usuario Registra',
                'name'              => 'user_id',
                'type'              => 'hidden',
                'entity'            => 'Users',
                'attribute'         => 'id',
                'tab'               => 'Identificación',
                'value'             =>  backpack_auth()->user()->id,
                'wrapperAttributes' => ['class' => 'd-none form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Usuario Editó',
                'name'              => 'useract_id',
                'type'              => 'hidden',
                'entity'            => 'Usersact',
                'attribute'         => 'id',
                'tab'               => 'Identificación',
                'value'             =>  backpack_auth()->user()->id,
                'wrapperAttributes' => ['class' => 'd-none form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Lugar de Incidencia',
                'type'              => 'select2',
                'name'              => 'lugar_id',
                'entity'            => 'Lugares',
                'attribute'         => 'name',
                'tab'               => 'Identificación',
                'attributes'        => ['required' => true],
                'wrapperAttributes' => ['class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Fecha de Reporte',
                'type'              => 'datetime_picker',
                'name'              => 'incidente_at',
                'tab'               => 'Identificación',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Estado Actual',
                'type'              => 'select2',
                'name'              => 'estadoactual_id',
                'entity'            => 'Estadoactual',
                'attribute'         => 'name',
                'tab'               => 'Identificación',
                'attributes'        => ['required' => true],
                'wrapperAttributes' => ['class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Tipo de Incidencia',
                'type'              => 'select2',
                'name'              => 'tipo_id',
                'entity'            => 'Tipo',
                'attribute'         => 'name',
                'tab'               => 'Identificación',
                'attributes'        => ['required' => true],
                'wrapperAttributes' => ['class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Descripción',
                'type'              => 'textarea',
                'name'              => 'descripcion',
                'tab'               => 'Identificación',
                'wrapperAttributes' => [

                    'class' => 'col-md-12 shadow-lg p-1 mb-2 bg-light bg-light',
                ],

            ],
            [
                'label'             => 'Existe Causante?',
                'type'              => 'toggle',
                'view_namespace'    => 'toggle-field-for-backpack::fields',
                'name'              => 'causante',
                'tab'               => 'Identificación',
                'wrapperAttributes' => [
                    'class' => 'col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Quien es el Causante?',
                'type'              => 'text',
                'name'              => 'descripcioncausante',
                'tab'               => 'Identificación',
                'wrapperAttributes' => [

                    'class' => 'col-md-9 shadow-lg p-1 mb-2 bg-light bg-light',
                ],

            ],

        ]);

    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {

        $this->setupCreateOperation();
        $this->crud->getTitle(); // get the Title for the create action
        $this->crud->getHeading(); // get the Heading for the create action
        $this->crud->getSubheading(); // get the Subheading for the create action
        $this->crud->setTitle('Tickets SGI'); // set the Title for the create action
        $this->crud->setHeading('Tickets SGI'); // set the Heading for the create action
        $this->crud->setSubheading('editar un Tickets SGI'); // set the Subheading for the create action
        $this->crud->addFields([
            // [
            //     'label'             => 'Impactos Adversos?',
            //     'type'              => 'toggle',
            //     'view_namespace'    => 'toggle-field-for-backpack::fields',
            //     'name'              => 'impacto',
            //     'tab'               => 'Valoración',
            //     'wrapperAttributes' => [
            //         'class' => 'col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
            //     ],
            // ],
            [
                'label'             => 'Descripción del Impacto',
                'type'              => 'text',
                'name'              => 'descripcionimpacto',
                'tab'               => 'Valoración',
                'wrapperAttributes' => [

                    'class' => 'col-md-6 shadow-lg p-1 mb-2 bg-light bg-light',
                ],

            ],
            // [
            //     'label'             => 'Vulnerabilidad?',
            //     'type'              => 'toggle',
            //     'view_namespace'    => 'toggle-field-for-backpack::fields',
            //     'name'              => 'vulnerabilidad',
            //     'tab'               => 'Valoración',
            //     'wrapperAttributes' => [
            //         'class' => 'col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
            //     ],
            // ],
            [
                'label'             => 'Descripción de la Vulnerabilidad',
                'type'              => 'text',
                'name'              => 'descripcionvulnerabilidad',
                'tab'               => 'Valoración',
                'wrapperAttributes' => [

                    'class' => 'col-md-6 shadow-lg p-1 mb-2 bg-light bg-light',
                ],

            ],
            [
                'label'             => 'Afecta Política o Procedimiento?',
                'type'              => 'toggle',
                'view_namespace'    => 'toggle-field-for-backpack::fields',
                'name'              => 'violacion',
                'tab'               => 'Valoración',
                'wrapperAttributes' => [
                    'class' => 'col-md-12 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Activo de Información',
                'type'              => 'select2',
                'name'              => 'activo_id',
                'entity'            => 'Activo',
                'attribute'         => 'name',
                'tab'               => 'Valoración',
                'attributes'        => ['required' => true],
                'wrapperAttributes' => ['class' => 'form-group col-md-6 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Tipo de Incidente Matriz',
                'type'              => 'select2',
                'name'              => 'matriz_id',
                'entity'            => 'Matriz',
                'attribute'         => 'name',
                'tab'               => 'Valoración',
                'attributes'        => ['required' => true],
                'wrapperAttributes' => ['class' => 'form-group col-md-6 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Evidencia Dig.?',
                'type'              => 'toggle',
                'view_namespace'    => 'toggle-field-for-backpack::fields',
                'name'              => 'evidencia',
                'tab'               => 'Valoración',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Subir Evidencia',
                'type'              => 'upload',
                'name'              => 'evidenciaurl',
                'tab'               => 'Valoración',
                'wrapperAttributes' => [
                    'class' => 'col-md-4 shadow-lg p-1 mb-2 bg-light bg-light',
                ],

            ],
            // [
            //     'label'             => 'Grupo Responsable:',
            //     'type'              => 'select2_from_ajax',
            //     'name'              => 'seccion_id',
            //     'entity'            => 'Seccion',
            //     'attribute'         => 'seccion_id',
            //     'model'             =>  'App\Models\Sgimatrizincidente',
            //     'dependencies'      => 'matriz_id',
            //     'include_all_form_fields' => true,
            //     'data_source'          => url('api/SgimatrizSeccion'),
            //     'tab'               => 'Valoración',
            //     //'attributes'        => ['required' => true],
            //     'wrapperAttributes' => ['class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            // ],
            // [
            //     'label'             => 'Asig. Responsable Sección',
            //     'type'              => 'select2fromajax',
            //     'name'              => 'asignacion',
            //     'entity'            => 'Userrespn1',
            //     'attribute'         => 'name',
            //     'dependencies'      => 'matriz_id',
            //     'include_all_form_fields' => true,
            //     'tab'               => 'Valoración',
            //     'attributes'        => ['required' => true],
            //     'wrapperAttributes' => ['class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            // ],
            // [
            //     'label'             => 'Asig. Responsable Sección',
            //     'type'              => 'select2fromajax',
            //     'name'              => 'asignacion',
            //     'entity'            => 'Userrespn2',
            //     'attribute'         => 'name',
            //     'dependencies'      => 'matriz_id',
            //     'include_all_form_fields' => true,
            //     'tab'               => 'Valoración',
            //     'attributes'        => ['required' => true],
            //     'wrapperAttributes' => ['class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            // ],
            [
                'label'             => 'Respuesta?',
                'type'              => 'toggle',
                'view_namespace'    => 'toggle-field-for-backpack::fields',
                'name'              => 'respuesta',
                'tab'               => 'Solución',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-1 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Fecha Incial Incidencia',
                'type'              => 'datetime_picker',
                'name'              => 'inicio_at',
                'tab'               => 'Solución',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Fecha Final Incidencia',
                'type'              => 'datetime_picker',
                'name'              => 'fin_at',
                'tab'               => 'Solución',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Responsable Solución',
                'type'              => 'text',
                'name'              => 'responsablesolucion',
                //'entity'            => 'Users',
                //'attribute'         => 'name',
                'tab'               => 'Solución',
                //'attributes'        => ['required' => true],
                'wrapperAttributes' => ['class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Estado',
                'type'              => 'select2',
                'name'              => 'estado_id',
                'entity'            => 'Estado',
                'attribute'         => 'name',
                'default'           => '1',
                'tab'               => 'Solución',
                //'attributes'        => ['required' => true],
                'wrapperAttributes' => ['class' => 'form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Acciones',
                'type'              => 'tinymce',
                'name'              => 'acciones',
                'tab'               => 'Solución',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Acciones Pendientes:',
                'type'              => 'tinymce',
                'name'              => 'pendientes',
                'tab'               => 'Solución',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Lecciones Aprendidas',
                'type'              => 'tinymce',
                'name'              => 'lecciones',
                'tab'               => 'Solución',
                //'attributes'        => ['required' => true],
                'wrapperAttributes' => ['class' => 'form-group col-md-4 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],

        ]);
        $this->crud->addFields([

            [

                'label'             => 'Procesos Afectados',
                'type'              => 'select_from_prioridad',
                'name'              => 'procesos',
                'options'           => [
                    9 => 'Procesos de Apoyo', 18 => 'Procesos Operativos no críticos/estratégicos', 30 => 'Procesos operativos críticos/sistemas'
                ],
                'allows null'       => false,
                'default'           => 9,
                'tab'               => 'Valoración',
                'wrapperAttributes' => [
                    'class' => 'item',
                    'class' =>
                    'item form-group col-md-4 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [

                'label'             => 'Usuarios Afectados',
                'type'              => 'select_from_prioridad',
                'name'              => 'usuarios',
                'options'           => [
                    12 => '1-50', 24 => '51-100', 40 => '+ 301'
                ],
                'allows null'       => false,
                'default'           => 12,
                'tab'               => 'Valoración',
                'wrapperAttributes' => [
                    'class' => 'item',
                    'class' =>
                    'item form-group col-md-4 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [

                'label'             => 'Recursos Afectados',
                'type'              => 'select_from_prioridad',
                'name'              => 'recursos',
                'options'           => [
                    9 => 'Equipos Locales', 18 => 'Conexión a Internet/redes', 30 => 'Sistemas, correo electrónico'
                ],
                'allows null'       => false,
                'default'           => 9,
                'tab'               => 'Valoración',
                'wrapperAttributes' => [
                    'class' => 'item',
                    'class' =>
                    'item form-group col-md-4 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [

                'label'             => 'Urgencia',
                'type'              => 'select_from_prioridad',
                'name'              => 'urgencia',
                'options'           => [
                    9 => 'Se opera con fallas', 18 => 'se  opera con fallas criticas', 30 => 'No se puede operar'
                ],
                'allows null'       => false,
                'default'           => 9,
                'tab'               => 'Valoración',
                'wrapperAttributes' => [
                    'class' => 'item',
                    'class' =>
                    'item form-group col-md-4 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],

            [
                'label'             => 'Valoración',
                'type'              => 'prioridad',
                'name'              => 'prioridad',
                'tab'               => 'Valoración',
                'wrapperAttributes' => [
                    'class' => 'ContentClass form-group col-md-4 h-200 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'
                ],
            ],
            [
                'label'             => 'Información',
                'type'              => 'custom_html',
                'name'              => 'sugerencia',
                'tab'               => 'Valoración',
                'value'             => '<div><h1>Recuerda Seleccionar la Prioridad 👉</h1></div>',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'
                ],
            ],

            // [
            //     'label'             => 'Prioridad',
            //     'type'              => 'select2_from_array',
            //     'placeholder'       => 'Recuerda Seleccionar la Prioridad de acuerdo a Resultado',
            //     'name'              => 'prioridad',
            //     'options'           => [
            //         'Baja' => 'Baja', 'Media' => 'Media', 'Alta' => 'Alta'
            //     ],
            //     'allows null'       => false,
            //     'tab'               => 'Valoración',
            //     'wrapperAttributes' => [
            //         'class' => 'form-group col-md-4 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'
            //     ],
            // ],
        ]);

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
            return \App\Models\Sgiestadoincidente::all()->keyBy('id')->pluck('name', 'id')->toArray();
        }, function ($value) { // if the filter is active
            $this->crud->addClause('where', 'estado_id', $value);
        });
    }



}
