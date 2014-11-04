<!DOCTYPE html>
<!-- 
Version: 0.1
Author: Kumori
Website: http://www.kumori.mx/
Contact: contacto@kumori.mx
Follow: www.twitter.com/kumori
Like: www.facebook.com/kumori
License: Open Source para reto VoluntariosMX
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Logros Obtenidos</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Voluntario Shop UI description" name="description">
  <meta content="Voluntario Shop UI keywords" name="keywords">
  <meta content="Kumori" name="author">
  <meta http-equiv="cleartype" content="on">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Pathway+Gothic+One|PT+Sans+Narrow:400+700|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"> 
  <!-- Fonts END -->

  <!-- Global styles BEGIN -->
  <link href="../../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../assets/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css" rel="stylesheet">
  <!-- Global styles END -->
   
  <!-- Page level plugin styles BEGIN -->
  <link href="../../assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles BEGIN -->
  <link href="../../assets/global/css/components.css" rel="stylesheet">
  <link href="../../assets/frontend/onepage/css/style.css" rel="stylesheet">
  <link href="../../assets/frontend/onepage/css/style-responsive.css" rel="stylesheet">
  <link href="../../assets/frontend/onepage/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="../../assets/frontend/onepage/css/custom.css" rel="stylesheet">

  <!-- Theme styles END -->
