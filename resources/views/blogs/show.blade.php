@extends('layout.master')
@section('title', "Blog")

@section('content')
    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url({{ asset('assets/img/breadcrumb/01.jpg') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Blog</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- blog single area -->
        <div class="blog-single-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-single-wrapper">
                            <div class="blog-single-content">
                                <div class="blog-thumb-img">
                                    <img src="{{ asset('storage/'.$blog->image) }}"  alt="thumb">
                                </div>
                                <div class="blog-info">
                                    <div class="blog-meta">
                                        <div class="blog-meta-left">
                                            <ul>
                                                <li><i class="far fa-user"></i><a href="#">La direction</a></li> 
                                            </ul>
                                        </div> 
                                    </div>
                                    <div class="blog-details">
                                        <h3 class="blog-details-title mb-20">{{ $blog->title }}</h3>
                                        <p class="mb-10">
                                            {{ $blog->content }}
                                        </p> 
 
										<div class="blog-details-tags pb-20">
											<h5>Catégorie : </h5>
											<ul>
												<li><a href="{{ url('blog/'.$blog->slug) }}">{{ $blog->categories->title }}</a></li>
											</ul>
										</div>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="sidebar">  
                            <!-- recent post -->
                            <div class="widget recent-post">
                                <h5 class="widget-title">Récent blog</h5>
                                @foreach($blogs->take(3) as $blog)    
                                <div class="recent-post-single">
                                    <div class="recent-post-img">
                                        <img src="{{ asset('storage/'.$blog->image) }}" alt="thumb">
                                    </div>
                                    <div class="recent-post-bio">
                                        <h6><a href="{{ url('blog/'.$blog->slug) }}">{{ $blog->title }}</a></h6>
                                        <span><i class="far fa-clock"></i>{{ $blog->date }}</span>
                                    </div>
                                </div>
                                @endforeach 
                            </div>
                            <!-- social share -->
                            <div class="widget social-share">
                                <h5 class="widget-title">Follow Us</h5>
                                <div class="social-share-link">
                                    <a href="https://www.facebook.com/Albaraime"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/lesecolesalbaraime"><i class="fab fa-instagram"></i></a> 
                                </div>
                            </div> 
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog single area end --> 

    </main>
@endsection
