@extends('viewAliado/layout')

@section('content')
<div class="page-container">
    <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Eventos <small> propios </small></h1>
            </div>
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->
            <div class="page-toolbar">
            </div>
            <!-- END PAGE TOOLBAR -->
        </div>
    </div>
    <!-- END PAGE HEAD -->
    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
        <div class="container">
            <!-- /.modal -->
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="row margin-top-10">
                <div class="col-md-12">

                    <div class="profile-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption caption-md">
                                            <i class="icon-globe theme-font hide"></i>
                                            <span class="caption-subject font-blue-madison bold uppercase">Información de los eventos</span>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab_1_1" data-toggle="tab">Listado</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_3" data-toggle="tab">Nuevo</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <!-- PERSONAL INFO TAB -->
                                            <div class="tab-pane active" id="tab_1_1">
                                                <table class="table table-striped table-hover table-bordered" id="basicTable_vol">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                Nombre Evento
                                                            </th>
                                                            <th>
                                                                Proyecto Asignado
                                                            </th>
                                                            <th>
                                                                Voluntarios
                                                            </th>
                                                            <th>
                                                                Fecha Inicio
                                                            </th>
                                                            <th>
                                                                Editar
                                                            </th>
                                                            <th>
                                                                Borrar
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <thead id="filtros">
                                                        <tr>
                                                            <th><input type="text" id="i-0" class="search_init"></th>
                                                            <th><input type="text" id="i-1" class="search_init" ></th>
                                                            <th><input type="text" id="i-2" class="search_init" ></th>
                                                            <th><input type="text" id="i-3" class="search_init" ></th>
                                                            <th><input type="text" id="i-4" class="search_init" style="display: none;"></th>
                                                            <th class="last small">
                                                                <input type="text" id="i-5" class="search_init" style="display: none;">
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($eventos as $evento)
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">{{ $evento->nombre }}</a>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">{{ $evento->proyecto->nombre }}</a>
                                                            </td>
                                                            <td>
                                                                25/145
                                                            </td>
                                                            <td>
                                                                15/11/2014
                                                            </td>
                                                            <td>
                                                                <a class="edit" href="javascript:;">
                                                                    Edit </a>
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Borrar </a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Evento</a>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                25/145
                                                            </td>
                                                            <td>
                                                                15/11/2014
                                                            </td>
                                                            <td>
                                                                <a class="edit" href="javascript:;">
                                                                    Edit </a>
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Borrar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Evento</a>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                25/145
                                                            </td>
                                                            <td>
                                                                15/11/2014
                                                            </td>
                                                            <td>
                                                                <a class="edit" href="javascript:;">
                                                                    Edit </a>
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Borrar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Evento</a>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                25/145
                                                            </td>
                                                            <td>
                                                                15/11/2014
                                                            </td>
                                                            <td>
                                                                <a class="edit" href="javascript:;">
                                                                    Edit </a>
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Borrar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Evento</a>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                25/145
                                                            </td>
                                                            <td>
                                                                15/11/2014
                                                            </td>
                                                            <td>
                                                                <a class="edit" href="javascript:;">
                                                                    Edit </a>
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Borrar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Evento</a>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                25/145
                                                            </td>
                                                            <td>
                                                                15/11/2014
                                                            </td>
                                                            <td>
                                                                <a class="edit" href="javascript:;">
                                                                    Edit </a>
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Borrar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Evento</a>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                25/145
                                                            </td>
                                                            <td>
                                                                15/11/2014
                                                            </td>
                                                            <td>
                                                                <a class="edit" href="javascript:;">
                                                                    Edit </a>
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Borrar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Evento</a>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                25/145
                                                            </td>
                                                            <td>
                                                                15/11/2014
                                                            </td>
                                                            <td>
                                                                <a class="edit" href="javascript:;">
                                                                    Edit </a>
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Borrar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Evento</a>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                25/145
                                                            </td>
                                                            <td>
                                                                15/11/2014
                                                            </td>
                                                            <td>
                                                                <a class="edit" href="javascript:;">
                                                                    Edit </a>
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Borrar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Evento</a>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                25/145
                                                            </td>
                                                            <td>
                                                                15/11/2014
                                                            </td>
                                                            <td>
                                                                <a class="edit" href="javascript:;">
                                                                    Edit </a>
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Borrar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Evento</a>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                25/145
                                                            </td>
                                                            <td>
                                                                15/11/2014
                                                            </td>
                                                            <td>
                                                                <a class="edit" href="javascript:;">
                                                                    Edit </a>
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Borrar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Evento</a>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                25/145
                                                            </td>
                                                            <td>
                                                                15/11/2014
                                                            </td>
                                                            <td>
                                                                <a class="edit" href="javascript:;">
                                                                    Edit </a>
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Borrar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Evento</a>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                25/145
                                                            </td>
                                                            <td>
                                                                15/11/2014
                                                            </td>
                                                            <td>
                                                                <a class="edit" href="javascript:;">
                                                                    Edit </a>
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Borrar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Evento</a>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                25/145
                                                            </td>
                                                            <td>
                                                                15/11/2014
                                                            </td>
                                                            <td>
                                                                <a class="edit" href="javascript:;">
                                                                    Edit </a>
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Borrar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Evento</a>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                25/145
                                                            </td>
                                                            <td>
                                                                15/11/2014
                                                            </td>
                                                            <td>
                                                                <a class="edit" href="javascript:;">
                                                                    Edit </a>
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Borrar </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- END PERSONAL INFO TAB -->
                                            <!-- CHANGE PASSWORD TAB -->
                                            <div class="tab-pane" id="tab_1_3">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="portlet light profile-sidebar-portlet">
                                                            <!-- SIDEBAR USERPIC -->
                                                            <div class="profile-userpic">
                                                                <img src="../../assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
                                                            </div>
                                                            <!-- END SIDEBAR USERPIC -->
                                                            <!-- SIDEBAR USER TITLE -->
                                                            <div class="profile-usertitle">
                                                                <div class="profile-usertitle-name">
                                                                    Nombre del Evento
                                                                </div>
                                                                <div class="profile-usertitle-job">
                                                                    Logotipo
                                                                </div>
                                                            </div>
                                                            <!-- END SIDEBAR USER TITLE -->
                                                            <!-- SIDEBAR BUTTONS -->
                                                            <div class="profile-userbuttons">
                                                                <button type="button" class="btn btn-circle green-haze btn-sm">Cambiar Logotipo</button>
                                                            </div>

                                                            <div class="portlet light">
																<div class="portlet-body">
																	<div class="tabbable-line">
																		<ul class="nav nav-tabs ">
																			<li class="active" style="float: none;margin-bottom: 0px;">
																				<a href="#tab_15_1" data-toggle="tab" style="">
																				Información General </a>
																			</li>
																			<li class="" style="float: none;margin-bottom: 0px;">
																				<a href="#tab_15_2" data-toggle="tab" style="">
																				Actividades </a>
																			</li>
																			<li style="float: none;margin-bottom: 0px;">
																				<a href="#tab_15_3" data-toggle="tab">
																				Slider </a>
																			</li>
																			<li style="float: none;margin-bottom: 0px;">
																				<a href="#tab_15_4" data-toggle="tab">
																				Logros </a>
																			</li>
																			<li style="float: none;margin-bottom: 0px;">
																				<a href="#tab_15_5" data-toggle="tab">
																				Extras </a>
																			</li>
																		</ul>
																		<div class="margin-top-10">
			                                                                {{ Form::submit('Guardar Nuevo Evento', array('class' => 'btn green-haze')); }}
			                                                            </div>
																	</div>
																</div>
															</div>
                                                            <!-- END SIDEBAR BUTTONS -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="portlet light profile-sidebar-portlet">
                                                        	<div class="tab-content">
																<div class="tab-pane active" id="tab_15_1">
																	{{ Form::open(array('route' => 'adminIndex', 'method' => 'post')) }}
			                                                            <div class="form-group">
			                                                                {{ Form::label('nombre', 'Nombre', array('class' => 'control-label')); }}
			                                                                {{ Form::text('nombre', '', array('type' => 'text', 'class' => 'form-control', 'placeholder' => 'AAA010101AAA')); }}
			                                                            </div>
			                                                            <div class="form-group">
																			<label class="control-label">Proyecto Asignado</label>
																			<select id="select-templating" data-placeholder="Selecciona un icono" class="cbs-select form-control select2-chosen" style="padding: 0;">
																			<option rel="">Proyecto 1</option>
																			<option rel="">Proyecto 2</option>
																			<option rel="">Proyecto 3</option>
																			<option rel="">Proyecto 4</option>
																			<option rel="">Proyecto 5</option>
																		</select>
																		</div>
			                                                            <div class="form-group">
			                                                                {{ Form::label('descripcion', 'Descripcion', array('class' => 'control-label')); }}
			                                                                {{ Form::textarea('descripcion', '', array('type' => 'textarea', 'rows' => '3', 'class' => 'form-control', 'placeholder' => 'El objetivo de esta noble instituci&oacute;n')); }}
			                                                            </div>

			                                                            <div class="row">
			                                                                <div class="col-md-6">
			                                                                    <div class="form-group">
			                                                                        {{ Form::label('voluntariosNecesarios', 'Voluntarios Necesarios', array('class' => 'control-label')); }}
			                                                                        {{ Form::text('voluntariosNecesarios', '', array('type' => 'text', 'id' => 'lastNameP', 'class' => 'form-control', 'placeholder' => 'Escobar')); }}
			                                                                    </div>
			                                                                </div>
			                                                                <!--/span-->
			                                                                <div class="col-md-6">
			                                                                	
			                                                                </div>
			                                                                <!--/span-->
			                                                            </div>

			                                                            <div class="form-group">
			                                                                {{ Form::label('mapa', 'Google Maps', array('class' => 'control-label')); }}
			                                                                {{ Form::textarea('mapa', '', array('type' => 'textarea', 'rows' => '3', 'class' => 'form-control', 'placeholder' => 'El objetivo de esta noble instituci&oacute;n')); }}
			                                                            </div>

			                                                            <div class="row">
			                                                                <div class="col-md-6">
			                                                                    <div class="form-group">
			                                                                        {{ Form::label('fechaInicio', 'Fecha de Inicio', array('class' => 'control-label')); }}
			                                                                        {{ Form::text('fechaInicio', '', array('type' => 'text', 'id' => 'lastNameP', 'class' => 'form-control', 'placeholder' => 'Escobar')); }}
			                                                                    </div>
			                                                                </div>
			                                                                <!--/span-->
			                                                                <div class="col-md-6">
			                                                                    <div class="form-group">
			                                                                        {{ Form::label('fechaFin', 'Fecha de Termino', array('class' => 'control-label')); }}
			                                                                        {{ Form::text('fechaFin', '', array('type' => 'text', 'id' => 'lastNameM', 'class' => 'form-control', 'placeholder' => 'Escobar')); }}
			                                                                    </div>
			                                                                </div>
			                                                                <!--/span-->
			                                                            </div>
			                                                            <div class="row">
			                                                                <div class="col-md-6">
			                                                                    <div class="form-group">
			                                                                        {{ Form::label('diasConfirmacion', 'Fecha de Confirmacion', array('class' => 'control-label')); }}
			                                                                        {{ Form::text('diasConfirmacion', '', array('type' => 'text', 'id' => 'lastNameP', 'class' => 'form-control', 'placeholder' => 'Escobar')); }}
			                                                                    </div>
			                                                                </div>
			                                                                <!--/span-->
			                                                                <div class="col-md-6">
			                                                                </div>
			                                                                <!--/span-->
			                                                            </div>

			                                                            <div class="row">
			                                                                <!--/span-->
			                                                                <div class="col-md-6">
			                                                                    <div class="form-group">
			                                                                        {{ Form::label('codigoPostal', 'Codigo Postal', array('class' => 'control-label')); }}
			                                                                        {{ Form::text('codigoPostal', '', array('type' => 'text', 'id' => 'lastNameM', 'class' => 'form-control', 'placeholder' => 'Escobar')); }}
			                                                                    </div>
			                                                                </div>
			                                                                <!--/span-->
			                                                                <div class="col-md-6">
			                                                                    <div class="form-group">
			                                                                        {{ Form::label('estado', 'Estado', array('class' => 'control-label')); }}
			                                                                        {{ Form::text('estado', '', array('type' => 'text', 'id' => 'lastNameP', 'class' => 'form-control', 'placeholder' => 'Escobar')); }}
			                                                                    </div>
			                                                                </div>
			                                                            </div>

			                                                            <div class="row">
			                                                                
			                                                                <!--/span-->
			                                                                <div class="col-md-6">
			                                                                    <div class="form-group">
			                                                                        {{ Form::label('ciudad', 'Ciudad', array('class' => 'control-label')); }}
			                                                                        {{ Form::text('ciudad', '', array('type' => 'text', 'id' => 'lastNameM', 'class' => 'form-control', 'placeholder' => 'Escobar')); }}
			                                                                    </div>
			                                                                </div>
			                                                                <div class="col-md-6">
			                                                                    <div class="form-group">
			                                                                        {{ Form::label('colonia', 'Colonia', array('class' => 'control-label')); }}
			                                                                        {{ Form::text('colonia', '', array('type' => 'text', 'id' => 'lastNameP', 'class' => 'form-control', 'placeholder' => 'Escobar')); }}
			                                                                    </div>
			                                                                </div>
			                                                                <!--/span-->
			                                                            </div>
			                                                            
			                                                            {{ Form::close() }}
																	
																</div>
																<div class="tab-pane" id="tab_15_2">
																	<div class="portlet light bordered">
		                                                                <div class="portlet-title">
		                                                                    <div class="caption">
		                                                                        <i class="icon-equalizer font-blue-hoki"></i>
		                                                                        <span class="caption-subject font-blue-hoki bold uppercase">Agregar Actividad</span>
		                                                                    </div>
		                                                                    <div class="tools">
		                                                                        <a href="" class="collapse">
		                                                                        </a>
		                                                                    </div>
		                                                                </div>
		                                                                <div class="portlet-body form">
		                                                                    <!-- BEGIN FORM-->
		                                                                    <div class="form-body">
		                                                                        <div class="row">
		                                                                            <div class="col-md-12">
		                                                                                <div class="form-group">
		                                                                                    {{ Form::label('nombre', 'Nombre', array('class' => 'control-label')); }}
		                                                                                    {{ Form::text('nombre', '', array('type' => 'text', 'id' => 'firstName', 'class' => 'form-control', 'placeholder' => 'Juan Pablo')); }}
		                                                                                </div>
		                                                                            </div>
		                                                                            <!--/span-->
		                                                                        </div>
		                                                                        <!--/row-->
		                                                                    </div>
		                                                                    <div class="form-group">
				                                                                {{ Form::label('descripcion', 'Descripcion', array('class' => 'control-label')); }}
				                                                                {{ Form::textarea('descripcion', '', array('type' => 'textarea', 'rows' => '3', 'class' => 'form-control', 'placeholder' => 'El objetivo de esta noble instituci&oacute;n')); }}
				                                                            </div>
				                                                            <div class="form-group">
				                                                                {{ Form::label('requisitos', 'Requisitos', array('class' => 'control-label')); }}
				                                                                {{ Form::textarea('requisitos', '', array('type' => 'textarea', 'rows' => '3', 'class' => 'form-control', 'placeholder' => 'El objetivo de esta noble instituci&oacute;n')); }}
				                                                            </div>
				                                                            <div class="row">
	                                                                            <div class="col-md-6">
	                                                                                <div class="form-group">
	                                                                                    {{ Form::label('fechaInicio', 'Fecha Inicial', array('class' => 'control-label')); }}
	                                                                                    {{ Form::text('fechaInicio', '', array('type' => 'text', 'id' => 'lastNameP', 'class' => 'form-control', 'placeholder' => 'Escobar')); }}
	                                                                                </div>
	                                                                            </div>
	                                                                            <!--/span-->
	                                                                            <div class="col-md-6">
	                                                                                <div class="form-group">
	                                                                                    {{ Form::label('fechaFin', 'Fecha Final', array('class' => 'control-label')); }}
	                                                                                    {{ Form::text('fechaFin', '', array('type' => 'text', 'id' => 'lastNameM', 'class' => 'form-control', 'placeholder' => 'Escobar')); }}
	                                                                                </div>
	                                                                            </div>
	                                                                            <!--/span-->
	                                                                        </div>
		                                                                    <div class="form-actions right">
		                                                                        {{ Form::button('<i class="fa fa-check"></i> Agregar Actividad', array('class' => 'btn blue', 'id' => 'agregarContacto')); }}
		                                                                    </div>
		                                                                    <!-- END FORM-->
		                                                                </div>

		                                                            </div>

		                                                            <table class="table table-striped table-hover table-bordered table-responsive" id="basicTable_vol2">
		                                                                <thead>
		                                                                    <tr>
		                                                                        <th>
		                                                                            Nombre Actividad
		                                                                        </th>
		                                                                        <th>
		                                                                            Fecha Inicio
		                                                                        </th>
		                                                                        <th>
		                                                                            Fecha Fin
		                                                                        </th>
		                                                                        <th>
		                                                                            Editar
		                                                                        </th>
		                                                                        <th>
		                                                                            Borrar
		                                                                        </th>
		                                                                    </tr>
		                                                                </thead>
		                                                                <thead id="filtros2">
		                                                                    <tr>
		                                                                        <th><input type="text" id="i-0" class="search_init"></th>
		                                                                        <th><input type="text" id="i-1" class="search_init" ></th>
		                                                                        <th><input type="text" id="i-2" class="search_init" ></th>
		                                                                        <th><input type="text" id="i-3" class="search_init" style="display: none;"></th>
		                                                                        <th class="last small">
		                                                                            <input type="text" id="i-4" class="search_init" style="display: none;">
		                                                                        </th>
		                                                                    </tr>
		                                                                </thead>
		                                                                <tbody id='tablaContactos'>
		                                                                    <tr>
		                                                                        <td>
		                                                                            Alex Nilson
		                                                                        </td>
		                                                                        <td>
		                                                                            10/10/2014
		                                                                        </td>
		                                                                        <td>
		                                                                            30/30/2014
		                                                                        </td>
		                                                                        <td>
		                                                                            <a class="edit" href="javascript:;">
		                                                                                Editar </a>
		                                                                        </td>
		                                                                        <td>
		                                                                            <a class="delete" href="javascript:;">
		                                                                                Borrar </a>
		                                                                        </td>
		                                                                    </tr>
		                                                                </tbody>
		                                                            </table>
																</div>
																<div class="tab-pane" id="tab_15_3">
																	<div class="portlet light">
																		<div class="portlet-body">
																			<div class="row">
																				<div class="col-md-12">
																					<form id="fileupload" action="../../assets/global/plugins/jquery-file-upload/server/php/" method="POST" enctype="multipart/form-data">
																						<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
																						<div class="row fileupload-buttonbar">
																							<div class="col-lg-12">
																								<!-- The fileinput-button span is used to style the file input field as button -->
																								<span class="btn green fileinput-button">
																									<i class="fa fa-plus"></i>
																										<span>
																											Agregar Imagenes 
																										</span>
																									<input type="file" name="files[]" multiple="">
																								</span>
																								<button type="submit" class="btn blue start">
																								<i class="fa fa-upload"></i>
																								<span>
																								Comenzar la carga </span>
																								</button>
																								<button type="reset" class="btn warning cancel">
																								<i class="fa fa-ban-circle"></i>
																								<span>
																								Cancelar la carga </span>
																								</button>
																								<!-- button type="button" class="btn red delete">
																								<i class="fa fa-trash"></i>
																								<span>
																								Borrar </span>
																								</button>
																								<input type="checkbox" class="toggle">
																								<!-- The global file processing state -->
																								<span class="fileupload-process">
																								</span>
																							</div>
																							<!-- The global progress information -->
																							<div class="col-lg-5 fileupload-progress fade">
																								<!-- The global progress bar -->
																								<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
																									<div class="progress-bar progress-bar-success" style="width:0%;">
																									</div>
																								</div>
																								<!-- The extended global progress information -->
																								<div class="progress-extended">
																									 &nbsp;
																								</div>
																							</div>
																						</div>
																						<!-- The table listing the files available for upload/download -->
																						<table role="presentation" class="table table-striped clearfix">
																						<tbody class="files">
																						</tbody>
																						</table>
																					</form>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="tab-pane" id="tab_15_4">
																	<div class="form-group">
																		<label class="control-label col-md-3">Listado de Logros</label>
																		<div class="col-md-9">
																			<select name="" id="select2_sample_modal_4" class="form-control select2">
																				<option value="badge_1">Logro 1</option>
																				<option value="badge_2">Logro 2</option>
																				<option value="badge_3">Logro 3</option>
																				<option value="badge_4">Logro 4</option>
																				<option value="badge_5">Logro 5</option>
																				<option value="badge_6">Logro 6</option>
																			</select>
																		</div>
																	</div>
																</div>
																<div class="tab-pane" id="tab_15_5">
																	<div class="form-group">
																		{{ Form::label('codigoAnalytics', 'Codigo Google Analytics', array('class' => 'control-label col-md-4')); }}
																		<div class="col-md-8">
                                                                        	{{ Form::text('codigoAnalytics', '', array('type' => 'text', 'id' => 'lastNameP', 'class' => 'form-control', 'placeholder' => 'Escobar')); }}
                                                                        </div>
																	</div>
																</div>
															</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END CHANGE PASSWORD TAB -->
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PROFILE CONTENT -->
                </div>
            </div>
            <!-- END PAGE CONTENT INNER -->
        </div>
    </div>
    <!-- END PAGE CONTENT -->
</div>


<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger label label-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
            <div class="progress-bar progress-bar-success" style="width:0%;"></div>
            </div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn blue start" disabled>
                    <i class="fa fa-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn red cancel">
                    <i class="fa fa-ban"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-download fade">
            <td>
                <span class="preview">
                    {% if (file.thumbnailUrl) { %}
                        <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                    {% } %}
                </span>
            </td>
            <td>
                <p class="name">
                    {% if (file.url) { %}
                        <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                    {% } else { %}
                        <span>{%=file.name%}</span>
                    {% } %}
                </p>
                {% if (file.error) { %}
                    <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                {% } %}
            </td>
            <td>
                <span class="size">{%=o.formatFileSize(file.size)%}</span>
            </td>
            <td>
                {% if (file.deleteUrl) { %}
                    <button class="btn red delete btn-sm" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                        <i class="fa fa-trash-o"></i>
                        <span>Delete</span>
                    </button>
                    <input type="checkbox" name="delete" value="1" class="toggle">
                {% } else { %}
                    <button class="btn yellow cancel btn-sm">
                        <i class="fa fa-ban"></i>
                        <span>Cancel</span>
                    </button>
                {% } %}
            </td>
        </tr>
    {% } %}
</script>
@stop

