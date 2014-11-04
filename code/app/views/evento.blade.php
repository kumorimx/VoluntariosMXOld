@extends('layout')

@section('content')

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=710805882267709&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript">
window.twttr=(function(d,s,id){var t,js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return}js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);return window.twttr||(t={_e:[],ready:function(f){t._e.push(f)}})}(document,"script","twitter-wjs"));
</script>

<div class="main">
    <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12 col-sm-12" style="padding: 30px;">
                <h1 style="text-align:center;">{{ ucwords($evento->nombre) }}</h1>
                <h3 style="text-align:center;">{{ ucwords($evento->proyecto->nombre) }}</h3>
                <h4 style="text-align:center;">Del {{ strftime('%A %d de %B de %Y a las %H:%M', strtotime($evento->fechaInicio)) }} al {{ strftime('%A %d de %B de %Y', strtotime($evento->fechaFin)) }}</h4>
            </div>

            <div class="col-md-12 col-sm-12 tab-style-1">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab-1" data-toggle="tab">Informaci&oacute;n</a></li>
                    <li><a href="#tab-2" data-toggle="tab">Comentarios  <span class="badge badge-success">4</span></a></li>
                    <li><a href="#tab-3" data-toggle="tab">Voluntarios</a></li>
                    <li><a href="#tab-4" data-toggle="tab">Preguntas Frecuentes</a></li>
                    @if (Session::get('tipoUsuario') == 'Aliado')
                    <li><a href="#tab-5" data-toggle="tab">Panel Administraci&oacute;n</a></li>
                    <li><a href="#tab-6" data-toggle="tab">Evidencias</a></li>
                    @endif

                    @if (Session::get('tipoUsuario') == 'Voluntario')
                    <li><a href="#tab-7" data-toggle="tab">Solicitar Constancia</a></li>
                    <li><a href="#tab-6" data-toggle="tab">Evidencias</a></li>
                    @endif

                    <li class="pull-right"><span data-toggle="tab"><i class="fa fa-map-marker"></i>{{ $evento->ciudad }}, {{$evento->estado }}</span></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane row fade in active" id="tab-1">
                        <div class="content-page" style="background: #FAFAFA;">
                            <div class="row">
                                <!-- BEGIN LEFT SIDEBAR -->            
                                <div class="col-md-8 col-sm-8 blog-item">
                                    <div class="blog-item-img">
                                        <!-- BEGIN CAROUSEL -->            
                                        <div class="front-carousel">
                                            <div id="myCarousel" class="carousel slide">
                                                <!-- Carousel items -->
                                                <div class="carousel-inner">
                                                    <div class="item">
                                                        <img src="../../assets/frontend/pages/img/posts/img1.jpg" alt="">
                                                    </div>
                                                    <div class="item">
                                                        <!-- BEGIN VIDEO -->   
                                                        <iframe src="http://player.vimeo.com/video/56974716?portrait=0" style="width:100%; border:0" allowfullscreen="" height="259"></iframe>
                                                        <!-- END VIDEO -->   
                                                    </div>
                                                    <div class="item active">
                                                        <img src="../../assets/frontend/pages/img/posts/img3.jpg" alt="">
                                                    </div>
                                                </div>
                                                <!-- Carousel nav -->
                                                <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                                <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>                
                                        </div>
                                        <!-- END CAROUSEL -->             
                                    </div>
                                    <h2>Descripcion</h2>
                                    <p>{{ $evento->descripcion }}</p>              
                                    @define $i = 1
                                    <h2>Actividades</h2>
                                    <div id="accordion1" class="panel-group">
                                        @foreach ($evento->actividades as $actividad)
                                        @if ($i%2 == 0)
                                        <div class="panel panel-info"> 
                                            @else
                                            <div class="panel panel-default">
                                                @endif
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_{{ $i }}">
                                                            {{ $actividad->nombre }}
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div style="height: 0px;" id="accordion1_{{ $i }}" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p class="lead">{{ $actividad->descripcion }}</p>

                                                        <h4>Requisitos</h4>
                                                        <p>
                                                            {{ $actividad->requisitos }}
                                                        </p>
                                                        <hr>
                                                        <p>Del {{ strftime('%A %d de %B de %Y a las %H:%M', strtotime($actividad->fechaInicio)) }} al {{ strftime('%A %d de %B de %Y a las %H:%M', strtotime($actividad->fechaFin)) }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            @define $i++
                                            @endforeach
                                        </div> 
                                    <h2>Ubicaci&oacute;n</h2>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14662.415542427167!2d-106.4486140211404!3d23.25749725478746!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1415077434647" width="600" height="450" frameborder="0" style="border:0"></iframe>
                                    </div>

                                    <!-- END LEFT SIDEBAR -->

                                    <!-- BEGIN RIGHT SIDEBAR -->            
                                    <div class="col-md-4 col-sm-4 blog-sidebar">
                                        <!-- CATEGORIES START -->
                                        @define $now = time()
                                        @define $fechaInicio = strtotime($evento->fechaInicio)
                                        @define $fechaFin = strtotime($evento->fechaFin)
                                        @define $dateDiff = $fechaInicio - $now
                                        @define $dateDiffFin = $fechaFin - $now
                                        @define $diasFaltantesIni = floor($dateDiff/(60*60*24))
                                        @define $diasFaltantesFin = floor($dateDiffFin/(60*60*24))
                                        @if ($diasFaltantesIni < 0) 
                                        <a class="btn yellow btn-block disabled" style="font-weight: bold; font-size: 21px;">El evento ya ha comenzado</a>
                                        @elseif ($diasFaltantesFin < 0)
                                        <a class="btn red btn-block disabled" style="font-weight: bold; font-size: 21px;">El evento ha finalizado</a>
                                        @else
                                        <h2 class="no-top-space">Comienza en {{ $diasFaltantesIni }} días</h2>

                                        <div class="margin-bottom-30" style="text-align: center; margin-top: 30px;">
                                            <div class="fb-share-button" data-layout="button" data-href="{{ route('viewEvento', array('id'=>$evento->idEvento)) }}" style="margin: 0 20px;"></div>

                                            <a class="twitter-share-button"  href="{{ route('viewEvento', array('id'=>$evento->idEvento)) }}">Compartir</a>
                                            

                                        </div>


                                        <a class="btn green btn-block" href="{{ route('inscribirVoluntario', array('id' => $evento->idEvento)) }}" style="font-weight: bold; font-size: 21px;">Participar</a>
                                        <a class="btn blue btn-block" href="javascript:;" style="font-weight: bold; font-size: 21px;">Invita a un amigo</a>
                                        @endif
                                        <!-- CATEGORIES END -->

                                        <!-- BEGIN RECENT NEWS -->                            
                                        <h2>Organiza</h2>
                                        <div class="recent-news margin-bottom-10 alert alert-info" style="color: #fff;">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <img class="img-responsive" alt="" src="{{ $evento->aliado->logotipo }}" style="width:100%">                        
                                                </div>
                                                <div class="col-md-9 recent-news-inner">
                                                    <h3 style="line-height: 14px;">
                                                        <a href="#" style="font-weight: bold; line-height: 14px;">{{ $evento->aliado->razonSocial }}</a>
                                                        <br>
                                                        <small style="font-weight: bold;">Aliado Junior</small>
                                                    </h3>

                                                    <h3>
                                                        <img style="width: 32px;padding-top: 5px;padding-right: 5px;" alt="Blog Interview" src="{{ asset('assets/global/badges/badge_1.svg') }}">
                                                        <img style="width: 32px;padding-top: 5px;padding-right: 5px;" alt="Blog Interview" src="{{ asset('assets/global/badges/badge_2.svg') }}">
                                                        <img style="width: 32px;padding-top: 5px;padding-right: 5px;" alt="Blog Interview" src="{{ asset('assets/global/badges/badge_3.svg') }}">
                                                        <img style="width: 32px;padding-top: 5px;padding-right: 5px;" alt="Blog Interview" src="{{ asset('assets/global/badges/badge_4.svg') }}">
                                                    </h3>
                                                </div>                        
                                            </div>
                                        </div>
                                        <!-- END RECENT NEWS -->

                                        <h2>Logros</h2>
                                        <div class="recent-news margin-bottom-10 alert alert-success" style="color: #fff;">
                                            <div class="row">
                                                <div class="col-md-12 recent-news-inner" style="text-align: center;padding-left: 10%;">
                                                    @foreach ($evento->logros as $logro)
                                                    <div style="width: 64px;margin-right: 10px;float: left;" alt="Blog Interview">
                                                        <img style="width: 64px;margin-right: 10px;" alt="Blog Interview" src="{{ $logro->imagen }}/sports/?{{ rand(1,100) }}">
                                                        <span class="badge badge-primary" style="position: relative;bottom: 0;right: 0;float: right;margin-top: -16px;font-size: 12px !important;font-weight: bold;padding: 5px 6px;height: 23px;">x{{ $logro->pivot->aumentarRecord }}</span>
                                                    </div>
                                                    @endforeach
                                                </div>                        
                                            </div>
                                        </div>

                                        <h2>Categorias</h2>
                                        <div class="top-news">
                                            @foreach ($categorias as $categoria)    
                                            <a href="javascript:;" class="btn green">
                                                <span style="margin-left: 50px;">{{ $categoria->nombre }}</span>
                                                <i class="fa fa-briefcase top-news-icon" style="left: 10px; bottom: 5px;"></i>
                                            </a>
                                            @endforeach
                                        </div>

                                        <!-- BEGIN BLOG PHOTOS STREAM -->
                                        <div class="blog-photo-stream margin-bottom-20">
                                            <h2>Voluntarios</h2>
                                            <ul class="list-unstyled">
                                                @foreach ($evento->voluntarios as $voluntario)
                                                <li><a href="#"><img alt="{{ $voluntario->nombre}}" src="{{ $voluntario->imagen }}/people/?{{ rand(1,100) }}"></a></li>
                                                @endforeach
                                            </ul>                    
                                        </div>
                                        <!-- END BLOG PHOTOS STREAM -->

                                        <!-- BEGIN BLOG TAGS -->
                                        <div class="blog-tags margin-bottom-20">
                                            <h2>Intereses</h2>

                                            <ul>
                                                @foreach ($evento->intereses as $interes)
                                                <li><a href="#"><i class="fa fa-tags"></i>{{ $interes->descripcion }}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <!-- END BLOG TAGS -->
                                    </div>
                                    <!-- END RIGHT SIDEBAR -->            
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane row fade blog-item" id="tab-2">
                            <div class="comments">
                                <div class="media">                    
                                    <a href="#" class="pull-left">
                                        <img src="../../assets/frontend/pages/img/people/img1-small.jpg" alt="" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Media heading <span>5 hours ago / <a href="#">Reply</a></span></h4>
                                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                                        <!-- Nested media object -->
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="../../assets/frontend/pages/img/people/img2-small.jpg" alt="" class="media-object">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Media heading <span>17 hours ago / <a href="#">Reply</a></span></h4>
                                                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                                            </div>
                                        </div>
                                        <!--end media-->                      
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="../../assets/frontend/pages/img/people/img3-small.jpg" alt="" class="media-object">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Media heading <span>2 days ago / <a href="#">Reply</a></span></h4>
                                                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                                            </div>
                                        </div>
                                        <!--end media-->
                                    </div>
                                </div>
                                <!--end media-->
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img src="../../assets/frontend/pages/img/people/img4-small.jpg" alt="" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Media heading <span>July 25,2013 / <a href="#">Reply</a></span></h4>
                                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                                    </div>
                                </div>
                                <!--end media-->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-3">
                            <div class="row">
                                
                                @foreach ($evento->voluntarios as $voluntario)
                                <div class="col-md-4">
                                    <div class="recent-news margin-bottom-10 alert alert-info" style="color: #fff;">
                                        <div class="col-md-3">
                                            <img class="img-responsive" alt="" src="{{ $voluntario->imagen }}/?{{ rand(1,100) }}" style="width:100%">
                                        </div>
                                        <div class="col-md-9 recent-news-inner">
                                            <h3 style="line-height: 14px;">
                                                <a href="#" style="font-weight: bold; line-height: 14px;">{{ $voluntario->nombre . ' ' . $voluntario->apellidoPaterno }}</a>
                                                <br>
                                                <small style="font-weight: bold;">
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
                                                </small>
                                            </h3>

                                            <h3>
                                                <img style="width: 32px;padding-top: 5px;padding-right: 5px;" alt="Blog Interview" src="{{ asset('assets/global/badges/badge_1.svg') }}">
                                                <img style="width: 32px;padding-top: 5px;padding-right: 5px;" alt="Blog Interview" src="{{ asset('assets/global/badges/badge_2.svg') }}">
                                                <img style="width: 32px;padding-top: 5px;padding-right: 5px;" alt="Blog Interview" src="{{ asset('assets/global/badges/badge_3.svg') }}">
                                                <img style="width: 32px;padding-top: 5px;padding-right: 5px;" alt="Blog Interview" src="{{ asset('assets/global/badges/badge_4.svg') }}">
                                            </h3>
                                        </div>                        
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-4">
                            <div class="main">
                                <div class="container">
                                    <div class="row margin-bottom-40">
                                        <!-- BEGIN CONTENT -->
                                        <div class="col-md-12 col-sm-12">
                                            <h1>Preguntas Frecuentes</h1>
                                            <div class="content-page" style="background: transparent;">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-3">
                                                        <ul class="tabbable faq-tabbable">
                                                            <li class="active"><a href="#tab_1" data-toggle="tab">{{ $evento->nombrePublico }}</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-9 col-sm-9">
                                                        <div class="tab-content" style="padding:0; background: #fff;">
                                                            <!-- START TAB 1 -->
                                                            <div class="tab-pane active" id="tab_1">
                                                                <div class="panel-group" id="accordion1">
                                                                    @define $i = 1;
                                                                    @foreach ($evento->eventosFaq as $eventoFaq)
                                                                    @if ($i%2 == 0)
                                                                    <div class="panel panel-info">
                                                                    @else
                                                                    <div class="panel panel-success">
                                                                    @endif
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a href="#accordion1_{{ $i }}0" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                                                                    {{ $i }}.- {{ $eventoFaq->pregunta }}
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div class="panel-collapse collapse" id="accordion1_{{ $i }}0">
                                                                            <div class="panel-body">
                                                                                {{ $eventoFaq->respuesta }}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @define $i++;
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <!-- END TAB 1 -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END CONTENT -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-5">
                            <div class="main">
                                <div class="container">
                                    <div class="row margin-bottom-40">
                                        <!-- BEGIN CONTENT -->
                                        <div class="col-md-12 col-sm-12">
                                            <div class="content-page" style="background: transparent;">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-3">
                                                        <ul class="tabbable faq-tabbable">
                                                            <li class="active"><a href="#tab_21" data-toggle="tab">Voluntarios Descartados</a></li>
                                                            <li><a href="#tab_22" data-toggle="tab">Calificar Voluntarios</a></li>
                                                            <li><a href="#tab_23" data-toggle="tab">Reconocimientos</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-9 col-sm-9">
                                                        <div class="tab-content" style="padding:0; background: #fff;">
                                                            <!-- START TAB 1 -->
                                                            <div class="tab-pane active" id="tab_21">
                                                                <div class="alert alert-block alert-info fade in">
                                                                    <button type="button" class="close" data-dismiss="alert"></button>
                                                                    <h4 class="block">Sobre los Voluntarios Descartados</h4>
                                                                    <p>
                                                                        Es una lista de voluntarios que han tenido ser expulsados del evento, ya sea inasistencia o mal comportamiento.
                                                                    </p>
                                                                    <p>
                                                                        No recibiran logros, puntos o derecho a constancia, asi como tambien ganaran una marca en su perfil de voluntario.
                                                                    </p>
                                                                </div>

                                                                <form action="javascript:;" class="form-horizontal form-row-sepe">
                                                                    <div class="form-body col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-3">Voluntarios</label>
                                                                            <div class="col-md-9">
                                                                                
                                                                                <select class="form-control col-md-12 select2me" data-placeholder="Selecciona uno">
                                                                                    <option value=""></option>
                                                                                    @foreach ($evento->voluntarios as $voluntario)
                                                                                    <option value="{{ $voluntario->idVoluntario }}" data-image='{{ $voluntario->imagen }}' data-logros='{{ $voluntario->logros }}'>{{ $voluntario->nombre . ' ' . $voluntario->apellidoPaterno . ' ' . $voluntario->apellidoMaterno }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <!-- END TAB 1 -->
                                                            <!-- START TAB 2 -->
                                                            <div class="tab-pane" id="tab_22">
                                                                <div class="alert alert-block alert-info fade in">
                                                                    <button type="button" class="close" data-dismiss="alert"></button>
                                                                    <p>
                                                                        Para cada logro selecciona los voluntarios que RECIBIRAN o NO RECIBIRAN ese logro en especifico.
                                                                    </p>
                                                                    <p>
                                                                        Automaticamente el sistema asignara los logros de la manera solicitada.
                                                                    </p>
                                                                    <p>
                                                                        Todos recibiran logros excepto: TODOS los voluntarios van a recibir el logro EXCEPTO los voluntarios seleccionados.
                                                                    </p>
                                                                    <p>
                                                                        Nadie recibira logros excepto: NINGUN voluntario va a recibir el logro EXCEPTO los voluntarios seleccionados.
                                                                    </p>
                                                                </div>

                                                                <form action="javascript:;" class="form-horizontal form-row-sepe">
                                                                    <div class="form-body col-md-12">
                                                                        <div class="form-group">
                                                                            <div class="col-md-5">
                                                                                <label class="control-label col-md-9">Los Voluntarios seleccionados</label>
                                                                                <select class="form-control input-xsmall select2me" data-placeholder="Selecciona uno">
                                                                                    <option value="AL" selected>SI</option>
                                                                                    <option value="WY">NO</option>
                                                                                </select>
                                                                            </div>

                                                                            <div class="col-md-7">
                                                                                <label class="control-label col-md-5"> recibiran el logro de </label>
                                                                                <select class="form-control input-medium select2me" data-placeholder="Selecciona uno">
                                                                                    <option value="" selected></option>
                                                                                    @foreach ($evento->logros as $logro)
                                                                                    <option value="{{ $logro->idLogro }}" >{{ $logro->descripcion }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-body col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-3">Voluntarios</label>
                                                                            <div class="col-md-9">
                                                                                <select class="form-control col-md-12 select2me" data-placeholder="Selecciona uno">
                                                                                    <option value=""></option>
                                                                                    @foreach ($evento->voluntarios as $voluntario)
                                                                                    <option value="{{ $voluntario->idVoluntario }}" data-image='{{ $voluntario->imagen }}' data-logros='{{ $voluntario->logros }}'>{{ $voluntario->nombre . ' ' . $voluntario->apellidoPaterno . ' ' . $voluntario->apellidoMaterno }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <!-- END TAB 3 -->
                                                            <!-- START TAB 3 -->
                                                            <div class="tab-pane" id="tab_23">
                                                                <div class="alert alert-block alert-info fade in">
                                                                    <button type="button" class="close" data-dismiss="alert"></button>
                                                                    <p>
                                                                        Estos son todos los voluntarios que han solicitado una constancia de participacion del evento.
                                                                    </p>
                                                                </div>
                                                                <table class="table table-striped table-hover table-bordered" id="basicTable_vol">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>
                                                                                Nombre
                                                                            </th>
                                                                            <th>
                                                                                Apellido Paterno
                                                                            </th>
                                                                            <th>
                                                                                Apellido Materno
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <thead id="filtros">
                                                                        <tr>
                                                                            <th><input type="text" id="i-0" class="search_init"></th>
                                                                            <th><input type="text" id="i-1" class="search_init" ></th>
                                                                            <th class="last small">
                                                                                <input type="text" id="i-2" class="search_init">
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Alex</a>
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Alex</a>
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Alex</a>
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Alex</a>
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Alex</a>
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Alex</a>
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Alex</a>
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Alex</a>
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Alex</a>
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Alex</a>
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Alex</a>
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Alex</a>
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                            <td>
                                                                                Nilson
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- END TAB 3 -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END CONTENT -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-6">
                            <div class="main">
                                <div class="container">
                                    <div class="row margin-bottom-40">
                                        <!-- BEGIN CONTENT -->
                                        <div class="col-md-12 col-sm-12">
                                            Proximamente
                                        </div>
                                        <!-- END CONTENT -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-7">
                            <div class="main">
                                <div class="container">
                                    <div class="row margin-bottom-40">
                                        <!-- BEGIN CONTENT -->
                                        <div class="col-md-12 col-sm-12 page-voluntario">
                                            <div class="form-info logros-reconocimientos">
                                                <h2><em>Deseo constancia del evento</em> <button type="button" class="btn btn-default pull-right" id="solicitar_constancia">Solicitar</button></h2>
                                            </div>
                                        </div>
                                        <!-- END CONTENT -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
    </div>
</div>
@stop