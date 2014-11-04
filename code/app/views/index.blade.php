@extends('layout')

@section('content')
<!-- BEGIN SLIDER -->
<div class="page-slider margin-bottom-40">
  <div class="fullwidthbanner-container revolution-slider">
    <div class="fullwidthabnner">
      <ul id="revolutionul">
        <!-- THE THIRD SLIDE -->
        <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="../../assets/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg">
          <img src="../../assets/frontend/pages/img/revolutionslider/bg3.jpg" alt="">
          <div class="caption lfl slide_item_left" 
            data-x="30" 
            data-y="95" 
            data-speed="400" 
            data-start="1500" 
            data-easing="easeOutBack">
            <iframe src="http://player.vimeo.com/video/94213624?portrait=0" width="420" height="240" style="border:0" allowFullScreen></iframe> 
          </div>
          <div class="caption lfr slide_title"
            data-x="470"
            data-y="100"
            data-speed="400"
            data-start="2000"
            data-easing="easeOutExpo">
            ¿Como funciona?
          </div>
          <div class="caption lfr slide_subtitle"
            data-x="470"
            data-y="170"
            data-speed="400"
            data-start="2500"
            data-easing="easeOutExpo">
            Ve nuestro video introductorio
          </div>
          <div class="caption lfr slide_desc"
            data-x="470"
            data-y="220"
            data-speed="400"
            data-start="3000"
            data-easing="easeOutExpo">
            Lorem ipsum dolor sit amet, consectetuer elit sed diam<br> nonummy amet euismod dolore.
          </div>
          <a class="caption lfr btn yellow slide_btn" href=""
            data-x="470"
            data-y="280"
           data-speed="400"
           data-start="3500"
           data-easing="easeOutExpo">
           Ve mas videos en nuestro canal!
      </a>
  </li>      
        
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div>
</div>
<!-- END SLIDER -->