</head>
<!--DOC: menu-always-on-top class to the body element to set menu on top -->
<body>

  <!-- Promo block BEGIN -->
  <div class="promo-block" id="promo-block" style="height: 700px;">
  	<div class="tp-banner-container">
  		<div class="tp-banner" >
  			<ul>
    				<li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-delay="9400" class="slider-item-1">
              <img src="../../assets/frontend/onepage/img/silder/slide1.jpg" alt="" data-bgfit="cover" style="opacity:0.4 !important;" data-bgposition="center center" data-bgrepeat="no-repeat">
    					<div class="tp-caption large_text customin customout start"
    						data-x="center"
    						data-hoffset="0"
    						data-y="center"
    						data-voffset="60"
    						data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
    						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
    						data-speed="1000"
    						data-start="500"
    						data-easing="Back.easeInOut"
    						data-endspeed="300">
    						<div class="promo-like" style="top: -19px;"><i class="fa fa-thumbs-up"></i></div>
    						<div class="promo-like-text">
    							<h2>Lo hicimos juntos</h2>
    							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing<br> elit amet sed diam nonummy nibh <a href="javascript:void(0);">dolore</a></p>
    						</div>
    					</div>
                <div class="tp-caption large_bold_white fade"
                  data-x="center"
                  data-y="center"
                  data-voffset="-110"
                  data-speed="300"
                  data-start="1700"
                  data-easing="Power4.easeOut"
                  data-endspeed="500"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off"
                  style="z-index: 6">GRACIAS <span>A TI</span> FUE POSIBLE
                </div>
          	</li>
          </ul>
      	</div>
  	</div>
  </div>
  <!-- Promo block END -->

  <!-- About block BEGIN -->
  <div class="about-block content content-center" id="about">
    <div class="container">
      <h2><strong>LOGROS</strong> OBTENIDOS</h2>
      <h4>{{ $evento->nombre }}</h4>

      <div class="row service-box margin-bottom-40">
      @foreach ($evento->logros as $logro)
      <div class="col-md-4 col-sm-4">
        <div class="service-box-heading" style="text-align: center;">
          <em style="display: block;">
            <img style="width: 64px;padding-top: 5px;padding-right: 5px;" alt="Blog Interview" src="{{ $logro->imagen }}/?{{ rand(1,1000) }}">
          </em>
          <span style="color: #444;font-size: 21px;line-height: 25px;font-weight: 400;margin-bottom: 10px;margin-left: 10px;display: inline-block;">{{ $logro->nombre }}</span>
        </div>
        <p>{{ $logro->descripcion }}</p>
      </div>
      @endforeach
    </div>
    </div>
  </div>
  <!-- About block END <--></-->

  <!-- Portfolio block BEGIN -->
  <div class="portfolio-block content content-center" id="portfolio">
    <div class="container">
      <h2 class="margin-bottom-50">EL <strong>EQUIPO</strong></h2>
  	</div>
  	<div class="row">
      <ul class="list-unstyled">
        @foreach ($evento->voluntarios as $voluntario)
        <li style="margin: 4px 5px 4px 0;display: inline-block;"><a href="{{ route('viewVoluntario', array('id' => $voluntario->idVoluntario)) }}"><img alt="{{ $voluntario->nombre . ' ' . $voluntario->apellidoPaterno }}" tooltip="{{ $voluntario->nombre . ' ' . $voluntario->apellidoPaterno }}" src="{{ $voluntario->imagen }}/?{{ rand(1,1000) }}"></a></li>
        @endforeach
      </ul> 
    </div>
  </div>
  <!-- Portfolio block END -->
  <!-- Checkout block BEGIN -->
  <div class="checkout-block content">
    <div class="container">
      <div class="row">
    	<div class="col-md-10">
    	  <h2>{{ strtoupper($evento->nombre) }}!</h2>
    	</div>
    	<div class="col-md-2 text-right">
    	  <a href="{{ route('viewEvento', array('id' => $evento->idEvento)) }}" target="_blank" class="btn btn-primary">IR AL EVENTO</a>
    	</div>
      </div>
    </div>
  </div>

  <div class="prices-block content content-center" id="prices">
  	<div class="container">
      <h2 class="margin-bottom-50"><strong>Evalua</strong> a Nombre del Aliado</h2>
	     <div class="row">
        <div class="col-md-12">
          <table class="table table-bordered table-striped">
              <thead>
              <tr>
                <th class="col-md-8" style="text-align: center;">
                   Pregunta
                </th>
                <th  class="col-md-1" style="text-align: center;">
                   No Aplica
                </th>
                <th class="col-md-1" style="text-align: left;">
                   Malo
                </th>
                <th class="col-md-1" style="text-align: right;">
                   Excelente
                </th>
              </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                     ¿En {{ $evento->aliado->razonSocial }} fuerón respetuosos contigo?
                  </td>
                  <td>
                    <input type="radio" name="radio1" class="icheck">
                  </td>
                  <td colspan="2">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                  </td>
                </tr>
                <tr>
                  <td>
                     ¿Volverias a realizar un evento con {{ $evento->aliado->razonSocial }}?
                  </td>
                  <td>
                    <input type="radio" name="radio1" class="icheck">
                  </td>
                  <td colspan="2">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                  </td>
                </tr>
                <tr>
                  <td>
                     ¿Pudiste realizar actividades en base a tus intereses?
                  </td>
                  <td>
                    <input type="radio" name="radio1" class="icheck">
                  </td>
                  <td colspan="2">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                  </td>
                </tr>
                <tr>
                  <td>
                     ¿En {{ $evento->aliado->razonSocial }} aclararon todas tus dudas?
                  </td>
                  <td>
                    <input type="radio" name="radio1" class="icheck">
                  </td>
                  <td colspan="2">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                  </td>
                </tr>
                <tr>
                  <td>
                     ¿Cómo calificarias en general a {{ $evento->aliado->razonSocial }}?
                  </td>
                  <td>
                    <input type="radio" name="radio1" class="icheck">
                  </td>
                  <td colspan="2">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                    <input type="radio" name="radio1" class="icheck" style="margin: 0 5px;">
                  </td>
                </tr>

              </tbody>
              </table>

        <form class="form-horizontal" role="form" style="margin-top: 30px;">
          <fieldset class="margin-bottom-40">
            <legend>Danos tus comentarios</legend>
            <div class="form-group">
              <div class="col-lg-12">
                <textarea class="form-control" rows="6"></textarea>
              </div>
            </div>
          </fieldset>

          <button type="submit" class="btn btn-large green" style="padding: 15px;font-size: 25px;">ENVIAR RESULTADOS</button>
        </form>
          </div>

      </div>
    </div>
  </div>
  <!-- Prices block END -->

  <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Nosotros</h2>
            <p>Somos un equipo que est&aacute; comprometido a concentrar los eventos para apoyos a las comunidades y as&iacute; poder traerlos a ti para que puedas participar en ellos.</p>

            <div class="photo-stream">
              <h2>Voluntarios destacados</h2>
              <ul class="list-unstyled">
                @for ($i=1;$i<=15;$i++)
                <li><a href="#"><img alt="" src="http://lorempixel.com/100/100/people/?{{ rand(1,1000) }}"></a></li>
                @endfor
              </ul>                    
            </div>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Nuestras Oficinas</h2>
            <address class="margin-bottom-40">
              {{ Session::get('param_direccion') }}<br>
              Tel&eacute;fono: {{ Session::get('param_telefono') }} Ext.: {{ Session::get('param_extension') }}<br>
              Email: <a href="mailto:{{ Session::get('param_email') }}">{{ Session::get('param_email') }}</a><br>
            </address>

            <div class="pre-footer-subscribe-box pre-footer-subscribe-box-vertical">
              <h2>Mantente Informado</h2>
              <p>Suscr&iacute;bete a nuestro bolet&iacute;n donde podr&aacute;s recibir interesantes propuestas para nuestros programas!</p>
              <form action="#">
                <div class="input-group">
                  <input type="text" placeholder="tucorreo@mail.com" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Suscribete</button>
                  </span>
                </div>
              </form>
            </div>
          </div>
          <!-- END BOTTOM CONTACTS -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2 class="margin-bottom-0">Ultimos Tweets</h2>
            <a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2" data-theme="dark" data-link-color="#57C8EB" data-widget-id="524633486976499713" data-chrome="noheader nofooter noscrollbar noborders transparent">Cargando tweets de @nosmuevelapaz...</a>
          </div>
          <!-- END TWITTER BLOCK -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

  <a href="#promo-block" class="go2top scroll"><i class="fa fa-arrow-up"></i></a>

  <!--[if lt IE 9]>
    <script src="../../assets/global/plugins/respond.min.js"></script>
  <![endif]-->

  <!-- Load JavaScripts at the bottom, because it will reduce page load time -->
  <!-- Core plugins BEGIN (For ALL pages) -->
  <script src="../../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
  <script src="../../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- Core plugins END (For ALL pages) -->

  <!-- BEGIN RevolutionSlider -->
  <script src="../../assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
  <script src="../../assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
  <script src="../../assets/frontend/onepage/scripts/revo-ini.js" type="text/javascript"></script> 
  <!-- END RevolutionSlider -->

  <!-- Core plugins BEGIN (required only for current page) -->
  <script src="../../assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
  <script src="../../assets/global/plugins/jquery.easing.js"></script>
  <script src="../../assets/global/plugins/jquery.parallax.js"></script>
  <script src="../../assets/global/plugins/jquery.scrollTo.min.js"></script>
  <script src="../../assets/frontend/onepage/scripts/jquery.nav.js"></script>
  <!-- Core plugins END (required only for current page) -->

  <!-- Global js BEGIN -->
  <script src="../../assets/frontend/onepage/scripts/layout.js" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      Layout.init();
    });
  </script>
  <!-- Global js END -->
</body>
</html>