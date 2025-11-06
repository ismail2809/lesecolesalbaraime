@extends('layout.master')
@section('title', "Primaire")

@section('content')


    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Cursus Scolaire</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Primaire</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- Cycles -->
        <div class="campus-life pt-120 pb-10">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="content-img wow fadeInLeft" data-wow-delay=".25s"> 
                            <img src="{{ asset('storage/'.$primaire->image) }}" alt="{{ $primaire->alt_image }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content-info wow fadeInUp" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> 
                                    {{ $primaire->niveau }}
                                </span>
                                <h2 class="site-title">
                                    {{ $primaire->title }}
                                </h2>
                            </div>
                            <p class="content-text">
                                {!! str($primaire->description)->sanitizeHtml() !!}   
                            </p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cycles end--> 

        <!-- feature area -->
        <div class="feature-area fa2 py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <h2 class="site-title"><span>{{$programme->title}}</span></h2>
                            <p>{{$programme->description}}</p>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-item wow fadeInUp" data-wow-delay=".25s">
                            <span class="count">01</span>
                            <div class="feature-icon">
                                <img src="assets/img/icon/scholarship.svg" alt="">
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title">{{$programme->programme2}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-item active wow fadeInDown" data-wow-delay=".25s">
                            <span class="count">02</span>
                            <div class="feature-icon">
                                <img src="assets/img/icon/data.svg" alt="">
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title">{{$programme->programme3}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-item wow fadeInUp" data-wow-delay=".25s">
                            <span class="count">03</span>
                            <div class="feature-icon">
                                <img src="assets/img/icon/library.svg" alt="">
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title">{{$programme->programme4}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-item wow fadeInUp" data-wow-delay=".25s">
                            <span class="count">04</span>
                            <div class="feature-icon">
                                <img src="assets/img/icon/teacher.svg" alt="">
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title">{{$programme->programme1}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feature area end -->
        

<!-- testimonial area -->
<div class="testimonial-area bg py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> TEMOIGNAGES</span>
                    <h2 class="site-title">{{ $temoignage->title }}</h2>
                    <p class="text-center">{{ $temoignage->description }}</p>
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
                        <img src="{{ asset('storage/'.$temoignage->avatar_1) }}" alt="">
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
                        <img src="{{ asset('storage/'.$temoignage->avatar_2) }}" alt="">
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
                        <img src="{{ asset('storage/'.$temoignage->avatar_3) }}" alt="">
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
                        <img src="{{ asset('storage/'.$temoignage->avatar_4) }}" alt="">
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
    </main>

@endsection