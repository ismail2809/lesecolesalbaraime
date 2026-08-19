<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">Historique des activités</x-slot>

        @if(static::canView())
            <div class="divide-y divide-gray-100 dark:divide-gray-700">
                @forelse($this->getLogs() as $log)
                    <div class="py-3 flex items-start gap-3">
                        <div class="mt-0.5 flex-shrink-0 w-2 h-2 rounded-full bg-primary-500 mt-2"></div>
                        <div class="min-w-0 flex-1">
                            <p class="text-sm text-gray-900 dark:text-white">
                                <span class="font-medium">{{ $log->causer_type ? class_basename($log->causer_type) : 'Système' }}</span>
                                — {{ $log->description }}
                            </p>
                            @if($log->subject_type)
                                <p class="text-xs text-gray-500">{{ class_basename($log->subject_type) }} #{{ $log->subject_id }}</p>
                            @endif
                            <p class="text-xs text-gray-400 mt-0.5">{{ \Carbon\Carbon::parse($log->created_at)->diffForHumans() }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-sm text-gray-500 py-4 text-center">Aucune activité enregistrée.</p>
                @endforelse
            </div>
        @else
            <div class="py-6 text-center">
                <p class="text-sm text-gray-500 mb-2">Le journal d'activité n'est pas encore activé.</p>
                <p class="text-xs text-gray-400">Installez <code>spatie/laravel-activitylog</code> pour activer cette fonctionnalité.</p>
            </div>
        @endif
    </x-filament::section>
</x-filament-widgets::widget>
