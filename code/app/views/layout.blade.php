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
  <title>Voluntario</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Voluntarios Reto Kumori description" name="description">
  <meta content="Voluntarios Reto Kumori keywords" name="keywords">
  <meta content="Kumori" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/global/plugins/icheck/skins/all.css') }}" rel="stylesheet"/>
  <!-- Global styles END --> 

  <!-- Page level plugin styles START -->
  <link href="{{ asset('assets/global/plugins/fancybox/source/jquery.fancybox.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css') }}" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/select2/select2.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') }}"/>

<link href="{{ asset('assets/global/css/components.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/global/css/plugins.css') }}" rel="stylesheet" type="text/css">

  <!-- Theme styles START -->
  <link href="{{ asset('assets/global/css/components.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/frontend/layout/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/frontend/pages/css/style-revolution-slider.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/frontend/layout/css/style-responsive.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/frontend/layout/css/themes/red.css') }}" rel="stylesheet" id="style-color">
  <link href="{{ asset('assets/frontend/layout/css/custom.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/admin/pages/css/timeline.css') }}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('assets/admin/pages/css/news.css') }}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('assets/global/css/voluntarios.css') }}" rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate" style="background: #FAFAFA;">
    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-7 col-sm-7 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-globe"></i><span>www.nosmuevelapaz.com</span></li>
                        <li><a href='{{ Session::get('param_facebook') }}' target='_blank'><i class="fa fa-facebook-square"></i><span>Facebook</span></li></a>
                        <li><a href='{{ Session::get('param_twitter') }}' target='_blank'><i class="fa fa-twitter-square"></i><span>Twitter</span></li></a>
                        <li><a href='mailto:{{ Session::get('param_email') }}' target='_top'><i class="fa fa-envelope-o"></i><span>{{ Session::get('param_email') }}</span></li></a>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-5 col-sm-5 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                      @if(Session::get('tipoUsuario') == 'Administrador')
                        <li>
                          <a href="{{ route('adminPerfil') }}">{{ Session::get('nombreCompleto') }}</a>
                        </li>
                        <li><a href="{{ route('adminIndex') }}">Panel de Administracion</a></li>
                        <li><a href="{{ route('logout') }}">Salir</a></li>
                      @elseif (Session::get('tipoUsuario') == 'Dependencia')
                        <li>
                          <a href="{{ route('viewPerfilDependencia') }}">{{ Session::get('nombreCompleto') }}</a>
                        </li>
                        <li><a href="{{ route('depIndex') }}">Panel de Administracion</a></li>
                        <li><a href="{{ route('logout') }}">Salir</a></li>
                      @elseif (Session::get('tipoUsuario') == 'Aliado')
                        <li>
                          <a href="{{ route('viewPerfilAliado') }}">{{ Session::get('nombreCompleto') }}</a>
                        </li>
                        <li><a href="{{ route('aliadoIndex') }}">Panel de Administracion</a></li>
                        <li><a href="{{ route('logout') }}">Salir</a></li>
                      @elseif (Session::get('tipoUsuario') == 'Voluntario')
                        <li>Bienvenid@: 
                          <a href="{{ route('viewPerfilVoluntario') }}">{{ Session::get('nombreCompleto') }}</a>
                        </li>
                        <li><a href="{{ route('logout') }}">Salir</a></li>
                      @else 
                        <li><a href="{{ route('viewLogin') }}">Conectate</a></li>
                        <li><a href="{{ route('viewRegistro') }}">Registrate</a></li>
                      @endif
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="{{ route('viewIndex') }}" style="padding-top: 12px;padding-bottom: 12px;">
          <img src="{{ asset('assets/global/img/logoVoluntarios.png') }}" alt="Voluntarios FrontEnd">
        </a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation pull-left font-transform-inherit">
          <ul class="pull-left">
            <li class="">
              <a class="" data-toggle="" data-target="#" href="#">
                Explora
              </a>
            </li>
           
            <li class="">
              <a class="" data-toggle="" data-target="#" href="#">
                Inicia
              </a>
            </li>

            <li class="">
              <a class="" data-toggle="" data-target="#" href="#">
                ¿Como funciona? 
              </a>
            </li>

            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                ... 
              </a>
                
              <ul class="dropdown-menu">
                <li class=""><a href="{{ route('viewFAQ') }}">Preguntas Frecuentes</a></li>
                <li><a href="{{ route('viewBusquedaEvento') }}">Todos los eventos</a></li>
                <li><a href="index-without-topbar.html">Otras opciones Interesantes</a></li>
              </ul>
            </li>

            <!-- BEGIN TOP SEARCH -->
            <li class="menu-search">
              <span class="sep"></span>
              <i class="fa fa-search search-btn"></i>
              <input type="text" placeholder="Busca Eventos" class="" id="search-event">
            </li>
            <!-- END TOP SEARCH -->
            <!--Tooltip -->
            <!-- BEGIN AVATAR USER -->
          </ul>
          <ul class="pull-right">
            <li class="menu-search">
                <span class="sep"></span>
            </li>
            <li class="menu-search pull-right">
              @if(Session::get('tipoUsuario') == 'Administrador')
                <a href="{{ route('adminPerfil') }}" style="padding: 0;">
              @elseif (Session::get('tipoUsuario') == 'Dependencia')
                <a href="{{ route('depPerfil') }}" style="padding: 0;">
              @elseif (Session::get('tipoUsuario') == 'Aliado')
                <a href="{{ route('aliadoPerfil') }}" style="padding: 0;">
              @elseif (Session::get('tipoUsuario') == 'Voluntario')
                <a href="{{ route('viewPerfilVoluntario') }}" style="padding: 0;">
              @else 
                <a href="{{ route('viewLogin') }}" style="padding: 0;">
              @endif

                @if(isset(Session::get('avatar')))
                  <img src="{{ Session::get('avatar') }}" style="width:32px;" />
                @else
                  <img src="{{ asset('assets/global/img/blank_avatar.jpg') }}" style="width:32px;" />
                @endif
              </a>
            </li>
            <!-- END TOP SEARCH -->
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->

    @yield('content')

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

    <!-- BEGIN FOOTER -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-6 col-sm-6 padding-top-10">
            2014 © Voluntarios MX. Licencia de Open Source. <a href="#">Aviso de Privacidad</a> | <a href="#">Pol&iacute;ticas de Uso</a>
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-6 col-sm-6">
            <ul class="social-footer list-unstyled list-inline pull-right">
              <li><a href="{{ Session::get('param_facebook') }}"><i class="fa fa-facebook"></i></a></li>
              <li><a href="{{ Session::get('param_gplus') }}"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="{{ Session::get('param_twitter') }}"><i class="fa fa-twitter"></i></a></li>
              <li><a href="{{ Session::get('param_instagram') }}"><i class="fa fa-instagram"></i></a></li>
              <li><a href="{{ Session::get('param_pinterest') }}"><i class="fa fa-pinterest"></i></a></li>
              <li><a href="{{ Session::get('param_youtube') }}"><i class="fa fa-youtube"></i></a></li>
              
            </ul>  
          </div>
          <!-- END PAYMENTS -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="{{ asset('assets/global/plugins/respond.min.js') }}"></script>
    <![endif]--> 

    <script src="{{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jquery-migrate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>      
    <script src="{{ asset('assets/frontend/layout/scripts/back-to-top.js') }}" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    
    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="{{ asset('assets/global/plugins/fancybox/source/jquery.fancybox.pack.js') }}" type="text/javascript"></script><!-- pop up -->
    <script src="{{ asset('assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js') }}" type="text/javascript"></script><!-- slider for products -->

    <!-- BEGIN RevolutionSlider -->
  
    <script src="{{ asset('assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('assets/frontend/pages/scripts/revo-slider-init.js') }}
" type="text/javascript"></script>
    <!-- END RevolutionSlider -->

    <script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/global/plugins/select2/select2.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/global/plugins/icheck/icheck.min.js') }}"></script>

    <script src="{{ asset('assets/frontend/layout/scripts/layout.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/admin/pages/scripts/components-dropdowns.js') }}"></script>
    <script src="{{ asset('assets/admin/pages/scripts/components-form-tools.js') }}"></script>
    
    <script src="{{ asset('assets/admin/pages/scripts/form-icheck.js') }}"></script>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            RevosliderInit.initRevoSlider();
            Layout.initTwitter();
            //Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            //Layout.initNavScrolling(); 
            FormiCheck.init(); 
            ComponentsDropdowns.init();
            ComponentsFormTools.init();
        });
    </script>
    <script src="{{ asset('assets/global/scripts/voluntarios.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>