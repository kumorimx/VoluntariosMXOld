@extends('layout')

@section('content')

<!-- BEGIN SLIDER -->
<div class="page-perfil">
  <div class="">
    <div class="fullwidthabnner" style="background: url('http://lorempixel.com/1400/417/nature') no-repeat top center;">
    	<div class="main">
	    	<div class="container">
	        	<div class="row" style="">
	        		<div class="col-md-12">
	        			<div class="header-profile">
		        			<div class="user-data">
			                    <div class="avatar ">
			                        <a href="javascript:void(0)" class="js-get-user-avatars">
			                            <div class="avatar-image">
											<img width="300" height="300" src="http://lorempixel.com/300/300/business">
			                            </div>
			                        </a>
			                    </div>

			                    <h1 class="name">Secretaria de Gobernaci&oacute;n</h1>
                                <div class="controls">
                                    <a>
                                    	<i class="fa fa-user"></i> Dependencia Master
                                    </a>
                                </div>
	                            <div class="stats">
								    <ul class="list-unstyled">
								        <li>
								            Aliados
								            <span>20</span>
								        </li>
								        <li>
								            Proyectos
								            <span>12</span>
								        </li>
								        <li>
								            Eventos
								            <span>45</span>
								        </li>
								    </ul>
								</div>
			                </div>
			            </div>
	        		</div>
				</div>
			</div>
		</div>
    </div>
  </div>
</div>
<!-- END SLIDER -->

