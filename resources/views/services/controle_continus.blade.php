@extends('layout.master')
@section('title', "Controles Continus")

@section('content')
<main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Controles Continus</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Controles Continus</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- notice board -->
        <div class="notice-board py-120">
           <div class="container">
               <div class="notice-wrap">
                   @foreach($controle_continus as $controle)
                       <div class="row notice-item">
                           <a href="{{ asset('storage/'.$controle->file) }}">
                               <h4>{{ $controle->title }}</h4>
                               <div class="notice-meta">
                                   <span><i class="far fa-building-columns"></i> {{ $controle->niveau }}</span>
                                   <span><i class="far fa-file-pdf"></i> {{ $controle->title_btn }}</span>
                               </div>
                           </a>
                       </div>
                   @endforeach
               </div>
           </div>
        </div>
        <!-- notice board end-->

    </main>


@endsection