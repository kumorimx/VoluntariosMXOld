@extends('layout')

@section('content')
<!-- BEGIN SLIDER -->
<div class="page-perfil">
    <div class="">
        <div class="fullwidthabnner" style="background: url('http://lorempixel.com/1400/417/nature') no-repeat top center;">
            <div class="main">
                <div class="container">
                    <div class="row" style="">
                        <div class="col-md-12">
                            <div class="header-profile">
                                <div class="user-data">
                                    <div class="avatar ">
                                        <a href="javascript:void(0)" class="js-get-user-avatars">
                                            <div class="avatar-image">
                                                <img width="300" height="300" src="http://lorempixel.com/300/300/people">
                                            </div>
                                        </a>
                                    </div>

                                    <h1 class="name">{{ $voluntario->nombre . ' ' . $voluntario->apellidoPaterno . ' ' . $voluntario->apellidoMaterno }} </h1>
                                    <div class="controls">
                                        <a>
                                            <i class="fa fa-user"></i>
                                            @define $cantidadLogros = $voluntario->logros->count()
                                            @if ($cantidadLogros < 5)
                                            Voluntario Novato
                                            @elseif ($cantidadLogros >= 5 && $cantidadLogros < 10)
                                            Voluntario Junior
                                            @elseif($cantidadLogros >= 10 && $cantidadLogros < 15)
                                            Voluntario Senior
                                            @elseif($cantidadLogros > 20)
                                            Voluntario Master
                                            @endif
                                        </a>
                                    </div>
                                    <div class="stats">
                                        <ul class="list-unstyled">
                                            <li>
                                                Logros
                                                <span>{{ $voluntario->logros->count() }}</span>
                                            </li>
                                            <li>
                                                Eventos
                                                <span>{{ $voluntario->eventos->count() }}</span>
                                            </li>
                                            @define $puntajeTotal = 0
                                            @foreach ($voluntario->logros as $logro)
                                            @define $puntajeTotal += $logro->pivot->puntaje
                                            @endforeach
                                            <li>
                                                Puntos
                                                <span>
                                                    {{ $puntajeTotal }}                                                       
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SLIDER -->

