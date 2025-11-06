@extends('layouts.master')
@section('title', "Cycles des écoles")

@section('content')

<section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row text-center">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <h2 class="fs-15 text-uppercase text-muted mb-3">Cycles des écoles</h2>
            <h3 class="display-4 mb-9 px-xl-11">Un parcours vers l'excellence !</h3>
          </div>
          <!-- /column -->
        </div>
        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10  mb-md-10 align-items-center" id="maternelle">
          <div class="col-lg-6 order-lg-2 position-relative">
            <div class="shape bg-line aqua rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; left: -0.6rem;"></div>
            <div class="shape bg-pale-red rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; right: -0.4rem;"></div>
            <figure class="rounded mb-0"><img src="{{ asset('assets/img/palmerie/cycles/maternelle2.jpeg') }}"  alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h3 class="display-4 mb-4">Maternelle</h3>
            <p class="mb-5">La maternelle est l’école de la toute première scolarisation. Le GSJC prend ainsi en compte les spécificités de chaque enfant dans l’organisation de la vie de l’établissement.
Au Groupe Scolaire Jacques Chirac, la construction du langage se construit en français, mais aussi en arabe et en anglais dès la Toute Petite section.
La mise en valeur des productions des enfants constitue un levier pour développer chez chaque enfant l'envie et le plaisir d'apprendre afin de lui permettre, progressivement, de devenir élève.</p>
            <p>C’est ainsi qu’une équipe pédagogique expérimentée dans la petite enfance encadre les élèves et assure leur épanouissement au quotidien. Un encadrement qui permet d’assurer leur apprentissage, leur épanouissement et leur sécurité. </p>
            
            <!--/.row --> 
          </div>
          <!--/column -->
        </div>

        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-10 align-items-center" id="primaire">
          <div class="col-lg-6 position-relative">
            <div class="shape bg-line leaf rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; right: -0.6rem;"></div>
            <div class="shape bg-pale-violet rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; left: -0.4rem;"></div>
            <figure class="rounded mb-0"><img src="{{ asset('assets/img/palmerie/cycles/primaire2.webp') }}"  alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h3 class="display-4 mb-4">Elémentaire</h3>
            <p class="mb-5">Les programmes d’enseignement français assurent l'acquisition des connaissances et des compétences fondamentales.</p> 

            <p class="mb-5">Au Groupe Scolaire Jacques Chirac, les professeurs travaillent sur ces programmes en mettant en œuvre des projets pédagogiques plurilingues, en utilisant le numérique et en s’inscrivant dans la culture marocaine. L’innovation et la collaboration sont les maîtres mots de cette pédagogie.</p>
            
          </div>
          <!--/column -->
        </div>

        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-md-10  align-items-center" id="college">
          <div class="col-lg-6 order-lg-2 position-relative">
            <div class="shape bg-line aqua rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; left: -0.6rem;"></div>
            <div class="shape bg-pale-red rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; right: -0.4rem;"></div>
            <figure class="rounded mb-0"><img src="{{ asset('assets/img/palmerie/cycles/college2.jpeg') }}" alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h3 class="display-4 mb-4">Collège</h3>
            <p class="mb-5">Les élèves préparent les examens français. La section internationale arabe commencée à l’école primaire permet aux élèves de préparer cette option internationale au Brevet des collèges puis au Baccalauréat. Les élèves passent aussi des certifications en anglais, des enseignants expérimentés, dont un professeur documentaliste et un professeur ressource en information sur l’orientation, accompagnent les élèves dans la construction de leur parcours, tant au niveau de l’acquisition des savoirs et des méthodes, qu’au niveau de l’éducation à l’orientation. Dès la classe de Sixième, les métiers sont présentés à travers les projets pédagogiques pluridisciplinaires. C’est aussi une des façons de s’inscrire dans l’environnement local. Le lycée a vocation à accompagner les projets de chacun, citoyen du monde, vers la réussite et l’épanouissement.</p> 

            <!--/.row -->

          </div>
          <!--/column -->
        </div>



        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-10 align-items-center" id="lycee">
          <div class="col-lg-6 position-relative">
            <div class="shape bg-line leaf rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; right: -0.6rem;"></div>
            <div class="shape bg-pale-violet rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; left: -0.4rem;"></div>
            <figure class="rounded mb-0"><img src="{{ asset('assets/img/palmerie/cycles/lycee2.webp') }}" alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h3 class="display-4 mb-4">lycée</h3>
            <p class="mb-5">Les ecoles de la palmeraie offre la seconde générale et technologique ainsi que le cycle terminal général, tous les niveaux de lycée étant homologués par le Ministère de l'Éducation Nationale (MEN).</p>
 
<p class="mb-5">En outre, nos élèves peuvent se préparer au High School diploma américain grâce à notre partenariat avec l'école américaine Academica. Chaque élève bénéficie d'un accompagnement personnalisé dans son projet d'orientation grâce à un programme complet.</p>

             
          </div>
          <!--/column -->
        </div>

        <!--/.row -->
      </div>
      <!-- /.container -->
</section>

@endsection