@extends('layouts.master')
@section('title', "A Propos des écoles Al Baraime")

@section('content')
<section class="wrapper bg-light">
      <div class="container py-8 py-md-12">
        <div class="row text-center">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <h2 class="fs-15 text-uppercase text-muted mb-3">Les écoles Al Baraime</h2>
            <h3 class="display-4 mb-9 px-xl-11">A Propos</h3>
          </div>
          <!-- /column -->
        </div>
    <!-- 
    <div class="row">
      <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
        <h1 class="display-1 mb-3">Nos écoles</h1>
        <nav class="d-inline-block" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nos écoles</li>
          </ol>
        </nav>
      </div>
    </div>
    -->  
  </div>
  <!-- /.container -->
</section>

<section class="wrapper bg-light">
    <div class="container py-14 py-md-16"> 

    <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-10 align-items-center" id="mot-de-directeur">
          <div class="col-lg-6 position-relative">
            <div class="shape bg-line leaf rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; right: -0.6rem;"></div>
            <div class="shape bg-pale-violet rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; left: -0.4rem;"></div>
            <figure class="rounded mb-0"><img src="{{ asset('assets/img/palmerie/apropos/presentation.png') }}"  alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h3 class="display-4 mb-4">Mot de directeur</h3>
            <p class="mb-5"> Depuis sa fondation en 1995, École Albaraime a acquis au fil du temps une solide expérience dans l’éducation et la formation de nos jeunes générations.</p> 

            <p class="mb-5"> Pour relever les défis de notre ère, notre projet éducatif, veut traduire notre volonté d’accueillir chaque enfant et de l’aider à se bâtir un projet personnel, à se construire scolairement et humainement, à découvrir son propre « chemin d’excellence ».</p>

            <p class="mb-5"> Nos méthodes pédagogiques, visent l’autonomie, la créativité, l’épanouissement et l’ouverture sur le monde extérieur tout en respectant notre identité nationale.</p>
           
            <p class="mb-5"> Encouragé par les excellents résultats obtenus et soutenu par la satisfaction de nos chers Parents, École Albaraime est devenu une référence dans le monde éducatif.</p>
            
          </div>
          <!--/column -->
        </div>

        <hr>

        <div class="row gx-lg-8 gx-xl-12 gy-10  mb-md-10 align-items-center" id="ecole1">
          <div class="col-lg-6 order-lg-2 position-relative">
            <div class="shape bg-line aqua rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; left: -0.6rem;"></div>
            <div class="shape bg-pale-red rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; right: -0.4rem;"></div>
            <figure class="rounded mb-0"><img src="{{ asset('assets/img/ecoles/ecole1.jpg') }}"  alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h3 class="display-4 mb-4">École Al Baraime 1</h3>
            <p class="mb-5">École Al Baraime repose sur une histoire riche de 25 ans d’enseignement privé au Maroc , plus précisément à Azmour. Sa fondation a vu le jour avec la vision de M. X , un professeur de littérature arabe qui a reconnu dans le temps un besoin éducatif spécifique dans notre communauté et a contribué en offrant une éducation de qualité durant toutes ces décennies.</p>
            <p>Notre philosophie éducative et nos valeurs fondamentales reposent principalement sur : </p>
            <div class="row gy-3">
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-aqua mb-0">
                  <li><span><i class="uil uil-check"></i></span><span> Le respect.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span> La responsabilité.</span></li>
                </ul>
              </div>
              <!--/column -->
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-aqua mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>L’intégrité.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>L’excellence académique.</span></li>
                </ul>
              </div>
              <!--/column -->
            </div>
            <!--/.row --> 
          </div>
          <!--/column -->
        </div> 
        <hr>

        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-10 align-items-center" id="ecole2r">
          <div class="col-lg-6 position-relative">
            <div class="shape bg-line leaf rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; right: -0.6rem;"></div>
            <div class="shape bg-pale-violet rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; left: -0.4rem;"></div>
            <figure class="rounded mb-0"><img src="{{ asset('assets/img/ecoles/ecole1.jpg') }}"  alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h3 class="display-4 mb-4">École Al Baraime 2</h3>
            <p class="mb-5"> Depuis sa fondation en 1995, École Al Baraime a acquis au fil du temps une solide expérience dans l’éducation et la formation de nos jeunes générations.</p> 

            <p class="mb-5"> Pour relever les défis de notre ère, notre projet éducatif, veut traduire notre volonté d’accueillir chaque enfant et de l’aider à se bâtir un projet personnel, à se construire scolairement et humainement, à découvrir son propre « chemin d’excellence ».</p>

            <p class="mb-5"> Nos méthodes pédagogiques, visent l’autonomie, la créativité, l’épanouissement et l’ouverture sur le monde extérieur tout en respectant notre identité nationale.</p>
           
            <p class="mb-5"> Encouragé par les excellents résultats obtenus et soutenu par la satisfaction de nos chers Parents, École Al Baraime est devenu une référence dans le monde éducatif.</p>
            
          </div>
          <!--/column -->
        </div> 
    
    </div>
</section>

@endsection