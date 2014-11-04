<?php

class ParametrosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /parametros
	 *
	 * @return Response
	 */
	public function index()
	{
		return Parametro::all();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /parametros/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /parametros
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /parametros/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		$params = Parametro::find(1);
                return View::make('viewAdmin/configuracion', compact('params'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /parametros/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /parametros/{id}
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
	 * DELETE /parametros/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}