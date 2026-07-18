@extends('layout.master')
@section('title', "Accueil")

@section('content')

@include('layout.partial.main')

{{-- ===== POPUP RENTRÉE SCOLAIRE 2026 ===== --}}
<div id="rentree-overlay" style="
    position:fixed;inset:0;z-index:9999;
    background:rgba(15,23,42,.55);
    backdrop-filter:blur(4px);
    display:flex;align-items:center;justify-content:center;
    padding:1rem;
    animation:fadeIn .3s ease;
">
    <div id="rentree-popup" style="
        background:#fff;
        border-radius:20px;
        max-width:480px;width:100%;
        box-shadow:0 25px 60px rgba(0,0,0,.25);
        overflow:hidden;
        animation:slideUp .35s ease;
        position:relative;
    ">
        {{-- bannière haut --}}
        <div style="background:#09a7b1;padding:2rem 2rem 1.5rem;text-align:center;position:relative;">
            <div style="width:64px;height:64px;background:rgba(255,255,255,.2);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto .75rem;">
                <i class="far fa-backpack" style="font-size:1.8rem;color:#fff;"></i>
            </div>
            <h2 style="color:#fff;font-size:1.4rem;font-weight:800;margin:0 0 .3rem;">Rentrée Scolaire 2026</h2>
            <p style="color:rgba(255,255,255,.85);margin:0;font-size:.9rem;">Les fournitures scolaires sont disponibles !</p>

            {{-- badge --}}
            <span style="
                position:absolute;top:1rem;right:1rem;
                background:#fff;color:#09a7b1;
                font-size:.7rem;font-weight:700;
                padding:.25rem .6rem;border-radius:50px;
                text-transform:uppercase;letter-spacing:.05em;
            ">Nouveau</span>
        </div>

        {{-- corps --}}
        <div style="padding:1.75rem 2rem 2rem;">
            <p style="color:#475569;line-height:1.7;margin:0 0 1.5rem;text-align:center;">
                Préparez la rentrée sereinement ! Consultez dès maintenant la liste complète des
                <strong>fournitures scolaires 2025–2026</strong> par niveau et par cycle.
            </p>

            <div style="display:flex;flex-direction:column;gap:.75rem;">
                <a href="{{ url('/fourniture') }}"
                   style="
                    display:flex;align-items:center;justify-content:center;gap:.6rem;
                    background:#09a7b1;color:#fff;
                    padding:.85rem 1.5rem;border-radius:50px 50px 50px 0;
                    font-weight:700;font-size:.95rem;text-decoration:none;
                    letter-spacing:.03em;
                    transition:opacity .2s;
                   "
                   onmouseover="this.style.opacity='.85'" onmouseout="this.style.opacity='1'">
                    <i class="far fa-book-open"></i>
                    Voir les fournitures scolaires
                </a>
                <button onclick="closeRentreePopup()"
                   style="
                    background:none;border:2px solid #e2e8f0;color:#64748b;
                    padding:.75rem 1.5rem;border-radius:50px;
                    font-weight:600;font-size:.9rem;cursor:pointer;
                    transition:border-color .2s,color .2s;
                   "
                   onmouseover="this.style.borderColor='#fda31b';this.style.color='#fda31b'"
                   onmouseout="this.style.borderColor='#e2e8f0';this.style.color='#64748b'">
                    <i class="far fa-xmark me-1"></i> Fermer
                </button>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
@keyframes fadeIn  { from { opacity:0 } to { opacity:1 } }
@keyframes slideUp { from { opacity:0;transform:translateY(30px) } to { opacity:1;transform:translateY(0) } }
</style>
@endpush

@push('scripts')
<script>
function closeRentreePopup() {
    var overlay = document.getElementById('rentree-overlay');
    overlay.style.transition = 'opacity .25s';
    overlay.style.opacity = '0';
    setTimeout(function() { overlay.style.display = 'none'; }, 250);
}
// Fermer en cliquant sur l'overlay
document.getElementById('rentree-overlay').addEventListener('click', function(e) {
    if (e.target === this) closeRentreePopup();
});
</script>
@endpush

@endsection