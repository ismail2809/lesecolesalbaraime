@extends('layout.master')
@section('title', "Blog")

@section('content')
 
<main class="main">
<!-- breadcrumb -->
<div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
    <div class="container">
        <h2 class="breadcrumb-title">Blog</h2>
        <ul class="breadcrumb-menu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">Blog</li>
        </ul>
    </div>
</div>
<!-- breadcrumb end --> 

<!-- facility area -->
<div class="facility-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Actualités</span>
                    <h2 class="site-title"> Blog et Presse <span>AlBaraime</span></h2>
                    <p>Retrouvez les actualités des écoles Albaraime.</p>
                </div>
            </div>
        </div>
        <div class="row"> 
            @foreach($blogs as $blog)    
            <div class="col-md-6 col-lg-6">
                <div class="facility-item wow fadeInUp" data-wow-delay=".25s">
                    <div class="facility-img">
                        <img src="{{ asset('storage/'.$blog->image) }}" alt="{{ $blog->title }}">
                    </div>
                    <div class="facility-content">
                        <h3 class="facility-title">
                            <a href="{{ url('blog/'.$blog->slug) }}">{{ $blog->title }}</a>
                        </h3>
                        <p class="facility-text">
                            {{ substr($blog->content, 0, 53)  }}..  
                        </p>
                        <div class="facility-arrow">
                            <a href="{{ url('blog/'.$blog->slug) }}" class="theme-btn">Savoir plus<i class="fas fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div> 
            @endforeach    
        </div>
    </div>
</div>
<!-- facility area end -->
</main> 
@endsection