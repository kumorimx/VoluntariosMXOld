<?php

class AliadosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /aliados
	 *
	 * @return Response
	 */
	public function index()
	{
		$aliados = Aliado::all();
                return View::make('viewDependencia/aliados', compact('aliados'));
	}
        
        public function select() {
            $data = Aliado::all();
            foreach ($data as $key => $value) {
                $aliados[$value->idAliado] = $value->razonSocial;
            }
            return $aliados;
        }
	/**
	 * Show the form for creating a new resource.
	 * GET /aliados/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /aliados
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /aliados/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Aliado::find($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /aliados/{id}/edit
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
	 * PUT /aliados/{id}
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
	 * DELETE /aliados/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}