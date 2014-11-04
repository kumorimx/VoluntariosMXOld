<?php

class VoluntariosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /voluntarios
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}
        
    public function select() {
        $data = Voluntario::all();
        foreach ($data as $key => $value) {
            $voluntarios[$value->idVoluntario] = $value->nombre . ' ' . $value->apellidoPaterno . ' ' . $value->apellidoMaterno;
        }
        return $voluntarios;
    }
	/**
	 * Show the form for creating a new resource.
	 * GET /voluntarios/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /voluntarios
	 *
	 * @return Response
	 */
	public function store()
	{
		$voluntario = new Voluntario();
		$voluntario->nombre = Input::get('vol_nombre');
		$voluntario->apellidoPaterno = Input::get('vol_apellidoPaterno');
		$voluntario->apellidoMaterno = Input::get('vol_apellidoMaterno');
		$voluntario->email = Input::get('vol_email');
		$voluntario->passFrase = Input::get('vol_password');
		if ($voluntario->save()) {
			Session::flush();
		    Session::put('tipoUsuario', 'Voluntario');
		    $voluntario = Voluntario::find($voluntario->idVoluntario);
		    Session::put('id', $voluntario->idVoluntario);
		    Session::put('avatar', $voluntario->imagen);
		    Session::put('nombreCompleto', $voluntario->nombre . ' ' . $voluntario->apellidoPaterno . ' ' . $voluntario->apellidoMaterno);
		    return Redirect::route('viewPerfilVoluntario')->withMessage('Profile saved!');
		}else {
			echo 'ouch';
		}
	}

        /**
	 * Display the specified resource.
	 * GET /voluntarios/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{   
		if (Session::get('id') == Request::segment(2)) {
			return Redirect::route('viewPerfilVoluntario');
		}else {
			$voluntario = Voluntario::find($id);
        	return View::make('perfilVoluntario',compact('voluntario'));
    	}
	}
        
	/**
	 * Despliega el Voluntario conectado actualmente.
	 * GET /voluntarios
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function showPerfil()
	{   
		$voluntario =  Voluntario::find(Session::get('id'));
		$intereses = InteresesController::select();
        return View::make('perfilVoluntario', compact('voluntario', 'intereses'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /voluntarios/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
		$voluntario = Voluntario::find(Session::get('id'));
		$voluntario->nombre = Input::get('vol_nombre');
		$voluntario->apellidoPaterno = Input::get('vol_apellidoPaterno');
		$voluntario->apellidoMaterno = Input::get('vol_apellidoMaterno');
		$voluntario->email = Input::get('vol_email');
		$voluntario->passFrase = Input::get('vol_password');
		$voluntario->sexo = Input::get('vol_sexo');
		$voluntario->fechaNacimiento = date('Y/m/d', strtotime(Input::get('vol_fechaNacimiento')));
		$voluntario->ciudad = Input::get('vol_ciudad');
		$voluntario->estado = Input::get('vol_estado');
		$voluntario->biografia = Input::get('vol_bio');
		if ($voluntario->save()) {

		    return Redirect::route('viewPerfilVoluntario')->withMessage('Profile saved!');
		}else {
			echo 'ouch';
		}	}

	/**
	 * Update the specified resource in storage.
	 * PUT /voluntarios/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /voluntarios/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}