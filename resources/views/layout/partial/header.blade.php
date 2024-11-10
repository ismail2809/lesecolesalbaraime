<header class="header">
        <!-- header top -->
        <div class="header-top">
            <div class="container ps-0">
                <div class="header-top-wrap">
                    <div class="header-top-left">
                        <div class="header-top-social">
                            <span>Follow Us: </span>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a> 
                        </div>
                    </div>
                    <div class="header-top-right">
                        <div class="header-top-contact">
                            <ul>
                                <li>
                                    <a href="#"><i class="far fa-location-dot"></i>Bvd Med V, BP : 14, Azemmour, 24100, Maroc</a>
                                </li>
                                <li>
                                    <a href="email:albaraime.viescholaire@gmail.com"><i class="far fa-envelopes"></i> 
                                    <span>albaraime.viescholaire@gmail.com</span></a>
                                </li>
                                <li>
                                    <a href="tel:0523358346"><i class="far fa-phone-volume"></i>05 23 35 83 46</a>
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
                        <div class="search-btn">
                            <button type="button" class="nav-right-link search-box-outer"><i
                                    class="far fa-search"></i></button>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link active" href="{{ url('/') }}" data-bs-toggle="dropdown">Home</a>
                            </li>
                            <li class="nav-item mega-menu dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ url('/') }}" data-bs-toggle="dropdown">les écoles Albaraime</a>
                                <div class="dropdown-menu fade-down">
                                    <div class="mega-content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <h5>Albaraime 1</h5>
                                                    <div class="menu-about">
                                                        <a href="#" class="menu-about-logo"><img
                                                                src="{{ asset('assets/img/logo/logo.png') }}" alt=""></a>
                                                        <p>We are many variations of passages available but the majority
                                                            have suffered alteration in some form by injected humour
                                                            words injected humour believable.</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <h5>Albaraime 2</h5>
                                                    <div class="menu-about">
                                                        <a href="#" class="menu-about-logo"><img
                                                                src="{{ asset('assets/img/logo/logo.png') }}" alt=""></a>
                                                        <p>We are many variations of passages available but the majority
                                                            have suffered alteration in some form by injected humour
                                                            words injected humour believable.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ url('/cycles') }}" data-bs-toggle="dropdown">Cycles des écoles</a>
                                <ul class="dropdown-menu fade-down"> 
                                    <li><a class="dropdown-item" href="#">Maternelle</a></li> 
                                    <li><a class="dropdown-item" href="#">Primaire</a></li> 
                                    <li><a class="dropdown-item" href="#">Collège</a></li> 
                                    <li><a class="dropdown-item" href="#">Lycée</a></li> 
                                </ul>
                            </li> 
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ url('/services') }}" data-bs-toggle="dropdown">Services</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="#"> Transport</a></li>
                                    <li><a class="dropdown-item" href="#"> Caféteria</a></li>
                                    <li><a class="dropdown-item" href="#">Activités parascolaire </a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/galerie') }}">Galerie</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/blog') }}">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                        <div class="nav-right"> 
                            <div class="nav-right-btn mt-2">
                                <a href="https://albaraime.fadaa.ma/login" class="theme-btn">
                                    <span class="fal fa-pencil"></span>EXTRANET</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>