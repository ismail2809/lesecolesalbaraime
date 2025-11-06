@extends('layout.master')
@section('title', "AlBaraime II")

@section('content')
<main class="main">
        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/slider/slider-4.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">AlBaraime II</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">AlBaraime II</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- team single -->
        <div class="team-single pt-120 pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="team-single-img">
                            <img src="{{ asset('storage/'.$albaraime2->image) }}" alt="{{ $albaraime2->alt_image }}">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="team-details">
                            <h3>{{ $albaraime2->nom }}</h3>
                            <strong>{{ $albaraime2->profile }}</strong>
                            <p class="mt-3"> 
                                {!! str($albaraime2->description)->sanitizeHtml() !!}
                            </p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team single end -->


        <!-- biography & skill -->
        <div class="biography-skil pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="biography">
                            <h4 class="mb-3">{{ $albaraime2->title }}</h4>
                            <p class="mb-10"> 
                                {!! str($albaraime2->content)->sanitizeHtml() !!} 
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="team-skill">
                            <h4 class="mb-3">Compétences professionnelles </h4>
                            <div class="skills-section">
                                <div class="progress-box">
                                    <h5>Relation et communication <span class="pull-right">100%</span></h5>
                                    <div class="progress" data-value="100">
                                        <div class="progress-bar" role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <h5>Collaboration <span class="pull-right">100%</span></h5>
                                    <div class="progress" data-value="100">
                                        <div class="progress-bar" role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <h5>Travail créatif <span class="pull-right">100%</span></h5>
                                    <div class="progress" data-value="100">
                                        <div class="progress-bar" role="progressbar"></div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

</main>

@endsection