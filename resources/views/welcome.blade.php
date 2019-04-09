<!DOCTYPE html>
  <html lang="es">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="images/x-icon" href="{{url('template/img/favicon/favicon.ico')}}" />

    <meta name="description" content="La Liga Contra el Cáncer es la primera institución del Perú en realizar acciones de detección y prevención del cáncer. En sus más de 60 años de funcionamiento, ha contribuido a disminuir la alta incidencia de la enfermedad en nuestro país a través de acciones de prevención. ">
    <meta name="keywords" content="Liga, cancer, peru, prevencion, campaña">
    <meta name="author" content="Orange-360">
    <meta name="author" content="Luis Gomez">

    <title>Liga Contra el Cáncer</title>

      <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- CSRF Token -->
    <meta name="_token" content="{!! csrf_token() !!}" />

    <!-- Bootstrap core CSS -->
    {{ Html::style('template/css/bootstrap.min.css') }}

    <!-- Custom fonts for this template -->
    {{ Html::style('template/css/all.min.css') }}
    {{ Html::style('https://fonts.googleapis.com/css?family=Varela+Round') }}
    {{ Html::style('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}

    <!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
    {{ Html::style('//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css') }}


    <!-- Custom styles for this template -->
    {{ Html::style('template/css/grayscale.css') }}
    {{ Html::style('template/css/docs.css') }}

    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css"
      integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
      crossorigin="anonymous">
    {{ Html::style('http://anijs.github.io/lib/anicollection/anicollection.css') }}

    {{ Html::style('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}

     <!-- Jq alertify-->
    {{ Html::style('template/css/alertify.min.css') }}

    <!--modal -->
     {{ Html::style('template/css/modal-video.min.css') }}

    {{ Html::style('template/css/style_own.css') }}


    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119464233-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-119464233-1');
        </script>


  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img src="{{url('template/img/logo/LOGO-A.png')}}"  alt="">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#one">Autoexamen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#two">Agenda tu cita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#tree">Video</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#four">Cáncer de mama</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#five">Auspiciadores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#six">Ubicación</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-light" >

      <!--
style="background-image:  url('template/img/section/3.jpg');  background-repeat: no-repeat; background-size: 100%;"
https://storage.googleapis.com/coverr-main/mp4/Coming-Soon.mp4
-->


      <div class="overlay"></div>
       <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" >
        <source src="{{ url('template/img/video/2.mp4') }}" type="video/mp4">
      </video>
        <div class="container h-100">
          <div class="d-flex text-center h-100">
            <div class="my-auto w-100 text-white mb-3">


                <!--<h3 class="display-2 font-weight-bold animated wobble delay-5s " style="margin-bottom: 200px;">#TETASCONPROPOSITO</h3>-->




                <span class="js-video-button btn btn-lg btn-danger " data-video-id='3nw8wkko-A8' style="margin-top: 200px;
                  color: #e95298; ">
                <i class="fa fa-play-circle" aria-hidden="true""></i>  Ver Video
              </span>

                  <span class="js-video-button btn btn-lg btn-danger " data-video-id='TvZQbO5OXXs' style="margin-top: 200px;
                  color: #e95298; ">
                <i class="fa fa-play-circle" aria-hidden="true""></i>  Ver Video</span>









            </div>
          </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="one" class="projects-section text-center bg-light" data-anijs="if: scroll, on: window, do:bounceIn animated, before: scrollReveal">
          <div class="container">
            <div class="row  my-4">
              <div class="col-lg-8 mx-auto ">
                <h4 class="text-pink text-uppercase font-weight-bold pb-3" data-anijs="if: scroll, on: window, do:fadeInRightBig animated, before: scrollReveal">mostrar tetas en publicidad nunca valió tanto la pena</h4>
                <p class="text-dark-50" data-anijs="if: scroll, on: window, do:bounceInLeft animated, before: scrollReveal">El 95% de los casos de cáncer detectados a tiempo tienen cura, por eso realízate un autoexamen con este tutorial y regístrate para hacerte un chequeo en la Liga Contra el Cáncer.</p>
              </div>
            </div>
       <!-- <img src="img/ipad.png" class="img-fluid" alt="">-->
      </div>
    </section>

    <!-- Contact Section -->

    <section id="two" class="projects-section bg-pink" data-anijs="if: scroll, on: window, do:fadeInRightBig animated, before: scrollReveal" >
           <div class="container">
           <div class="row">

                <div class="col-lg-8 mx-auto" >

                  <h3 class=" text-white font-weight-bold text-center py-3" >REGISTRATE PARA HACERTE UN CHEQUEO</h3>
                  <dir class="by-4"></dir>
                <form id="registerForm" method="get" action="">

                  <div class="form-row">
                    <div class="form-group col-md-4 ">
                      <label for="Nombre" class="bmd-label-floating text-white">Nombre</label>
                      <input type="text" name="name" class="form-control text-white" id="name" >
                    </div>
                    <div class="form-group col-md-4">
                      <label for="last_name" class="bmd-label-floating text-white">Apellido Paterno</label>
                      <input type="text" name="last_name" class="form-control text-white" id="last_name" >
                    </div>
                    <div class="form-group col-md-4">
                       <label for="mother_last_name" class="bmd-label-floating text-white">Apellido Materno</label>
                      <input type="text" name="mother_last_name" class="form-control text-white" id="mother_last_name" >
                    </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-4">
                      <label for="Email" class="bmd-label-floating text-white">Email</label>
                      <input type="email" name="email" class="form-control text-white" id="email" >
                    </div>
                    <div class="form-group col-md-4">
                      <label for="Celular" class="bmd-label-floating text-white">Celular</label>
                      <input type="text" name="cellphone" class="form-control text-white" id="cellphone" >
                          <small class="form-text text-white">Ejemplo: (codigo)000-000-000</small>
                    </div>
                  </div>


                  <div class="form-row">

                    <div class="form-group col-md-4">

                       <div class="g-recaptcha" data-sitekey="6LeeCXIUAAAAADyVeA_HieroI1AhxlMX2wbpC23d"
                    data-callback="recaptchaCallback" data-expired-callback="recaptchaExpired"
                    > </div>

                       <input id="hidden-grecaptcha" name="hidden-grecaptcha" type="text" style="opacity: 0; position: absolute; top: 0; left: 0; height: 1px; width: 1px;"/>
                    </div>
                    <div class="form-group offset-2 col-md-4 text-right pt-3 pt-3">

                         <button type="submit" class="btn btn-gray btn-raised  ">Registrar</button>
                    </div>

                    </div>


                  </div>
                  <input type="hidden" name="path" value="{{route('template.registerForm')}}">




                </form>

              </div>

             </div>
           </div>
    </section>

    <!-- video Section -->
    <section id="tree" class="video-sectiond" data-anijs="if: scroll, on: window, do:bounceInLeft animated, before: scrollReveal"
   >
   <!--  style="background-image:  url('template/img/section/Gráfica_Horizontal.jpg');  background-repeat: no-repeat; background-size: 100%;

    "-->
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/yvkhzLlsk20?rel=0" autohide allowfullscreen></iframe>
      </div>

    </section>

    <!-- description-section -->
    <section id="four" class="description-section bg-light"  data-anijs="if: scroll, on: window, do:bounceIn animated, before: scrollReveal"  >
   <!-- Page Content -->
    <div class="container">
      <!-- Team Members Row -->
      <div class="row">

            <div class="col-lg-4 col-sm-4 text-center "  data-anijs="if: scroll, on: window, do:bounceInLeft animated, before: scrollReveal">
              <img class="rounded-circle img-fluid d-block mx-auto" src="{{url('template/img/description/IC-1.png')}}" alt="">
              <h3>Mujeres
              </h3>
              <p>El cáncer de mama es la primera causa de muerte en la mujer peruana.</p>
            </div>

            <div class="col-lg-4 col-sm-4 text-center " data-anijs="if: scroll, on: window, do:rotateIn animated, before: scrollReveal">
              <img class="rounded-circle img-fluid d-block mx-auto" src="{{url('template/img/description/IC-2.png')}}" alt="">
              <h3>Estadística

              </h3>
              <p>Al año cerca de 7 mil mujeres son detectadas con cáncer de mama y más de 1800 fallecen.</p>
            </div>

            <div class="col-lg-4 col-sm-4 text-center 4" data-anijs="if: scroll, on: window, do:bounceInRight animated, before: scrollReveal">
              <img class="rounded-circle img-fluid d-block mx-auto" src="{{url('template/img/description/IC-3.png')}}" alt="">
              <h3>Chequeo
              </h3>
              <p>El 95% de los casos de cáncer detectados a tiempo tienen cura.</p>
            </div>

            <div class="offset-lg-2 offset-md-2 col-lg-4 col-sm-4 text-center " data-anijs="if: scroll, on: window, do:bounceInRight animated, before: scrollReveal">
              <img class="rounded-circle img-fluid d-block mx-auto" src="{{url('template/img/description/IC-4.png')}}" alt="">
              <h3>Prevención
              </h3>
              <p>Realízate un autoexamen mensual y un chequeo de mama, al menos una vez al año. </p>
            </div>

            <div class="col-lg-4 col-sm-4 text-center " data-anijs="if: scroll, on: window, do:bounceInLeft animated, before: scrollReveal">
              <img class="rounded-circle img-fluid d-block mx-auto" src="{{url('template/img/description/IC-5.png')}}" alt="">
              <h3>
                Observación
              </h3>
              <p>El cáncer de mama no presenta síntomas en su etapa inicial. En la mayoría de casos se detecta en etapa avanzado, por ello se recomienda la realización un chequeo de mama una vez al año. </p>
            </div>


      </div>

    </div>
<!-- /.container -->

    </section>
    <style type="text/css">

      .sponsor_imagen: {filter: blur(5px);
      filter: sepia(60%);}
    </style>
    <!-- sponsors section--->
    <section id="five" class="sponsor-section bg-white" data-anijs="if: scroll, on: window, do:fadeInRightBig animated, before: scrollReveal">


      <div class="container ">
          <div class="row ">
              <div class="owl-carousel owl-theme">
                <div class="item"><img class="" src="{{url('template/img/sponsor/1.png')}}" ></div>
                <div class="item"><img class="" src="{{url('template/img/sponsor/2.png')}}" ></div>
                <div class="item"><img class="" src="{{url('template/img/sponsor/3.png')}}" ></div>
                <div class="item"><img class="" src="{{url('template/img/sponsor/4.png')}}" ></div>
                <div class="item"><img class="" src="{{url('template/img/sponsor/5.png')}}" ></div>
                <div class="item"><img class="" src="{{url('template/img/sponsor/6.png')}}" ></div>
                <div class="item"><img class="" src="{{url('template/img/sponsor/7.png')}}" ></div>
                <div class="item"><img class="" src="{{url('template/img/sponsor/8.png')}}" ></div>
              </div>
          </div>
      </div>
    </section>


     <!-- maps Section -->
     <section id="six" class="map2-section" data-anijs="if: scroll, on: window, do:bounceInLeft animated, before: scrollReveal">

        <div class="row">
            <iframe src="{{url("mapsolo.html")}}" height="450" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

    </section>


    <!-- Footer -->
    <footer class="bg-pink small text-center text-white-50" data-anijs="if: scroll, on: window, do:bounceIn animated, before: scrollReveal">
      <div class="container">
          <div class="row d-flex justify-content-center flex-column">
            <div class="p-1 text-white">
              Central telefónica *5442 | Av. Brasil 2746, Pueblo Libre | Av. Nicolás de Piérola 727, Lima | Av. Angamos Este 2514, Surquillo
              2018 Liga Contra el Cáncer
            </div>
             <div class="p-1 text-white">
              <a href="https://twitter.com/LigaCancerPeru" target="_blank" class="mx-2 ">
                    <i class="fab fa-twitter text-white"></i>
                  </a>
                  <a href="https://www.facebook.com/LigaCancer" target="_blank" class="mx-2">
                    <i class="fab fa-facebook-f text-white"></i>
                  </a>
                  <a href="https://www.youtube.com/channel/UCSm6XdI7acLsUq_KXTt0Bhg/videos" target="_blank" class="mx-2">
                    <i class="fab fa-youtube text-white"></i>
                  </a>
                  <a href="https://www.instagram.com/ligacancer/" target="_blank" class="mx-2">
                    <i class="fab fa-instagram text-white"></i>
                  </a>

            </div>
             <div class="py-4 text-white">
              ©Desarrollado por Orange-360 - 2018
            </div>



                </div>

            </div>
          </div>




    </footer>

    <!-- Return to Top -->

    <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

    <!-- Bootstrap core JavaScript -->
    {{ Html::script('template/js/jquery.min.js') }}
    {{ Html::script('template/js/bootstrap.bundle.min.js') }}


    <!-- Plugin JavaScript -->
     {{ Html::script('template/js/jquery.easing.min.js') }}

    <!-- Custom scripts for this template -->
    {{ Html::script('template/js/grayscale.min.js') }}

    <!-- ani js-->
    {{ Html::script('template/js/anijs-min.js') }}
    {{ Html::script('template/js/helpers/scrollreveal/anijs-helper-scrollreveal-min.js') }}

    <!-- Jq validate-->
    {{ Html::script('template/js/jquery.validate.min.js') }}

    <!-- Jq Mask -->
    {{ Html::script('template/js/jquery.mask.min.js') }}

    <!-- Jq alertify-->
    {{ Html::script('template/js/alertify.min.js') }}

    <!-- Jown carousel-->
     {{ Html::script('template/js/jquery.mask.min.js') }}

     {{ Html::style('template/css/owl.carousel.css') }}
     {{ Html::script('template/js/owl.carousel.min.js') }}

     <!-- recapcha -->
     {{ Html::script('https://www.google.com/recaptcha/api.js') }}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

     {{ Html::script('template/js/jquery-modal-video.min.js') }}

     {{ Html::script('template/js/js_own.js') }}

    <script>

    </script>
  </body>

</html>
