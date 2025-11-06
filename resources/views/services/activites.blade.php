@extends('layout.master')
@section('title', "Acvités parascolaires")

@section('content')

    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Acvités parascolaires</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Acvités parascolaires</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- athletic -->
        <div class="athletic py-120">
            <div class="container">
                <div class="athletic-content">
                    <div class="athletic-img">
                        <img src="{{ asset('storage/'.$activites->image1) }}" alt="{{ $activites->alt_image1 }}">
                    </div>
                    <div class="my-4"> 
                        <p>{!! str($activites->content)->sanitizeHtml() !!}</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-20">
                            <img src="{{ asset('storage/'.$activites->image2) }}" alt="{{ $activites->alt_image2 }}">
                        </div>
                        <div class="col-md-6 mb-20">
                            <img src="{{ asset('storage/'.$activites->image3) }}" alt="{{ $activites->alt_image3 }}">
                        </div>
                    </div>
                    <div class="my-4"> 
                        <p>{!! str($activites->description)->sanitizeHtml() !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- athletic end -->

    </main>



@endsection