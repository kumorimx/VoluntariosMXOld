@extends('viewAdmin/layout')

@section('content')
<div class="page-container">
	<div class="page-head">
		<div class="container">
			<div class="page-title">
				<h1>CONFIGURACIONES <small>de la plataforma</small></h1>
			</div>
			<div class="page-toolbar">
			</div>
		</div>
	</div>
	<div class="page-content">
		<div class="container">
			<div class="row margin-top-10">
				
				<div class="col-md-6 col-sm-6">
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption caption-md">
								<i class="icon-bar-chart theme-font hide"></i>
								<span class="caption-subject theme-font bold uppercase">Actividad Plataforma</span>
								<span class="caption-helper hide">stats semanales...</span>
							</div>
							<div class="actions">
								<div class="btn-group btn-group-devided" data-toggle="buttons">
									<label class="btn btn-transparent grey-salsa btn-circle btn-sm active">
									<input type="radio" name="options" class="toggle" id="option1">Hoy</label>
									<label class="btn btn-transparent grey-salsa btn-circle btn-sm">
									<input type="radio" name="options" class="toggle" id="option2">Semana</label>
									<label class="btn btn-transparent grey-salsa btn-circle btn-sm">
									<input type="radio" name="options" class="toggle" id="option2">Mes</label>
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-scrollable table-scrollable-borderless">
								<table class="table table-hover table-light">
								<thead>
								<tr class="uppercase">
									<th colspan="2">
										 Proyecto
									</th>
									<th>
										 Eventos
									</th>
									<th>
										 Actividades
									</th>
									<th>
										 Voluntarios
									</th>
									<th>
										 Finalizado
									</th>
								</tr>
								</thead>
								<tr>
									<td class="fit">
										<img class="user-pic" src="../../assets/admin/layout3/img/avatar4.jpg">
									</td>
									<td>
										<a href="javascript:;" class="primary-link">Brain</a>
									</td>
									<td>
										 $345
									</td>
									<td>
										 45
									</td>
									<td>
										 124
									</td>
									<td>
										<span class="bold theme-font">80%</span>
									</td>
								</tr>
								<tr>
									<td class="fit">
										<img class="user-pic" src="../../assets/admin/layout3/img/avatar5.jpg">
									</td>
									<td>
										<a href="javascript:;" class="primary-link">Nick</a>
									</td>
									<td>
										 $560
									</td>
									<td>
										 12
									</td>
									<td>
										 24
									</td>
									<td>
										<span class="bold theme-font">67%</span>
									</td>
								</tr>
								<tr>
									<td class="fit">
										<img class="user-pic" src="../../assets/admin/layout3/img/avatar6.jpg">
									</td>
									<td>
										<a href="javascript:;" class="primary-link">Tim</a>
									</td>
									<td>
										 $1,345
									</td>
									<td>
										 450
									</td>
									<td>
										 46
									</td>
									<td>
										<span class="bold theme-font">98%</span>
									</td>
								</tr>
								<tr>
									<td class="fit">
										<img class="user-pic" src="../../assets/admin/layout3/img/avatar7.jpg">
									</td>
									<td>
										<a href="javascript:;" class="primary-link">Tom</a>
									</td>
									<td>
										 $645
									</td>
									<td>
										 50
									</td>
									<td>
										 89
									</td>
									<td>
										<span class="bold theme-font">58%</span>
									</td>
								</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<!-- BEGIN PORTLET-->
					<div class="portlet light">
						<div class="portlet-title tabbable-line">
							<div class="caption caption-md">
								<i class="icon-globe theme-font hide"></i>
								<span class="caption-subject theme-font bold uppercase">Notificaciones</span>
							</div>
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#tab_1_1" data-toggle="tab">
									Sistema </a>
								</li>
								<li>
									<a href="#tab_1_2" data-toggle="tab">
									Reportes </a>
								</li>
							</ul>
						</div>
						<div class="portlet-body">
							<!--BEGIN TABS-->
							<div class="tab-content">
								<div class="tab-pane active" id="tab_1_1">
									<div class="scroller" style="height: 337px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
										<ul class="feeds">
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 Se ha completado un evento.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 Just now
													</div>
												</div>
											</li>
											<li>
												<a href="javascript:;">
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 Nombre del evento ha sido creado.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 20 mins
													</div>
												</div>
												</a>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-danger">
																<i class="fa fa-bolt"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 Database server #12 overloaded. Please fix the issue.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 24 mins
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-info">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New order received and pending for process.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 30 mins
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New payment refund and pending approval.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 40 mins
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-warning">
																<i class="fa fa-plus"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New member registered. Pending approval.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 1.5 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
																Overdue </span>
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 2 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-default">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 Prod01 database server is overloaded 90%.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 3 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-warning">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New group created. Pending manager review.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 5 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-info">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 Order payment failed.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 18 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-default">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New application received.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 21 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-info">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 Dev90 web server restarted. Pending overall system check.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 22 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-default">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New member registered. Pending approval
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 21 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-info">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 L45 Network failure. Schedule maintenance.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 22 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-default">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 Order canceled with failed payment.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 21 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-info">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 Web-A2 clound instance created. Schedule full scan.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 22 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-default">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 Member canceled. Schedule account review.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 21 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-info">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New order received. Please take care of it.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 22 hours
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="tab-pane" id="tab_1_2">
									<div class="scroller" style="height: 337px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
										<ul class="feeds">
											<li>
												<a href="javascript:;">
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New user registered
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 Just now
													</div>
												</div>
												</a>
											</li>
											<li>
												<a href="javascript:;">
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New order received
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 10 mins
													</div>
												</div>
												</a>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-danger">
																<i class="fa fa-bolt"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 Order #24DOP4 has been rejected. <span class="label label-sm label-danger ">
																Take action <i class="fa fa-share"></i>
																</span>
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 24 mins
													</div>
												</div>
											</li>
											<li>
												<a href="javascript:;">
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New user registered
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 Just now
													</div>
												</div>
												</a>
											</li>
											<li>
												<a href="javascript:;">
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New user registered
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 Just now
													</div>
												</div>
												</a>
											</li>
											<li>
												<a href="javascript:;">
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New user registered
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 Just now
													</div>
												</div>
												</a>
											</li>
											<li>
												<a href="javascript:;">
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New user registered
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 Just now
													</div>
												</div>
												</a>
											</li>
											<li>
												<a href="javascript:;">
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New user registered
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 Just now
													</div>
												</div>
												</a>
											</li>
											<li>
												<a href="javascript:;">
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New user registered
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 Just now
													</div>
												</div>
												</a>
											</li>
											<li>
												<a href="javascript:;">
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New user registered
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 Just now
													</div>
												</div>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!--END TABS-->
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>
		</div>
	</div>
</div>
@stop