<div class="main page-voluntario">
  <div class="container">
    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40">
      <!-- BEGIN CONTENT -->

      <div class="col-md-12 col-sm-12 tab-style-1">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab-1" data-toggle="tab">Perfil</a></li>
          <li><a href="#tab-2" data-toggle="tab">Aliados</a></li>
          <li><a href="#tab-3" data-toggle="tab">Proyectos y Eventos</a></li>
          <li><a href="#tab-4" data-toggle="tab">Historial</a></li>
        </ul>
        <div class="tab-content" style="padding: 0px 15px;">
          <div class="tab-pane row fade in active" id="tab-1">
            <div class="content-page" style="background: #FAFAFA;">
          <div class="row">
            <!-- BEGIN LEFT SIDEBAR -->            
            <div class="col-md-8 col-sm-8 blog-item">
                <div class="form-group">
                    <label for="email" class="col-lg-3 control-label">Nombre</label>
                    <div class="col-lg-8">
                      <label for="email" class="control-label">Nombre de la Dependecia (Osea empresa)</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-lg-3 control-label">Objetivo</label>
                    <div class="col-lg-8">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.

                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.
                      </p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-lg-3 control-label">Correo Electronico</label>
                    <div class="col-lg-8">
                      <label for="email" class="control-label">voluntario@retos.gob.mx</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-lg-3 control-label">Telefono</label>
                    <div class="col-lg-8">
                      <label for="email" class="control-label">01 800 123456</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-lg-3 control-label">Direccion</label>
                    <div class="col-lg-8">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.

                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.
                      </p>
                    </div>
                  </div>
            </div>
            <!-- END LEFT SIDEBAR -->

            <!-- BEGIN RIGHT SIDEBAR -->            
            <div class="col-md-4 col-sm-4 blog-sidebar">

              <!-- BEGIN BLOG TAGS -->
              <div class="blog-tags margin-bottom-20">
                <h2>Redes Sociales</h2>
                <ul class="social-footer list-unstyled list-inline pull-right">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
              <!-- END BLOG TAGS -->
            </div>
            <!-- END RIGHT SIDEBAR -->            
          </div>
        </div>
          </div>
          <div class="tab-pane row fade blog-item" id="tab-2">
            <div class="col-md-12 col-sm-12 margin-top-20">
				<div class="row">
	              <div class="col-md-12">
	                  <div class="row margin-bottom-20">
	                    <div class="col-md-3">
	                      <div class="service-box-v1">
	                        <div><img width="50" height="50" src="https://s3-eu-west-1.amazonaws.com/web-lvp-prod/avatar/0001/01/thumb_94_avatar_normal.jpeg"></div>
	                        <h2><a href="{{ route('viewPerfilAliado') }}">Nombre Aliado</a></h2>
	                      </div>
	                    </div>
	                    <div class="col-md-3">
	                      <div class="service-box-v1">
	                        <div><img width="50" height="50" src="https://s3-eu-west-1.amazonaws.com/web-lvp-prod/avatar/0001/01/thumb_94_avatar_normal.jpeg"></div>
	                        <h2><a href="{{ route('viewPerfilAliado') }}">Nombre Aliado</a></h2>
	                      </div>
	                    </div>
	                    <div class="col-md-3">
	                      <div class="service-box-v1">
	                        <div><img width="50" height="50" src="https://s3-eu-west-1.amazonaws.com/web-lvp-prod/avatar/0001/01/thumb_94_avatar_normal.jpeg"></div>
	                        <h2><a href="{{ route('viewPerfilAliado') }}">Nombre Aliado</a></h2>
	                      </div>
	                    </div>
	                    <div class="col-md-3">
	                      <div class="service-box-v1">
	                        <div><img width="50" height="50" src="https://s3-eu-west-1.amazonaws.com/web-lvp-prod/avatar/0001/01/thumb_94_avatar_normal.jpeg"></div>
	                        <h2><a href="{{ route('viewPerfilAliado') }}">Nombre Aliado</a></h2>
	                      </div>
	                    </div>
	                  </div>
	              </div>
	            </div>
            </div>
          </div>


          <div class="tab-pane fade" id="tab-3">
			<div class="col-md-12">
				<div class="form-info logros-reconocimientos">
					<h2>
						<img width="50" height="50" src="https://s3-eu-west-1.amazonaws.com/web-lvp-prod/avatar/0001/01/thumb_94_avatar_normal.jpeg">
						<em>Proyecto Fulanito</em> <button data-func="hideAccordion" data-accordion="accordion1" type="button" class="btn btn-default pull-right">Ocultar Eventos</button>
					</h2>
				</div>
				<div style="padding-left: 20px;">
					<div id="accordion1" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">
                                    Senior Software Engineer
                                    </a>
                                </h4>
                            </div>
                            <div style="height: 0px;" id="accordion1_1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="lead">Voluntarios is seeking an experienced.</p>

                                    <h4>Requirements</h4>
                                    <ul>
                                        <li>Strong background in PHP and Web application development</li>
                                        <li>Javascript a plus</li>
                                        <li>Bachelor's degree in CS and/or equivalent industry experience</li>
                                    </ul>

                                    <p>Experience building production applications with Voluntarios would be good to have as well.</p>

                                    <h4>Responsibilities</h4>
                                    <ul>
                                        <li>Conduct detailed analysis of problem domains and customer requirements</li>
                                        <li>Develop innovative software designs and architectures</li>
                                    </ul>

                                    <hr>
                                    <p>Qualified candidates, send resume and salary requirements with form in the sidebar.</p>
                                </div>
                            </div>
                        </div>         
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">
                                    Systems Administrator/Operations Engineer
                                    </a>
                                </h4>
                            </div>
                            <div id="accordion1_2" class="panel-collapse collapse">
                                 <div class="panel-body">
                                    <p class="lead">Voluntarios is seeking an experienced.</p>

                                    <h4>Requirements</h4>
                                    <ul>
                                        <li>Strong background in PHP and Web application development</li>
                                        <li>Javascript a plus</li>
                                        <li>Bachelor's degree in CS and/or equivalent industry experience</li>
                                    </ul>

                                    <p>Experience building production applications with Voluntarios would be good to have as well.</p>

                                    <h4>Responsibilities</h4>
                                    <ul>
                                        <li>Conduct detailed analysis of problem domains and customer requirements</li>
                                        <li>Develop innovative software designs and architectures</li>
                                    </ul>

                                    <hr>
                                    <p>Qualified candidates, send resume and salary requirements with form in the sidebar.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">
                                    Technical Support Engineer
                                    </a>
                                </h4>
                            </div>
                            <div style="height: 0px;" id="accordion1_3" class="panel-collapse collapse">
                                 <div class="panel-body">
                                    <p class="lead">Voluntarios is seeking an experienced.</p>

                                    <h4>Requirements</h4>
                                    <ul>
                                        <li>Strong background in PHP and Web application development</li>
                                        <li>Javascript a plus</li>
                                        <li>Bachelor's degree in CS and/or equivalent industry experience</li>
                                    </ul>

                                    <p>Experience building production applications with Voluntarios would be good to have as well.</p>

                                    <h4>Responsibilities</h4>
                                    <ul>
                                        <li>Conduct detailed analysis of problem domains and customer requirements</li>
                                        <li>Develop innovative software designs and architectures</li>
                                    </ul>

                                    <hr>
                                    <p>Qualified candidates, send resume and salary requirements with form in the sidebar.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">
                                    Senior Software Engineer
                                    </a>
                                </h4>
                            </div>
                            <div style="height: 0px;" id="accordion1_4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="lead">Voluntarios is seeking an experienced.</p>

                                    <h4>Requirements</h4>
                                    <ul>
                                        <li>Strong background in PHP and Web application development</li>
                                        <li>Javascript a plus</li>
                                        <li>Bachelor's degree in CS and/or equivalent industry experience</li>
                                    </ul>

                                    <p>Experience building production applications with Voluntarios would be good to have as well.</p>

                                    <h4>Responsibilities</h4>
                                    <ul>
                                        <li>Conduct detailed analysis of problem domains and customer requirements</li>
                                        <li>Develop innovative software designs and architectures</li>
                                    </ul>

                                    <hr>
                                    <p>Qualified candidates, send resume and salary requirements with form in the sidebar.</p>
                                </div>
                            </div>
                        </div>         
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">
                                    Systems Administrator/Operations Engineer
                                    </a>
                                </h4>
                            </div>
                            <div id="accordion1_5" class="panel-collapse collapse">
                                 <div class="panel-body">
                                    <p class="lead">Voluntarios is seeking an experienced.</p>

                                    <h4>Requirements</h4>
                                    <ul>
                                        <li>Strong background in PHP and Web application development</li>
                                        <li>Javascript a plus</li>
                                        <li>Bachelor's degree in CS and/or equivalent industry experience</li>
                                    </ul>

                                    <p>Experience building production applications with Voluntarios would be good to have as well.</p>

                                    <h4>Responsibilities</h4>
                                    <ul>
                                        <li>Conduct detailed analysis of problem domains and customer requirements</li>
                                        <li>Develop innovative software designs and architectures</li>
                                    </ul>

                                    <hr>
                                    <p>Qualified candidates, send resume and salary requirements with form in the sidebar.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">
                                    Technical Support Engineer
                                    </a>
                                </h4>
                            </div>
                            <div style="height: 0px;" id="accordion1_6" class="panel-collapse collapse">
                                 <div class="panel-body">
                                    <p class="lead">Voluntarios is seeking an experienced.</p>

                                    <h4>Requirements</h4>
                                    <ul>
                                        <li>Strong background in PHP and Web application development</li>
                                        <li>Javascript a plus</li>
                                        <li>Bachelor's degree in CS and/or equivalent industry experience</li>
                                    </ul>

                                    <p>Experience building production applications with Voluntarios would be good to have as well.</p>

                                    <h4>Responsibilities</h4>
                                    <ul>
                                        <li>Conduct detailed analysis of problem domains and customer requirements</li>
                                        <li>Develop innovative software designs and architectures</li>
                                    </ul>

                                    <hr>
                                    <p>Qualified candidates, send resume and salary requirements with form in the sidebar.</p>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>

				<div class="form-info logros-reconocimientos">
					<h2>
						<img width="50" height="50" src="https://s3-eu-west-1.amazonaws.com/web-lvp-prod/avatar/0001/01/thumb_94_avatar_normal.jpeg">
						<em>Proyecto Fulanito 2</em> <button data-func="showAccordion" data-accordion="accordion2" type="button" class="btn btn-info pull-right">Mostrar Eventos</button>
					</h2>
				</div>

				<div style="padding-left: 20px;">
					<div id="accordion2" class="panel-group no-display">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion2_1">
                                    Senior Software Engineer
                                    </a>
                                </h4>
                            </div>
                            <div style="height: 0px;" id="accordion2_1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="lead">Voluntarios is seeking an experienced.</p>

                                    <h4>Requirements</h4>
                                    <ul>
                                        <li>Strong background in PHP and Web application development</li>
                                        <li>Javascript a plus</li>
                                        <li>Bachelor's degree in CS and/or equivalent industry experience</li>
                                    </ul>

                                    <p>Experience building production applications with Voluntarios would be good to have as well.</p>

                                    <h4>Responsibilities</h4>
                                    <ul>
                                        <li>Conduct detailed analysis of problem domains and customer requirements</li>
                                        <li>Develop innovative software designs and architectures</li>
                                    </ul>

                                    <hr>
                                    <p>Qualified candidates, send resume and salary requirements with form in the sidebar.</p>
                                </div>
                            </div>
                        </div>         
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion2_2">
                                    Systems Administrator/Operations Engineer
                                    </a>
                                </h4>
                            </div>
                            <div id="accordion2_2" class="panel-collapse collapse">
                                 <div class="panel-body">
                                    <p class="lead">Voluntarios is seeking an experienced.</p>

                                    <h4>Requirements</h4>
                                    <ul>
                                        <li>Strong background in PHP and Web application development</li>
                                        <li>Javascript a plus</li>
                                        <li>Bachelor's degree in CS and/or equivalent industry experience</li>
                                    </ul>

                                    <p>Experience building production applications with Voluntarios would be good to have as well.</p>

                                    <h4>Responsibilities</h4>
                                    <ul>
                                        <li>Conduct detailed analysis of problem domains and customer requirements</li>
                                        <li>Develop innovative software designs and architectures</li>
                                    </ul>

                                    <hr>
                                    <p>Qualified candidates, send resume and salary requirements with form in the sidebar.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion2_3">
                                    Technical Support Engineer
                                    </a>
                                </h4>
                            </div>
                            <div style="height: 0px;" id="accordion2_3" class="panel-collapse collapse">
                                 <div class="panel-body">
                                    <p class="lead">Voluntarios is seeking an experienced.</p>

                                    <h4>Requirements</h4>
                                    <ul>
                                        <li>Strong background in PHP and Web application development</li>
                                        <li>Javascript a plus</li>
                                        <li>Bachelor's degree in CS and/or equivalent industry experience</li>
                                    </ul>

                                    <p>Experience building production applications with Voluntarios would be good to have as well.</p>

                                    <h4>Responsibilities</h4>
                                    <ul>
                                        <li>Conduct detailed analysis of problem domains and customer requirements</li>
                                        <li>Develop innovative software designs and architectures</li>
                                    </ul>

                                    <hr>
                                    <p>Qualified candidates, send resume and salary requirements with form in the sidebar.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion2_4">
                                    Senior Software Engineer
                                    </a>
                                </h4>
                            </div>
                            <div style="height: 0px;" id="accordion2_4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="lead">Voluntarios is seeking an experienced.</p>

                                    <h4>Requirements</h4>
                                    <ul>
                                        <li>Strong background in PHP and Web application development</li>
                                        <li>Javascript a plus</li>
                                        <li>Bachelor's degree in CS and/or equivalent industry experience</li>
                                    </ul>

                                    <p>Experience building production applications with Voluntarios would be good to have as well.</p>

                                    <h4>Responsibilities</h4>
                                    <ul>
                                        <li>Conduct detailed analysis of problem domains and customer requirements</li>
                                        <li>Develop innovative software designs and architectures</li>
                                    </ul>

                                    <hr>
                                    <p>Qualified candidates, send resume and salary requirements with form in the sidebar.</p>
                                </div>
                            </div>
                        </div>         
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion2_5">
                                    Systems Administrator/Operations Engineer
                                    </a>
                                </h4>
                            </div>
                            <div id="accordion2_5" class="panel-collapse collapse">
                                 <div class="panel-body">
                                    <p class="lead">Voluntarios is seeking an experienced.</p>

                                    <h4>Requirements</h4>
                                    <ul>
                                        <li>Strong background in PHP and Web application development</li>
                                        <li>Javascript a plus</li>
                                        <li>Bachelor's degree in CS and/or equivalent industry experience</li>
                                    </ul>

                                    <p>Experience building production applications with Voluntarios would be good to have as well.</p>

                                    <h4>Responsibilities</h4>
                                    <ul>
                                        <li>Conduct detailed analysis of problem domains and customer requirements</li>
                                        <li>Develop innovative software designs and architectures</li>
                                    </ul>

                                    <hr>
                                    <p>Qualified candidates, send resume and salary requirements with form in the sidebar.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion2_6">
                                    Technical Support Engineer
                                    </a>
                                </h4>
                            </div>
                            <div style="height: 0px;" id="accordion2_6" class="panel-collapse collapse">
                                 <div class="panel-body">
                                    <p class="lead">Voluntarios is seeking an experienced.</p>

                                    <h4>Requirements</h4>
                                    <ul>
                                        <li>Strong background in PHP and Web application development</li>
                                        <li>Javascript a plus</li>
                                        <li>Bachelor's degree in CS and/or equivalent industry experience</li>
                                    </ul>

                                    <p>Experience building production applications with Voluntarios would be good to have as well.</p>

                                    <h4>Responsibilities</h4>
                                    <ul>
                                        <li>Conduct detailed analysis of problem domains and customer requirements</li>
                                        <li>Develop innovative software designs and architectures</li>
                                    </ul>

                                    <hr>
                                    <p>Qualified candidates, send resume and salary requirements with form in the sidebar.</p>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>

				<div class="form-info logros-reconocimientos">
					<h2>
						<img width="50" height="50" src="https://s3-eu-west-1.amazonaws.com/web-lvp-prod/avatar/0001/01/thumb_94_avatar_normal.jpeg">
						<em>Proyecto Fulanito 3</em> <button data-func="showAccordion" data-accordion="accordion3" type="button" class="btn btn-info pull-right">Mostrar Eventos</button>
					</h2>
				</div>

				<div style="padding-left: 20px;">
					<div id="accordion3" class="panel-group no-display">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion3_1">
                                    Senior Software Engineer
                                    </a>
                                </h4>
                            </div>
                            <div style="height: 0px;" id="accordion3_1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="lead">Voluntarios is seeking an experienced.</p>

                                    <h4>Requirements</h4>
                                    <ul>
                                        <li>Strong background in PHP and Web application development</li>
                                        <li>Javascript a plus</li>
                                        <li>Bachelor's degree in CS and/or equivalent industry experience</li>
                                    </ul>

                                    <p>Experience building production applications with Voluntarios would be good to have as well.</p>

                                    <h4>Responsibilities</h4>
                                    <ul>
                                        <li>Conduct detailed analysis of problem domains and customer requirements</li>
                                        <li>Develop innovative software designs and architectures</li>
                                    </ul>

                                    <hr>
                                    <p>Qualified candidates, send resume and salary requirements with form in the sidebar.</p>
                                </div>
                            </div>
                        </div>         
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion3_2">
                                    Systems Administrator/Operations Engineer
                                    </a>
                                </h4>
                            </div>
                            <div id="accordion3_2" class="panel-collapse collapse">
                                 <div class="panel-body">
                                    <p class="lead">Voluntarios is seeking an experienced.</p>

                                    <h4>Requirements</h4>
                                    <ul>
                                        <li>Strong background in PHP and Web application development</li>
                                        <li>Javascript a plus</li>
                                        <li>Bachelor's degree in CS and/or equivalent industry experience</li>
                                    </ul>

                                    <p>Experience building production applications with Voluntarios would be good to have as well.</p>

                                    <h4>Responsibilities</h4>
                                    <ul>
                                        <li>Conduct detailed analysis of problem domains and customer requirements</li>
                                        <li>Develop innovative software designs and architectures</li>
                                    </ul>

                                    <hr>
                                    <p>Qualified candidates, send resume and salary requirements with form in the sidebar.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion3_3">
                                    Technical Support Engineer
                                    </a>
                                </h4>
                            </div>
                            <div style="height: 0px;" id="accordion3_3" class="panel-collapse collapse">
                                 <div class="panel-body">
                                    <p class="lead">Voluntarios is seeking an experienced.</p>

                                    <h4>Requirements</h4>
                                    <ul>
                                        <li>Strong background in PHP and Web application development</li>
                                        <li>Javascript a plus</li>
                                        <li>Bachelor's degree in CS and/or equivalent industry experience</li>
                                    </ul>

                                    <p>Experience building production applications with Voluntarios would be good to have as well.</p>

                                    <h4>Responsibilities</h4>
                                    <ul>
                                        <li>Conduct detailed analysis of problem domains and customer requirements</li>
                                        <li>Develop innovative software designs and architectures</li>
                                    </ul>

                                    <hr>
                                    <p>Qualified candidates, send resume and salary requirements with form in the sidebar.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion3_4">
                                    Senior Software Engineer
                                    </a>
                                </h4>
                            </div>
                            <div style="height: 0px;" id="accordion3_4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="lead">Voluntarios is seeking an experienced.</p>

                                    <h4>Requirements</h4>
                                    <ul>
                                        <li>Strong background in PHP and Web application development</li>
                                        <li>Javascript a plus</li>
                                        <li>Bachelor's degree in CS and/or equivalent industry experience</li>
                                    </ul>

                                    <p>Experience building production applications with Voluntarios would be good to have as well.</p>

                                    <h4>Responsibilities</h4>
                                    <ul>
                                        <li>Conduct detailed analysis of problem domains and customer requirements</li>
                                        <li>Develop innovative software designs and architectures</li>
                                    </ul>

                                    <hr>
                                    <p>Qualified candidates, send resume and salary requirements with form in the sidebar.</p>
                                </div>
                            </div>
                        </div>         
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion3_5">
                                    Systems Administrator/Operations Engineer
                                    </a>
                                </h4>
                            </div>
                            <div id="accordion3_5" class="panel-collapse collapse">
                                 <div class="panel-body">
                                    <p class="lead">Voluntarios is seeking an experienced.</p>

                                    <h4>Requirements</h4>
                                    <ul>
                                        <li>Strong background in PHP and Web application development</li>
                                        <li>Javascript a plus</li>
                                        <li>Bachelor's degree in CS and/or equivalent industry experience</li>
                                    </ul>

                                    <p>Experience building production applications with Voluntarios would be good to have as well.</p>

                                    <h4>Responsibilities</h4>
                                    <ul>
                                        <li>Conduct detailed analysis of problem domains and customer requirements</li>
                                        <li>Develop innovative software designs and architectures</li>
                                    </ul>

                                    <hr>
                                    <p>Qualified candidates, send resume and salary requirements with form in the sidebar.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion3_6">
                                    Technical Support Engineer
                                    </a>
                                </h4>
                            </div>
                            <div style="height: 0px;" id="accordion3_6" class="panel-collapse collapse">
                                 <div class="panel-body">
                                    <p class="lead">Voluntarios is seeking an experienced.</p>

                                    <h4>Requirements</h4>
                                    <ul>
                                        <li>Strong background in PHP and Web application development</li>
                                        <li>Javascript a plus</li>
                                        <li>Bachelor's degree in CS and/or equivalent industry experience</li>
                                    </ul>

                                    <p>Experience building production applications with Voluntarios would be good to have as well.</p>

                                    <h4>Responsibilities</h4>
                                    <ul>
                                        <li>Conduct detailed analysis of problem domains and customer requirements</li>
                                        <li>Develop innovative software designs and architectures</li>
                                    </ul>

                                    <hr>
                                    <p>Qualified candidates, send resume and salary requirements with form in the sidebar.</p>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
          </div>
          <div class="tab-pane fade" id="tab-4">
            <div class="col-md-12 col-sm-12 margin-top-20">
            	<ul class="timeline">
					<li class="timeline-purple">
						<div class="timeline-time">
							<span class="time"> 4/10/13 </span>
						</div>
						<div class="timeline-icon">
							<i class="fa fa-thumbs-up"></i>
						</div>
						<div class="timeline-body">
							<h2>ICT 2013 20th International Conference</h2>
							<div class="timeline-content">
								Ricebean black-eyed pea maize scallion green bean spinach cabbage jicama bell pepper carrot onion corn plantain garbanzo. Winter purslane courgette pumpkin quandong komatsuna fennel green bean cucumber watercress. Parsley amaranth tigernut silver beet maize fennel spinach. Ricebean black-eyed pea maize scallion green bean spinach cabbage jicama bell pepper carrot onion corn plantain garbanzo.
							</div>
							<div class="timeline-footer">
								<a href="javascript:;" class="nav-link pull-right">
								Read more <i class="m-icon-swapright m-icon-white"></i>
								</a>
							</div>
						</div>
					</li>
					<li class="timeline-blue">
						<div class="timeline-time">
							<span class="time"> 4/11/13 </span>
						</div>
						<div class="timeline-icon">
							<i class="fa fa-thumbs-up"></i>
						</div>
						<div class="timeline-body">
							<h2>Management Meeting</h2>
							<div class="timeline-content">
								Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi..
							</div>
							<div class="timeline-footer">
								<a href="javascript:;" class="nav-link">
								Read more <i class="m-icon-swapright m-icon-white"></i>
								</a>
							</div>
						</div>
					</li>
					<li class="timeline-green">
						<div class="timeline-time">
							<span class="time"> 4/13/13 </span>
						</div>
						<div class="timeline-icon">
							<i class="fa fa-thumbs-up"></i>
						</div>
						<div class="timeline-body">
							<h2>New Project Launch</h2>
							<div class="timeline-content">
								Winter purslane courgette pumpkin quandong komatsuna fennel green bean cucumber watercress. Pea sprouts wattle seed rutabaga okra yarrow cress avocado grape radish bush tomato ricebean. Pea sprouts wattle seed rutabaga okra yarrow cress avocado grape radish bush tomato ricebean.
							</div>
							<div class="timeline-footer">
								<a href="javascript:;" class="nav-link">
								Read more <i class="m-icon-swapright m-icon-white"></i>
								</a>
							</div>
						</div>
					</li>
					<li class="timeline-red">
						<div class="timeline-time">
							<span class="time"> 4/15/13 </span>
						</div>
						<div class="timeline-icon">
							<i class="fa fa-thumbs-up"></i>
						</div>
						<div class="timeline-body">
							<h2>Daily Feeds</h2>
							<div class="timeline-content">
								Parsley amaranth tigernut silver beet maize fennel spinach. Ricebean black-eyed pea maize scallion green bean spinach cabbage jicama bell pepper carrot onion corn plantain garbanzo. Sierra leone bologi komatsuna celery peanut swiss chard silver beet squash dandelion maize chicory burdock tatsoi dulse radish wakame beetroot.
							</div>
							<div class="timeline-footer">
								<a href="javascript:;" class="btn green pull-right">
								Read more <i class="m-icon-swapright m-icon-white"></i>
								</a>
							</div>
						</div>
					</li>
					<li class="timeline-grey">
						<div class="timeline-time">
							<span class="time"> 4/17/13 </span>
						</div>
						<div class="timeline-icon">
							<i class="fa fa-thumbs-up"></i>
						</div>
						<div class="timeline-body">
							<h2>Staff Meeting</h2>
							<div class="timeline-content">
								 Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi.
							</div>
							<div class="timeline-footer">
								<a href="javascript:;" class="nav-link pull-right">
								Read more <i class="m-icon-swapright m-icon-white"></i>
								</a>
							</div>
						</div>
					</li>
					<li class="timeline-blue timeline-noline">
						<div class="timeline-time">
							<span class="time"> 4/18/13 </span>
						</div>
						<div class="timeline-icon">
							<i class="fa fa-thumbs-up"></i>
						</div>
						<div class="timeline-body">
							<h2>Demo Europe 2013</h2>
							<div class="timeline-content">
								Parsnip lotus root celery yarrow seakale tomato collard greens tigernut epazote ricebean melon tomatillo soybean chicory broccoli beet greens peanut salad. Lotus root burdock bell pepper chickweed shallot groundnut pea sprouts welsh onion wattle seed pea salsify turnip scallion peanut arugula bamboo shoot onion swiss chard.
							</div>
							<div class="timeline-footer">
								<a href="javascript:;" class="nav-link">
								Read more <i class="m-icon-swapright m-icon-white"></i>
								</a>
							</div>
						</div>
					</li>
				</ul>
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
@stop