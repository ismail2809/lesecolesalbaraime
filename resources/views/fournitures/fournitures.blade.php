@extends('layout.master')
@section('title', "Fournitures scolaires")

@section('content')
<main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Fournitures scolaires</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Fournitures scolaires</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- notice board -->
        <div class="notice-board py-120">
            <div class="container">
                <div class="notice-wrap"> 
                    <div class="row notice-item">
                        <a href="{{ asset('assets/fournitures/1ere_annee_du_primaire.pdf') }}">
                        <h4>1ère Année du primaire</h4>
                        <div class="notice-meta">
                            <span><i class="far fa-building-columns"></i> Maternelle</span> 
                            <span><i class="far fa-file-pdf"></i> Télécharger en pdf</span>
                        </div>
                        </a>
                    </div>
                    <div class="row notice-item">
                        <a href="{{ asset('assets/fournitures/2eme_annee_du_primaire.pdf') }}">
                        <h4>2ère Année du primaire</h4>
                        <div class="notice-meta">
                            <span><i class="far fa-building-columns"></i> Maternelle</span> 
                            <span><i class="far fa-file-pdf"></i> Télécharger en pdf</span>
                        </div>
                        </a>
                    </div>
                    <div class="row notice-item">
                        <a href="{{ asset('assets/fournitures/3eme_annee_du_primaire.pdf') }}">
                        <h4>3ère Année du primaire</h4>
                        <div class="notice-meta">
                            <span><i class="far fa-building-columns"></i> Maternelle</span> 
                            <span><i class="far fa-file-pdf"></i> Télécharger en pdf</span>
                        </div>
                        </a>
                    </div>
                    <div class="row notice-item">
                        <a href="{{ asset('assets/fournitures/4eme_annee_du_primaire.pdf') }}">
                        <h4>4ère Année du primaire</h4>
                        <div class="notice-meta">
                            <span><i class="far fa-building-columns"></i> Maternelle</span> 
                            <span><i class="far fa-file-pdf"></i> Télécharger en pdf</span>
                        </div>
                        </a>
                    </div>
                    <div class="row notice-item">
                        <a href="{{ asset('assets/fournitures/5eme_annee_du_primaire.pdf') }}">
                        <h4>5ère Année du primaire</h4>
                        <div class="notice-meta">
                            <span><i class="far fa-building-columns"></i> Maternelle</span> 
                            <span><i class="far fa-file-pdf"></i> Télécharger en pdf</span>
                            </div>
                        </a>
                    </div>
                    <div class="row notice-item">
                        <a href="{{ asset('assets/fournitures/6eme_annee_du_primaire.pdf') }}">
                        <h4>6ère Année du primaire</h4>
                        <div class="notice-meta">
                            <span><i class="far fa-building-columns"></i> Maternelle</span> 
                            <span><i class="far fa-file-pdf"></i> Télécharger en pdf</span>
                            </div>
                        </a>
                    </div>
                    <div class="row notice-item">
                        <a href="{{ asset('assets/fournitures/1ere_annee_du_college_parcours_international.pdf') }}">
                        <h4>1ère Année du collège – Parcours International </h4>
                        <div class="notice-meta">
                            <span><i class="far fa-building-columns"></i> Collège</span> 
                            <span><i class="far fa-file-pdf"></i> Télécharger en pdf</span>
                            </div>
                        </a>
                    </div>
                    <div class="row notice-item">
                        <a href="{{ asset('assets/fournitures/2eme_annee_du_college_parcours_international.pdf') }}">
                        <h4>2ère Année du collège – Parcours International </h4>
                        <div class="notice-meta">
                            <span><i class="far fa-building-columns"></i> Collège</span> 
                            <span><i class="far fa-file-pdf"></i> Télécharger en pdf</span>
                            </div>
                        </a>
                    </div>
                    <div class="row notice-item">
                        <a href="{{ asset('assets/fournitures/3eme_annee_du_college_parcours_international.pdf') }}">
                        <h4>3ère Année du collège – Parcours International </h4>
                        <div class="notice-meta">
                            <span><i class="far fa-building-columns"></i> Collège</span> 
                            <span><i class="far fa-file-pdf"></i> Télécharger en pdf</span>
                            </div>
                        </a>
                    </div>
                    <div class="row notice-item">
                        <a href="{{ asset('assets/fournitures/tronc_commun_scientifiques_parcours_international.pdf') }}">
                        <h4>Tronc Commun Scientifiques – Parcours International </h4>
                        <div class="notice-meta">
                            <span><i class="far fa-building-columns"></i> Lycée</span> 
                            <span><i class="far fa-file-pdf"></i> Télécharger en pdf</span>
                            </div>
                        </a>
                    </div>
                    <div class="row notice-item">
                        <a href="{{ asset('assets/fournitures/1ere_annee_du_baccalaureat_sciences_economiques_et_gestion_parcours_international.pdf') }}">
                        <h4>1ère Année du Baccalauréat Sciences Économiques et Gestion – Parcours International</h4>
                        <div class="notice-meta">
                            <span><i class="far fa-building-columns"></i> Lycée</span> 
                            <span><i class="far fa-file-pdf"></i> Télécharger en pdf</span>
                            </div>
                        </a>
                    </div>
                    <div class="row notice-item">
                        <a href="{{ asset('assets/fournitures/1ere_annee_du_baccalaureat_sciences_maths_parcours_international.pdf') }}">
                        <h4>1ère Année du Baccalauréat Sciences Maths – Parcours International </h4>
                        <div class="notice-meta">
                            <span><i class="far fa-building-columns"></i> Lycée</span> 
                            <span><i class="far fa-file-pdf"></i> Télécharger en pdf</span>
                            </div>
                        </a>
                    </div>
                    <div class="row notice-item">
                        <a href="{{ asset('assets/fournitures/2eme_annee_du_baccalaureat_sciences_physiques_.pdf') }}">
                        <h4>2ème Année du Baccalauréat Sciences Physiques – Parcours International</h4>
                        <div class="notice-meta">
                            <span><i class="far fa-building-columns"></i> Lycée</span> 
                            <span><i class="far fa-file-pdf"></i> Télécharger en pdf</span>
                            </div>
                        </a>
                    </div>
                    <div class="row notice-item">
                        <a href="{{ asset('assets/fournitures/2eme_annee_du_baccalaureat_sciences_maths_a_parcours_international.pdf') }}">
                        <h4>2ème Année du Baccalauréat Sciences Maths A – Parcours International</h4>
                        <div class="notice-meta">
                            <span><i class="far fa-building-columns"></i> Lycée</span> 
                            <span><i class="far fa-file-pdf"></i> Télécharger en pdf</span>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- notice board end-->

    </main>


@endsection