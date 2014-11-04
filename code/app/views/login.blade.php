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
						<div class="content-form-page" style="background: transparent;">
							<div class="row">
								<div class="col-md-8 col-sm-8">
									<h1>Conectate a tu cuenta</h1>
									<form class="form-horizontal" role="form">
										<fieldset>
											<div class="form-group">
												<label for="email" class="col-lg-4 control-label">Correo Electronico <span class="require">*</span></label>
												<div class="col-lg-8">
													<input type="text" class="form-control" id="email">
												</div>
											</div>
										</fieldset>
										<fieldset>
											<div class="form-group">
												<label for="password" class="col-lg-4 control-label">Tu Contraseña <span class="require">*</span></label>
												<div class="col-lg-8">
													<input type="text" class="form-control" id="password">
												</div>
											</div>
										</fieldset>
										<div class="row">
											<div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">                        
												<button type="submit" class="btn btn-primary">Entrar a mi cuenta</button>
											</div>
										</div>
									</form>

									<div class="form-info" style="text-align:center;">
										<a href="{{ route('viewRegistro') }}"><h2><em>Crea una cuenta</em> si aun no tienes una</h2></a>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 pull-right">
									<div class="form-info">
										<h2><em>Conectate</em> con</h2>
										<button class="btn blue btn-lg btn-block" style="text-align: left;font-size: 20px;font-weight: bold;">
											<i class="fa fa-facebook" style="padding-right: 20px;font-size: 17px;"></i> Facebook
										</button>
										<button class="btn btn-info btn-lg btn-block" style="text-align: left;font-size: 20px;font-weight: bold;">
											<i class="fa fa-twitter" style="padding-right: 20px;font-size: 17px;"></i> Twitter
										</button>
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