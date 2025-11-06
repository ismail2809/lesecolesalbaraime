@extends('layout.master')
@section('title', "Contrôles Continus")

@section('content')
<main class="main">
    <!-- Breadcrumb -->
    <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">Contrôles Continus</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ url('/') }}">Accueil</a></li>
                <li class="active">Contrôles Continus</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Controles Section -->
    <div class="py-120" style="background: #f5f7fa;">
        <div class="container">
            
            <!-- En-tête avec filtres -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="filter-header">
                        <div class="filter-header-top">
                            <h3>
                                <i class="far fa-file-alt"></i>
                                Liste des Contrôles Continus
                            </h3>
                            <div class="total-count">
                                <span class="count-number">{{ $controle_continus->count() }}</span>
                                <span class="count-label">Contrôle(s)</span>
                            </div>
                        </div>

                        <!-- Filtres -->
                        <form id="filterForm" method="GET" action="{{ url()->current() }}">
                            <div class="filter-row">
                                <div class="filter-item">
                                    <label><i class="far fa-graduation-cap"></i> Niveau</label>
                                    <select name="niveau" class="form-select">
                                        <option value="">Tous les niveaux</option>
                                        @foreach($niveaux as $niveau)
                                            <option value="{{ $niveau->id }}" {{ request('niveau') == $niveau->id ? 'selected' : '' }}>
                                                {{ $niveau->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="filter-item">
                                    <label><i class="far fa-book"></i> Matière</label>
                                    <select name="matiere" class="form-select">
                                        <option value="">Toutes les matières</option>
                                        @foreach($matieres as $matiere)
                                            <option value="{{ $matiere->id }}" {{ request('matiere') == $matiere->id ? 'selected' : '' }}>
                                                {{ $matiere->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="filter-item">
                                    <label><i class="far fa-calendar"></i> Semestre</label>
                                    <select name="semestre" class="form-select">
                                        <option value="">Tous les semestres</option>
                                        @foreach($semestres as $semestre)
                                            <option value="{{ $semestre->id }}" {{ request('semestre') == $semestre->id ? 'selected' : '' }}>
                                                {{ $semestre->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="filter-item">
                                    <button type="button" class="btn-reset" onclick="resetFilters()">
                                        <i class="far fa-redo"></i>
                                        <span>Réinitialiser</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Liste des contrôles -->
            @if($controle_continus->count() > 0)
                <div class="row">
                    <div class="col-12">
                        <div class="controle-list">
                            @foreach($controle_continus as $controle)
                                <div class="controle-list-item">
                                    <div class="controle-item-left">
                                        <div class="controle-badge">
                                            <i class="far fa-file-pdf"></i>
                                        </div>
                                        <div class="controle-info">
                                            <h4 class="controle-title">{{ $controle->title }}</h4>
                                            <div class="controle-meta-row">
                                                <span class="meta-badge semestre">
                                                    <i class="far fa-calendar"></i>
                                                    {{ $controle->semestres->title }}
                                                </span>
                                                <span class="meta-badge niveau">
                                                    <i class="far fa-graduation-cap"></i>
                                                    {{ $controle->niveaus->title }}
                                                </span>
                                                <span class="meta-badge matiere">
                                                    <i class="far fa-book"></i>
                                                    {{ $controle->matieres->title }}
                                                </span> 
                                            </div>
                                        </div>
                                    </div>
                                   <div class="controle-item-right">
                                    @if(!empty($controle->file))
                                        <a href="{{ asset('storage/'.$controle->file) }}" 
                                           class="btn-download-list" 
                                           target="_blank"
                                           download>
                                            <i class="far fa-download"></i>
                                            <span>{{ $controle->title_btn ?? 'Télécharger' }}</span>
                                        </a>
                                    @else
                                        <button class="btn-download-list disabled" disabled>
                                            <i class="far fa-download"></i>
                                            <span>{{ $controle->title_btn ?? 'Télécharger' }}</span>
                                        </button>
                                    @endif
                                </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-12">
                        <div class="no-results">
                            <div class="no-results-icon">
                                <i class="far fa-folder-open"></i>
                            </div>
                            <h3>Aucun contrôle trouvé</h3>
                            <p>Modifiez vos critères de recherche pour trouver des contrôles.</p>
                            <button type="button" class="theme-btn" onclick="resetFilters()">
                                <i class="far fa-redo"></i> Réinitialiser les filtres
                            </button>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
    <!-- Controles Section End -->

</main>

<style>
/* En-tête avec filtres */
.filter-header {
    background: #fff;
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0 2px 15px rgba(0,0,0,0.08);
}

.filter-header-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 2px solid #f0f0f0;
}

.filter-header-top h3 {
    font-size: 24px;
    font-weight: 700;
    color: #1e2746;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 12px;
}

.filter-header-top h3 i {
    color: var(--theme-color, #ff6b35);
    font-size: 28px;
}

.total-count {
    display: flex;
    align-items: center;
    gap: 10px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 12px 25px;
    border-radius: 50px;
    color: #fff;
}

.count-number {
    font-size: 24px;
    font-weight: 700;
}

.count-label {
    font-size: 14px;
    opacity: 0.9;
}

/* Filtres en ligne */
.filter-row {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
    align-items: flex-end;
}

.filter-item {
    flex: 1;
    min-width: 200px;
}

.filter-item label {
    display: block;
    font-weight: 600;
    color: #1e2746;
    margin-bottom: 8px;
    font-size: 14px;
}

.filter-item label i {
    color: var(--theme-color, #ff6b35);
    margin-right: 5px;
}

.filter-item .form-select {
    width: 100%;
    height: 50px;
    border: 2px solid #e8e8e8;
    border-radius: 8px;
    padding: 0 15px;
    font-size: 15px;
    color: #5f6877;
    background: #fff;
    transition: all 0.3s ease;
}

.filter-item .form-select:focus {
    border-color: var(--theme-color, #ff6b35);
    outline: none;
}

.btn-reset {
    height: 50px;
    padding: 0 25px;
    background: #f0f4f8;
    border: 2px solid #e8e8e8;
    border-radius: 8px;
    color: #5f6877;
    font-weight: 600;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
}

.btn-reset:hover {
    background: #e8e8e8;
    border-color: #d0d0d0;
    color: #1e2746;
}

/* Liste des contrôles */
.controle-list {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 15px rgba(0,0,0,0.08);
    overflow: hidden;
}

.controle-list-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 25px 30px;
    border-bottom: 1px solid #f0f0f0;
    transition: all 0.3s ease;
}

.controle-list-item:last-child {
    border-bottom: none;
}

.controle-list-item:hover {
    background: #f9fafb;
}

.controle-item-left {
    display: flex;
    align-items: center;
    gap: 20px;
    flex: 1;
}

.controle-badge {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.controle-badge i {
    font-size: 28px;
    color: #fff;
}

.controle-info {
    flex: 1;
}

.controle-title {
    font-size: 18px;
    font-weight: 700;
    color: #1e2746;
    margin: 0 0 12px 0;
    line-height: 1.4;
}

.controle-meta-row {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.meta-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 14px;
    border-radius: 6px;
    font-size: 13px;
    font-weight: 600;
    background: #f0f4f8;
    color: #5f6877;
}

.meta-badge i {
    font-size: 14px;
}

.meta-badge.niveau {
    background: #e3e8ff;
    color: #667eea;
}

.meta-badge.matiere {
    background: #ffe8f0;
    color: #f5576c;
}

.meta-badge.semestre {
    background: #e0f7ff;
    color: #00b4d8;
}

.meta-badge.ordre {
    background: #fff4e6;
    color: #ff9800;
}

.controle-item-right {
    flex-shrink: 0;
    margin-left: 20px;
}

.btn-download-list {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 14px 28px;
    background: linear-gradient(135deg, #ff6b35 0%, #f7931e 100%);
    color: #fff;
    border-radius: 8px;
    font-weight: 700;
    font-size: 15px;
    text-decoration: none;
    transition: all 0.3s ease;
    white-space: nowrap;
    border: none;
    cursor: pointer;
}

.btn-download-list:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(255, 107, 53, 0.4);
    color: #fff;
    text-decoration: none;
}

.btn-download-list i {
    font-size: 18px;
}

/* Style pour le bouton désactivé */
.btn-download-list.disabled {
    background: linear-gradient(135deg, #cccccc 0%, #999999 100%);
    color: #888888;
    cursor: not-allowed;
    opacity: 0.7;
    transform: none;
    box-shadow: none;
}

.btn-download-list.disabled:hover {
    transform: none;
    box-shadow: none;
    background: linear-gradient(135deg, #cccccc 0%, #999999 100%);
    color: #888888;
}

/* Aucun résultat */
.no-results {
    background: #fff;
    border-radius: 10px;
    padding: 80px 30px;
    text-align: center;
    box-shadow: 0 2px 15px rgba(0,0,0,0.08);
}

.no-results-icon {
    width: 100px;
    height: 100px;
    margin: 0 auto 30px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.no-results-icon i {
    font-size: 50px;
    color: #fff;
}

.no-results h3 {
    font-size: 24px;
    font-weight: 700;
    color: #1e2746;
    margin-bottom: 10px;
}

.no-results p {
    font-size: 16px;
    color: #5f6877;
    margin-bottom: 25px;
}

/* Responsive */
@media (max-width: 992px) {
    .filter-row {
        gap: 10px;
    }
    
    .filter-item {
        min-width: calc(50% - 5px);
    }
    
    .controle-list-item {
        flex-direction: column;
        align-items: flex-start;
        gap: 20px;
    }
    
    .controle-item-left {
        width: 100%;
    }
    
    .controle-item-right {
        width: 100%;
        margin-left: 0;
    }
    
    .btn-download-list {
        width: 100%;
        justify-content: center;
    }
}

@media (max-width: 768px) {
    .filter-header {
        padding: 20px;
    }
    
    .filter-header-top {
        flex-direction: column;
        gap: 20px;
        align-items: flex-start;
    }
    
    .filter-header-top h3 {
        font-size: 20px;
    }
    
    .total-count {
        align-self: stretch;
        justify-content: center;
    }
    
    .filter-item {
        min-width: 100%;
    }
    
    .controle-list-item {
        padding: 20px;
    }
    
    .controle-item-left {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .controle-badge {
        width: 50px;
        height: 50px;
    }
    
    .controle-badge i {
        font-size: 24px;
    }
    
    .controle-title {
        font-size: 16px;
    }
    
    .meta-badge {
        font-size: 12px;
        padding: 5px 12px;
    }
}

/* Animation d'entrée */
@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.controle-list-item {
    animation: slideIn 0.4s ease-out;
}

.controle-list-item:nth-child(1) { animation-delay: 0.05s; }
.controle-list-item:nth-child(2) { animation-delay: 0.1s; }
.controle-list-item:nth-child(3) { animation-delay: 0.15s; }
.controle-list-item:nth-child(4) { animation-delay: 0.2s; }
.controle-list-item:nth-child(5) { animation-delay: 0.25s; }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Auto-submit lors du changement de filtre
    const selects = document.querySelectorAll('.form-select');
    selects.forEach(select => {
        select.addEventListener('change', function() {
            document.getElementById('filterForm').submit();
        });
    });
});

function resetFilters() {
    window.location.href = "{{ url()->current() }}";
}
</script>

@endsection