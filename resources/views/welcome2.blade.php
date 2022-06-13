
  <link href="{{asset('assets/assets3/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/assets3/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{asset('assets/assets3/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/assets3/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/assets3/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/assets3/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/assets3/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/assets3/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/assets3/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/assets3/css/style.css')}}" rel="stylesheet">
   @yield('styles')


  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-phone"></i> Call us now +1 5589 55488 55
      </div>
      <div class="d-flex align-items-center">
       
      </div>
    </div>
  </div>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a href="index.html" class="logo mr-auto"><img src="{{asset('assets/assets3/img/logo.jpg')}}" alt=""></a>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
        
          
     @yield('header')

          
        <a href="{{route('login')}}" class="appointment-btn scrollto"><span class="d-none d-md-inline">ingia kwenye</span> mfumo</a>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="{{route('register')}}" class="appointment-btn scrollto"><span class="d-none d-md-inline">JISA</span> JILI KWENYE MFUMO</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{asset('assets/assets3/img/slide/Bloody.jpg')}})">
          <div class="container">
            <h2>KARIBU <span>UKURASA WA DAMU SALAMA</span></h2>
            <p>Mpango wa damu salama upo chini ya wizara ya afya maendeleo ya jamii wazee na watoto</p>
            <a href="#about" class="btn-get-started scrollto">soma zaid</a>
          </div>
        </div>

      

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url({{asset('assets/assets3/img/slide/slide-4.jpg')}})">
          <div class="container">
            <h2>Bodi ya damu salama</h2>
            <p>umeanzishwa kwa lengo la kusaidia maisha ya watanzania wenye matatizo ya upungufu wa damu znazoweza kusababishwa na mataizo mbali mbal kam a vile ajali </p>
            <a href="#about" class="btn-get-started scrollto">soma zaid</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
    

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
    @yield('content')
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="icofont-heart-beat"></i></div>
              <h4 class="title"><a href="">Changia damu</a></h4>
              <p class="description">changia damu kusaidia maisha ya wengine</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="icofont-drug"></i></div>
              <h4 class="title"><a href="">changia damu</a></h4>
              <p class="description">changia damu kusaidia maisha ya wanaopata ajali</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="icofont-thermometer-alt"></i></div>
              <h4 class="title"><a href="">changia damu</a></h4>
              <p class="description">changia damu,okoa maisha ya wengine</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="icofont-dna-alt-1"></i></div>
              <h4 class="title"><a href="">changia damu</a></h4>
              <p class="description">changia damu usaidie maisha ya wamama wajawazito</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>kwa mawasiliano zaidi wasiliana nasi kwa</h3>
          <p> www.damusalama.co.tz.</p>
          <a class="cta-btn scrollto" href="#appointment">+255755158432</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

   
    </section><!-- End Departments Section -->

  
   

 

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
@yield('footer')
  <!-- Vendor JS Files -->
  <script src="{{asset('assets/assets3/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/assets3/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/assets3/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/assets3/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/assets3/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/assets3/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/assets3/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/assets3/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/assets3/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/assets3/js/main.js')}}"></script>
@yield('scripts')
</body>

</html>