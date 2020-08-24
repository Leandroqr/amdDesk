<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DepartamentoRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;


/**
 * Class DepartamentoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DepartamentoCrudController extends CrudController
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

        $this->crud->setModel('App\Models\Departamento');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/departamento');
        $this->crud->setEntityNameStrings('departamento', 'departamentos');

        if (backpack_user()->can('Ver Departamentos')) {
            $this->crud->hasAccess('list');
        } else {
            $this->crud->denyAccess('list');
        }

        if (backpack_user()->can('Ver detalle Departamentos')) {
            $this->crud->hasAccess('show');
        } else {
            $this->crud->denyAccess('show');
        }

        if (backpack_user()->can('Crear Departamentos')) {
            $this->crud->hasAccess('create');
        } else {
            $this->crud->denyAccess('create');
        }

        if (backpack_user()->can('Editar Departamentos')) {
            $this->crud->hasAccess('update');
        } else {
            $this->crud->denyAccess('update');
        }

        if (backpack_user()->can('Borrar Departamentos')) {
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
        $this->crud->setValidation(DepartamentoRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        $this->crud->setFromDb();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
