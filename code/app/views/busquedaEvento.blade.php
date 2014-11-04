@extends('layout')

@section('content')
<div class="main">
	<div class="page-content">
		<div class="page-perfil">
    <div class="" style="overflow: visible;">
        <div class="fullwidthabnner revslider-initialised tp-simpleresponsive" style="max-height: 170px; height: 170px;border-bottom: 1px dotted #ccc;background: #fff;" id="">
            <div class="main">
                <div class="container">
                    <div class="row" style="">
                        <div class="col-md-12">
							<div style="margin-top: 40px;">
								<h2 style="float:left;">Muestrame eventos de</h2> 
								<select id="select2_sample2" class="form-control select2 input-small eventoCategoria" multiple style="float:left !important; margin: 0 10px;" placeholder="esta(s) categorias">
									<optgroup label="Categoria 1">
										<option>Subcategoria 1.1</option>
										<option>Subcategoria 1.2</option>
										<option>Subcategoria 1.3</option>
									</optgroup>
									<optgroup label="Categoria 2">
										<option>Subcategoria 2.1</option>
										<option>Subcategoria 2.2</option>
										<option>Subcategoria 2.3</option>
									</optgroup>
									<optgroup label="Categoria 3">
										<option>Subcategoria 3.1</option>
										<option>Subcategoria 3.2</option>
										<option>Subcategoria 3.3</option>
									</optgroup>
									<optgroup label="Categoria 4">
										<option>Subcategoria 4.1</option>
										<option>Subcategoria 4.2</option>
										<option>Subcategoria 4.3</option>
									</optgroup>
								</select>
								<h2 style="float:left;">en </h2>
								<select id="select2_sample1" class="form-control select2 input-small eventoCategoria" multiple style="float:left !important; margin: 0 10px;" placeholder="el pais">
									<optgroup label="Sinaloa">
										<option>Ciudad 1.1</option>
										<option>Ciudad 1.2</option>
										<option>Ciudad 1.3</option>
									</optgroup>
									<optgroup label="Jalisco">
										<option>Ciudad 2.1</option>
										<option>Ciudad 2.2</option>
										<option>Ciudad 2.3</option>
									</optgroup>
									<optgroup label="Sonora">
										<option>Ciudad 3.1</option>
										<option>Ciudad 3.2</option>
										<option>Ciudad 3.3</option>
									</optgroup>
								</select>
								<h2 style="float:left;"> ordenado</h2>
									<select class="form-control input-medium select2me" placeholder="automaticamente" style="float:left !important; margin: 0 10px;">
										<option value="">Automaticamente</option>
										<option value="AL">Proximos</option>
										<option value="WY">Populares</option>
									</select>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
		<div class="container">
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="portlet light" style="background-color: transparent;">
				<div class="portlet-body" style="background-color: transparent;">
					<div class="row">
						<div class="col-md-12 news-page">
							<div class="row">
							@define $contador = 1
								@foreach ($eventos as $evento)
								@if ($contador == 1)
								<div class="row">
								@elseif (($contador-1)%3 == 0)
								<div class="row">
								@endif
								<div class='col-md-4'>
									<div class="news-blocks">
										<img class="news-block-img pull-right" src="http://lorempixel.com/327/100/nature/?{{ rand(1,1000) }}" alt="" style="width: 100%;height: 100px;margin: 0;">
										<h3>
										<a href="{{ route('viewEvento', array('id' => $evento->idEvento)) }}">
										 {{ ucwords(strtolower($evento->nombre)) }}</a>
										</h3>
										<div class="news-block-tags">
											<strong>{{ $evento->ciudad . ', ' . $evento->estado }}</strong>
											<em>Hace 7 Horas</em>
										</div>
										<p>
											{{ substr($evento->descripcion, 0, 80) }}
										</p>
										<a href="" class="news-block-btn" style="float:left; padding-left: 0;">
											<i class="fa fa-clock-o"></i> Comienza el {{ date('d\/m\/Y', strtotime($evento->fechaInicio)) }} 
										</a>
										<a href="" class="news-block-btn" style="float:left;">
											<i class="fa fa-users"></i> {{ $evento->voluntarios->count() }}
										</a>
										<a href="" class="news-block-btn" style="">
											<i class="fa fa-trophy"></i> {{ $evento->logros->count() }}
										</a>
									</div>
								</div>
								@if ($contador%3 == 0)
								</div>
								@endif
								@define $contador++
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
</div>
@stop