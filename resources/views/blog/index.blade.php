@extends('layouts.master')    

@section('title', "Blog")

@section('content')

<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
    <div class="row">
        <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
        <h1 class="display-1 mb-3">Blog et News Al Baraime's</h1>
        <p class="lead px-lg-5 px-xxl-8">Welcome to our journal. Here you can find the latest company news and business articles.</p>
        </div>
        <!-- /column -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<section class="wrapper bg-light">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="blog classic-view mt-n17">
            @foreach($blogs as $blog)
              <article class="post">
                <div class="card">
                  <figure class="card-img-top overlay overlay-1 hover-scale"><a class="link-dark" href="{{ url('blog/'.$blog->slug) }}"><img src="{{ asset('storage/'.$blog->image) }}" alt=""><span class="bg"></span></a>
                    <figcaption>
                      <h5 class="from-top mb-0">Savoir plus</h5>
                    </figcaption>
                  </figure>
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line">
                        <a href="#" class="hover" rel="category">{{ $blog->categories->title }}</a>
                      </div>
                      <!-- /.post-category -->
                      <h2 class="post-title mt-1 mb-0"><a class="link-dark" href="{{ url('blog/'.$blog->slug) }}">{{ $blog->title }}</a></h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      <p>
                      {!! $blog->content !!}
                      </p>
                    </div>
                    <!-- /.post-content -->
                  </div>
                  <!--/.card-body -->
                  <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ $blog->created_at }}</span></li>
                     </ul>
                    <!-- /.post-meta -->
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </article>
            @endforeach
            </div>
            
            
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
@endsection