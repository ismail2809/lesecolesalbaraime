<header class="header">
        <!-- header top -->
        <div class="header-top">
            <div class="container ps-0">
                <div class="header-top-wrap">
                    <div class="header-top-left">
                        <div class="header-top-social">
                            <span>Suivez-nous: </span>
                            <a href="{{$setting->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{$setting->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a>      
                        </div>
                    </div>
                    <div class="header-top-right">
                        <div class="header-top-contact">
                            <ul>
                                <li>
                                    <a href="{{$setting->adresse1_map}}" target="_blank" rel="noopener noreferrer">
                                        <i class="far fa-location-dot"></i>
                                        {{$setting->adresse1}}
                                    </a>
                                </li>
                                <li>
                                    <a href="email:{{$setting->email}}"><i class="far fa-envelopes"></i> 
                                    <span>{{$setting->email}}</span></a>
                                </li>
                                <li>
                                    <a href="tel:{{$setting->tel1}}"><i class="far fa-phone-volume"></i>{{$setting->tel1}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container position-relative">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
                    </a>
                    <div class="mobile-menu-right"> 
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item mega-menu dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ url('/') }}" data-bs-toggle="dropdown">À Propos</a>
                                <div class="dropdown-menu fade-down">
                                    <div class="mega-content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <h5><a href="{{ url('/albaraime1') }}">ALBARAIME I </a></h5>
                                                    <p><a href="{{ url('/albaraime1') }}"><b>Préscolaire </b></a></p>
                                                    <div class="menu-about">
                                                        <a href="{{ url('/albaraime1') }}" class="menu-about-logo">
                                                            <img src="{{ asset('assets/img/ecole/ALBARAIMEI.png') }}" alt="ALBARAIMEI" style="width: 450px !important">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <h5><a href="{{ url('/albaraime2') }}">ALBARAIME II </a></h5>
                                                    <p><a href="{{ url('/albaraime2') }}"><b>Préscolaire, Primaire, Collège & Lycée</b></a></p>
                                                    <div class="menu-about">
                                                        <a href="{{ url('/albaraime2') }}" class="menu-about-logo">
                                                            <img src="{{ asset('assets/img/ecole/ALBARAIMEII.png') }}" alt="ALBARAIMEII" style="width: 450px !important">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ url('/cycles') }}" data-bs-toggle="dropdown">Cursus Scolaires</a>
                                <ul class="dropdown-menu fade-down"> 
                                    <li><a class="dropdown-item" href="{{ url('/maternelle') }}">Maternelle</a></li> 
                                    <li><a class="dropdown-item" href="{{ url('/primaire') }}">Primaire</a></li> 
                                    <li><a class="dropdown-item" href="{{ url('/college') }}">Collège</a></li> 
                                    <li><a class="dropdown-item" href="{{ url('/lycée') }}">Lycée</a></li> 
                                </ul>
                            </li> 
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ url('/services') }}" data-bs-toggle="dropdown">Services</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="{{ url('/controles-continus') }}">Controles Continus</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/fourniture') }}"> Fournitures</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/transport') }}"> Transports</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/cafeteria') }}"> Caféteria</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/activites-parascolaire') }}">Activités parascolaire </a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/galeries') }}">Galerie</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/blogs') }}">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                        <div class="nav-right"> 
                            <div class="nav-right-btn mt-2">
                                <a href="https://albaraime.fadaa.ma/login" target="_blank" class="theme-btn">
                                    <span class="fal fa-pencil"></span>EXTRANET</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>