@extends('layout.master')
@section('title', "Fournitures scolaires")

@section('content')
<main class="main">

    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url({{ asset('assets/img/breadcrumb/1.webp') }})">
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

            {{-- Sélecteur d'année --}}
            @if($annees->count() > 1)
            <div class="text-center mb-40">
                <div class="d-inline-flex align-items-center gap-2 flex-wrap justify-content-center">
                    @foreach($annees as $annee)
                        <a href="{{ request()->fullUrlWithQuery(['annee' => $annee]) }}"
                           class="btn {{ $annee == $anneeSelectionnee ? 'btn-primary' : 'btn-outline-primary' }} rounded-pill px-4">
                            {{ $annee }}
                        </a>
                    @endforeach
                </div>
            </div>
            @endif

            <div class="notice-wrap">
                @forelse($fournitures as $fourniture)
                    <div class="row notice-item">
                        <a href="{{ asset('storage/' . $fourniture->file) }}" target="_blank">
                            <h4>{{ $fourniture->title }}</h4>
                            <div class="notice-meta">
                                <span><i class="far fa-building-columns"></i> {{ $fourniture->niveau }}</span>
                                <span><i class="far fa-file-pdf"></i> {{ $fourniture->title_btn }}</span>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="text-center py-5">
                        <p class="text-muted">Aucune fourniture disponible pour l'année {{ $anneeSelectionnee }}.</p>
                    </div>
                @endforelse
            </div>

        </div>
    </div>
    <!-- notice board end-->

</main>
@endsection
