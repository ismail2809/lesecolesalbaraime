<footer class="footer-area">
        <div class="footer-shape">
            <img src="{{ asset('assets/img/shape/03.png') }}" alt="">
        </div>
        <div class="footer-widget">
            <div class="container">
                <div class="row footer-widget-wrapper pt-100 pb-70">
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box about-us">
                            <a href="{{ url('/') }}" class="footer-logo">
                                <img src="{{ asset('assets/img/logo/logo-light.png') }}" alt="">
                            </a>
                            <p class="mb-3">
                                Accueillir et accompagner chaque élève durant son parcours, de la maternelle au baccalauréat, et lui donner l’envie d’apprendre en développant ses compétences pour mieux appréhender son avenir.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Contactez-nous</h4>                       
                            <ul class="footer-contact">
                                <li><a href="tel:{{$setting->tel1}}"><i class="far fa-phone"></i>{{$setting->tel1}}</a></li>
                                <li><a href="tel:{{$setting->tel2}}"><i class="far fa-phone"></i>{{$setting->tel2}}</a></li>
                                <li><i class="far fa-map-marker-alt"></i><a href="{{$setting->adresse1_map}}" target="_blank" rel="noopener noreferrer">{{$setting->adresse1}}</a></li>
                                <li><i class="far fa-map-marker-alt"></i><a href="{{$setting->adresse1_map}}" target="_blank" rel="noopener noreferrer">{{$setting->adresse2}}</a></li>
                                <li><a href="email:{{$setting->email}}">
                                    <i class="far fa-envelope"></i>
                                    <span class="__cf_email__">{{$setting->email}}</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Liens utiles</h4>
                            <ul class="footer-list">
                                <li><a href="{{ url('/albaraime1') }}"><i class="fas fa-caret-right"></i> AlbaraimeI </a></li>
                                <li><a href="{{ url('/albaraime2') }}"><i class="fas fa-caret-right"></i> AlbaraimeII </a></li>
                                <li><a href="{{ url('/fournitures') }}"><i class="fas fa-caret-right"></i> Fournitures </a></li>
                                <li><a href="{{ url('/galeries') }}"><i class="fas fa-caret-right"></i> Galerie</a></li>
                                <li><a href="{{ url('/blogs') }}"><i class="fas fa-caret-right"></i> Blogs</a></li>
                                <li><a href="{{ url('/contact') }}"><i class="fas fa-caret-right"></i> Contact</a></li>
                                <li><a href="{{ url('/politique-de-confidentialite') }}"><i class="fas fa-caret-right"></i> Politique De Confidentialité </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box about-us"> 
                            <h4 class="footer-widget-title">Applications</h4>
                            <a href="#" class="footer-logo">
                                <img src="{{ asset('assets/img/app/button_google_play.svg') }}" alt="">
                            </a> 
                            <a href="#" class="footer-logo">
                                <img src="{{ asset('assets/img/app/button_appstore.svg') }}" alt="">
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="copyright-wrapper">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <p class="copyright-text">
                                &copy; Copyright <span id="date"></span> <a href="{{ url('/') }}"> Les Écoles Albaraime Privées </a> All Rights Reserved.
                            </p>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <ul class="footer-social">
                                <li><a href="{{$setting->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{$setting->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>