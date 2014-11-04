@extends('viewAdmin/layout')

@section('content')
<div class="page-container">
    <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>DEPENDENCIAS <small>de la plataforma</small></h1>
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
            <!-- BEGIN PAGE BREADCRUMB -->
            <ul class="page-breadcrumb breadcrumb hide">
                <li>
                    <a href="#">Home</a><i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="extra_profile.html">Pages</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li class="active">
                    User Account
                </li>
            </ul>
            <!-- END PAGE BREADCRUMB -->
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
                                            <span class="caption-subject font-blue-madison bold uppercase">Información de las Dependencias</span>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab_1_1" data-toggle="tab">Listado</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_3" data-toggle="tab">Nueva</a>
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
                                                                # Proyectos
                                                            </th>
                                                            <th>
                                                                # Aliados
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
                                                            <th><input type="text" id="i-3" class="search_init" style="display: none;"></th>
                                                            <th class="last small">
                                                                <input type="text" id="i-4" class="search_init" style="display: none;">
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($dependencias as $dependencia)
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">{{ $dependencia->razonSocial }}</a>
                                                            </td>
                                                            <td>
                                                                {{ $dependencia->proyectos->count() }}
                                                            </td>
                                                            <td>
                                                                {{ $dependencia->aliados->count() }}
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
                                                                    Razon Social
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
                                                            {{ Form::open(array('route' => 'adminIndex', 'method' => 'post')) }}
                                                            <div class="form-group">
                                                                {{ Form::label('rfc', 'RFC', array('class' => 'control-label')); }}
                                                                {{ Form::text('rfc', '', array('type' => 'text', 'class' => 'form-control', 'placeholder' => 'AAA010101AAA')); }}
                                                            </div>
                                                            <div class="form-group">
                                                                {{ Form::label('razonSocial', 'Raz&oacute;n Social', array('class' => 'control-label')); }}
                                                                {{ Form::text('razonSocial', '', array('type' => 'text', 'class' => 'form-control', 'placeholder' => 'Ingrese la Raz&oacute;n Social de la Dependencia')); }}
                                                            </div>
                                                            <div class="form-group">
                                                                {{ Form::label('objetivo', 'Objetivo', array('class' => 'control-label')); }}
                                                                {{ Form::textarea('objetivo', '', array('type' => 'textarea', 'rows' => '3', 'class' => 'form-control', 'placeholder' => 'El objetivo de esta noble instituci&oacute;n')); }}
                                                            </div>
                                                            <h3 class="form-section">Redes Sociales</h3>
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        facebook.com/
                                                                    </span>
                                                                    {{ Form::text('rs_facebook', '', array('type' => 'text', 'class' => 'form-control', 'placeholder' => 'voluntariosMX')); }}
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        twitter.com/
                                                                    </span>
                                                                    {{ Form::text('rs_twitter', '', array('type' => 'text', 'class' => 'form-control', 'placeholder' => 'voluntariosMX')); }}
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        instagram.com/
                                                                    </span>
                                                                    {{ Form::text('rs_instagram', '', array('type' => 'text', 'class' => 'form-control', 'placeholder' => 'voluntariosMX')); }}
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        pinterest.com/
                                                                    </span>
                                                                    {{ Form::text('rs_pinterest', '', array('type' => 'text', 'class' => 'form-control', 'placeholder' => 'voluntariosMX')); }}
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        youtube.com/
                                                                    </span>
                                                                    {{ Form::text('rs_youtube', '', array('type' => 'text', 'class' => 'form-control', 'placeholder' => 'voluntariosMX')); }}
                                                                </div>
                                                            </div>

                                                            <div id='contactosHidden'>
                                                                
                                                            </div>
                                                            
                                                            <div class="margin-top-10">
                                                                {{ Form::submit('Guardar Nueva Dependencia', array('class' => 'btn green-haze')); }}
                                                            </div>
                                                            {{ Form::close() }}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="portlet light profile-sidebar-portlet">
                                                            <div class="portlet light bordered">
                                                                <div class="portlet-title">
                                                                    <div class="caption">
                                                                        <i class="icon-equalizer font-blue-hoki"></i>
                                                                        <span class="caption-subject font-blue-hoki bold uppercase">Agregar Contacto</span>
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
                                                                                    {{ Form::label('nombreContacto', 'Nombre', array('class' => 'control-label')); }}
                                                                                    {{ Form::text('nombreContacto', '', array('type' => 'text', 'id' => 'firstName', 'class' => 'form-control', 'placeholder' => 'Juan Pablo')); }}
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    {{ Form::label('apellidoPaternoContacto', 'Apellido Paterno', array('class' => 'control-label')); }}
                                                                                    {{ Form::text('apellidoPaternoContacto', '', array('type' => 'text', 'id' => 'lastNameP', 'class' => 'form-control', 'placeholder' => 'Escobar')); }}
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    {{ Form::label('apellidoMaternoContacto', 'Apellido Materno', array('class' => 'control-label')); }}
                                                                                    {{ Form::text('apellidoMaternoContacto', '', array('type' => 'text', 'id' => 'lastNameM', 'class' => 'form-control', 'placeholder' => 'Escobar')); }}
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                        </div>
                                                                        <!--/row-->
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    {{ Form::label('puestoContacto', 'Puesto', array('class' => 'control-label')); }}
                                                                                    {{ Form::text('puestoContacto', '', array('type' => 'text', 'id' => 'puestoContacto', 'class' => 'form-control', 'placeholder' => 'Gerente de Sistemas')); }}
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    {{ Form::label('emailContacto', 'e-Mail', array('class' => 'control-label')); }}
                                                                                    {{ Form::email('emailContacto', '', array('type' => 'text', 'id' => 'emailContacto', 'class' => 'form-control', 'placeholder' => 'contacto@voluntariosmx.gob.mx')); }}
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-9">
                                                                                <div class="form-group">
                                                                                    {{ Form::label('telefonoContacto', 'Tel&eacute;fono', array('class' => 'control-label')); }}
                                                                                    {{ Form::text('telefonoContacto', '', array('type' => 'text', 'id' => 'telefonoContacto', 'class' => 'form-control', 'placeholder' => '555315525')); }}
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                    {{ Form::label('extensionContacto', 'Extensi&oacute;n', array('class' => 'control-label')); }}
                                                                                    {{ Form::text('extensionContacto', '', array('type' => 'text', 'id' => 'extensionContacto', 'class' => 'form-control', 'placeholder' => '2388')); }}
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-actions right">
                                                                        {{ Form::button('<i class="fa fa-check"></i> Agregar Contacto', array('class' => 'btn blue', 'id' => 'agregarContacto')); }}
                                                                    </div>
                                                                    <!-- END FORM-->
                                                                </div>

                                                            </div>

                                                            <table class="table table-striped table-hover table-bordered table-responsive" id="basicTable_vol2">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            Nombre Completo
                                                                        </th>
                                                                        <th>
                                                                            Puesto
                                                                        </th>
                                                                        <th>
                                                                            Email
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
                                                                            <a href="{{ route('viewPerfilVoluntario') }}" target="_blank">Alex Nilson</a>
                                                                        </td>
                                                                        <td>
                                                                            1234
                                                                        </td>
                                                                        <td>
                                                                            1234
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