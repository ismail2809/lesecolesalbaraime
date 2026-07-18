@extends('layout.master')
@section('title', "Préinscription - ")

@section('content')
<main class="main">

    {{-- breadcrumb --}}
    <div class="site-breadcrumb" style="background: url({{ asset('assets/img/breadcrumb/01.jpg') }})">
        <div class="container">
            <h2 class="breadcrumb-title">Préinscription</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ url('/') }}">Accueil</a></li>
                <li class="active">Préinscription</li>
            </ul>
        </div>
    </div>
    {{-- breadcrumb end --}}

    <div class="contact-area py-120">
        <div class="container">

            {{-- header --}}
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="site-heading text-center mb-5">
                        <span class="site-title-tagline"><i class="far fa-graduation-cap"></i> Inscriptions ouvertes</span>
                        <h2 class="site-title">Demande de <span>Préinscription</span></h2>
                        <p>Remplissez ce formulaire pour soumettre votre demande. Notre équipe vous contactera dans les plus brefs délais pour confirmer la disponibilité des places.</p>
                    </div>
                </div>
            </div>

            {{-- info cards --}}
            <div class="contact-content mb-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-phone-volume"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Appelez-nous</h5>
                                <p><a href="tel:{{ $setting->tel1 }}">{{ $setting->tel1 }}</a></p>
                                <p><a href="tel:{{ $setting->tel2 }}">{{ $setting->tel2 }}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-envelopes"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Écrivez-nous</h5>
                                <p><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-map-location-dot"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Venez nous voir</h5>
                                <p><a href="{{ $setting->adresse1_map }}" target="_blank">{{ $setting->adresse1 }}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- form --}}
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex align-items-center">
                        <div class="contact-img">
                            <img src="{{ asset('assets/img/contact/01.jpg') }}" alt="Préinscription Albaraime">
                        </div>
                    </div>
                    <div class="col-lg-7 align-self-center">
                        <div class="contact-form">
                            <div class="contact-form-header">
                                <h2 class="text-center">Formulaire de Préinscription</h2>
                                <p class="text-center">Les champs marqués <span class="text-danger">*</span> sont obligatoires</p>
                            </div>

                            @if ($errors->any())
                                <div class="alert alert-danger mb-4">
                                    <ul class="mb-0 ps-3">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ url('/preinscription') }}" id="preinscription-form">
                                @csrf

                                {{-- ===== SECTION PARENT ===== --}}
                                <div class="mb-4">
                                    <p class="section-label-title">
                                        <i class="far fa-user-tie me-1"></i> Informations du parent / tuteur
                                    </p>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="field-label">Prénom <span class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('prenom_parent') is-invalid @enderror"
                                                    name="prenom_parent"
                                                    value="{{ old('prenom_parent') }}"
                                                    placeholder="Ex : Mohammed"
                                                    required>
                                                @error('prenom_parent')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="field-label">Nom <span class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('nom_parent') is-invalid @enderror"
                                                    name="nom_parent"
                                                    value="{{ old('nom_parent') }}"
                                                    placeholder="Ex : Alaoui"
                                                    required>
                                                @error('nom_parent')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="field-label">Téléphone <span class="text-danger">*</span></label>
                                                <input type="tel"
                                                    class="form-control @error('telephone') is-invalid @enderror"
                                                    name="telephone"
                                                    value="{{ old('telephone') }}"
                                                    placeholder="Ex : 06 00 00 00 00"
                                                    required>
                                                @error('telephone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="field-label">Email <span class="text-muted" style="font-weight:400;">(optionnel)</span></label>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email"
                                                    value="{{ old('email') }}"
                                                    placeholder="Ex : parent@email.com">
                                                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- ===== SECTION ÉLÈVES (repeater) ===== --}}
                                <div class="mb-3">
                                    <p class="section-label-title">
                                        <i class="far fa-child me-1"></i> Élève(s) à inscrire
                                    </p>

                                    <div id="eleves-container">
                                        <div class="eleve-item mb-3" data-index="0">
                                            <div class="eleve-card">
                                                <div class="eleve-card-header">
                                                    <span class="eleve-label">
                                                        <i class="far fa-user-graduate me-1"></i> Élève 1
                                                    </span>
                                                    <button type="button" class="btn-remove-eleve" style="display:none;">
                                                        <i class="far fa-trash-can me-1"></i>Supprimer
                                                    </button>
                                                </div>
                                                <div class="row g-3">
                                                    <div class="col-md-6">
                                                        <label class="field-label">Prénom <span class="text-danger">*</span></label>
                                                        <input type="text"
                                                            class="form-control"
                                                            name="eleves[0][prenom_eleve]"
                                                            value="{{ old('eleves.0.prenom_eleve') }}"
                                                            placeholder="Ex : Youssef"
                                                            required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="field-label">Nom <span class="text-danger">*</span></label>
                                                        <input type="text"
                                                            class="form-control"
                                                            name="eleves[0][nom_eleve]"
                                                            value="{{ old('eleves.0.nom_eleve') }}"
                                                            placeholder="Ex : Alaoui"
                                                            required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="field-label">Date de naissance <span class="text-danger">*</span></label>
                                                        <input type="date"
                                                            class="form-control"
                                                            name="eleves[0][date_naissance]"
                                                            value="{{ old('eleves.0.date_naissance') }}"
                                                            required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="field-label">École <span class="text-danger">*</span></label>
                                                        <select class="form-select ecole-select" name="eleves[0][ecole]" required>
                                                            <option value="" disabled {{ old('eleves.0.ecole') ? '' : 'selected' }}>Sélectionner</option>
                                                            <option value="Albaraime I" {{ old('eleves.0.ecole') == 'Albaraime I' ? 'selected' : '' }}>Albaraime I – Préscolaire</option>
                                                            <option value="Albaraime II" {{ old('eleves.0.ecole') == 'Albaraime II' ? 'selected' : '' }}>Albaraime II</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="field-label">Cycle <span class="text-danger">*</span></label>
                                                        <select class="form-select cycle-select" name="eleves[0][cycle]" required>
                                                            <option value="" disabled {{ old('eleves.0.cycle') ? '' : 'selected' }}>Sélectionner</option>
                                                            <option value="Préscolaire" {{ old('eleves.0.cycle') == 'Préscolaire' ? 'selected' : '' }}>Préscolaire</option>
                                                            <option value="Primaire" {{ old('eleves.0.cycle') == 'Primaire' ? 'selected' : '' }}>Primaire</option>
                                                            <option value="Collège" {{ old('eleves.0.cycle') == 'Collège' ? 'selected' : '' }}>Collège</option>
                                                            <option value="Lycée" {{ old('eleves.0.cycle') == 'Lycée' ? 'selected' : '' }}>Lycée</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="field-label">Niveau <span class="text-muted" style="font-weight:400;">(optionnel)</span></label>
                                                        <select class="form-select niveau-select" name="eleves[0][niveau]">
                                                            <option value="">Sélectionner</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Bouton ajouter élève --}}
                                    <button type="button" id="btn-add-eleve">
                                        <i class="far fa-circle-plus"></i>
                                        <span>Ajouter un autre élève</span>
                                    </button>
                                </div>

                                {{-- ===== TRANSPORT ===== --}}
                                <label for="transport" class="transport-toggle {{ old('transport') ? 'is-checked' : '' }}" id="transport-label">
                                    <input type="checkbox" name="transport" id="transport" value="1" {{ old('transport') ? 'checked' : '' }} style="display:none;">
                                    <div class="transport-icon">
                                        <i class="far fa-bus-school"></i>
                                    </div>
                                    <div class="transport-text">
                                        <span class="transport-title">Service de transport scolaire</span>
                                        <span class="transport-sub">Notre équipe vous contactera pour les détails et disponibilités.</span>
                                    </div>
                                    <div class="transport-check">
                                        <i class="far fa-circle-check"></i>
                                    </div>
                                </label>

                                {{-- ===== MESSAGE ===== --}}
                                <div class="form-group mt-3">
                                    <label class="field-label">Remarques <span class="text-muted" style="font-weight:400;">(optionnel)</span></label>
                                    <textarea name="message" class="form-control @error('message') is-invalid @enderror"
                                        rows="3"
                                        placeholder="Informations complémentaires, questions, besoins particuliers…">{{ old('message') }}</textarea>
                                    @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <button type="submit" class="theme-btn mt-2">
                                    Soumettre ma demande <i class="fas fa-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</main>

