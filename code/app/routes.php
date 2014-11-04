<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get('/prueba/{id}', function($elId) {
    $var = Proyecto::find($elId);
    echo '<pre>';
    print_r($var->dependencia);
});

Route::get('/dashIndex', function() {
    $administradores = AdministradoresController::select();
    $dependencias = DependenciasController::select();
    $aliados = AliadosController::select();
    $voluntarios = VoluntariosController::select();
    return View::make('dashIndex', compact('administradores', 'dependencias', 'aliados', 'voluntarios'));
});

Route::get('/voluntarios/login', function() {
    VoluntariosController::login();
});

Route::get('/logout', array('as' => 'logout', 'uses' => function() {
    Session::flush();
    Session::forget('id');
    Session::forget('tipoUsuario');
    Session::forget('nombreCompleto');
    return Redirect::route('viewIndex');
}));

Route::get('/aliados/login', function() {
    AliadosController::login();
});

Route::get('/dependencias/login', function() {
    DependenciasController::login();
});

Route::get('/administradores/login', function() {
    AdministradoresController::login();
});

Route::get('/sesionVoluntario/{id}', function($elId) {
    //Session::put('tipoUsuario', 'Administrador');
    //Session::put('tipoUsuario', 'Dependencia');
    //Session::put('tipoUsuario', 'Aliado');
    // SESION DE VOLUNTARIO
    Session::put('tipoUsuario', 'Voluntario');
    $voluntario = Voluntario::find($elId);
    Session::put('id', $elId);
    Session::put('avatar', $voluntario->imagen);
    Session::put('nombreCompleto', $voluntario->nombre . ' ' . $voluntario->apellidoPaterno . ' ' . $voluntario->apellidoMaterno);
    
    return Redirect::route('viewPerfilVoluntario');
});

Route::get('/sesionAdmin/{id}', function($elId) {
    // SESION ADMINISTRADOR
    Session::put('tipoUsuario', 'Administrador');
    $admin = Administrador::find($elId);
    Session::put('id', $elId);
    Session::put('usuario', $admin->usuario);
    Session::put('nombreCompleto', $admin->nombre . ' ' . $admin->apellidoPaterno . ' ' . $admin->apellidoMaterno);
    Session::put('idAdministrador', $admin->idAdministrador);
    echo '<pre>';
    print_r(Session::all());
});

Route::get('/sesionDependencia/{id}', function($elId) {
    // SESION DEPENDENCIA
    Session::put('tipoUsuario', 'Dependencia');
    $contacto = DependenciasController::contactoLogin($elId);
    Session::put('id', $elId);
    Session::put('nombreCompleto', $contacto->nombre . ' ' . $contacto->apellidoPaterno . ' ' . $contacto->apellidoMaterno);
    Session::put('idDependencia', $contacto->idDependencia);
    Session::put('depContacto', $contacto);
    echo '<pre>';
    print_r(Session::all());
});

Route::get('/sesionAliado/{id}', function($elId) {
    // SESION DE ALIADO
    Session::put('tipoUsuario', 'Aliado');
    $aliado = AliadosController::show($elId);
    Session::put('id', $elId);
    Session::put('avatar', $aliado->logotipo);
    Session::put('nombreCompleto', $aliado->razonSocial);
    echo '<pre>';
    print_r(Session::all());
});

Route::get('/sesion/vista', function() {
    return View::make('Administradores');
});

Route::get('/actividades/', function() {
    $actividades = ActividadesController::index();
    echo '<pre>';
    print_r($actividades);
});

Route::get('/actividades/guardar', function() {
    $actividad = new Actividad();
    $actividad->idEvento = '3';
    $actividad->idCategoria = '4';
    $actividad->nombre = 'Boteo para hambreton';
    $actividad->descripcion = 'Ir casa por casa para botear y recolectar dinero para el hambreton';
    $actividad->requisitos = 'Tenis, ropa comoda, bloqueador solar y gorra';
    $actividad->fechaInicio = '2014-02-02 08:00:00';
    $actividad->fechaFin = '2014-02-02 12:00:00';
    //$actividad->save();
    echo '<pre>';
    print_r('lo que quieras');
    print_r(ActividadesController::show($actividad->idActividad));

    print_r($actividad->categoria->administrador);
});

Route::get('/actividades/{id}', function($elId) {
    $actividades = ActividadesController::show($elId);
    echo '<pre>';
    print_r($actividades);
});

// ADMINISTRADORES
Route::get('/administradores/registrar', ['as' => 'administradorRegistrar', 'uses' => 'Administradores@create']);
Route::post('/administradores/guardar', ['as' => 'administradorGuardar', 'uses' => 'Administradores@store']);
Route::get('/administradores/', ['as' => 'administradores', 'uses' => 'Administradores@index']);