<div class="main">
  <div class="container">
    <!-- BEGIN SERVICE BOX -->   
    <div class="row service-box margin-bottom-40">
      <div class="col-md-4 col-sm-4">
        <div class="service-box-heading">
          <em><i class="fa fa-location-arrow blue"></i></em>
          <span>¿Donde puedo ayudar?</span>
        </div>
        <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="service-box-heading">
          <em><i class="fa fa-check red"></i></em>
          <span>En tu tiempo libre</span>
        </div>
        <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="service-box-heading">
          <em><i class="fa fa-compress green"></i></em>
          <span>Invita a tus amigos</span>
        </div>
        <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
      </div>
    </div>
    <!-- END SERVICE BOX -->

    <!-- BEGIN STEPS -->
    <div class="row margin-bottom-40 front-steps-wrapper front-steps-count-3">
      <div class="col-md-4 col-sm-4 front-step-col">
        <div class="front-step front-step1">
          <h2>Busca un evento</h2>
          <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 front-step-col">
        <div class="front-step front-step2">
          <h2>Confirma tu asistencia</h2>
          <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 front-step-col">
        <div class="front-step front-step3">
          <h2>Apoya y vive la experiencia</h2>
          <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p>
        </div>
      </div>
    </div>
    <!-- END STEPS -->

    <!-- BEGIN BLOCKQUOTE BLOCK -->   
    <div class="row quote-v1 margin-bottom-30">
      <div class="col-md-9">
        <span>Voluntarios MX - la mejor manera de ayudar</span>
      </div>
      <div class="col-md-3 text-right">
        <a class="btn-transparent" href="{{ route('viewBusquedaEvento') }}"><i class="fa fa-rocket margin-right-10"></i>Eventos</a>
      </div>
    </div>
    <!-- END BLOCKQUOTE BLOCK -->

    <!-- BEGIN RECENT WORKS -->
    <div class="row recent-work margin-bottom-40">
      <div class="col-md-3">
        <h2><a href="portfolio.html">Eventos Recientes</a></h2>
        <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde voluptatem. Sed unde omnis iste natus error sit voluptatem.</p>
      </div>
      <div class="col-md-9">
        <div class="owl-carousel owl-carousel3">
          <div class="recent-work-item">
            <em>
              <img src="../../assets/frontend/pages/img/works/img1.jpg" alt="Amazing Project" class="img-responsive">
              <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
              <a href="../../assets/frontend/pages/img/works/img1.jpg" class="fancybox-button" title="Project Name #1" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
            </em>
            <a class="recent-work-description" href="#">
              <strong>Amazing Project</strong>
              <b>Agenda corp.</b>
            </a>
          </div>
          <div class="recent-work-item">
            <em>
              <img src="../../assets/frontend/pages/img/works/img2.jpg" alt="Amazing Project" class="img-responsive">
              <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
              <a href="../../assets/frontend/pages/img/works/img2.jpg" class="fancybox-button" title="Project Name #2" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
            </em>
            <a class="recent-work-description" href="#">
              <strong>Amazing Project</strong>
              <b>Agenda corp.</b>
            </a>
          </div>
          <div class="recent-work-item">
            <em>
              <img src="../../assets/frontend/pages/img/works/img3.jpg" alt="Amazing Project" class="img-responsive">
              <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
              <a href="../../assets/frontend/pages/img/works/img3.jpg" class="fancybox-button" title="Project Name #3" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
            </em>
            <a class="recent-work-description" href="#">
              <strong>Amazing Project</strong>
              <b>Agenda corp.</b>
            </a>
          </div>
          <div class="recent-work-item">
            <em>
              <img src="../../assets/frontend/pages/img/works/img4.jpg" alt="Amazing Project" class="img-responsive">
              <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
              <a href="../../assets/frontend/pages/img/works/img4.jpg" class="fancybox-button" title="Project Name #4" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
            </em>
            <a class="recent-work-description" href="#">
              <strong>Amazing Project</strong>
              <b>Agenda corp.</b>
            </a>
          </div>
          <div class="recent-work-item">
            <em>
              <img src="../../assets/frontend/pages/img/works/img5.jpg" alt="Amazing Project" class="img-responsive">
              <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
              <a href="../../assets/frontend/pages/img/works/img5.jpg" class="fancybox-button" title="Project Name #5" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
            </em>
            <a class="recent-work-description" href="#">
              <strong>Amazing Project</strong>
              <b>Agenda corp.</b>
            </a>
          </div>
          <div class="recent-work-item">
            <em>
              <img src="../../assets/frontend/pages/img/works/img6.jpg" alt="Amazing Project" class="img-responsive">
              <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
              <a href="../../assets/frontend/pages/img/works/img6.jpg" class="fancybox-button" title="Project Name #6" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
            </em>
            <a class="recent-work-description" href="#">
              <strong>Amazing Project</strong>
              <b>Agenda corp.</b>
            </a>
          </div>
          <div class="recent-work-item">
            <em>
              <img src="../../assets/frontend/pages/img/works/img3.jpg" alt="Amazing Project" class="img-responsive">
              <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
              <a href="../../assets/frontend/pages/img/works/img3.jpg" class="fancybox-button" title="Project Name #3" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
            </em>
            <a class="recent-work-description" href="#">
              <strong>Amazing Project</strong>
              <b>Agenda corp.</b>
            </a>
          </div>
          <div class="recent-work-item">
            <em>
              <img src="../../assets/frontend/pages/img/works/img4.jpg" alt="Amazing Project" class="img-responsive">
              <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
              <a href="../../assets/frontend/pages/img/works/img4.jpg" class="fancybox-button" title="Project Name #4" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
            </em>
            <a class="recent-work-description" href="#">
              <strong>Amazing Project</strong>
              <b>Agenda corp.</b>
            </a>
          </div>
        </div>       
      </div>
    </div>   
    <!-- END RECENT WORKS -->

    <!-- BEGIN CLIENTS -->
    <div class="row margin-bottom-40 our-clients">
      <div class="col-md-3">
        <h2><a href="#">Nuestros Aliados</a></h2>
        <p>Lorem dipsum folor margade sitede lametep eiusmod psumquis dolore.</p>
      </div>
      <div class="col-md-9">
        <div class="owl-carousel owl-carousel6-brands">
          @foreach ($eventos as $evento)
          <div class="client-item">
            <a href="{{ route('viewEvento', array('id' => $evento->idEvento)) }}">
              <img src="http://lorempixel.com/139/88/business/?{{ rand(1,1000) }}" class="img-responsive" alt="">
              <img src="http://lorempixel.com/139/88/business/?{{ rand(1,1000) }}" class="color-img img-responsive" alt="">
            </a>
          </div>
          @endforeach
      </div>          
    </div>
    <!-- END CLIENTS -->
  </div>
</div>
@stop