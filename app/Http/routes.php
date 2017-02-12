<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'v1'], function () {
        require config('infyom.laravel_generator.path.api_routes');
    });
});


Route::resource('institucions', 'InstitucionController');

Route::resource('documentosInstitucions', 'DocumentosInstitucionController');

Route::resource('contactosInstitucions', 'ContactosInstitucionController');

Route::resource('horariosInstitucions', 'HorariosInstitucionController');

Route::resource('unidads', 'UnidadController');

Route::resource('documentosUnidads', 'DocumentosUnidadController');

Route::resource('horariosUnidads', 'HorariosUnidadController');

Route::resource('areas', 'AreaController');

Route::resource('areaUnidads', 'AreaUnidadController');

Route::resource('areaSpecs', 'Area_SpecController');