<div class="main page-voluntario">
    <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->

            <div class="col-md-12 col-sm-12 tab-style-1">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab-1" data-toggle="tab">Perfil</a></li>
                    <li><a href="#tab-2" data-toggle="tab">Logros</a></li>
                    <li><a href="#tab-5" data-toggle="tab">Reconocimientos</a></li>
                    <li><a href="#tab-3" data-toggle="tab">Eventos y Actividades</a></li>
                    <li><a href="#tab-4" data-toggle="tab">Historial</a></li>
                </ul>
                <div class="tab-content" style="padding: 0px 15px;">
                    <div class="tab-pane row fade in active" id="tab-1">
                        <div class="content-page" style="background: #FAFAFA;">
                            <div class="row">
                                <!-- BEGIN LEFT SIDEBAR -->            
                                <div class="col-md-8 col-sm-8 blog-item">
                                    @if(Session::get('tipoUsuario') == 'Voluntario' && Route::currentRouteName() == 'viewPerfilVoluntario')
                                    {{ Form::open(array('route' => 'editarVoluntario', 'class' => 'form-horizontal form-without-legend', 'role' => 'form', 'method' => 'post')) }}
                                    <div class="form-group">
                                        {{ Form::label('vol_nombre', 'Nombre', array('class' => 'col-lg-3 control-label')) }}
                                        <div class="col-lg-8">
                                            {{ Form::text('vol_nombre', $voluntario->nombre, array('class' => 'form-control', 'id' => 'vol_nombre')) }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('vol_apellidoPaterno', 'Apellido Paterno', array('class' => 'col-lg-3 control-label')) }}
                                        <div class="col-lg-8">
                                            {{ Form::text('vol_apellidoPaterno', $voluntario->apellidoPaterno, array('class' => 'form-control', 'id' => 'vol_apellidoPaterno')) }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('vol_apellidoMaterno', 'Apellido Materno', array('class' => 'col-lg-3 control-label')) }}
                                        <div class="col-lg-8">
                                            {{ Form::text('vol_apellidoMaterno', $voluntario->apellidoMaterno, array('class' => 'form-control', 'id' => 'vol_apellidoMaterno')) }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('vol_email', 'Correo Electr&oacute;nico', array('class' => 'col-lg-3 control-label')) }}
                                        <div class="col-lg-8">
                                            {{ Form::email('vol_email', $voluntario->email, array('class' => 'form-control', 'id' => 'vol_email')) }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('vol_sexo', 'Sexo', array('class' => 'col-lg-3 control-label')) }}
                                        <div class="col-lg-8">
                                            @define $sexoSelect = array('Masculino' => 'Masculino', 'Femenino' => 'Femenino')
                                            <select name="vol_sexo" class="form-control col-md-12 select2me" data-placeholder="Selecciona uno">
                                                @define $masculino = ''
                                                @define $femenino = ''
                                                @define $ninguno = ''
                                                @if ($voluntario->sexo == 'MASCULINO')
                                                @define $masculino = 'selected'
                                                @elseif ($voluntario->sexo == 'FEMENINO')
                                                @define $femenino = 'selected'
                                                @else
                                                @define $ninguno = 'selected'
                                                @endif
                                                <option value="" {{ $ninguno }}>Selecciona...</option>
                                                <option value="MASCULINO" {{ $masculino }}>Masculino</option>
                                                <option value="FEMENINO" {{ $femenino }}>Femenino</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    @if ($voluntario->fechaNacimiento == '0000-00-00')
                                    @define $fechaNac = ''
                                    @else
                                    @define $fechaNac = date('d/m/Y', strtotime($voluntario->fechaNacimiento))
                                    @endif
                                    <div class="form-group">
                                        {{ Form::label('vol_fechaNacimiento', 'Fecha de Nacimiento', array('class' => 'col-lg-3 control-label')) }}
                                        <div class="col-lg-8">
                                            {{ Form::text('vol_fechaNacimiento', $fechaNac, array('class' => 'form-control', 'id' => 'vol_fechaNacimiento')) }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('vol_ciudad', 'Ciudad', array('class' => 'col-lg-3 control-label')) }}
                                        <div class="col-lg-8">
                                            {{ Form::text('vol_ciudad', $voluntario->ciudad, array('class' => 'form-control', 'id' => 'vol_ciudad')) }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('vol_estado', 'Estado', array('class' => 'col-lg-3 control-label')) }}
                                        <div class="col-lg-8">
                                            {{ Form::text('vol_estado', $voluntario->estado, array('class' => 'form-control', 'id' => 'vol_estado')) }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('vol_bio', 'Biograf&iacute;a', array('class' => 'col-lg-3 control-label')) }}
                                        <div class="col-lg-8">
                                            {{ Form::textarea('vol_bio', $voluntario->biografia, array('class' => 'form-control', 'id' => 'vol_bio')) }}
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
                                                {{ Form::submit('Actualizar informaci&oacute;n', array('class' => 'btn btn-primary')) }}                      
                                            </div>
                                        </div>
                                    @else
                                    <div class="form-group">
                                        <label for="vol_nombre" class="col-lg-3 control-label">Nombre</label>
                                        <div class="col-lg-8">
                                            <label for="vol_nombre" class="control-label">{{ $voluntario->nombre . ' ' . $voluntario->apellidoPaterno . ' ' . $voluntario->apellidoMaterno }}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="vol_email" class="col-lg-3 control-label">Correo Electr&oacute;nico</label>
                                        <div class="col-lg-8">
                                            <label for="vol_email" class="control-label">{{ $voluntario->email }}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-lg-3 control-label">Sexo</label>
                                        <div class="col-lg-8">
                                            <label for="email" class="control-label">{{ ucwords(strtolower($voluntario->sexo)) }}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-lg-3 control-label">Fecha de Nacimiento</label>
                                        <div class="col-lg-8">
                                            <label for="email" class="control-label">10 de Diciembre de 1990</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-lg-3 control-label">Estado</label>
                                        <div class="col-lg-8">
                                            <label for="email" class="control-label">Sinaloa</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-lg-3 control-label">Ciudad</label>
                                        <div class="col-lg-8">
                                            <label for="email" class="control-label">Mazatlan</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-lg-3 control-label">Biografia</label>
                                        <div class="col-lg-8">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.

                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.
                                            </p>

                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.

                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.
                                            </p>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <!-- END LEFT SIDEBAR -->

                                <!-- BEGIN RIGHT SIDEBAR -->            
                                <div class="col-md-4 col-sm-4 blog-sidebar">

                                    <!-- BEGIN BLOG TAGS -->
                                    <div class="blog-tags margin-bottom-20">
                                        <h2>Intereses</h2>
                                        <ul id="listaIntereses">
                                        @foreach ($voluntario->intereses as $interes)
                                            <li><a href="#"><i class="fa fa-tags"></i>{{ $interes->descripcion }}</a></li>
                                        @endforeach
                                        </ul>
                                    </div>
                                    @if(Session::get('tipoUsuario') == 'Voluntario' && Route::currentRouteName() == 'viewPerfilVoluntario')
                                        {{ Form::select('addInteres', array('default' => 'Selecciona tus intereses') + $intereses, 'default', array('class' => 'form-control select2 input-medium', 'id' => 'optionAddInteres', 'placeholder' => 'Busca tus intereses')) }}
                                        {{ Form::button('Agregar Interes', array('id' => 'addInteres')) }}
                                    @endif
                                    <!-- END BLOG TAGS -->
                                </div>
                                <!-- END RIGHT SIDEBAR -->            
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane row fade blog-item" id="tab-2">
                        <div class="col-md-12 col-sm-12 margin-top-20">
                            <div class="row">
                              <div class="col-md-12">
                                  @define $contador = 1
                                  @foreach ($voluntario->logros as $logro)  
                                  @if ($contador == 1)
                                  <div class="row margin-bottom-20">
                                  @elseif (($contador-1)%4 == 0)
                                  <div class="row margin-bottom-20">
                                  @endif
                                    <div class="col-md-3">
                                      <div class="service-box-v1">
                                        <div><img width="50" height="50" src="{{ $logro->imagen }}/?{{ rand(1,1000) }}"></div>
                                        <h2>{{ $logro->nombre }}</h2>
                                        <p>{{ $logro->descripcion }}</p>
                                      </div>
                                    </div>
                                  @if ($contador%4 == 0)
                                  </div>
                                  @endif
                                  @define $contador++
                                  @endforeach
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane row fade blog-item" id="tab-5">
                        <div class="col-md-12 col-sm-12 margin-top-20">
                            <div class="row">
                              <div class="col-md-12">
                                  @define $contador = 1
                                  @foreach ($voluntario->logros as $logro)  
                                  @if ($contador == 1)
                                  <div class="row margin-bottom-20">
                                  @elseif (($contador-1)%4 == 0)
                                  <div class="row margin-bottom-20">
                                  @endif
                                    <div class="col-md-3">
                                      <div class="service-box-v1">
                                        <div><img width="50" height="50" src="{{ $logro->imagen }}/?{{ rand(1,1000) }}"></div>
                                        <h2>{{ $logro->nombre }}</h2>
                                        <p>{{ $logro->descripcion }}</p>
                                      </div>
                                    </div>
                                  @if ($contador%4 == 0)
                                  </div>
                                  @endif
                                  @define $contador++
                                  @endforeach
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-3">
                        <div class="col-md-12">
                        @define $contadorEventos = 1
                        @foreach ($voluntario->eventos as $evento)
                            <div class="form-info logros-reconocimientos">
                                <h2>
                                    <a href="{{ route('viewEvento', array('id' => $evento->idEvento)) }}"><em>{{ ucwords(strtolower($evento->nombre)) }}</em></a> <button data-func="showAccordion" data-accordion="accordion{{ $contadorEventos }}" type="button" class="btn btn-info pull-right">Mostrar Actividades</button>
                                </h2>
                            </div>
                            <div style="padding-left: 20px;">
                                <div id="accordion{{ $contadorEventos }}" class="panel-group no-display">
                                @define $contadorActividades = 1
                                @foreach ($evento->actividades as $actividad)
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion{{ $contadorEventos }}" href="#accordion{{ $contadorEventos }}_{{ $contadorActividades }}">
                                                    {{ $actividad->nombre }}
                                                </a>
                                            </h4>
                                        </div>
                                        <div style="height: 0px;" id="accordion{{ $contadorEventos }}_{{ $contadorActividades }}" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p class="lead">{{ $actividad->descripcion }}</p>

                                                <h4>Requisitos</h4>
                                                
                                                <p>{{ $actividad->requisitos }}</p>

                                                <hr>
                                                <p>Del {{ strftime('%A %d de %B de %Y a las %H:%M', strtotime($actividad->fechaInicio)) }} al {{ strftime('%A %d de %B de %Y a las %H:%M', strtotime($actividad->fechaFin)) }}</p>
                                            </div>
                                        </div>
                                    </div>         
                                @define $contadorActividades++
                                @endforeach
                                </div>
                            </div>
                            @define $contadorEventos++
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-4">
                        <div class="col-md-12 col-sm-12 margin-top-20">
                            <ul class="timeline">
                            @define $colores = array('purple', 'blue', 'green', 'red', 'grey')
                                @foreach ($voluntario->eventos as $evento)
                                @define $color = array_rand($colores)
                                <li class="timeline-{{ $colores[$color] }}">
                                    <div class="timeline-time">
                                        <span class="time"> {{ date('d\/m\/y', strtotime($evento->fechaInicio)) }} </span>
                                    </div>
                                    <div class="timeline-icon">
                                        <i class="fa fa-thumbs-up"></i>
                                    </div>
                                    <div class="timeline-body">
                                        <h2>{{ ucwords(strtolower($evento->nombre)) }}</h2>
                                        <div class="timeline-content">
                                            {{ $evento->descripcion }}
                                        </div>
                                        <div class="timeline-footer">
                                            <a href="{{ route('viewEvento', array('id' => $evento->idEvento)) }}" class="btn green pull-right">
                                                Ver Detalle del Evento<i class="m-icon-swapright m-icon-white"></i>
                                            </a>
                                            <a href="{{ route('viewLogroGanado', array('id' => $evento->idEvento)) }}" class="btn blue pull-right">
                                                Ver Recompensas<i class="m-icon-swapright m-icon-white"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END SIDEBAR & CONTENT -->
</div>

@stop