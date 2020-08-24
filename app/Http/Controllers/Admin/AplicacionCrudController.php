<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AplicacionRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;



/**
 * Class AplicacionCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AplicacionCrudController extends CrudController



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

        $this->crud->setModel('App\Models\Aplicacion');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/aplicacion');
        $this->crud->setEntityNameStrings('aplicacion', 'aplicaciones');

        if (backpack_user()->can('Ver Aplicaciones')) {
            $this->crud->hasAccess('list');
        } else {
            $this->crud->denyAccess('list');
        }

        if (backpack_user()->can('Ver detalle Aplicaciones')) {
            $this->crud->hasAccess('show');
        } else {
            $this->crud->denyAccess('show');
        }

        if (backpack_user()->can('Crear Aplicaciones')) {
            $this->crud->hasAccess('create');
        } else {
            $this->crud->denyAccess('create');
        }

        if (backpack_user()->can('Editar Aplicaciones')) {
            $this->crud->hasAccess('update');
        } else {
            $this->crud->denyAccess('update');
        }

        if (backpack_user()->can('Borrar Aplicaciones')) {
            $this->crud->hasAccess('delete');
        } else {
            $this->crud->denyAccess('delete');
        }

    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        CRUD::enableExportButtons();
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(AplicacionRequest::class);


        // TODO: remove setFromDb() and manually define Fields
        $this->crud->setFromDb();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }


}
