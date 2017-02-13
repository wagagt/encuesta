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

Route::resource('puestos', 'PuestoController');

Route::resource('requisitosPuestos', 'RequisitosPuestoController');

Route::resource('clasificacions', 'ClasificacionController');

Route::resource('baseLegals', 'BaseLegalController');

Route::resource('servicios', 'ServicioController');

Route::resource('tipoPresencias', 'TipoPresenciaController');

Route::resource('baseLegalCostos', 'BaseLegalCostoController');

Route::resource('tipoPasos', 'TipoPasoController');

Route::resource('pasos', 'PasoController');

Route::resource('procedimientos', 'ProcedimientoController');

Route::resource('lugarPagos', 'LugarPagoController');

Route::resource('metodoPagos', 'MetodoPagoController');

Route::resource('ejecutors', 'EjecutorController');

Route::resource('tipoRequisitos', 'TipoRequisitoController');

Route::resource('formaPresentacions', 'FormaPresentacionController');

Route::resource('requisitos', 'RequisitoController');

Route::resource('tipoResultados', 'TipoResultadoController');

Route::resource('resultados', 'ResultadoController');

Route::resource('fotoResultados', 'FotoResultadoController');

Route::resource('tipoResultados', 'TipoResultadoController');

Route::resource('imagenResultados', 'ImagenResultadoController');