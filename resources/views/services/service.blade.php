@extends('layouts.master')
@section('title', "Services")

@section('content')
<section class="wrapper bg-soft-aqua">
  <div class="container pt-10  pt-md-14  text-center">
    <div class="row">
      <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
        <h1 class="display-1 mb-3">Services</h1>
        <nav class="d-inline-block" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Services</li>
          </ol>
        </nav>
        <!-- /nav -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>



<!-- /section -->
<section class="wrapper bg-gray" id="transport">
  <div class="container py-10 py-md-12">
    <div class="row gx-lg-8 gx-xl-12 gy-10 mb-8 mb-md-16 align-items-center">
      <div class="col-lg-7">
        <figure><img class="w-auto" src="{{ asset('assets/img/palmerie/services/transport.png') }}" alt="" /></figure>
      </div>
      <!--/column -->
      <div class="col-lg-5">
        <h3 class="display-5 mb-7 pe-xxl-5">L’école offre à ses élèves des services supplémentaires :</h3>
        <div class="d-flex flex-row mb-4"> 
          <div> 
            <p class="mb-1">Nous sommes engagés à offrir une solution de transport fiable pour que vos enfants se rendent à l'école et en reviennent en toute sécurité.</p>
          </div>
        </div>
        <div class="d-flex flex-row mb-4">
          <div>
            <h4 class="mb-1">Sécurité avant tout</h4>
            <p class="mb-1">Chaque véhicule est équipé de ceintures de sécurité et fait l'objet d'un entretien régulier.</p>
          </div>
        </div>
        <div class="d-flex flex-row mb-4"> 
          <div>
            <h4 class="mb-1">Chauffeurs qualifiés</h4>
            <p class="mb-0">Nos conducteurs sont formés à la conduite en toute sécurité et à la gestion des enfants.</p>
          </div>
        </div>
        <div class="d-flex flex-row mb-4">
          <div>
            <h4 class="mb-1">Confort</h4>
            <p class="mb-1">Les bus sont climatisés et entretenus pour offrir un environnement agréable lors des trajets.</p>
          </div>
        </div> 
      </div>
      <!--/column -->
    </div> 
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>

  <section id="restauration">
      <div class="wrapper bg-gray">
        <div class="container py-15 py-md-17">
          <div class="row gx-lg-0 gy-10 align-items-center">
            <div class="col-lg-6">
              <div class="row g-6 text-center">
                <div class="col-md-6">
                  <div class="card shadow-lg mb-6">
                    <figure class="card-img-top">
                      <a href="#"><img class="img-fluid" src="{{ asset('assets/img/palmerie/services/restauration-02.jpg') }}" alt="" /></a>                      
                    </figure>                   
                    <!--/.card-body -->
                  </div> 
                  <!-- /.card -->
                </div>
                <!-- /column -->
                <div class="col-md-6">
                  <div class="card shadow-lg mt-md-6 mb-6">
                    <figure class="card-img-top">
                      <a href="#"><img class="img-fluid" src="{{ asset('assets/img/palmerie/services/restauration.jpg') }}" alt="" /></a>                      
                    </figure>                   
                    <!--/.card-body -->
                  </div>
                  <!-- /.card -->
                  <div class="card shadow-lg">
                    <figure class="card-img-top">
                      <a href="#"><img class="img-fluid" src="{{ asset('assets/img/palmerie/services/restauration-03.jpg') }}" alt="" /></a>                      
                    </figure>                   
                    <!--/.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /column -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /column -->
            <div class="col-lg-5 offset-lg-1">
              <h2 class="display-5 mb-3">La restauration scolaire</h2> 
              <p>Le groupe scolaire offre aux parents un service de restauration de qualité, disponible sur tous ses sites. Ce service est assuré par des acteurs majeurs de la restauration collective.</p> 
              <p>Les menus, conçus et validés par des professionnels du secteur, sont variés, équilibrés et visent à éduquer le goût des élèves. Préparés dans les cuisines centrales de chaque site, ils respectent rigoureusement les normes d’hygiène et de sécurité alimentaire, bénéficiant ainsi aux élèves de la maternelle au lycée.</p> 
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.wrapper -->
    </section>
    <!-- /section -->

    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16"> 
        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-7 order-lg-2">
            <figure><img class="w-auto" src="./assets/img/blog/sport.png" srcset="./assets/img/blog/sport@2x.png 2x" alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-5">
            <h3 class="display-4 mb-5">Équipements sportifs</h3>
            <p class="mb-6">Notre école privée met à disposition des équipements sportifs modernes et variés pour encourager nos élèves à développer leurs aptitudes physiques. Du terrain de football aux salles de gymnastique entièrement équipées, chaque espace est conçu pour offrir un environnement sûr et stimulant, favorisant la pratique d'activités sportives tout en promouvant l'esprit d'équipe et le bien-être de nos élèves.</p>
            <div class="row gy-3">
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Avantage 1.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Avantage 2.</span></li>
                </ul>
              </div>
              <!--/column -->
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Avantage 4.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Avantage 4.</span></li>
                </ul>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
@endsection