<?php

class EventosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /eventos
	 *
	 * @return Response
	 */
	public function index()
	{
		return Evento::all();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /eventos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /eventos
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /eventos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$evento = Evento::find($id);
                $categorias = $this->getCategorias($evento);
                return View::make('evento', compact('evento', 'categorias'));
	}
        
        public function showAliadoEventos() {
                $eventos = Evento::all();
                return View::make('viewAliado/eventos', compact('eventos'));
        }

	/**
	 * Show the form for editing the specified resource.
	 * GET /eventos/{id}/edit
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
	 * PUT /eventos/{id}
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
	 * DELETE /eventos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
        
    public function getCategorias($evento) {
        return DB::table('Actividades')->join('Categorias', 'Categorias.idCategoria', '=', 'Actividades.idCategoria')->groupBy('Actividades.idCategoria')->where('Actividades.idEvento', $evento->idEvento)->select('Categorias.idCategoria', 'Categorias.nombre')->get();
    }

    public function inscribirVoluntario($id) {
		$evento = Evento::find($id);
		$evento->voluntarios()->attach(Session::get('id'), array('status' => 0));
		return Redirect::route('viewPerfilVoluntario')->withMessage('Felicidades te has inscrito al evento ' . $evento->nombre);
	}

	public function buscarEvento() {
		if (isset(Session::get('id'))) {
		$voluntario = Voluntario::find(Session::get('id'));
		$eventos = Evento::where('ciudad', '=', $voluntario->ciudad)->get();
		} else {
			$eventos = Evento::orderBy('fechaInicio')->get();
		}
		return View::make('busquedaEvento', compact('eventos'));
	}

}