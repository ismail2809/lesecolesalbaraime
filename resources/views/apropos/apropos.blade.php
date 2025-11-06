@extends('layout.master')
@section('title', "A Propos")

@section('content')
<main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url({{ asset('assets/img/breadcrumb/01.jpg') }} )">
            <div class="container">
                <h2 class="breadcrumb-title">A Propos</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">A Propos</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- about area -->
        <div class="how-apply pt-120 pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="content-info wow fadeInUp" data-wow-delay=".25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="site-heading mb-3"> 
                                <h2 class="site-title">
                                Mot de <span>directeur</span>
                                </h2>
                            </div>
                            <p class="content-text">
                                There are many variations of passages available but the majority have suffered
                                alteration in some form by injected humour randomised words which don't look even
                                slightly believable. If you are going to use passage you need sure there anything
                                embarrassing first true generator on the Internet.
                            </p>
                            <p class="content-text mt-2">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                            </p>
                            <div class="row my-3">
                                <div class="col-md-6">
                                    <ul class="content-list">
                                        <li><i class="fas fa-check-circle"></i>Lorem ipsum dolor sit amet,</li> 
                                        <li><i class="fas fa-check-circle"></i>adipisicing elit. Quos ut,</li> 
                                        <li><i class="fas fa-check-circle"></i>atque nisi earum corrupti.</li> 
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="content-list">
                                        <li><i class="fas fa-check-circle"></i>quod veniam ad labore optio,</li>
                                        <li><i class="fas fa-check-circle"></i>non suscipit ab ullam!</li>
                                        <li><i class="fas fa-check-circle"></i>Interviewing Process</li> 
                                    </ul>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content-img wow fadeInRight" data-wow-delay=".25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInRight;">
                            <img src="https://albaraime.mymadrassati.com/assets/img/palmerie/apropos/presentation.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about area end -->


        <!-- counter area -->
        <div class="counter-area pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icon/course.svg') }}" alt="">
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="500" data-speed="3000">1000</span>
                                <h6 class="title">+ Élèves </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icon/award.svg') }}" alt="">
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="1900" data-speed="3000">35</span>
                                <h6 class="title">+ Année d'éxpertise </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icon/teacher-2.svg') }}" alt="">
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="750" data-speed="3000">100</span>
                                <h6 class="title">+ Enseignants</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icon/graduation.svg') }}" alt="">
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="30" data-speed="3000">2</span>
                                <h6 class="title">+ Écoles</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter area end -->


        <!-- testimonial area -->
        <div class="testimonial-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Testimonials</span>
                            <h2 class="site-title">What Our Students <span>Say's</span></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout.</p>
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
                            <p>
                                There are many variations of tend to repeat chunks some all form necessary injected for the going are humour words.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img" style="display:none">
                                <img src="{{ asset('assets/img/testimonial/01.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Anthony Nicoll</h4>
                                <p>Student</p>
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
                            <p>
                                There are many variations of tend to repeat chunks some all form necessary injected for the going are humour words.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img" style="display:none">
                                <img src="{{ asset('assets/img/testimonial/02.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Richard Lock</h4>
                                <p>Student</p>
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
                            <p>
                                There are many variations of tend to repeat chunks some all form necessary injected for the going are humour words.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img" style="display:none">
                                <img src="{{ asset('assets/img/testimonial/03.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Randal Grand</h4>
                                <p>Student</p>
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
                            <p>
                                There are many variations of tend to repeat chunks some all form necessary injected for the going are humour words.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img" style="display:none">
                                <img src="{{ asset('assets/img/testimonial/04.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Edward Miles</h4>
                                <p>Student</p>
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
                            <p>
                                There are many variations of tend to repeat chunks some all form necessary injected for the going are humour words.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img" style="display:none">
                                <img src="{{ asset('assets/img/testimonial/05.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Ninal Gordon</h4>
                                <p>Student</p>
                            </div>
                        </div>
                        <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial area end -->


        <!-- team-area -->
        <div class="team-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Our Teachers</span>
                            <h2 class="site-title">Meet With Our <span>Teachers</span></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="team-img">
                                <img src="{{ asset('assets/img/team/01.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Angela T. Vigil</a></h5>
                                    <span>Associate Professor</span>
                                </div>
                            </div>
                            <span class="team-social-btn"><i class="far fa-share-nodes"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".50s">
                            <div class="team-img">
                                <img src="{{ asset('assets/img/team/02.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Frank A. Mitchell</a></h5>
                                    <span>Associate Professor</span>
                                </div>
                            </div>
                            <span class="team-social-btn"><i class="far fa-share-nodes"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".75s">
                            <div class="team-img">
                                <img src="{{ asset('assets/img/team/03.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Susan D. Lunsford</a></h5>
                                    <span>CEO & Founder</span>
                                </div>
                            </div>
                            <span class="team-social-btn"><i class="far fa-share-nodes"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay="1s">
                            <div class="team-img">
                                <img src="{{ asset('assets/img/team/04.jpg') }}" alt="thumb">
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Dennis A. Pruitt</a></h5>
                                    <span>Associate Professor</span>
                                </div>
                            </div>
                            <span class="team-social-btn"><i class="far fa-share-nodes"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team-area end -->


        <!-- partner area -->
        <div class="partner-area bg pt-50 pb-50">
            <div class="container">
                <div class="partner-wrapper partner-slider owl-carousel owl-theme">
                    <img src="{{ asset('assets/img/partner/01.png') }}" alt="thumb">
                    <img src="{{ asset('assets/img/partner/02.png') }}" alt="thumb">
                    <img src="{{ asset('assets/img/partner/03.png') }}" alt="thumb">
                    <img src="{{ asset('assets/img/partner/04.png') }}" alt="thumb">
                    <img src="{{ asset('assets/img/partner/01.png') }}" alt="thumb">
                    <img src="{{ asset('assets/img/partner/02.png') }}" alt="thumb">
                    <img src="{{ asset('assets/img/partner/04.png') }}" alt="thumb">
                </div>
            </div>
        </div>
        <!-- partner area end -->

    </main>

@endsection