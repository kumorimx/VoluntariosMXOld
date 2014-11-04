<?php

class ViewController extends BaseController {

	//FUNCIONES PARA EL ADMIN DE LA PLATAFORMA
	public function adminIndex()
	{
		
		return View::make('viewAdmin/index');
	}

	public function adminConfig()
	{
		return View::make('viewAdmin/configuracion');
	}

	public function adminConfigCategorias()
	{
		return View::make('viewAdmin/configuracionCategorias');
	}

	public function adminConfigIntereses()
	{
		return View::make('viewAdmin/configuracionIntereses');
	}

	public function adminConfigLogros()
	{
		return View::make('viewAdmin/configuracionLogros');
	}

	public function adminDependencia()
	{
		return View::make('viewAdmin/dependencia');
	}

	public function adminPerfil()
	{
		return View::make('viewAdmin/perfil');
	}

	public function adminFAQ()
	{
		return View::make('viewAdmin/faq');
	}

	//FUNCIONES PARA LA DEPENDENCIA DE LA PLATAFORMA

	public function depIndex()
	{
		$TipoUsuario = "Dependencia";
		return View::make('viewDependencia/index');
	}

	public function depFAQ()
	{
		return View::make('viewDependencia/faq');
	}

	public function depPerfil()
	{
		return View::make('viewDependencia/perfil');
	}

	public function depAliados()
	{
		return View::make('viewDependencia/aliados');
	}

	public function depProyectos()
	{
		return View::make('viewDependencia/proyectos');
	}

	public function depConfigs()
	{
		return View::make('viewDependencia/configuracion');
	}
	
	public function depContactos()
	{
		return View::make('viewDependencia/contactos');
	}

	public function depInformacionGeneral()
	{
		return View::make('viewDependencia/configuracionInformacionGeneral');
	}


	//FUNCIONES PARA EL ALIADO DE LA PLATAFORMA

	public function aliadoIndex()
	{
		$TipoUsuario = "Aliado";
		return View::make('viewAliado/index');
	}

	public function aliadoProyectos()
	{
		return View::make('viewAliado/proyectos');
	}

	public function aliadoEventos()
	{
		return View::make('viewAliado/eventos');
	}

	public function aliadoConfigs()
	{
		return View::make('viewAliado/configuracion');
	}

	public function aliadoContactos()
	{
		return View::make('viewAliado/index');
	}

	public function aliadoPerfil()
	{
		return View::make('viewAliado/perfil');
	}

	public function aliadoFAQ()
	{
		return View::make('viewAliado/faq');
	}

	public function aliadoInformacionGeneral()
	{
		return View::make('viewAliado/configuracionInformacionGeneral');
	}

	//FUNCIONES PARA EL PORTAL/FRONTEND GENERAL DE LA PLATAFORMA
	public function viewVoluntario()
	{
		$TipoUsuario = "Voluntario";
		return View::make('viewVoluntario/index');
	}

	public function viewIndex()
	{
		$eventos = Evento::all();
		$params = Parametro::find(1);
		Session::put('param_logotipo', $params->logotipo);
		Session::put('param_email', $params->email);
		Session::put('param_telefono', $params->telefono1);
		Session::put('param_extension', $params->extension1);
		Session::put('param_direccion', $params->direccion);
		Session::put('param_facebook', $params->facebook);
		Session::put('param_twitter', $params->twitter);
		Session::put('param_instagram', $params->instagram);
		Session::put('param_pinterest', $params->pinterest);
		Session::put('param_youtube', $params->youtube);
		Session::put('param_gplus', $params->gplus);
		return View::make('index', compact('params', 'eventos'));
	}

	public function viewEvento()
	{
		$TipoUsuario = "Voluntario";
		return View::make('evento');
	}

	public function viewPerfilAliado()
	{
		$TipoUsuario = "Voluntario";
		return View::make('perfilAliado');
	}

	public function viewPerfilVoluntario()
	{
		$TipoUsuario = "Voluntario";
		return View::make('perfilVoluntario',compact('TipoUsuario'));
	}

	public function viewLogin()
	{
		$TipoUsuario = "Voluntario";
		return View::make('login');
	}

	public function viewRegistro()
	{
		$TipoUsuario = "Voluntario";
		return View::make('registro');
	}

	public function viewBusquedaEvento()
	{
		return View::make('busquedaEvento');
	}

	public function viewFAQ()
	{
		$TipoUsuario = "Voluntario";
		return View::make('faq');
	}

	public function view404()
	{
		return View::make('404');
	}

	public function viewLogroGanado($id)
	{
		$evento = Evento::find($id);
		return View::make('logroGanado', compact('evento'));
	}

	public function viewPerfilDependencia()
	{
		return View::make('perfilDependencia');
	}

}
