@extends('layout.master')
@section('title', "Caféteria")

@section('content')

    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Caféteria</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Caféteria</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- health-care -->
        <div class="athletic py-120">
            <div class="container">
                <div class="athletic-content">
                    <div class="athletic-img">
                        <img src="{{ asset('storage/'.$cafeteria->image1) }}" alt="{{ $cafeteria->alt_image1 }}">
                    </div>
                    <div class="my-4"> 
                        <p>{!! str($cafeteria->content)->sanitizeHtml() !!}</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-20">
                            <img src="{{ asset('storage/'.$cafeteria->image2) }}" alt="{{ $cafeteria->alt_image2 }}">
                        </div>
                        <div class="col-md-6 mb-20">
                            <img src="{{ asset('storage/'.$cafeteria->image3) }}" alt="{{ $cafeteria->alt_image3 }}">
                        </div>
                    </div>
                    <div class="my-4"> 
                        <p>{!! str($cafeteria->description)->sanitizeHtml() !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- health-care end -->

</main> 

@endsection