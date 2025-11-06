@extends('layout.master')
@section('title', "Transport scolaire")

@section('content')

<main class="main">

<!-- breadcrumb -->
<div class="site-breadcrumb" style="background: url(assets/img/transport/t1.jpg)">
    <div class="container">
        <h2 class="breadcrumb-title">Transport scolaire</h2>
        <ul class="breadcrumb-menu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">Transport scolaire</li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->


<!-- athletic -->
<div class="athletic py-120">
    <div class="container">
        <div class="athletic-content">
            <div class="athletic-img">
                <img src="{{ asset('storage/'.$transport->image1) }}" alt="{{ $transport->alt_image1 }}">
            </div>
            <div class="my-4"> 
                <p>{!! str($transport->content)->sanitizeHtml() !!}</p>
            </div>
            <div class="row">
                <div class="col-md-6 mb-20">
                    <img src="{{ asset('storage/'.$transport->image2) }}" alt="{{ $transport->alt_image2 }}">
                </div>
                <div class="col-md-6 mb-20">
                    <img src="{{ asset('storage/'.$transport->image3) }}" alt="{{ $transport->alt_image3 }}">
                </div>
            </div>
            <div class="my-4"> 
                <p>{!! str($transport->description)->sanitizeHtml() !!}</p>
            </div>
        </div>
    </div>
</div>
<!-- athletic end -->

</main> 

@endsection