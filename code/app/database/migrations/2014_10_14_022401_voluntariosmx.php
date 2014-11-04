<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Voluntariosmx extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        Schema::create('Parametros', function($params) {
            $params->increments('idParametro');
            $params->string('logotipo');
            $params->string('email');
            $params->string('telefono1');
            $params->string('telefono2');
            $params->string('telefono3');
            $params->string('extension1');
            $params->string('extension2');
            $params->string('extension3');
            $params->string('direccion');
            $params->string('facebook');
            $params->string('twitter');
            $params->string('instagram');
            $params->string('pinterest');
            $params->string('youtube');
            $params->string('gplus');
            $params->timestamps();
            $params->softDeletes();
        });
        
        Schema::create('Administradores', function($administradores) {
            $administradores->increments('idAdministrador');
            $administradores->string('usuario', 45);
            $administradores->string('password');
            $administradores->string('nombre');
            $administradores->string('apellidoPaterno');
            $administradores->string('apellidoMaterno');
            $administradores->string('telefono', 45);
            $administradores->string('extension', 45);
            $administradores->string('email');
            $administradores->timestamps();
            $administradores->softDeletes();
        });
        
        Schema::create('Dependencias', function($dependencias) {
            $dependencias->increments('idDependencia');
            $dependencias->string('RFC', 13);
            $dependencias->string('razonSocial');
            $dependencias->string('logotipo');
            $dependencias->text('objetivo');
            $dependencias->string('telefono');
            $dependencias->string('extension');
            $dependencias->string('email');
            $dependencias->string('direccion');
            $dependencias->string('facebook');
            $dependencias->string('twitter');
            $dependencias->string('instagram');
            $dependencias->string('pinterest');
            $dependencias->string('youtube');
            $dependencias->string('gplus');
            $dependencias->timestamps();
            $dependencias->softDeletes();
        });
        
        Schema::create('Proyectos', function($proyectos) {
            $proyectos->increments('idProyecto');
            $proyectos->integer('idDependencia')->unsigned();
            $proyectos->foreign('idDependencia')->references('idDependencia')->on('Dependencias');
            $proyectos->string('nombre');
            $proyectos->text('objetivoGeneral');
            $proyectos->text('objetivosEspecificos');
            $proyectos->text('semblanza');
            $proyectos->text('justificacionPDNActual');
            $proyectos->date('fechaInicio');
            $proyectos->date('fechaFin');
            $proyectos->timestamps();
            $proyectos->softDeletes();
        });
        
        Schema::create('Aliados', function($aliados) {
            $aliados->increments('idAliado');
            $aliados->string('RFC', 13);
            $aliados->string('razonSocial');
            $aliados->string('logotipo');
            $aliados->text('objetivo');
            $aliados->string('facebook');
            $aliados->string('twitter');
            $aliados->string('instagram');
            $aliados->string('pinterest');
            $aliados->string('youtube');
            $aliados->string('gplus');
            $aliados->boolean('status');
            $aliados->timestamps();
            $aliados->softDeletes();
        });
        
        Schema::create('Eventos', function($eventos) {
            $eventos->increments('idEvento');
            $eventos->integer('idProyecto')->unsigned();
            $eventos->foreign('idProyecto')->references('idProyecto')->on('Proyectos');
            $eventos->integer('idAliado')->unsigned();
            $eventos->foreign('idAliado')->references('idAliado')->on('Aliados');
            $eventos->string('nombrePublico');
            $eventos->string('nombre');
            $eventos->text('descripcion');
            $eventos->integer('cupo');
            $eventos->string('mapa');
            $eventos->datetime('fechaInicio');
            $eventos->datetime('fechaFin');
            $eventos->integer('diasConfirmacion');
            $eventos->string('colonia');
            $eventos->string('ciudad');
            $eventos->string('estado');
            $eventos->string('codigoPostal', 5);
            $eventos->tinyInteger('status');
            $eventos->timestamps();
            $eventos->softDeletes();
        });
        
         Schema::create('Categorias', function($categorias) {
            $categorias->increments('idCategoria');
            $categorias->integer('idAdministrador')->unsigned();
            $categorias->foreign('idAdministrador')->references('idAdministrador')->on('Administradores');
            $categorias->string('nombre');
            $categorias->string('imagen');
            $categorias->timestamps();
            $categorias->softDeletes();
        });
        
        Schema::create('Actividades', function($actividades) {
            $actividades->increments('idActividad');
            $actividades->integer('idEvento')->unsigned();
            $actividades->foreign('idEvento')->references('idEvento')->on('Eventos');
            $actividades->integer('idCategoria')->unsigned();
            $actividades->foreign('idCategoria')->references('idCategoria')->on('Categorias');
            $actividades->string('nombre');
            $actividades->text('descripcion');
            $actividades->text('requisitos');
            $actividades->datetime('fechaInicio');
            $actividades->datetime('fechaFin');
            $actividades->timestamps();
            $actividades->softDeletes();
        });
        
        Schema::create('Voluntarios', function($voluntarios) {
            $voluntarios->increments('idVoluntario');
            $voluntarios->string('nombre');
            $voluntarios->string('apellidoPaterno');
            $voluntarios->string('apellidoMaterno');
            $voluntarios->string('passFrase');
            $voluntarios->string('email');
            $voluntarios->string('imagen');
            $voluntarios->string('sexo', 45);
            $voluntarios->date('fechaNacimiento');
            $voluntarios->string('ciudad');
            $voluntarios->string('estado');
            $voluntarios->text('biografia');
            $voluntarios->timestamps();
            $voluntarios->softDeletes();
        });

        Schema::create('Logros', function($logros) {
            $logros->increments('idLogro');
            $logros->string('imagen');
            $logros->string('nombre');
            $logros->integer('recordRequerido');
            $logros->string('descripcion');
            $logros->integer('maxPuntos');
            $logros->integer('minPuntos');
            $logros->tinyInteger('tipoLogro');
            $logros->timestamps();
            $logros->softDeletes();
        });
        
        Schema::create('Dependencias_Contactos', function($dependenciasContactos) {
            $dependenciasContactos->increments('idContacto');
            $dependenciasContactos->integer('idDependencia')->unsigned();
            $dependenciasContactos->foreign('idDependencia')->references('idDependencia')->on('Dependencias');
            $dependenciasContactos->string('nombre');
            $dependenciasContactos->string('apellidoPaterno');
            $dependenciasContactos->string('apellidoMaterno');
            $dependenciasContactos->string('puesto');
            $dependenciasContactos->string('telefono', 45);
            $dependenciasContactos->string('extension', 45);
            $dependenciasContactos->string('email');
            $dependenciasContactos->timestamps();
            $dependenciasContactos->softDeletes();
        });

        Schema::create('Aliados_Contactos', function($aliadosContactos) {
            $aliadosContactos->increments('idContacto');
            $aliadosContactos->integer('idAliado')->unsigned();
            $aliadosContactos->foreign('idAliado')->references('idAliado')->on('Aliados');
            $aliadosContactos->string('nombre');
            $aliadosContactos->string('apellidoPaterno');
            $aliadosContactos->string('apellidoMaterno');
            $aliadosContactos->string('puesto');
            $aliadosContactos->string('telefono', 45);
            $aliadosContactos->string('extension', 45);
            $aliadosContactos->string('email');
            $aliadosContactos->timestamps();
            $aliadosContactos->softDeletes();
        });

        Schema::create('Eventos_FAQ', function($eventosFaq) {
            $eventosFaq->increments('idEvento_FAQ');
            $eventosFaq->integer('idEvento')->unsigned();
            $eventosFaq->foreign('idEvento')->references('idEvento')->on('Eventos');
            $eventosFaq->mediumText('pregunta');
            $eventosFaq->mediumText('respuesta');
            $eventosFaq->timestamps();
            $eventosFaq->softDeletes();
        });

        Schema::create('Intereses', function($intereses) {
            $intereses->increments('idInteres');
            $intereses->integer('idAdministrador')->unsigned();
            $intereses->foreign('idAdministrador')->references('idAdministrador')->on('Administradores');
            $intereses->string('descripcion');
            $intereses->timestamps();
            $intereses->softDeletes();
        });

        Schema::create('Favoritos', function($favoritos) {
            $favoritos->increments('idFavorito');
            $favoritos->integer('idVoluntario')->unsigned();
            $favoritos->foreign('idVoluntario')->references('idVoluntario')->on('Voluntarios');
            $favoritos->integer('idEvento')->unsigned();
            $favoritos->foreign('idEvento')->references('idEvento')->on('Eventos');
            $favoritos->timestamps();
            $favoritos->softDeletes();
        });

        Schema::create('Administradores_has_Logros', function($administradoresLogros) {
            $administradoresLogros->integer('idAdministrador')->unsigned();
            $administradoresLogros->foreign('idAdministrador')->references('idAdministrador')->on('Administradores');
            $administradoresLogros->integer('idLogro')->unsigned();
            $administradoresLogros->foreign('idLogro')->references('idLogro')->on('Logros');
            $administradoresLogros->timestamps();
            $administradoresLogros->softDeletes();
        });
        
        Schema::create('Dependencias_has_Logros', function($dependenciasLogros) {
            $dependenciasLogros->integer('idDependencia')->unsigned();
            $dependenciasLogros->foreign('idDependencia')->references('idDependencia')->on('Dependencias');
            $dependenciasLogros->integer('idLogro')->unsigned();
            $dependenciasLogros->foreign('idLogro')->references('idLogro')->on('Logros');
            $dependenciasLogros->timestamps();
            $dependenciasLogros->softDeletes();
        });

        Schema::create('Eventos_has_Logros', function($eventosLogros) {
            $eventosLogros->integer('idEvento')->unsigned();
            $eventosLogros->foreign('idEvento')->references('idEvento')->on('Eventos');
            $eventosLogros->integer('idLogro')->unsigned();
            $eventosLogros->foreign('idLogro')->references('idLogro')->on('Logros');
            $eventosLogros->integer('puntaje');
            $eventosLogros->integer('aumentarRecord');
            $eventosLogros->timestamps();
            $eventosLogros->softDeletes();
        });

        Schema::create('Voluntarios_has_Logros', function($voluntariosLogros) {
            $voluntariosLogros->integer('idVoluntario')->unsigned();
            $voluntariosLogros->foreign('idVoluntario')->references('idVoluntario')->on('Voluntarios');
            $voluntariosLogros->integer('idLogro')->unsigned();
            $voluntariosLogros->foreign('idLogro')->references('idLogro')->on('Logros');
            $voluntariosLogros->integer('puntaje');
            $voluntariosLogros->timestamps();
            $voluntariosLogros->softDeletes();
        });

        Schema::create('Voluntarios_has_Intereses', function($voluntariosIntereses) {
            $voluntariosIntereses->integer('idVoluntario')->unsigned();
            $voluntariosIntereses->foreign('idVoluntario')->references('idVoluntario')->on('Voluntarios');
            $voluntariosIntereses->integer('idInteres')->unsigned();
            $voluntariosIntereses->foreign('idInteres')->references('idInteres')->on('Intereses');
            $voluntariosIntereses->timestamps();
            $voluntariosIntereses->softDeletes();
        });

        Schema::create('Eventos_has_Intereses', function($eventosIntereses) {
            $eventosIntereses->integer('idEvento')->unsigned();
            $eventosIntereses->foreign('idEvento')->references('idEvento')->on('Eventos');
            $eventosIntereses->integer('idInteres')->unsigned();
            $eventosIntereses->foreign('idInteres')->references('idInteres')->on('Intereses');
            $eventosIntereses->timestamps();
            $eventosIntereses->softDeletes();
        });
        
        Schema::create('Dependencias_has_Aliados', function ($dependenciasAliados) {        
            $dependenciasAliados->integer('idDependencia')->unsigned();
            $dependenciasAliados->foreign('idDependencia')->references('idDependencia')->on('Dependencias');
            $dependenciasAliados->integer('idAliado')->unsigned();
            $dependenciasAliados->foreign('idAliado')->references('idAliado')->on('Aliados');
            $dependenciasAliados->timestamps();
            $dependenciasAliados->softDeletes();
        });

        Schema::create('Eventos_has_Voluntarios', function($eventosVoluntarios) {
            $eventosVoluntarios->integer('idEvento')->unsigned();
            $eventosVoluntarios->foreign('idEvento')->references('idEvento')->on('Eventos');
            $eventosVoluntarios->integer('idVoluntario')->unsigned();
            $eventosVoluntarios->foreign('idVoluntario')->references('idVoluntario')->on('Voluntarios');
            $eventosVoluntarios->integer('calificacionVoluntario');
            $eventosVoluntarios->integer('calificacionAliado');
            $eventosVoluntarios->boolean('solicitudConstancia');
            $eventosVoluntarios->tinyInteger('status');
            $eventosVoluntarios->timestamps();
            $eventosVoluntarios->softDeletes();
        });
        
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * 
     * Administradores
     * Administradores_has_Logros
     * Logros
     * Voluntarios_has_Logros
     * Voluntarios
     * Eventos_has_Voluntarios
     * Eventos
     * Eventos_FAQ
     * Proyectos
     * Actividades
     * Categorias
     * Voluntarios_has_Intereses
     * Intereses
     * Eventos_has_Intereses
     * Favoritos
     * Dependencias
     * Dependencias_Contactos
     * Eventos_has_Logros
     * Aliados
     * Aliados_Contactos
     */
    public function down() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::drop('Administradores');
        Schema::drop('Administradores_has_Logros');
        Schema::drop('Logros');
        Schema::drop('Voluntarios_has_Logros');
        Schema::drop('Voluntarios');
        Schema::drop('Eventos_has_Voluntarios');
        Schema::drop('Eventos');
        Schema::drop('Eventos_FAQ');
        Schema::drop('Proyectos');
        Schema::drop('Actividades');
        Schema::drop('Categorias');
        Schema::drop('Voluntarios_has_Intereses');
        Schema::drop('Intereses');
        Schema::drop('Eventos_has_Intereses');
        Schema::drop('Favoritos');
        Schema::drop('Dependencias');
        Schema::drop('Dependencias_Contactos');
        Schema::drop('Eventos_has_Logros');
        Schema::drop('Aliados');
        Schema::drop('Aliados_Contactos');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

}
