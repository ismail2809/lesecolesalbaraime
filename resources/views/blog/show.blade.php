@extends('layouts.master')    

@section('title', "Blog")

@section('content')

<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="./assets/img/photos/bg5.jpg" style="background-image: url(&quot;./assets/img/photos/bg5.jpg&quot;);">
    <div class="container pt-18 pb-15 pt-md-20 pb-md-19 text-center">
        <div class="row">
            <div class="col-md-10 col-xl-8 mx-auto">
            <div class="post-header">
                <div class="post-category text-line text-white">
                <a href="#" class="text-reset" rel="category">{{ $blog->categories->title }}</a>
                </div>
                <!-- /.post-category -->
                <h1 class="display-1 mb-4 text-white">{{ $blog->title }}</h1>
                <ul class="post-meta text-white">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ $blog->created_at->format('d-m-Y') }}</span></li>
                  </ul>
                <!-- /.post-meta -->
            </div>
            <!-- /.post-header -->
            </div>
            <!-- /column -->
        </div>
    <!-- /.row -->
    </div>
    <!-- /.container -->
</section>


<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12">
            <div class="col-lg-8">
            <div class="blog single">
                <div class="card">
                <figure class="card-img-top"><img src="{{ asset('storage/'.$blog->image) }}" alt=""></figure>
                <div class="card-body">
                    <div class="classic-view">
                    <article class="post">
                        <div class="post-content mb-5">
                            <p>{!! $blog->content !!}</p>
                        </div>
                        <!-- /.post-content --> 
                    </article>
                    <!-- /.post -->
                    </div>                      
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.blog -->
            </div>
            <!-- /column -->
            <aside class="col-lg-4 sidebar mt-11 mt-lg-6">
            <!-- /.widget -->
            <div class="widget">
                <h4 class="widget-title mb-3">Tags</h4>
                <ul class="unordered-list bullet-primary text-reset">
                @foreach($tags as $tag)
                    <li><a href="#">{{ $tag }} </a></li>
                @endforeach 
                </ul>
            </div>
            <!-- /.widget --> 
            
            <!-- /.widget -->
            <div class="widget">
                <h4 class="widget-title mb-3">Popular Posts</h4>
                <ul class="image-list">
                @foreach($blogs as $blog)  
                <li>
                    <figure class="rounded"><a href="{{ url('blog/'.$blog->slug) }}"><img src="{{ asset('storage/'.$blog->image) }}" alt="{{ $blog->title }}"></a></figure>
                    <div class="post-content">
                    <h6 class="mb-2"> <a class="link-dark" href="{{ url('blog/'.$blog->slug) }}">{{ $blog->title }}</a> </h6>
                    <ul class="post-meta">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ $blog->created_at->format('d-m-Y') }}</span></li> 
                    </ul>
                    <!-- /.post-meta -->
                    </div>
                </li>
                @endforeach 
                </ul>
                <!-- /.image-list -->
            </div>
            </aside>
            <!-- /column .sidebar -->
        </div>
    <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
@endsection    