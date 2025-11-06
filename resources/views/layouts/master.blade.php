<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="école, maternelle, primaire, college, lycée, école Al Baraime1, école Al Baraime2, école privée à Azemmour">
  <meta name="author" content="ismail abounasr">
  <title>Les Écoles ALBARAIME | Ecole privée à Azemmour</title>
  <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/custom_css.css') }}"> 
  <link rel="stylesheet" href="{{ asset('assets/css/colors/navy.css') }}">
</head>

<body>
  <div class="content-wrapper">

    @include('layouts.partial.menu')

    @include('sweetalert::alert')

    @yield('content') 

  </div>
  <!-- /.content-wrapper -->
    @include('layouts.partial.footer')
    
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="{{ asset('assets/js/plugins.js') }}"></script>
  <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>

</html>    