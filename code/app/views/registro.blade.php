@extends('layout')

@section('content')
<div class="main">
	<div class="container">
		<div class="row margin-bottom-40">
			<div class="main">
				<div class="container">
					<!-- BEGIN SIDEBAR & CONTENT -->
					<div class="row margin-bottom-40">
					<!-- BEGIN CONTENT -->
					<div class="col-md-12 col-sm-12">
						<h1>Crear una cuenta</h1>
						<div class="content-form-page" style="background: transparent;">
							<div class="row">
								<div class="col-md-8 col-sm-8">
								{{ Form::open(array('route' => 'registrarVoluntario', 'method'=> 'post', 'class' => 'form-horizontal', 'role' => 'form')) }}
										<fieldset>
											<legend>Información Personal</legend>
											<div class="form-group">
											{{ Form::label('vol_nombre', 'Nombre', array('class' => 'col-lg-4 control-label')) }}
												<div class="col-lg-8">
												{{ Form::text('vol_nombre', '', array('type' => 'text', 'class' => 'form-control', 'placeholder' => 'Javier', 'id' => 'vol_nombre')) }}
												</div>
											</div>
											<div class="form-group">
											{{ Form::label('vol_apellidoPaterno', 'Apellido Paterno', array('class' => 'col-lg-4 control-label')) }}
												<div class="col-lg-8">
												{{ Form::text('vol_apellidoPaterno', '', array('type' => 'text', 'class' => 'form-control', 'placeholder' => 'Flores', 'id' => 'vol_apellidoPaterno')) }}
												</div>
											</div>
											<div class="form-group">
											{{ Form::label('vol_apellidoMaterno', 'Apellido Materno', array('class' => 'col-lg-4 control-label')) }}
												<div class="col-lg-8">
												{{ Form::text('vol_apellidoMaterno', '', array('type' => 'text', 'class' => 'form-control', 'placeholder' => 'Plaza', 'id' => 'vol_apellidoMaterno')) }}
												</div>
											</div>
											<div class="form-group">
											{{ Form::label('vol_email', 'Correo Electr&oacute;nico', array('class' => 'col-lg-4 control-label')) }}
												<div class="col-lg-8">
												{{ Form::email('vol_email', '', array('type' => 'text', 'class' => 'form-control', 'placeholder' => 'tumismo@correo.com', 'id' => 'vol_email')) }}
												</div>
											</div>
										</fieldset>
										<fieldset>
											<legend>Tu contraseña</legend>
											<div class="form-group">
											{{ Form::label('vol_password', 'Contrase&ntilde;a', array('class' => 'col-lg-4 control-label')) }}
												<div class="col-lg-8">
												{{ Form::password('vol_password', '', array('type' => 'password', 'class' => 'form-control', 'placeholder' => 'Utiliza una contrase&ntilde;a segura', 'id' => 'vol_password')) }}
												</div>
											</div>
											<div class="form-group">
											{{ Form::label('vol_passwordConfirm', 'Repite tu contrase&ntilde;a', array('class' => 'col-lg-4 control-label')) }}
												<div class="col-lg-8">
												{{ Form::password('vol_passwordConfirm', '', array('type' => 'password', 'class' => 'form-control', 'placeholder' => 'Utiliza una contrase&ntilde;a segura', 'id' => 'vol_passwordConfirm')) }}
												</div>
											</div>
										</fieldset>
										<div class="row">
											<div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
												{{ Form::submit('Crear cuenta', array('class' => 'btn btn-primary')) }}                      
											</div>
										</div>
										{{ Form::close() }}
								</div>
								<div class="col-md-4 col-sm-4 pull-right">
									<div class="form-info">
										<h2><em>Registrate</em> con</h2>
										<button class="btn blue btn-lg btn-block" style="text-align: left;font-size: 20px;font-weight: bold;">
											<i class="fa fa-facebook" style="padding-right: 20px;font-size: 17px;"></i> Facebook
										</button>
										<button class="btn btn-info btn-lg btn-block" style="text-align: left;font-size: 20px;font-weight: bold;">
											<i class="fa fa-twitter" style="padding-right: 20px;font-size: 17px;"></i> Twitter
										</button>
									</div>
									<div class="form-info">
										<h2><em>Información</em> Importante</h2>
										<p>Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed sit nonumy nibh sed euismod ut laoreet dolore magna aliquarm erat sit volutpat. Nostrud exerci tation ullamcorper suscipit lobortis nisl aliquip  commodo quat.</p>

										<p>Duis autem vel eum iriure at dolor vulputate velit esse vel molestie at dolore.</p>

										<button type="button" class="btn btn-default">Mas detalles</button>
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
		</div>
	</div>
</div>
@stop