@push('styles')
<style>
/* Labels */
.field-label {
    display: block;
    font-size: .8rem;
    font-weight: 600;
    color: #374151;
    margin-bottom: .3rem;
    letter-spacing: .01em;
}

/* Section titles */
.section-label-title {
    font-size: .72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .08em;
    color: var(--theme-color);
    border-bottom: 2px solid var(--theme-color);
    padding-bottom: .4rem;
    margin-bottom: 1rem;
}

/* Eleve card */
.eleve-card {
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    background: #fafbff;
    padding: 1rem 1.1rem 1.1rem;
}
.eleve-card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: .9rem;
}
.eleve-label {
    font-weight: 600;
    font-size: .9rem;
    color: #1e293b;
}
.eleve-label i {
    color: var(--theme-color);
}

/* Supprimer button */
.btn-remove-eleve {
    background: #fff;
    border: 1px solid #fca5a5;
    color: #ef4444;
    border-radius: 6px;
    font-size: .78rem;
    padding: .25rem .65rem;
    cursor: pointer;
    transition: background .2s;
}
.btn-remove-eleve:hover {
    background: #fef2f2;
}

/* Transport toggle */
.transport-toggle {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-top: 1rem;
    padding: 1rem 1.2rem;
    border: 2px solid #e2e8f0;
    border-radius: 10px;
    background: #fff;
    cursor: pointer;
    transition: border-color .2s, background .2s;
    user-select: none;
}
.transport-toggle:hover {
    border-color: var(--theme-color);
    background: #fffbf3;
}
.transport-toggle.is-checked {
    border-color: var(--theme-color);
    background: #fff8ee;
}
.transport-icon {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: #f1f5f9;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.3rem;
    color: #94a3b8;
    flex-shrink: 0;
    transition: background .2s, color .2s;
}
.transport-toggle.is-checked .transport-icon {
    background: var(--theme-color);
    color: #fff;
}
.transport-text {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: .2rem;
}
.transport-title {
    font-weight: 700;
    font-size: .95rem;
    color: #1e293b;
}
.transport-sub {
    font-size: .78rem;
    color: #64748b;
}
.transport-check {
    font-size: 1.5rem;
    color: #cbd5e1;
    flex-shrink: 0;
    transition: color .2s;
}
.transport-toggle.is-checked .transport-check {
    color: var(--theme-color);
}

