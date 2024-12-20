<main class="main">
    <!-- hero slider -->
    <div class="hero-section">
        <div class="hero-slider owl-carousel owl-theme">
            <div class="hero-single" style="background: url({{ asset('assets/img/slider/slider-1.jpg') }})">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-8 mx-auto">
                            <div class="hero-content text-center">
                                <h6 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                    <i class="far fa-book-open-reader"></i>Bienvenue chez
                                </h6>
                                <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                    Les écoles <span>Al Baraime</span> Privées
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".75s">
                                    Préscolaire, Primaire, Collège & Lycée
                                </p>
                                <div class="hero-btn justify-content-center" data-animation="fadeInUp" data-delay="1s">
                                    <a href="contact.html" class="theme-btn theme-btn2">Découvrir<i
                                            class="fas fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-single" style="background: url({{ asset('assets/img/slider/slider-2.jpg') }})">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-8 mx-auto">
                            <div class="hero-content text-center">
                                <h6 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                    <i class="far fa-book-open-reader"></i>Bienvenue chez
                                </h6>
                                <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                    Les écoles <span>AlBaraime</span>
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".75s">
                                    De la Maternelle au Lycée, l'Excellence à Chaque Étape.
                                </p>
                                <div class="hero-btn justify-content-center" data-animation="fadeInUp" data-delay="1s">
                                    <a href="contact.html" class="theme-btn theme-btn2">Découvrir<i
                                            class="fas fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-single" style="background: url({{ asset('assets/img/slider/slider-3.jpg') }})">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-8 mx-auto">
                            <div class="hero-content text-center">
                                <h6 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                    <i class="far fa-book-open-reader"></i>Bienvenue chez
                                </h6>
                                <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                    Les écoles <span>AlBaraime</span>
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".75s">
                                    De la Maternelle au Lycée, l'Excellence à Chaque Étape.
                                </p>
                                <div class="hero-btn justify-content-center" data-animation="fadeInUp" data-delay="1s">
                                    <a href="contact.html" class="theme-btn theme-btn2">Découvrir<i
                                            class="fas fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero slider end -->


    <!-- about area -->
    <div class="about-area py-120">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                        <div class="about-img">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <img class="img-1" src="{{ asset('assets/img/about/01.jpg') }}" alt="">
                                    <div class="about-experience mt-4">
                                        <div class="about-experience-icon">
                                            <img src="{{ asset('assets/img/icon/exchange-idea.svg') }}" alt="">
                                        </div>
                                        <!-- <b class="text-start">Plus 35 Année <br> Qualité de service</b> -->
                                        <b class="text-start" style="margin: 5px;"> {{ $apropos->qualite }}</b>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img class="img-2" src="{{ asset('assets/img/about/02.jpg') }}" alt="">
                                    <img class="img-3 mt-4" src="{{ asset('assets/img/about/03.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> A Propos</span>
                            <h2 class="site-title">
                                <!-- Notre système éducatif vous <span>Inspire</span> encore. -->
                                {{ $apropos->title }}
                            </h2>
                        </div>
                        <p class="about-text">
                        <!-- Les écoles AL Baraime reposent sur une histoire riche de 35 ans d’enseignement privé au Maroc, plus
                        précisément à Azemmour . Sa fondation a vu le jour avec la vision de Madame Naima KARAFI, la Présidente
                        Directrice-Générale qui a reconnu dans le temps un besoin éducatif spécifique dans notre communauté et a
                        contribué en offrant une éducation de qualité durant toutes ces décennies. -->
                        {{ $apropos->description }}
                        </p>
                        <div class="about-content">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="about-item">
                                        <div class="about-item-icon">
                                            <img src="{{ asset('assets/img/icon/open-book.svg') }}" alt="">
                                        </div>
                                        <div class="about-item-content">
                                            <h5>{{ $apropos->title_service1 }}</h5>  
                                            <p>{{ $apropos->text_service1 }}</p>
                                        </div>
                                    </div>
                                    <div class="about-item">
                                        <div class="about-item-icon">
                                            <img src="{{ asset('assets/img/icon/global-education.svg') }}" alt="">
                                        </div>
                                        <div class="about-item-content">
                                            <h5>{{ $apropos->title_service2 }}</h5>
                                            <p>{{ $apropos->text_service2 }}</p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="about-quote">
                                        <p>{{ $apropos->quote }}</p>
                                        <i class="far fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end --> 

    <!-- choose-area -->
    <div class="choose-area pt-80 pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="choose-content wow fadeInUp" data-wow-delay=".25s">
                        <div class="choose-content-info">
                            <div class="site-heading mb-0">
                                <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> CURSUS SCOLAIRE</span>
                                <h2 class="site-title text-white mb-10">{{ $cursusScolaire->title }}</h2>


                                <p class="text-white">{{ $cursusScolaire->description }}</p>
                            </div>
                            <div class="choose-content-wrap">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="choose-item">
                                            <div class="choose-item-icon">
                                                <img src="{{ asset('assets/img/icon/teacher.svg') }}" alt="">
                                            </div>
                                            <div class="choose-item-info">
                                                <p><b>{{ $cursusScolaire->service1 }}</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="choose-item">
                                            <div class="choose-item-icon">
                                                <img src="{{ asset('assets/img/icon/course-material.svg') }}" alt="">
                                            </div>
                                            <div class="choose-item-info">
                                                <p><b>{{ $cursusScolaire->service2 }}</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="choose-item">
                                            <div class="choose-item-icon">
                                                <img src="{{ asset('assets/img/icon/teacher-2.svg') }}" alt="">
                                            </div>
                                            <div class="choose-item-info">
                                                <p><b>{{ $cursusScolaire->service3 }}</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="choose-item">
                                            <div class="choose-item-icon">
                                                <img src="{{ asset('assets/img/icon/online-course.svg') }}" alt="">
                                            </div>
                                            <div class="choose-item-info">
                                                 <p><b>{{ $cursusScolaire->service4 }}</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-img wow fadeInRight" data-wow-delay=".25s">
                        <img src="{{ asset('assets/img/choose/01.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- choose-area end -->

    <!-- gallery-area -->
    <div class="gallery-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Galerie</span>
                        <h2 class="site-title">Galerie <span>Éducative</span> </h2>
                        <p>Du Primaire au Lycée.</p>
                    </div>
                </div>
            </div>
            <div class="row popup-gallery">
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".25s">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/ecole/1.jpg') }}" alt="">
                        </div>
                        <div class="gallery-content">
                            <a class="popup-img gallery-link" href="{{ asset('assets/img/ecole/1.jpg') }}"><i
                                    class="fal fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/ecole/5.jpg') }}" alt="">
                        </div>
                        <div class="gallery-content">
                            <a class="popup-img gallery-link" href="{{ asset('assets/img/ecole/5.jpg') }}"><i
                                    class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".50s">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/ecole/3.jpg') }}" alt="">
                        </div>
                        <div class="gallery-content">
                            <a class="popup-img gallery-link" href="{{ asset('assets/img/ecole/3.jpg') }}"><i
                                    class="fal fa-plus"></i></a>
                        </div>
                    </div> 
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".75s">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/ecole/4.jpg') }}" alt="">
                        </div>
                        <div class="gallery-content">
                            <a class="popup-img gallery-link" href="{{ asset('assets/img/ecole/4.jpg') }}"><i
                                    class="fal fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/ecole/6.jpg') }}" alt="">
                        </div>
                        <div class="gallery-content">
                            <a class="popup-img gallery-link" href="{{ asset('assets/img/ecole/6.jpg') }}"><i
                                    class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery-area end -->

    <!-- cta-area -->
    <div class="cta-area pt-50 pb-50">
        <div class="container">
            <div class="cta-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-6 ms-lg-auto">
                        <div class="cta-content mt-0">
                            <h1 class="text-center">{{ $reinscription->title }}</h1>
                            </br>
                            </br>
                            <p> {{ $reinscription->description }} </p>
                            <div class="cta-btn">
                                <a href="#" class="theme-btn"> S'inscrire<i class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta-area end -->

    <!-- department area -->
    <div class="department-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline"><i class="far fa-book-open-reader"></i>  </span>
                        <h2 class="site-title">{{ $programme->title }}</h2>
                        <p>{{ $programme->description }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="department-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="department-icon">
                            <img src="{{ asset('assets/img/icon/monitor.svg') }}" alt="">
                        </div>
                        <div class="department-info">
                            <h4 class="department-title"><a href="#">{{ $programme->programme1 }}</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="department-item wow fadeInUp" data-wow-delay=".50s">
                        <div class="department-icon">
                            <img src="{{ asset('assets/img/icon/human.svg') }}" alt="">
                        </div>
                        <div class="department-info">
                            <h4 class="department-title"><a href="#">{{ $programme->programme2 }}</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="department-item wow fadeInUp" data-wow-delay=".75s">
                        <div class="department-icon">
                            <img src="{{ asset('assets/img/icon/data.svg') }}" alt="">
                        </div>
                        <div class="department-info">
                            <h4 class="department-title"><a href="#">{{ $programme->programme3 }}</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="department-item wow fadeInUp" data-wow-delay="1s">
                        <div class="department-icon">
                            <img src="{{ asset('assets/img/icon/acting.svg') }}" alt="">
                        </div>
                        <div class="department-info">
                            <h4 class="department-title"><a href="#">{{ $programme->programme4 }}</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="department-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="department-icon">
                            <img src="{{ asset('assets/img/icon/information.svg') }}" alt="">
                        </div>
                        <div class="department-info">
                            <h4 class="department-title"><a href="#">{{ $programme->programme5 }}</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="department-item wow fadeInUp" data-wow-delay=".50s">
                        <div class="department-icon">
                            <img src="{{ asset('assets/img/icon/art.svg') }}" alt="">
                        </div>
                        <div class="department-info">
                            <h4 class="department-title"><a href="#">{{ $programme->programme6 }}</a></h4>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <!-- department area end -->


    <!-- testimonial area -->
    <div class="testimonial-area ts-bg pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> TEMOIGNAGES</span>
                        <h2 class="site-title text-white">{{ $temoignage->title }}</h2>
                        <p class="text-white">{{ $temoignage->description }}</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider owl-carousel owl-theme">
                <div class="testimonial-item">
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote">
                        <p> {{ $temoignage->temoignage1 }} </p>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="{{ asset('assets/img/testimonial/01.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>{{ $temoignage->nom1 }}</h4> 
                        </div>
                    </div>
                    <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote">
                        <p> {{ $temoignage->temoignage2 }} </p>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="{{ asset('assets/img/testimonial/02.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>{{ $temoignage->nom2 }}</h4> 
                        </div>
                    </div>
                    <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote">
                        <p> {{ $temoignage->temoignage3 }} </p>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="{{ asset('assets/img/testimonial/03.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>{{ $temoignage->nom3 }}</h4> 
                        </div>
                    </div>
                    <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                </div> 
                <div class="testimonial-item">
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote">
                        <p> {{ $temoignage->temoignage4 }} </p>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="{{ asset('assets/img/testimonial/04.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>{{ $temoignage->nom4 }}</h4> 
                        </div>
                    </div>
                    <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                </div> 
            </div>
        </div>
    </div>
    <!-- testimonial area end -->


    <!-- blog area -->
    <div class="blog-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Découvrons nos Actualités</span>
                        <h2 class="site-title"> Dernières <span>Blogs</span> & <span>Presse</span></h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of
                            a page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($blogs->take(3) as $blog)
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="blog-date"><i class="fal fa-calendar-alt"></i>  {{ $blog->date }}</div>
                        <div class="blog-item-img">
                            <img src="{{ asset('storage/'.$blog->image) }}" alt="Thumb">
                        </div>
                        <div class="blog-item-info">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="{{ url('blog/'.$blog->slug) }}"><i class="far fa-bookmark"></i>{{ $blog->categories->title }}</a></li>
                                </ul>
                            </div>
                            <h4 class="blog-title">
                                <a href="{{ url('blog/'.$blog->slug) }}">{{ $blog->title }}</a>
                            </h4>
                            <a class="theme-btn" href="{{ url('blog/'.$blog->slug) }}">En savoir plus<i class="fas fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach 
            </div>
        </div>
    </div>
    <!-- blog area end -->

</main>