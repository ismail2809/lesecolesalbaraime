@extends('layout.master')
@section('title', "Galerie")

@section('content')
<main class="main">

    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">Galerie</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Galerie</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- gallery-area -->
    <div class="gallery-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Galerie</span>
                        <h2 class="site-title">GALERIE DE <span>L'ÉCOLE</span></h2>
                        <p>Galerie Éducative : Du Primaire au Lycée. </p>
                    </div>
                </div>
            </div>
            <div class="row popup-gallery"> 
                @foreach($galeries as $galerie)
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".25s">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('storage/'.$galerie->image) }}" alt="">
                        </div>
                        <div class="gallery-content">
                            <a class="popup-img gallery-link" href="{{ asset('storage/'.$galerie->image) }}">
                                <i class="fal fa-plus"></i></a>
                        </div>
                    </div> 
                </div> 
                @endforeach
            </div>
        </div>
    </div>
    <!-- gallery-area end -->

</main>

@endsection