@extends('viewAliado/layout')

@section('content')
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>CONFIGURACIONES <small>del Aliado</small></h1>
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
					
					@include('viewAliado/configuracionMenuLateral')
					
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
														<label class="control-label">Correo Electronico</label>
														<input type="text" placeholder="contacto@voluntarios.com" class="form-control"/>
													</div>
													<div class="row">
														<div class="col-md-9">
															<div class="form-group">
																<label class="control-label">Telefono</label>
																<input type="text" placeholder="+1 646 580 DEMO (6284)" class="form-control"/>
															</div>
														</div>
														<!--/span-->
														<div class="col-md-3">
															<div class="form-group">
																<label class="control-label">Extension</label>
														<input type="text" placeholder="+365" class="form-control"/>
															</div>
														</div>
														<!--/span-->
													</div>
													<div class="form-group">
														<label class="control-label">Direccion</label>
														<textarea class="form-control" rows="3" placeholder="Alguna direccion de contacto de las oficinas"></textarea>
													</div>
													<div class="form-group">
														<label class="control-label">Facebook</label>
														<div class="input-group">
															<span class="input-group-addon">
															facebook.com/
															</span>
															<input type="text" class="form-control" placeholder="voluntariosmx">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label">Twitter</label>
														<div class="input-group">
															<span class="input-group-addon">
															twitter.com/
															</span>
															<input type="text" class="form-control" placeholder="voluntariosmx">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label">Instagram</label>
														<div class="input-group">
															<span class="input-group-addon">
															instagram.com/
															</span>
															<input type="text" class="form-control" placeholder="voluntariosmx">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label">Pinterest</label>
														<div class="input-group">
															<span class="input-group-addon">
															pinterest.com/
															</span>
															<input type="text" class="form-control" placeholder="voluntariosmx">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label">Youtube</label>
														<div class="input-group">
															<span class="input-group-addon">
															youtube.com/
															</span>
															<input type="text" class="form-control" placeholder="voluntariosmx">
														</div>
													</div>
													<div class="margiv-top-10">
														<a href="#" class="btn green-haze"> Guardar Cambios </a>
													</div>
												</form>
											</div>
											<!-- END PERSONAL INFO TAB -->
											<!-- CHANGE AVATAR TAB -->
											<div class="tab-pane" id="tab_1_2">
												<p>
													 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
												</p>
												<form action="#" role="form">
													<div class="form-group">
														<div class="fileinput fileinput-new" data-provides="fileinput">
															<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
																<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/>
															</div>
															<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
															</div>
															<div>
																<span class="btn default btn-file">
																<span class="fileinput-new">
																Select image </span>
																<span class="fileinput-exists">
																Change </span>
																<input type="file" name="...">
																</span>
																<a href="#" class="btn default fileinput-exists" data-dismiss="fileinput">
																Remove </a>
															</div>
														</div>
													</div>
													<div class="margin-top-10">
														<a href="#" class="btn green-haze">
														Submit </a>
														<a href="#" class="btn default">
														Cancel </a>
													</div>
												</form>
											</div>
											<!-- END CHANGE AVATAR TAB -->
											<!-- CHANGE PASSWORD TAB -->
											<div class="tab-pane" id="tab_1_3">
												<form action="#">
													<div class="form-group">
														<label class="control-label">Current Password</label>
														<input type="password" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">New Password</label>
														<input type="password" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">Re-type New Password</label>
														<input type="password" class="form-control"/>
													</div>
													<div class="margin-top-10">
														<a href="#" class="btn green-haze">
														Change Password </a>
														<a href="#" class="btn default">
														Cancel </a>
													</div>
												</form>
											</div>
											<!-- END CHANGE PASSWORD TAB -->
											<!-- PRIVACY SETTINGS TAB -->
											<div class="tab-pane" id="tab_1_4">
												<form action="#">
													<table class="table table-light table-hover">
													<tr>
														<td>
															 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus..
														</td>
														<td>
															<label class="uniform-inline">
															<input type="radio" name="optionsRadios1" value="option1"/>
															Yes </label>
															<label class="uniform-inline">
															<input type="radio" name="optionsRadios1" value="option2" checked/>
															No </label>
														</td>
													</tr>
													<tr>
														<td>
															 Enim eiusmod high life accusamus terry richardson ad squid wolf moon
														</td>
														<td>
															<label class="uniform-inline">
															<input type="checkbox" value=""/> Yes </label>
														</td>
													</tr>
													<tr>
														<td>
															 Enim eiusmod high life accusamus terry richardson ad squid wolf moon
														</td>
														<td>
															<label class="uniform-inline">
															<input type="checkbox" value=""/> Yes </label>
														</td>
													</tr>
													<tr>
														<td>
															 Enim eiusmod high life accusamus terry richardson ad squid wolf moon
														</td>
														<td>
															<label class="uniform-inline">
															<input type="checkbox" value=""/> Yes </label>
														</td>
													</tr>
													</table>
													<!--end profile-settings-->
													<div class="margin-top-10">
														<a href="#" class="btn green-haze">
														Save Changes </a>
														<a href="#" class="btn default">
														Cancel </a>
													</div>
												</form>
											</div>
											<!-- END PRIVACY SETTINGS TAB -->
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