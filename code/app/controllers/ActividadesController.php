<?php

class ActividadesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /actividades
	 *
	 * @return Response
	 */
	public function index()
	{
		return Actividad::all();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /actividades/create
	 *
	 * @return Response
	 */
	public function create()
	{
            
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /actividades
	 *
	 * @return Response
	 */
	public function store()
	{
		$actividad = new Actividad();
                $actividad->idEvento = Input::get('idEvento');
                $actividad->nombre = Input::get('nombre');
                $actividad->descripcion = Input::get('descripcion');
                $actividad->requisitos = Input::get('requisitos');
                $actividad->fechaInicio = Input::get('fechaInicio');
                $actividad->fechaFin = Input::get('fechaFin');
                $actividad->save();
                return $actividad;
	}

	/**
	 * Display the specified resource.
	 * GET /actividades/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Actividad::find($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /actividades/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
                //
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /actividades/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$actividad = Actividad::find($id);
                $actividad->idEvento = Input::get('idEvento');
                $actividad->nombre = Input::get('nombre');
                $actividad->descripcion = Input::get('descripcion');
                $actividad->requisitos = Input::get('requisitos');
                $actividad->fechaInicio = Input::get('fechaInicio');
                $actividad->fechaFin = Input::get('fechaFin');
                $actividad->save();
                return $actividad;
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /actividades/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}