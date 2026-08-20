<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            <div class="flex items-center gap-2">
                <x-filament::icon icon="heroicon-o-academic-cap" class="w-5 h-5 text-warning-500" />
                <span>Préinscriptions</span>
            </div>
        </x-slot>

        {{-- Stats --}}
        <div class="grid grid-cols-3 gap-3 mb-4">
            <div class="rounded-xl bg-gray-50 dark:bg-white/5 p-3 text-center">
                <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $this->getStats()['total'] }}</p>
                <p class="text-xs text-gray-400 mt-0.5">Total</p>
            </div>
            <div class="rounded-xl bg-warning-50 dark:bg-warning-900/20 p-3 text-center">
                <p class="text-2xl font-bold text-warning-600 dark:text-warning-400">{{ $this->getStats()['pending'] }}</p>
                <p class="text-xs text-warning-500 mt-0.5">En attente</p>
            </div>
            <div class="rounded-xl bg-success-50 dark:bg-success-900/20 p-3 text-center">
                <p class="text-2xl font-bold text-success-600 dark:text-success-400">{{ $this->getStats()['approved'] }}</p>
                <p class="text-xs text-success-500 mt-0.5">Approuvées</p>
            </div>
        </div>

        {{-- Liste --}}
        <div class="space-y-2">
            @forelse($this->getDemandes() as $demande)
                @php
                    $color = match($demande->statut) {
                        'approuvé'  => 'success',
                        'refusé'    => 'danger',
                        default     => 'warning',
                    };
                    $initial = mb_strtoupper(mb_substr($demande->prenom_eleve, 0, 1));
                @endphp
                <div class="flex items-center gap-3 rounded-xl p-3 hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
                    <div class="flex-shrink-0 w-9 h-9 rounded-full bg-warning-100 dark:bg-warning-900/40 flex items-center justify-center">
                        <span class="text-sm font-bold text-warning-600 dark:text-warning-400">{{ $initial }}</span>
                    </div>
                    <div class="min-w-0 flex-1">
                        <p class="text-sm font-semibold text-gray-900 dark:text-white truncate">
                            {{ $demande->prenom_eleve }} {{ $demande->nom_eleve }}
                        </p>
                        <p class="text-xs text-gray-400 truncate">{{ $demande->niveau }} · {{ $demande->ecole }}</p>
                    </div>
                    <x-filament::badge :color="$color" size="sm">
                        {{ $demande->statut }}
                    </x-filament::badge>
                </div>
            @empty
                <div class="flex flex-col items-center justify-center py-8 text-center">
                    <x-filament::icon icon="heroicon-o-clipboard-document-list" class="w-10 h-10 text-gray-300 dark:text-gray-600 mb-2" />
                    <p class="text-sm text-gray-400">Aucune préinscription.</p>
                </div>
            @endforelse
        </div>

        @if($this->getStats()['total'] > 0)
            <div class="mt-4 pt-3 border-t border-gray-100 dark:border-gray-700">
                <a href="{{ route('filament.admin.resources.preinscription-demandes.index') }}"
                   class="flex items-center gap-1 text-xs font-medium text-primary-600 hover:text-primary-500 transition-colors">
                    Voir toutes les préinscriptions
                    <x-filament::icon icon="heroicon-m-arrow-right" class="w-3.5 h-3.5" />
                </a>
            </div>
        @endif
    </x-filament::section>
</x-filament-widgets::widget>
