<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\GrupoRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;


/**
 * Class GrupoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class GrupoCrudController extends CrudController
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

        $this->crud->setModel('App\Models\Grupo');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/grupo');
        $this->crud->setEntityNameStrings('grupo', 'grupos');

        if (backpack_user()->can('Ver Grupos')) {
            $this->crud->hasAccess('list');
        } else {
            $this->crud->denyAccess('list');
        }

        if (backpack_user()->can('Ver detalle Grupos')) {
            $this->crud->hasAccess('show');
        } else {
            $this->crud->denyAccess('show');
        }

        if (backpack_user()->can('Crear Grupos')) {
            $this->crud->hasAccess('create');
        } else {
            $this->crud->denyAccess('create');
        }

        if (backpack_user()->can('Editar Grupos')) {
            $this->crud->hasAccess('update');
        } else {
            $this->crud->denyAccess('update');
        }

        if (backpack_user()->can('Borrar Grupos')) {
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
        $this->crud->setValidation(GrupoRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        $this->crud->setFromDb();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
