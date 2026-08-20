<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            <div class="flex items-center gap-2">
                <x-filament::icon icon="heroicon-o-clock" class="w-5 h-5 text-gray-400" />
                <span>Activité récente</span>
            </div>
        </x-slot>

        @if(static::canView())
            <div class="relative">
                {{-- Ligne verticale timeline --}}
                <div class="absolute left-[17px] top-2 bottom-2 w-px bg-gray-100 dark:bg-gray-700"></div>

                <div class="space-y-1">
                    @forelse($this->getLogs() as $log)
                        @php
                            $description = strtolower($log->description ?? '');
                            $isCreate = str_contains($description, 'creat') || str_contains($description, 'créat');
                            $isDelete = str_contains($description, 'delet') || str_contains($description, 'supprim');
                            $isUpdate = str_contains($description, 'updat') || str_contains($description, 'modif') || str_contains($description, 'mis à jour');

                            if ($isCreate) {
                                $dotColor = 'bg-success-500';
                                $iconColor = 'text-success-500';
                                $icon = 'heroicon-m-plus-circle';
                            } elseif ($isDelete) {
                                $dotColor = 'bg-danger-500';
                                $iconColor = 'text-danger-500';
                                $icon = 'heroicon-m-trash';
                            } else {
                                $dotColor = 'bg-primary-500';
                                $iconColor = 'text-primary-500';
                                $icon = 'heroicon-m-pencil-square';
                            }
                        @endphp
                        <div class="flex items-start gap-3 rounded-xl pl-1 pr-3 py-2.5 hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
                            {{-- Dot timeline --}}
                            <div class="flex-shrink-0 w-9 flex justify-center pt-0.5">
                                <div class="w-3.5 h-3.5 rounded-full {{ $dotColor }} ring-2 ring-white dark:ring-gray-900 z-10"></div>
                            </div>

                            <div class="min-w-0 flex-1">
                                <p class="text-sm text-gray-800 dark:text-gray-200 leading-snug">
                                    <span class="font-semibold">{{ $log->causer_type ? class_basename($log->causer_type) : 'Système' }}</span>
                                    <span class="text-gray-500 dark:text-gray-400"> — {{ $log->description }}</span>
                                </p>
                                @if($log->subject_type)
                                    <p class="text-xs text-gray-400 mt-0.5">
                                        {{ class_basename($log->subject_type) }}
                                        @if($log->subject_id) <span class="opacity-60">#{{ $log->subject_id }}</span> @endif
                                    </p>
                                @endif
                            </div>

                            <span class="text-xs text-gray-400 whitespace-nowrap pt-0.5">
                                {{ \Carbon\Carbon::parse($log->created_at)->diffForHumans() }}
                            </span>
                        </div>
                    @empty
                        <div class="flex flex-col items-center justify-center py-8 text-center">
                            <x-filament::icon icon="heroicon-o-clock" class="w-10 h-10 text-gray-300 dark:text-gray-600 mb-2" />
                            <p class="text-sm text-gray-400">Aucune activité enregistrée.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        @else
            <div class="flex flex-col items-center justify-center py-8 text-center gap-2">
                <x-filament::icon icon="heroicon-o-exclamation-circle" class="w-10 h-10 text-gray-300 dark:text-gray-600" />
                <p class="text-sm text-gray-500">Journal d'activité non activé.</p>
                <p class="text-xs text-gray-400">Installez <code class="bg-gray-100 dark:bg-gray-800 px-1 rounded">spatie/laravel-activitylog</code> pour activer cette fonctionnalité.</p>
            </div>
        @endif
    </x-filament::section>
</x-filament-widgets::widget>
