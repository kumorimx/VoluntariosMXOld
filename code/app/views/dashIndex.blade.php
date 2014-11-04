<ul>
    {{ Form::open(array('route' => 'adminIndex', 'method' => 'get')) }}
    <li>Administradores
        {{ Form::select('administrador', $administradores); }}
        {{ Form::submit() }}
        {{ Form::close() }}
    </li>
    {{ Form::open(array('route' => 'depIndex', 'method' => 'get')) }}
    <li>Dependencias
        {{ Form::select('dependencia', $dependencias); }}
        {{ Form::submit() }}
        {{ Form::close() }}
    </li>
    {{ Form::open(array('route' => 'aliadoIndex', 'method' => 'get')) }}
    <li>Aliados
        {{ Form::select('aliado', $aliados); }}
        {{ Form::submit() }}
        {{ Form::close() }}
    </li>
    {{ Form::open(array('route' => 'viewVoluntario', 'method' => 'get')) }}
    <li>Voluntarios
        {{ Form::select('voluntario', $voluntarios); }}
        {{ Form::submit() }}
        {{ Form::close() }}
    </li>
</ul>
