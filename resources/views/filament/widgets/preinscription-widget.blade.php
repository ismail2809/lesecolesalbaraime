<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            <div class="flex items-center justify-between">
                <span>Préinscriptions</span>
                <x-filament::badge color="warning">{{ $this->getStats()['pending'] }} en attente</x-filament::badge>
            </div>
        </x-slot>

        <div class="flex gap-4 mb-4">
            <div class="flex-1 bg-gray-50 dark:bg-gray-800 rounded-lg p-3 text-center">
                <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $this->getStats()['total'] }}</p>
                <p class="text-xs text-gray-500">Total</p>
            </div>
            <div class="flex-1 bg-warning-50 dark:bg-warning-900/20 rounded-lg p-3 text-center">
                <p class="text-2xl font-bold text-warning-600">{{ $this->getStats()['pending'] }}</p>
                <p class="text-xs text-gray-500">En attente</p>
            </div>
            <div class="flex-1 bg-success-50 dark:bg-success-900/20 rounded-lg p-3 text-center">
                <p class="text-2xl font-bold text-success-600">{{ $this->getStats()['approved'] }}</p>
                <p class="text-xs text-gray-500">Approuvées</p>
            </div>
        </div>

        <div class="divide-y divide-gray-100 dark:divide-gray-700">
            @forelse($this->getDemandes() as $demande)
                <div class="py-3 flex items-center justify-between gap-2">
                    <div class="min-w-0">
                        <p class="text-sm font-medium text-gray-900 dark:text-white truncate">
                            {{ $demande->prenom_eleve }} {{ $demande->nom_eleve }}
                        </p>
                        <p class="text-xs text-gray-500">{{ $demande->niveau }} — {{ $demande->ecole }}</p>
                    </div>
                    <x-filament::badge :color="$demande->statut === 'approuvé' ? 'success' : ($demande->statut === 'refusé' ? 'danger' : 'warning')">
                        {{ $demande->statut }}
                    </x-filament::badge>
                </div>
            @empty
                <p class="text-sm text-gray-500 py-4 text-center">Aucune préinscription.</p>
            @endforelse
        </div>

        <div class="mt-3">
            <a href="{{ route('filament.admin.resources.preinscription-demandes.index') }}"
               class="text-xs text-primary-600 hover:underline">
                Voir toutes les préinscriptions →
            </a>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
