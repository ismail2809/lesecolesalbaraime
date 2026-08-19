<x-filament-widgets::widget>
    <x-filament::section>
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="flex items-center justify-center w-14 h-14 rounded-full bg-primary-100 dark:bg-primary-900 text-primary-600 dark:text-primary-400 text-xl font-bold">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>
                <div>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Bienvenue,</p>
                    <h2 class="text-xl font-bold text-gray-900 dark:text-white">{{ auth()->user()->name }}</h2>
                    <p class="text-xs text-gray-400">{{ auth()->user()->email }}</p>
                </div>
            </div>
            <form method="POST" action="{{ route('filament.admin.auth.logout') }}">
                @csrf
                <button type="submit"
                    class="flex items-center gap-2 px-4 py-2 text-sm font-medium text-white bg-danger-600 hover:bg-danger-700 rounded-lg transition">
                    <x-heroicon-o-arrow-right-on-rectangle class="w-4 h-4" />
                    Déconnexion
                </button>
            </form>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