/* Ajouter élève button */
#btn-add-eleve {
    display: flex;
    align-items: center;
    gap: .5rem;
    width: 100%;
    padding: .75rem 1rem;
    margin-top: .5rem;
    background: #fff;
    border: 2px dashed var(--theme-color);
    border-radius: 10px;
    color: var(--theme-color);
    font-weight: 600;
    font-size: .9rem;
    cursor: pointer;
    justify-content: center;
    transition: background .2s, color .2s;
}
#btn-add-eleve i {
    font-size: 1.1rem;
}
#btn-add-eleve:hover {
    background: var(--theme-color);
    color: #fff;
}
</style>
@endpush

@push('scripts')
<script>
const niveauxParCycle = {
    'Préscolaire': ['Petite Section', 'Moyenne Section', 'Grande Section'],
    'Primaire':    ['1ère Année', '2ème Année', '3ème Année', '4ème Année', '5ème Année', '6ème Année'],
    'Collège':     ['1ère Année Collège', '2ème Année Collège', '3ème Année Collège'],
    'Lycée':       ['Tronc Commun', '1ère Bac', '2ème Bac'],
};

function populateNiveau(cycleSelect, niveauSelect, selectedVal) {
    const niveaux = niveauxParCycle[cycleSelect.value] || [];
    niveauSelect.innerHTML = '<option value="">Niveau (optionnel)</option>';
    niveaux.forEach(function(n) {
        const opt = document.createElement('option');
        opt.value = n;
        opt.textContent = n;
        if (n === selectedVal) opt.selected = true;
        niveauSelect.appendChild(opt);
    });
}

