<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            <div class="flex items-center justify-between">
                <span>Messages de contact</span>
                <x-filament::badge color="primary">{{ $this->getTotalCount() }} total</x-filament::badge>
            </div>
        </x-slot>

        <div class="divide-y divide-gray-100 dark:divide-gray-700">
            @forelse($this->getMessages() as $message)
                <div class="py-3">
                    <div class="flex items-start justify-between gap-2">
                        <div class="min-w-0">
                            <p class="text-sm font-medium text-gray-900 dark:text-white truncate">{{ $message->name }}</p>
                            <p class="text-xs text-gray-500 truncate">{{ $message->email }}</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400 mt-1 line-clamp-1">{{ $message->message }}</p>
                        </div>
                        <span class="text-xs text-gray-400 whitespace-nowrap">{{ $message->created_at->diffForHumans() }}</span>
                    </div>
                </div>
            @empty
                <p class="text-sm text-gray-500 py-4 text-center">Aucun message pour le moment.</p>
            @endforelse
        </div>

        <div class="mt-3">
            <a href="{{ route('filament.admin.resources.contacts.index') }}"
               class="text-xs text-primary-600 hover:underline">
                Voir tous les messages →
            </a>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
