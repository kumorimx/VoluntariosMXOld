<?php

class AdministradoresController extends \BaseController {

    /**
     * Display a listing of the resource.
     * GET /administradores
     *
     * @return Response
     */
    public function index() {
        return Administrador::all();
    }

    public function select() {
        $data = Administrador::all();
        foreach ($data as $key => $value) {
            $administradores[$value->idAdministrador] = $value->nombre . ' ' . $value->apellidoPaterno . ' ' . $value->apellidoMaterno;
        }
        return $administradores;
    }
    
    /**
     * Show the form for creating a new resource.
     * GET /administradores/create
     *
     * @return Response
     */
    public function create() {
        return View::make('perfil');
    }

    /**
     * Store a newly created resource in storage.
     * POST /administradores
     *
     * @return Response
     */
    public function store() {

        $administrador = new Administrador();
        $administrador->usuario = Input::get('usuario');
        $administrador->password = Hash::make(Input::get('passfrase'));
        $administrador->save();
    }

    /**
     * Display the specified resource.
     * GET /administradores/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show() {
        $administrador = Administrador::find(Session::get('id'));
        return View::make('viewAdmin/configuracion', compact('administrador'));

    }
    
    public function showPerfil() {
        $administrador = Administrador::find(Session::get('id'));
        return View::make('viewAdmin/perfil', compact('administrador'));

    }

    /**
     * Show the form for editing the specified resource.
     * GET /administradores/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /administradores/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /administradores/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

    public function getLogros() {
        $administradores = new Administrador();
        $administrador = $administradores->find(1);
        return $administrador->logros;
    }
}
