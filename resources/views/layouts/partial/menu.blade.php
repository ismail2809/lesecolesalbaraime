<header class="wrapper bg-light">
<div class="bg-info text-white fw-bold fs-15">
      <div class="container py-1 d-md-flex flex-md-row">
        <div class="d-flex flex-row align-items-center">
          <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-location-pin-alt"></i></div>
          <address class="mb-0">Bvd Med V, BP : 14, Azemmour, 24100, Maroc</address>
        </div>
        <div class="d-flex flex-row align-items-center me-6 ms-auto">
          <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-phone-volume"></i></div>
          <p class="mb-0"><a href="tel:0523358346" class="link-white hover">05 23 35 83 46</a></p>
        </div>
        <div class="d-flex flex-row align-items-center">
          <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-message"></i></div>
          <p class="mb-0"><a href="mailto:albaraime.viescholaire@gmail.com" class="link-white hover">albaraime.viescholaire@gmail.com</a></p>
        </div>
      </div>
    </div>
  <!--<nav class="navbar navbar-expand-lg classic transparent position-absolute navbar-light">-->
  <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">

    <div class="container flex-lg-row flex-nowrap align-items-center">
      <div class="navbar-brand w-100">
        <a href="{{ url('/') }}">
          <img src="{{ asset('assets/img/palmerie/logos.png') }}"  alt="École Albaraime" />
        </a>
      </div>
      <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
        <div class="offcanvas-header d-lg-none">
          <h3 class="text-white fs-30 mb-0">École Albaraime</h3>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">Accueil</a>  

            <!--<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">École Albaraime</a>
              <ul class="dropdown-menu">     
                <li class="nav-item"><a class="dropdown-item" href="{{ url('/apropos') }}">Présentation</a></li> 
                <li class="nav-item"><a class="dropdown-item" href="{{ url('/apropos#mot-de-directeur') }}">Mot du directeur générale</a></li>
                <li class="nav-item"><a class="dropdown-item" href="{{ url('/apropos#missions-valeurs') }}">Missions & valeurs</a></li>  
                <li class="nav-item"><a class="dropdown-item" href="{{ url('/apropos#infrastructures') }}">Infrastructures scolaires</a></li>
              </ul>
            </li>-->

            <li class="nav-item">
              <a class="nav-link" href="{{ url('/les_ecoles_al_baraime') }}">Les écoles Al Baraime</a>
            </li>
            
            <li class="nav-item">

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Cycles des écoles</a>
              <ul class="dropdown-menu">   
                <li class="nav-item"><a class="dropdown-item" href="{{ url('/cycles') }}">Maternelle</a></li>
                <li class="nav-item"><a class="dropdown-item" href="{{ url('/cycles#primaire') }}">Primaire</a></li>
                <li class="nav-item"><a class="dropdown-item" href="{{ url('/cycles#college') }}">Collège</a></li>
                <li class="nav-item"><a class="dropdown-item" href="{{ url('/cycles#lycee') }}">Lycée</a></li>
              </ul>
            </li>

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
              <ul class="dropdown-menu">   
                <li class="nav-item"><a class="dropdown-item" href="{{ url('/services') }}">Transports</a></li> 
                <li class="nav-item"><a class="dropdown-item" href="{{ url('/services#restauration') }}">Restauration</a></li> 
                <li class="nav-item"><a class="dropdown-item" href="{{ url('/services#activites-parascholaires') }}">Activités parascolaires</a></li> 
              </ul>
            </li> 

            <li class="nav-item">
              <a class="nav-link" href="{{url('/galeries') }}">Galeries</a> 
            </li>

            <li class="nav-item">                
              <a class="nav-link" href="{{url('/blogs') }}">Blog</a> 
          	</li>

            <li class="nav-item">                
              <a class="nav-link" href="{{url('/contact') }}">Contact</a> 
          	</li>

            <li class="nav-item">                
              <a class="nav-link" href="https://albaraime.fadaa.ma/login" target="_blank">EXTRANET</a> 
            </li>
          </ul>
          <!-- /.navbar-nav -->
          <div class="offcanvas-footer d-lg-none">
            <div>
              <a href="mailto:first.last@email.com" class="link-inverse">albaraime@gmail.com</a>
              <br /> 05 22 23 84 38  <br />
              <nav class="nav social social-white mt-4"> 
                <a href="#"><i class="uil uil-facebook-f"></i></a> 
                <a href="#"><i class="uil uil-instagram"></i></a> 
              </nav>
              <!-- /.social -->
            </div>
          </div>
          <!-- /.offcanvas-footer -->
        </div>
        <!-- /.offcanvas-body -->
      </div>
      <!-- /.navbar-collapse -->
      <div class="navbar-other ms-lg-4">
        <ul class="navbar-nav flex-row align-items-center ms-auto"> 
          <li class="nav-item d-lg-none">
            <button class="hamburger offcanvas-nav-btn"><span></span></button>
          </li>
        </ul>
        <!-- /.navbar-nav -->
      </div>
      <!-- /.navbar-other -->
    </div>
    <!-- /.container -->
  </nav>
  <!-- /.navbar -->
  <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
    <div class="offcanvas-header">
      <h3 class="text-white fs-30 mb-0">École Albaraime</h3>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body pb-6">
      <div class="widget mb-8">
        <p>École Albaraime  with various layouts which will be a great solution for your business.</p>
      </div>
      <!-- /.widget -->
      <div class="widget mb-8">
        <h4 class="widget-title text-white mb-3">Contact Info</h4>
        <address>20 Rue Abou Ishak Chirazi, <br /> 20100, Casablanca, Maroc</address>
        <a href="mailto:palmeraie@gmail.com">palmeraie@gmail.com</a><br /> 05 22 23 84 38 
      </div>
      <!-- /.widget -->
      <div class="widget mb-8">
        <h4 class="widget-title text-white mb-3">Learn More</h4>
        <ul class="list-unstyled">
          <li><a href="#">Our Story</a></li>
          <li><a href="#">Terms of Use</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <!-- /.widget -->
      <div class="widget">
        <h4 class="widget-title text-white mb-3">Follow Us</h4>
        <nav class="nav social social-white"> 
          <a href="https://web.facebook.com/Albaraime" target="_blank"><i class="uil uil-facebook-f"></i></a> 
          <a href="https://www.instagram.com/lesecolesalbaraime/" target="_blank"><i class="uil uil-instagram"></i></a> 
        </nav>
        <!-- /.social -->
      </div>
      <!-- /.widget -->
    </div>
    <!-- /.offcanvas-body -->
  </div>
  <!-- /.offcanvas -->
  <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
    <div class="container d-flex flex-row py-6">
      <form class="search-form w-100">
        <input id="search-form" type="text" class="form-control" placeholder="Type keyword and hit enter">
      </form>
      <!-- /.search-form -->
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.offcanvas -->
</header>