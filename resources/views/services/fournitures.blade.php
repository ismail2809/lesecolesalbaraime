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
            @if($annees->count() >= 1)
            <div class="text-center mb-50">
                <p class="text-muted small mb-3 text-uppercase fw-semibold" style="letter-spacing:2px;">Année scolaire</p>
                <div class="d-inline-flex align-items-center gap-3 flex-wrap justify-content-center">
                    @foreach($annees as $annee)
                        @php $active = $annee == $anneeSelectionnee; @endphp
                        <a href="{{ request()->fullUrlWithQuery(['annee' => $annee]) }}"
                           style="
                               display:inline-flex; align-items:center; gap:6px;
                               padding: 10px 28px;
                               border-radius: 50px;
                               font-weight: 700;
                               font-size: 1rem;
                               text-decoration: none;
                               transition: all .25s;
                               {{ $active
                                   ? 'background: linear-gradient(135deg,#1a56db,#0e9f6e); color:#fff; box-shadow: 0 6px 20px rgba(26,86,219,.35);'
                                   : 'background: #f3f4f6; color:#374151; border: 2px solid #e5e7eb;' }}
                           ">
                            <i class="far fa-calendar-alt" style="font-size:.9rem;"></i>
                            {{ $annee }}–{{ $annee + 1 }}
                        </a>
                    @endforeach
                </div>
            </div>
            @endif

            {{-- Fournitures groupées par niveau --}}
            @if($fournitures->isEmpty())
                <div class="text-center py-5">
                    <p class="text-muted">Aucune fourniture disponible pour l'année {{ $anneeSelectionnee }}.</p>
                </div>
            @else
                @php
                    $icons = [
                        'Primaire' => 'fa-child',
                        'Collège'  => 'fa-school',
                        'Lycée'    => 'fa-graduation-cap',
                    ];
                    $colors = [
                        'Primaire' => '#1a56db',
                        'Collège'  => '#0e9f6e',
                        'Lycée'    => '#9333ea',
                    ];
                @endphp
                @foreach($fournitures as $groupe => $items)
                    @php
                        $icon  = $icons[$groupe]  ?? 'fa-folder';
                        $color = $colors[$groupe] ?? '#6b7280';
                    @endphp
                    <div class="mb-5">
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <div style="width:42px;height:42px;border-radius:12px;background:{{ $color }}22;display:flex;align-items:center;justify-content:center;">
                                <i class="far {{ $icon }}" style="color:{{ $color }};font-size:1.2rem;"></i>
                            </div>
                            <h3 class="mb-0 fw-bold" style="font-size:1.4rem;color:#1f2937;">{{ $groupe }}</h3>
                            <div style="flex:1;height:2px;background:linear-gradient(90deg,{{ $color }}44,transparent);border-radius:2px;"></div>
                        </div>
                        <div class="notice-wrap">
                            @foreach($items as $fourniture)
                                <div class="row notice-item">
                                    <a href="{{ asset('storage/' . $fourniture->file) }}" target="_blank">
                                        <h4>{{ $fourniture->title }}</h4>
                                        <div class="notice-meta">
                                            <span><i class="far fa-building-columns"></i> {{ $fourniture->niveau }}</span>
                                            <span><i class="far fa-file-pdf"></i> {{ $fourniture->title_btn }}</span>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>
    <!-- notice board end-->

</main>
@endsection
