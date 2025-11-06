@extends('layout.master')
@section('title', "Fournitures scolaires")

@section('content')
<main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Fournitures scolaires</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Fournitures scolaires</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- notice board -->
        <div class="notice-board py-120">
           <div class="container">
               <div class="notice-wrap">
                   @foreach($fournitures as $fourniture)
                       <div class="row notice-item">
                           <a href="{{ asset('storage/'.$fourniture->file) }}">
                               <h4>{{ $fourniture->title }}</h4>
                               <div class="notice-meta">
                                   <span><i class="far fa-building-columns"></i> {{ $fourniture->niveau }}</span>
                                   <span><i class="far fa-file-pdf"></i> {{ $fourniture->title_btn }}</span>
                               </div>
                           </a>
                       </div>
                   @endforeach
               </div>
           </div>
        </div>
        <!-- notice board end-->
        
        <!-- <div class="error-area py-120">
            <div class="container">
                <div class="col-md-6 mx-auto">
                    <div class="error-wrapper">
                        <div class="error-img">
                            <img src="{{ url("/assets/img/maintenance/maintenance-site-internet.png") }}" alt="">
                        </div>
                        <h2>Ops... Page est indisponible!</h2>
                        <p>La page des fournitures scolaires est temporairement désactivée. Revenez bientôt!</p>
                        <a href="{{ url('/') }}" class="theme-btn">Retour page d'accueil <i class="far fa-home"></i></a>
                    </div>
                </div>
            </div>
        </div> -->

    </main>


@endsection