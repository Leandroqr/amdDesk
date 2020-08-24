<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SgimatrizincidenteRequest;
use App\Models\Sgimatrizincidente;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudColumn;
use Illuminate\Http\Resources\CollectsResources;
use Illuminate\Support\Facades\Request;
use Symfony\Component\Finder\Finder;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;


/**
 * Class SgimatrizincidenteCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SgimatrizincidenteCrudController extends CrudController
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
        $this->role_model = $role_model = config('backpack.permissionmanager.models.role');
        $this->permission_model = $permission_model = config('backpack.permissionmanager.models.permission');

        CRUD::setModel('\App\Models\Sgimatrizincidente');
        CRUD::setRoute(config('backpack.base.route_prefix') . '/sgimatrizincidente');
        CRUD::setEntityNameStrings('Matriz de Incidente', 'Matriz de Incidentes');

        if (backpack_user()->can('Ver SgiMatrizIncidentes')) {
            $this->crud->hasAccess('list');
        } else {
            $this->crud->denyAccess('list');
        }

        if (backpack_user()->can('Ver detalle SgiMatrizIncidentes')) {
            $this->crud->hasAccess('show');
        } else {
            $this->crud->denyAccess('show');
        }

        if (backpack_user()->can('Crear SgiMatrizIncidentes')) {
            $this->crud->hasAccess('create');
        } else {
            $this->crud->denyAccess('create');
        }

        if (backpack_user()->can('Editar SgiMatrizIncidentes')) {
            $this->crud->hasAccess('update');
        } else {
            $this->crud->denyAccess('update');
        }

        if (backpack_user()->can('Borrar SgiMatrizIncidentes')) {
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

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */

        $this->addCustomCrudFilters();
        $this->crud->getTitle(); // get the Title for the create action
        $this->crud->getHeading(); // get the Heading for the create action
        $this->crud->getSubheading(); // get the Subheading for the create action
        $this->crud->setTitle('Matriz SGI'); // set the Title for the create action
        $this->crud->setHeading('Matriz SGI'); // set the Heading for the create action
        $this->crud->setSubheading('Lista Matriz SGI'); // set the Subheading for the create action
        $this->crud->set('setFromDb', false);
        $this->crud->addColumns([
            [

                'label' => 'Número',
                'name' => 'id',
                'type' => 'text',
            ],
            [
            'name'  => 'name',
            'label' => 'Tipo de Incidente',
            'type'  => 'text',
            ],
            [
            'name'  => 'descripcion',
            'label' => 'Descripción',
            'type'  => 'markdown',
            ],
            [
            'name'  => 'c',
            'label' => 'C',
            'type'  => 'check',
            ],
            [
            'name' => 'i',
            'label' => 'I',
            'type' => 'check',
            ],
            [
            'name' => 'd',
            'label' => 'D',
            'type' => 'check',
            ],
            [
            'name'  => 'solucion',
            'label' => 'Solución',
            'type'  => 'markdown',
            ],
            [
            'label'     => 'Sección o Departamento', // Table column heading
            'type'      => 'select',
            'name'      => 'seccion_id', // the column that contains the ID of that connected entity;
            'entity'    => 'Seccion', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\Seccion", // foreign key model
            ],
            [   // 1-n relationship
            'label'     => 'Grupo', // Table column heading
            'type'      => 'select',
            'name'      => 'grupo_id', // the column that contains the ID of that connected entity;
            'entity'    => 'Grupo', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\Grupo", // foreign key model
            ],
            [   // 1-n relationship
            'label'     => 'Responsable Nivel 1', // Table column heading
            'type'      => 'select',
            'name'      => 'responsablen1', // the column that contains the ID of that connected entity;
            'entity'    => 'Responsablen1', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\User", // foreign key model
            ],
            [   // 1-n relationship
            'label'     => 'Responsable Nivel 2', // Table column heading
            'type'      => 'select',
            'name'      => 'responsablen2', // the column that contains the ID of that connected entity;
            'entity'    => 'Responsablen2', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "\App\Models\User", // foreign key model
            ],
            [
            'name' => 'evidencia',
            'label' => 'Evidencia',
            'type' => 'check',
            ],
            [   // SimpleMDE
            'name'  => 'solucion',
            'label' => 'Solución',
            'type'  => 'markdown',
            ],
        ]);

        $this->crud->enableExportButtons();


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

        // $this->crud->addFilter([ // select2 filter
        //     'name' => 'estado_id',
        //     'type' => 'select2',
        //     'label' => 'Estado',
        // ], function () {
        //     return \App\Models\Estado::all()->keyBy('id')->pluck('name', 'id')->toArray();
        // }, function ($value) { // if the filter is active
        //     $this->crud->addClause('where', 'estado_id', $value);
        // });

    }


    protected function setupShowOperation()
    {
        $this->crud->set('show.setFromDb', false);
        $this->crud->getTitle(); // get the Title for the create action
        $this->crud->getHeading(); // get the Heading for the create action
        $this->crud->getSubheading(); // get the Subheading for the create action
        $this->crud->setTitle('Matriz SGI'); // set the Title for the create action
        $this->crud->setHeading('Matriz SGI'); // set the Heading for the create action
        $this->crud->setSubheading('Ver Matriz SGI'); // set the Subheading for the create action
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
        $this->crud->setValidation(SgimatrizincidenteRequest::class);
        $this->crud->getTitle(); // get the Title for the create action
        $this->crud->getHeading(); // get the Heading for the create action
        $this->crud->setTitle('Matriz SGI'); // set the Title for the create action
        $this->crud->setHeading('Matriz SGI'); // set the Heading for the create action
        $this->crud->setSubheading('Crear item Matriz SGI'); // set the Subheading for the create action
        $this->crud->setOperationSetting('contentClass', 'form-group col-md-12 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light bold-labels bg-down');
        $this->crud->addFields([
            [
                'label'             => 'Tipo de Incidente',
                'type'              => 'textarea',
                'name'              => 'name',
                'tab'               => 'Identificación',
                'wrapperAttributes' => [

                    'class' => 'col-md-6 shadow-lg p-1 mb-2 bg-light bg-light',
                ],

            ],
            [
                'label'             => 'Descripción',
                'type'              => 'textarea',
                'name'              => 'descripcion',
                'tab'               => 'Identificación',
                'wrapperAttributes' => [

                    'class' => 'col-md-6 shadow-lg p-1 mb-2 bg-light bg-light',
                ],

            ],
            [
                'label'             => 'Categoría',
                'type'              => 'text',
                'name'              => 'categoria',
                'tab'               => 'Identificación',
                'wrapperAttributes' => [

                    'class' => 'col-md-3 shadow-lg p-1 mb-2 bg-light bg-light',
                ],

            ],
            [
                'label'             => 'C',
                'type'              => 'toggle',
                'view_namespace'    => 'toggle-field-for-backpack::fields',
                'name'              => 'c',
                'tab'               => 'Identificación',
                'wrapperAttributes' => [
                    'class' => 'col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'I',
                'type'              => 'toggle',
                'view_namespace'    => 'toggle-field-for-backpack::fields',
                'name'              => 'i',
                'tab'               => 'Identificación',
                'wrapperAttributes' => [
                    'class' => 'col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'D',
                'type'              => 'toggle',
                'view_namespace'    => 'toggle-field-for-backpack::fields',
                'name'              => 'd',
                'tab'               => 'Identificación',
                'wrapperAttributes' => [
                    'class' => 'col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Sección',
                'type'              => 'select2',
                'name'              => 'seccion_id',
                'entity'            => 'Seccion',
                'attribute'         => 'name',
                'tab'               => 'Identificación',
                //'attributes'        => ['required' => true],
                'wrapperAttributes' => ['class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            // [
            //     'label'             => 'Grupo',
            //     'type'              => 'hidden',
            //     'name'              => 'grupo_id',
            //     'entity'            => 'Grupo',
            //     'attribute'         => 'name',
            //     'tab'               => 'Identificación',
            //     'default'           => '1',
            //     //'attributes'        => ['required' => true],
            //     //'wrapperAttributes' => ['class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            // ],
            [
                'label'             => 'Responsable Nivel 1',
                'type'              => 'select2',
                'name'              => 'responsablen1',
                'entity'            => 'Responsable_n1',
                'attribute'         => 'name',
                'tab'               => 'Identificación',
                //'attributes'        => ['required' => true],
                'wrapperAttributes' => ['class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Responsable Nivel 2',
                'type'              => 'select2',
                'name'              => 'responsablen2',
                'entity'            => 'Responsable_n2',
                'attribute'         => 'name',
                'tab'               => 'Identificación',
                //'attributes'        => ['required' => true],
                'wrapperAttributes' => ['class' => 'form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'],
            ],
            [
                'label'             => 'Requiere Evidencia?',
                'type'              => 'toggle',
                'view_namespace'    => 'toggle-field-for-backpack::fields',
                'name'              => 'evidencia',
                'tab'               => 'Identificación',
                'wrapperAttributes' => [
                    'class' => 'col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light',
                ],
            ],
            [
                'label'             => 'Solución',
                'type'              => 'textarea',
                'name'              => 'solucion',
                'tab'               => 'Identificación',
                'wrapperAttributes' => [

                    'class' => 'col-md-9 shadow-lg p-1 mb-2 bg-light bg-light',
                ],

            ],

        ]);
        $this->crud->setOperationSetting('contentClass', 'form-group col-md-12 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light bold-labels bg-down');
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(SgimatrizincidenteRequest::class);
        $this->setupCreateOperation();
        $this->crud->getTitle(); // get the Title for the create action
        $this->crud->getHeading(); // get the Heading for the create action
        $this->crud->getSubheading(); // get the Subheading for the create action
        $this->crud->setTitle('Matriz SGI'); // set the Title for the create action
        $this->crud->setHeading('Matriz SGI'); // set the Heading for the create action
        $this->crud->setSubheading('editar una Matriz SGI'); // set the Subheading for the create action

    }
}
