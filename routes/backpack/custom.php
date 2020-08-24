<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.
// Route::get('/', function () {
//     redirect('backpack.auth.login');
// });


Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => [
        config('backpack.base.web_middleware', 'web'),
        config('backpack.base.middleware_key', 'admin'),
        //'activity',
    ],
    'namespace'  => 'App\Http\Controllers\Admin',

], function () { // custom admin routes
    Route::crud('seccion', 'SeccionCrudController');
    Route::crud('aplicacion', 'AplicacionCrudController');
    Route::crud('ciudad', 'CiudadCrudController');
    Route::crud('departamento', 'DepartamentoCrudController');
    Route::crud('cliente', 'ClienteCrudController');
    Route::crud('estado', 'EstadoCrudController');
    Route::crud('grupo', 'GrupoCrudController');
    Route::crud('matrizop', 'MatrizopCrudController');
    Route::crud('modeloatencion', 'ModeloatencionCrudController');
    Route::crud('pais', 'PaisCrudController');
    Route::crud('tickethd', 'TickethdCrudController');
    Route::crud('ticketlist', 'TicketListCrudController');
    Route::crud('tipocl', 'TipoclCrudController');


    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/testmiddleware', 'HomeController@testmiddleware');
    Route::get('/my_roles', 'ExamplesController@show_my_roles');
    Route::resource('/post', 'PostsController');

    Route::get('recaudo', 'AdminController@recaudo');

    Route::crud('sgiactivoincidente', 'SgiactivoincidenteCrudController');
    Route::crud('sgiestadoactualincidente', 'SgiestadoactualincidenteCrudController');
    Route::crud('sgiestadoincidente', 'SgiestadoincidenteCrudController');
    Route::crud('sgilugarincidente', 'SgilugarincidenteCrudController');
    Route::crud('sgimatrizincidente', 'SgimatrizincidenteCrudController');
    Route::crud('sgiprioridadincidente', 'SgiprioridadincidenteCrudController');
    Route::crud('sgiticketincidente', 'SgiticketincidenteCrudController');
    Route::crud('sgitipoincidente', 'SgitipoincidenteCrudController');
    Route::get('charts/weekly-users', 'Charts\WeeklyUsersChartController@response')->name('charts.weekly-users.index');
    Route::get('api/sgimatrizseccion', 'App\Http\Controllers\Api\SgimatrizSeccionController@index');
    Route::get('api/sgimatrizseccion/{id}', 'App\Http\Controllers\Api\SgimatrizSeccionController@show');

}); // this should be the absolute last line of this file

