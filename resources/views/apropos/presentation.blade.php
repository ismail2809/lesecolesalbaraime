@extends('layouts.master')
@section('title', "Présentation des écoles")

@section('content')

<section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row text-center">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <h2 class="fs-15 text-uppercase text-muted mb-3">Les écoles Al Baraime</h2>
            <h3 class="display-4 mb-9 px-xl-11">A Propos</h3>
          </div>
          <!-- /column -->
        </div>
        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10  mb-md-10 align-items-center" id="présentation">
          <div class="col-lg-6 order-lg-2 position-relative">
            <div class="shape bg-line aqua rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; left: -0.6rem;"></div>
            <div class="shape bg-pale-red rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; right: -0.4rem;"></div>
            <figure class="rounded mb-0"><img src="{{ asset('assets/img/palmerie/apropos/photo2.jpg') }}"  alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h3 class="display-4 mb-4">Présentation</h3>
            <p class="mb-5">École Albaraime repose sur une histoire riche de 50 ans d’enseignement privé au Maroc , plus précisément à Azmour. Sa fondation a vu le jour avec la vision de M. X , un professeur de littérature arabe qui a reconnu dans le temps un besoin éducatif spécifique dans notre communauté et a contribué en offrant une éducation de qualité durant toutes ces décennies.</p>
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

        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-md-10  align-items-center" id="missions-valeurs">
          <div class="col-lg-6 order-lg-2 position-relative">
            <div class="shape bg-line aqua rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; left: -0.6rem;"></div>
            <div class="shape bg-pale-red rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; right: -0.4rem;"></div>
            <figure class="rounded mb-0"><img src="{{ asset('assets/img/palmerie/apropos/photo3.jpg') }}" alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h3 class="display-4 mb-4"> Mission & Valeurs</h3>
            <p class="mb-5">Notre Déclaration de mission aux Écoles Albaraime</p> 
            Nous sommes une école citoyenne, attachée à son identité nationale et ouverte sur le monde. Nous nous distinguons par un projet éducatif innovant, inspiré de programmes internationaux.</p> 
            <p class="mb-5">Notre équipe qualifiée et engagée, s’inscrit dans un processus de développement continu dans le but de former des apprenants équilibrés, épanouis, ouverts d’esprit et futurs citoyens du monde.</p>
 
            <p class="mb-5">Nos valeurs guident nos actions et définissent notre identité en tant qu’institution éducative engagée. Nous sommes fermement attachés à :</p> 

            <div class="row gy-3">
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-aqua mb-0">
                  <li><span><i class="uil uil-check"></i></span><span><b>Excellence</b> : Nous visons l’excellence dans l’enseignement, l’apprentissage et le service à la communauté.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span><b>Inclusion </b> : Nous agissons avec honnêteté, équité et transparence, cultivant un environnement basé sur la confiance et le respect mutuel.</span></li>
                </ul>
              </div>
              <!--/column -->
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-aqua mb-0">
                  <li><span><i class="uil uil-check"></i></span><span><b>Collaboration </b> : Nous  encourageons le travail d’équipe, la communication ouverte et le partage des idées pour atteindre nos objectifs communs.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span><b>Engagement  </b> : Nous nous engageons à offrir une éducation de qualité et à soutenir le développement holistique de chaque élève .</span></li>
                </ul>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->

          </div>
          <!--/column -->
        </div>



        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-10 align-items-center" id="infrastructures">
          <div class="col-lg-6 position-relative">
            <div class="shape bg-line leaf rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; right: -0.6rem;"></div>
            <div class="shape bg-pale-violet rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; left: -0.4rem;"></div>
            <figure class="rounded mb-0"><img src="{{ asset('assets/img/palmerie/apropos/photo2.jpg') }}" alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h3 class="display-4 mb-4">Infrastructures scolaires</h3>
            <p class="mb-5">École Albaraime, situé à Azmour, bénéficiant d'un accès facile. De plus, elles disposent d'un parking pour faciliter l'arrivée des élèves.</p> 

            <p class="mb-5">L'établissement et les espaces sont conçus de manière à favoriser un environnement favorable à l'apprentissage, à la fois propre et esthétiquement agréable. École Albaraime s'engage à mettre en place des dispositifs pédagogiques afin que chaque élève puisse pleinement exploiter son potentiel humain illimité.</p>
            
          </div>
          <!--/column -->
        </div>

        <!--/.row -->
      </div>
      <!-- /.container -->
</section>

@endsection