function bindCycleChange(item) {
    const cycleSelect  = item.querySelector('.cycle-select');
    const niveauSelect = item.querySelector('.niveau-select');
    cycleSelect.addEventListener('change', function() {
        populateNiveau(this, niveauSelect, null);
    });
    // restore on load if old value
    if (cycleSelect.value) {
        populateNiveau(cycleSelect, niveauSelect, niveauSelect.dataset.old || null);
    }
}

function updateLabels() {
    document.querySelectorAll('.eleve-item').forEach(function(item, i) {
        item.querySelector('.eleve-label').innerHTML =
            '<i class="far fa-user-graduate me-1" style="color:var(--theme-color);"></i> Élève ' + (i + 1);
        const removeBtn = item.querySelector('.btn-remove-eleve');
        removeBtn.style.display = i === 0 ? 'none' : 'inline-block';
    });
}

function updateIndexes() {
    document.querySelectorAll('.eleve-item').forEach(function(item, i) {
        item.dataset.index = i;
        item.querySelectorAll('[name]').forEach(function(el) {
            el.name = el.name.replace(/eleves\[\d+\]/, 'eleves[' + i + ']');
        });
    });
}

// Bind initial item
document.querySelectorAll('.eleve-item').forEach(function(item) {
    bindCycleChange(item);
});

// Add élève
document.getElementById('btn-add-eleve').addEventListener('click', function() {
    const container = document.getElementById('eleves-container');
    const count = container.querySelectorAll('.eleve-item').length;
    const template = container.querySelector('.eleve-item').cloneNode(true);

    // Reset all inputs in cloned item
    template.querySelectorAll('input, select, textarea').forEach(function(el) {
        el.value = '';
        if (el.tagName === 'SELECT') el.selectedIndex = 0;
    });
    // Reset niveau options
    const niveauSel = template.querySelector('.niveau-select');
    niveauSel.innerHTML = '<option value="">Niveau (optionnel)</option>';

    // Update index in name attributes
    template.querySelectorAll('[name]').forEach(function(el) {
        el.name = el.name.replace(/eleves\[\d+\]/, 'eleves[' + count + ']');
    });
    template.dataset.index = count;

    // Bind remove button
    const removeBtn = template.querySelector('.btn-remove-eleve');
    removeBtn.style.display = 'inline-block';
    removeBtn.addEventListener('click', function() {
        template.remove();
        updateIndexes();
        updateLabels();
    });

    bindCycleChange(template);
    container.appendChild(template);
    updateLabels();
});

// Transport toggle
const transportCheckbox = document.getElementById('transport');
const transportLabel    = document.getElementById('transport-label');
transportCheckbox.addEventListener('change', function () {
    transportLabel.classList.toggle('is-checked', this.checked);
});

// Remove button on initial items (index 0 has none, but bind for safety)
document.querySelectorAll('.btn-remove-eleve').forEach(function(btn) {
    btn.addEventListener('click', function() {
        btn.closest('.eleve-item').remove();
        updateIndexes();
        updateLabels();
    });
});
</script>
@endpush
@endsection
