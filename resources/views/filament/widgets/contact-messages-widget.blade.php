<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            <div class="flex items-center gap-2">
                <x-filament::icon icon="heroicon-o-envelope" class="w-5 h-5 text-primary-500" />
                <span>Messages de contact</span>
                <x-filament::badge color="primary" size="sm">{{ $this->getTotalCount() }}</x-filament::badge>
            </div>
        </x-slot>

        <div class="space-y-2">
            @forelse($this->getMessages() as $message)
                <div class="flex items-start gap-3 rounded-xl p-3 hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
                    <div class="flex-shrink-0 w-9 h-9 rounded-full bg-primary-100 dark:bg-primary-900/40 flex items-center justify-center">
                        <span class="text-sm font-bold text-primary-600 dark:text-primary-400 uppercase">
                            {{ mb_substr($message->name, 0, 1) }}
                        </span>
                    </div>

                    <div class="min-w-0 flex-1">
                        <div class="flex items-center justify-between gap-2 mb-0.5">
                            <p class="text-sm font-semibold text-gray-900 dark:text-white truncate">{{ $message->name }}</p>
                            <span class="text-xs text-gray-400 whitespace-nowrap">{{ $message->created_at->diffForHumans() }}</span>
                        </div>
                        @if($message->subject)
                            <p class="text-xs font-medium text-primary-600 dark:text-primary-400 truncate mb-0.5">{{ $message->subject }}</p>
                        @endif
                        <p class="text-xs text-gray-500 dark:text-gray-400 line-clamp-1">{{ $message->message }}</p>
                        <p class="text-xs text-gray-400 mt-0.5">{{ $message->email }}</p>
                    </div>
                </div>
            @empty
                <div class="flex flex-col items-center justify-center py-8 text-center">
                    <x-filament::icon icon="heroicon-o-inbox" class="w-10 h-10 text-gray-300 dark:text-gray-600 mb-2" />
                    <p class="text-sm text-gray-400">Aucun message pour le moment.</p>
                </div>
            @endforelse
        </div>

        @if($this->getTotalCount() > 0)
            <div class="mt-4 pt-3 border-t border-gray-100 dark:border-gray-700">
                <a href="{{ route('filament.admin.resources.contacts.index') }}"
                   class="flex items-center gap-1 text-xs font-medium text-primary-600 hover:text-primary-500 transition-colors">
                    Voir tous les messages
                    <x-filament::icon icon="heroicon-m-arrow-right" class="w-3.5 h-3.5" />
                </a>
            </div>
        @endif
    </x-filament::section>
</x-filament-widgets::widget>
