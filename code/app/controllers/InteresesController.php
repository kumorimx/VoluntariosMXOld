<?php

class InteresesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /intereses
	 *
	 * @return Response
	 */
	public function index()
	{
		$intereses = Interes::all();
                return View::make('viewAdmin/configuracionIntereses', compact('intereses'));
	}

	public function select() {
		$data = Interes::all();
        foreach ($data as $key => $value) {
            $intereses[$value->idInteres] = $value->descripcion;
        }
        return $intereses;
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /intereses/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /intereses
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /intereses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /intereses/{id}/edit
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
	 * PUT /intereses/{id}
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
	 * DELETE /intereses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}