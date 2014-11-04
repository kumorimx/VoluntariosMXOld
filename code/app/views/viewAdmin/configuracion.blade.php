@extends('viewAdmin/layout')

@section('content')
<div class="page-container">
    <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>CONFIGURACIONES <small>de la plataforma</small></h1>
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
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="row margin-top-10">
                <div class="col-md-12">

                    @include('viewAdmin/configuracionMenuLateral')

                    <!-- BEGIN PROFILE CONTENT -->
                    <div class="profile-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption caption-md">
                                            <i class="icon-globe theme-font hide"></i>
                                            <span class="caption-subject font-blue-madison bold uppercase">Contacto Plataforma</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <!-- PERSONAL INFO TAB -->
                                            <div class="tab-pane active" id="tab_1_1">
                                                <form role="form" action="#">
                                                    <div class="form-group">
                                                        {{ Form::label('adm_email', 'Correo electr&oacute;nico', array('class' => 'control-label')) }}
                                                        {{ Form::text('adm_email', $params->email, array('type' => 'text', 'placeholder' => 'contacto@voluntarios.mx', 'class' => 'form-control')) }}
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                {{ Form::label('adm_telefono', 'Tel&eacute;fono', array('class' => 'control-label')) }}
                                                                {{ Form::text('adm_telefono', $params->telefono1, array('type' => 'text', 'placeholder' => '6691234567', 'class' => 'form-control')) }}
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                {{ Form::label('adm_extension', 'Extensi&oacute;n', array('class' => 'control-label')) }}
                                                                {{ Form::text('adm_extension', $params->extension1, array('type' => 'text', 'placeholder' => '1234', 'class' => 'form-control')) }}
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('adm_direccion', 'Direcci&oacute;n', array('class' => 'control-label')) }}
                                                        {{ Form::textarea('adm_direccion', $params->direccion, array('type' => 'textarea', 'placeholder' => 'contacto@voluntarios.mx', 'class' => 'form-control', 'rows' => '3')) }}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Facebook</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                facebook.com/
                                                            </span>
                                                            {{ Form::text('adm_facebook', $params->facebook, array('type' => 'text', 'class' => 'form-control')) }}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Twitter</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                twitter.com/
                                                            </span>
                                                            {{ Form::text('adm_twitter', $params->twitter, array('type' => 'text', 'class' => 'form-control')) }}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Instagram</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                instagram.com/
                                                            </span>
                                                            {{ Form::text('adm_instagram', $params->instagram, array('type' => 'text', 'class' => 'form-control')) }}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Pinterest</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                pinterest.com/
                                                            </span>
                                                            {{ Form::text('adm_pinterest', $params->pinterest, array('type' => 'text', 'class' => 'form-control')) }}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Youtube</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                youtube.com/
                                                            </span>
                                                            {{ Form::text('adm_youtube', $params->youtube, array('type' => 'text', 'class' => 'form-control')) }}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Google+</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                plus.google.com/
                                                            </span>
                                                            {{ Form::text('adm_gplus', $params->gplus, array('type' => 'text', 'class' => 'form-control')) }}
                                                        </div>
                                                    </div>
                                                    <div class="margiv-top-10">
                                                        <a href="#" class="btn green-haze"> Guardar Cambios </a>
                                                    </div>
                                                </form>
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