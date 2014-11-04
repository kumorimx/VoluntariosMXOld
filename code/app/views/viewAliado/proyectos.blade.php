@extends('viewAliado/layout')

@section('content')
<div class="page-container">
    <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Proyectos <small>activos</small></h1>
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
            <div class="row margin-top-10">
                <div class="col-md-12">

                    <div class="profile-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption caption-md">
                                            <i class="icon-globe theme-font hide"></i>
                                            <span class="caption-subject font-blue-madison bold uppercase">Listado de proyectos</span>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab_1_1" data-toggle="tab">Listado</a>
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
                                                                Fecha Inicio
                                                            </th>
                                                            <th>
                                                                Fecha Fin
                                                            </th>
                                                            <th>
                                                                Accciones
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <thead id="filtros">
                                                        <tr>
                                                            <th><input type="text" id="i-0" class="search_init"></th>
                                                            <th><input type="text" id="i-1" class="search_init" ></th>
                                                            <th><input type="text" id="i-2" class="search_init" ></th>
                                                            <th class="last small">
                                                                <input type="text" id="i-3" class="search_init" style="display: none;">
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilAliado') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                17-Enero-2014
                                                            </td>
                                                            <td>
                                                                17-Diciembre-2014
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Aprobar </a>
                                                                <a class="edit" href="javascript:;">
                                                                    Descartar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilAliado') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                17-Enero-2014
                                                            </td>
                                                            <td>
                                                                17-Diciembre-2014
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Aprobar </a>
                                                                <a class="edit" href="javascript:;">
                                                                    Descartar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilAliado') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                17-Enero-2014
                                                            </td>
                                                            <td>
                                                                17-Diciembre-2014
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Aprobar </a>
                                                                <a class="edit" href="javascript:;">
                                                                    Descartar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilAliado') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                17-Enero-2014
                                                            </td>
                                                            <td>
                                                                17-Diciembre-2014
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Aprobar </a>
                                                                <a class="edit" href="javascript:;">
                                                                    Descartar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilAliado') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                17-Enero-2014
                                                            </td>
                                                            <td>
                                                                17-Diciembre-2014
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Aprobar </a>
                                                                <a class="edit" href="javascript:;">
                                                                    Descartar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilAliado') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                17-Enero-2014
                                                            </td>
                                                            <td>
                                                                17-Diciembre-2014
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Aprobar </a>
                                                                <a class="edit" href="javascript:;">
                                                                    Descartar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilAliado') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                17-Enero-2014
                                                            </td>
                                                            <td>
                                                                17-Diciembre-2014
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Aprobar </a>
                                                                <a class="edit" href="javascript:;">
                                                                    Descartar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilAliado') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                17-Enero-2014
                                                            </td>
                                                            <td>
                                                                17-Diciembre-2014
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Aprobar </a>
                                                                <a class="edit" href="javascript:;">
                                                                    Descartar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilAliado') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                17-Enero-2014
                                                            </td>
                                                            <td>
                                                                17-Diciembre-2014
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Aprobar </a>
                                                                <a class="edit" href="javascript:;">
                                                                    Descartar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilAliado') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                17-Enero-2014
                                                            </td>
                                                            <td>
                                                                17-Diciembre-2014
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Aprobar </a>
                                                                <a class="edit" href="javascript:;">
                                                                    Descartar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilAliado') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                17-Enero-2014
                                                            </td>
                                                            <td>
                                                                17-Diciembre-2014
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Aprobar </a>
                                                                <a class="edit" href="javascript:;">
                                                                    Descartar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilAliado') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                17-Enero-2014
                                                            </td>
                                                            <td>
                                                                17-Diciembre-2014
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Aprobar </a>
                                                                <a class="edit" href="javascript:;">
                                                                    Descartar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilAliado') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                17-Enero-2014
                                                            </td>
                                                            <td>
                                                                17-Diciembre-2014
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Aprobar </a>
                                                                <a class="edit" href="javascript:;">
                                                                    Descartar </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('viewPerfilAliado') }}" target="_blank">Nombre del Proyecto</a>
                                                            </td>
                                                            <td>
                                                                17-Enero-2014
                                                            </td>
                                                            <td>
                                                                17-Diciembre-2014
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;">
                                                                    Aprobar </a>
                                                                <a class="edit" href="javascript:;">
                                                                    Descartar </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
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