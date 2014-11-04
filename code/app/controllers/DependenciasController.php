<?php

class DependenciasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /dependencias
	 *
	 * @return Response
	 */
	public function index()
	{
		$dependencias = Dependencia::all();
                return View::make('viewAdmin/dependencia',  compact('dependencias'));
	}
        
        public function select() {
            $data = Dependencia::all();
            foreach ($data as $key => $value) {
                $dependencias[$value->idDependencia] = $value->razonSocial;
            }
            return $dependencias;
        }

	/**
	 * Show the form for creating a new resource.
	 * GET /dependencias/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /dependencias
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /dependencias/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		$dependencia = Dependencia::find(Session::get('idDependencia'));
                return View::make('viewDependencia/configuracion', compact('dependencia'));
	}
        
        public function showGeneral()
	{
                $dependencia = Dependencia::find(Session::get('idDependencia'));
		return View::make('viewDependencia/configuracionInformacionGeneral', compact('dependencia'));
	}
        
        public function showContacto() {
                $dependenciaContacto = DependenciaContacto::find(Session::get('id'));
                return View::make('viewDependencia/perfil', compact('dependenciaContacto'));
        }
        
        public function contactoLogin($id) {
                return DependenciaContacto::find($id);
        }
        
        public function perfil()
	{
		$dependencia = Dependencia::find(Session::get('idDependencia'));
                return View::make('viewDependencia/configuracion', compact('dependencia'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /dependencias/{id}/edit
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
	 * PUT /dependencias/{id}
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
	 * DELETE /dependencias/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}