//[INICIO]------> RUTAS PARA VISTAS (NO TOCAR)
//Rutas de Admin
Route::get('/admin/', ['as' => 'adminIndex', 'uses' => 'ViewController@adminIndex']);
Route::get('/admin/configuracion', ['as' => 'adminConfig', 'uses' => 'ParametrosController@show']);
Route::get('/admin/configuracion/categorias', ['as' => 'adminConfigCategorias', 'uses' => 'CategoriasController@index']);
Route::get('/admin/configuracion/intereses', ['as' => 'adminConfigIntereses', 'uses' => 'InteresesController@index']);
Route::get('/admin/configuracion/logros', ['as' => 'adminConfigLogros', 'uses' => 'LogrosController@index']);
Route::get('/admin/dependencia', ['as' => 'adminDependencia', 'uses' => 'DependenciasController@index']);
Route::get('/admin/faq', ['as' => 'adminFAQ', 'uses' => 'ViewController@adminFAQ']);
Route::get('/admin/perfil', ['as' => 'adminPerfil', 'uses' => 'AdministradoresController@showPerfil']);

//Rutas de Dependencia
Route::get('/dependencia/', ['as' => 'depIndex', 'uses' => 'ViewController@depIndex']);
Route::get('/dependencia/aliados', ['as' => 'depAliados', 'uses' => 'AliadosController@index']);
Route::get('/dependencia/proyectos', ['as' => 'depProyectos', 'uses' => 'ProyectosController@index']);
Route::get('/dependencia/configuracion', ['as' => 'depConfigs', 'uses' => 'DependenciasController@show']);
Route::get('/dependencia/configuracion/general', ['as' => 'depInformacionGeneral', 'uses' => 'DependenciasController@showGeneral']);
Route::get('/dependencia/configuracion/contactos', ['as' => 'depContactos', 'uses' => 'ViewController@depContactos']);
Route::get('/dependencia/perfil', ['as' => 'depPerfil', 'uses' => 'DependenciasController@showContacto']);
Route::get('/dependencia/faq', ['as' => 'depFAQ', 'uses' => 'ViewController@depFAQ']);

//Rutas de Aliado
Route::get('/aliado/', ['as' => 'aliadoIndex', 'uses' => 'ViewController@aliadoIndex']);
Route::get('/aliado/proyectos', ['as' => 'aliadoProyectos', 'uses' => 'ViewController@aliadoProyectos']);
Route::get('/aliado/proyectos/eventos', ['as' => 'aliadoEventos', 'uses' => 'EventosController@showAliadoEventos']);
Route::get('/aliado/configuracion', ['as' => 'aliadoConfigs', 'uses' => 'ViewController@aliadoConfigs']);
Route::get('/aliado/configuracion/general', ['as' => 'aliadoInformacionGeneral', 'uses' => 'ViewController@aliadoInformacionGeneral']);
Route::get('/aliado/configuracion/contactos', ['as' => 'aliadoContactos', 'uses' => 'ViewController@aliadoContactos']);
Route::get('/aliado/perfil', ['as' => 'aliadoPerfil', 'uses' => 'ViewController@aliadoPerfil']);
Route::get('/aliado/faq', ['as' => 'aliadoFAQ', 'uses' => 'ViewController@aliadoFAQ']);


Route::get('/viewVoluntario', ['as' => 'viewVoluntario', 'uses' => 'ViewController@viewVoluntario']);

Route::get('/viewVoluntario', ['as' => 'viewVoluntario', 'uses' => 'ViewController@viewVoluntario']);

Route::post('/voluntario/registro', ['as' => 'registrarVoluntario', 'uses' => 'VoluntariosController@store']);
Route::post('/voluntario/editar', ['as' => 'editarVoluntario', 'uses' => 'VoluntariosController@edit']);


//Rutas de Publico en General
Route::get('/', ['as' => 'viewIndex', 'uses' => 'ViewController@viewIndex']);
Route::get('/evento/{id}', ['as' => 'viewEvento', 'uses' => 'EventosController@show']);
Route::get('/evento/inscripcion/{id}', ['as' => 'inscribirVoluntario', 'uses' => 'EventosController@inscribirVoluntario']);
Route::get('/aliado/aliado', ['as' => 'viewPerfilAliado', 'uses' => 'ViewController@viewPerfilAliado']);
Route::get('/dependencia/dependencia', ['as' => 'viewPerfilDependencia', 'uses' => 'ViewController@viewPerfilDependencia']);
Route::get('/voluntario/{id}', ['as' => 'viewVoluntario', 'uses' => 'VoluntariosController@show']);
Route::get('/voluntario', ['as' => 'viewPerfilVoluntario', 'uses' => 'VoluntariosController@showPerfil']);
Route::get('/login', ['as' => 'viewLogin', 'uses' => 'ViewController@viewLogin']);
Route::get('/registro', ['as' => 'viewRegistro', 'uses' => 'ViewController@viewRegistro']);
Route::get('/busqueda', ['as' => 'viewBusquedaEvento', 'uses' => 'EventosController@buscarEvento']);
Route::get('/faq', ['as' => 'viewFAQ', 'uses' => 'ViewController@viewFAQ']);
Route::get('/logro-ganado/{id}', ['as' => 'viewLogroGanado', 'uses' => 'ViewController@viewLogroGanado']);

Route::get('/404', ['as' => 'view404', 'uses' => 'ViewController@view404']);


//[FIN]------> RUTAS PARA VISTAS (NO TOCAR)
