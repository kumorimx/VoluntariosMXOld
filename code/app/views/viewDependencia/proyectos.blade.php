@extends('viewDependencia/layout')

@section('content')
<div class="page-container">
    <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Proyectos <small>de la dependencia</small></h1>
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
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Widget settings form goes here
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue">Save changes</button>
                            <button type="button" class="btn default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
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
                                            <span class="caption-subject font-blue-madison bold uppercase">Información de los proyectos</span>
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
                                                                Nombre
                                                            </th>
                                                            <th>
                                                                # Eventos
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
                                                            <th><input type="text" id="i-2" class="search_init" style="display: none;"></th>
                                                            <th class="last small">
                                                                <input type="text" id="i-3" class="search_init" style="display: none;">
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($proyectos as $proyecto)
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">{{ $proyecto->nombre }}</a>
                                                            </td>
                                                            <td>
                                                                {{ $proyecto->eventos->count() }}
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
                                                                    Nombre Proyecto
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
                                                            <!-- END SIDEBAR BUTTONS -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="portlet light profile-sidebar-portlet">
                                                            {{ Form::open(array('route' => 'adminIndex', 'method' => 'post')) }}
                                                            <div class="form-group">
                                                                {{ Form::label('nombre', 'Nombre', array('class' => 'control-label')); }}
                                                                {{ Form::text('nombre', '', array('type' => 'text', 'class' => 'form-control', 'placeholder' => 'AAA010101AAA')); }}
                                                            </div>
                                                            <div class="form-group">
                                                                {{ Form::label('objetivoGeneral', 'Objetivo General', array('class' => 'control-label')); }}
                                                                {{ Form::textarea('objetivoGeneral', '', array('type' => 'textarea', 'rows' => '3', 'class' => 'form-control', 'placeholder' => 'El objetivo de esta noble instituci&oacute;n')); }}
                                                            </div>

                                                            <div class="form-group">
                                                                {{ Form::label('objetivosEspecificos', 'Objetivos Especificos', array('class' => 'control-label')); }}
                                                                {{ Form::textarea('objetivosEspecificos', '', array('type' => 'textarea', 'rows' => '3', 'class' => 'form-control', 'placeholder' => 'El objetivo de esta noble instituci&oacute;n')); }}
                                                            </div>

                                                            <div class="form-group">
                                                                {{ Form::label('semblanza', 'Semblanza', array('class' => 'control-label')); }}
                                                                {{ Form::textarea('semblanza', '', array('type' => 'textarea', 'rows' => '3', 'class' => 'form-control', 'placeholder' => 'El objetivo de esta noble instituci&oacute;n')); }}
                                                            </div>

                                                            <div class="form-group">
                                                                {{ Form::label('justificacionPDNActual', 'justificacionPDNActual', array('class' => 'control-label')); }}
                                                                {{ Form::textarea('justificacionPDNActual', '', array('type' => 'textarea', 'rows' => '3', 'class' => 'form-control', 'placeholder' => 'El objetivo de esta noble instituci&oacute;n')); }}
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
                                                            
                                                            <div class="margin-top-10">
                                                                {{ Form::submit('Guardar Nueva Dependencia', array('class' => 'btn green-haze')); }}
                                                            </div>
                                                            {{ Form::close() }}
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
@stop