@extends('layouts.master')
@section('title', "Galerie de l'école")

@section('content')
<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row">
      <div class="col-lg-11 col-xl-10 mx-auto mb-10">
        <h2 class="fs-16 text-uppercase text-muted text-center mb-3">GALERIE DE L'ÉCOLE</h2>
        <h3 class="display-3 text-center px-lg-5 px-xl-10 px-xxl-16 mb-0">Galerie <mark>Éducative</mark> : Du Primaire au Lycée.</h3>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="grid grid-view projects-masonry">
      <div class="row gx-md-8 gy-10 gy-md-13 isotope">

        @foreach($galeries as $galerie)
        <div class="project item col-md-6 col-xl-4">
          <figure class="rounded mb-6">
            <img class="custom_img" src="{{ asset('storage/'.$galerie->image) }}" alt="{{ $galerie->title }}" />
            <a class="item-link" href="{{ asset('storage/'.$galerie->image) }}" data-glightbox data-gallery="projects-group">
            <i class="uil uil-focus-add"></i></a></figure>
          <div class="project-details d-flex justify-content-center flex-column">
            <div class="post-header">
              <h2 class="post-title h3 fs-22"><a href="#" class="link-dark">{{ $galerie->title }}</a></h2>
              <div class="post-category text-ash">{!! $galerie->content !!}</div> 
            </div>
          </div>
        </div>
        @endforeach
        <!--
        <div class="project item col-md-6 col-xl-4">
          <figure class="rounded mb-6"><img src="{{ asset('assets/img/galerie/g0.jpg') }}" alt="" /><a class="item-link" href="{{ asset('assets/img/galerie/g0.jpg') }}" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
          <div class="project-details d-flex justify-content-center flex-column">
            <div class="post-header">
              <h2 class="post-title h3 fs-22"><a href="#" class="link-dark">Journée d'intégration</a></h2>
              <div class="post-category text-ash">Un grand moment de partage et d’inspiration pour accueillir la nouvelle génération de futurs bacheliers de l’école. Bienvenue  à tous au sein de votre lycée ALBARAIME 🤩</div> 
            </div>
          </div>
        </div>
        <div class="project item col-md-6 col-xl-4">
          <figure class="rounded mb-6"><img src="{{ asset('assets/img/galerie/g4.jpg') }}" alt="" /><a class="item-link" href="{{ asset('assets/img/galerie/g4.jpg') }}" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
          <div class="project-details d-flex justify-content-center flex-column">
            <div class="post-header">
              <h2 class="post-title h3 fs-22"><a href="#" class="link-dark">إفطارا جماعيا</a></h2>
              <div class="post-category text-ash">تكريسا منا لثقافة الانفتاح والتلاحم اللذان نؤمن بهما و قبل توديع شهر رمضان المبارك، نظم تلامذة الثالثة إعدادي  </div>
            </div>
          </div>
        </div>
        <div class="project item col-md-6 col-xl-4">
          <figure class="rounded mb-6"><img src="{{ asset('assets/img/galerie/g1.jpg') }}" alt="" /><a class="item-link" href="{{ asset('assets/img/galerie/g1.jpg') }}" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
          <div class="project-details d-flex justify-content-center flex-column">
            <div class="post-header">
              <h2 class="post-title h3 fs-22"><a href="#" class="link-dark">الأنشطة الدينية</a></h2>
              <div class="post-category text-ash"> 🥰 حتفلت مجموعة مدارس البراعم الخاصة بآزمور بذكرى المولد النبوي الشريف، حيث شهدت العديد من الأنشطة التي اشترك في أدائها براعم البراعم من جميع المستويات.</div>
            </div>
          </div>
        </div>
        <div class="project item col-md-6 col-xl-4">
          <figure class="rounded mb-6"><img src="{{ asset('assets/img/galerie/g5.jpg') }}" alt="" /><a class="item-link" href="{{ asset('assets/img/galerie/g5.jpg') }}" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
          <div class="project-details d-flex justify-content-center flex-column">
            <div class="post-header">
              <h2 class="post-title h3 fs-22"><a href="#" class="link-dark">إقامة صلاة المغرب بساحة المؤسسة</a></h2>
                <div class="post-category text-ash"> كان لنا موعد مع إفطار جماعي تكريسا منا لثقافة الانفتاح والتلاحم اللذان تؤمن بهما المؤسسة، أطر إدارية، أطر تربوية وتلاميذ.</div>
            </div>
          </div>
        </div>
        <div class="project item col-md-6 col-xl-4">
          <figure class="rounded mb-6"><img src="{{ asset('assets/img/galerie/g3.jpg') }}" alt="" /><a class="item-link" href="{{ asset('assets/img/galerie/g3.jpg') }}" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
          <div class="project-details d-flex justify-content-center flex-column">
            <div class="post-header">
              <h2 class="post-title h3 fs-22"><a href="#" class="link-dark"> 🥰فضاء حديقة سندباد بمدينة الدار البيضاء </a></h2>
              <div class="post-category text-ash"> رحلة استمتع فيها براعمنا بمجموعة من الأنشطة الترفيهية والتنافسية المتوفرة بالفضاء.</div>
            </div>
          </div>
        </div>
        <div class="project item col-md-6 col-xl-4">
          <figure class="rounded mb-6"><img src="{{ asset('assets/img/galerie/g2.png') }}" alt="" /><a class="item-link" href="{{ asset('assets/img/galerie/v1.mp4') }}" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
          <div class="project-details d-flex justify-content-center flex-column">
            <div class="post-header">
              <h2 class="post-title h3 fs-22"><a href="#" class="link-dark"> 🥰 استمتعوا بالأداء العفوي والجميل من أطفالنا الأحباء</a></h2>
                <div class="post-category text-ash">في لفتة رائعة ومحفزة، قدم أطفال روض البراعم أغنية "سوف نبقى هنا" كتشجيع لتلامذة الدفعة الأولى من الث…</div>
            </div>
          </div>
        </div>
         -->
      </div>
      <!-- /.row -->
    </div>
    
  </div>
  <!-- /.container -->
</section>
<!-- /section --> 
@endsection
<style>
.custom_img { 
    height: 260px !important;
}
</style>