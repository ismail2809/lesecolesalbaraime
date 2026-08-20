<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use App\Models\Setting;
use App\Models\Activite;
use App\Models\Albaraime1;
use App\Models\Albaraime2;
use App\Models\Apropos;
use App\Models\Blog;
use App\Models\Cafeteria;
use App\Models\College;
use App\Models\CursusScolaire;
use App\Models\Galerie;
use App\Models\Home;
use App\Models\Lycee;
use App\Models\Maternelle;
use App\Models\Primaire;
use App\Models\Reinscription;
use App\Models\Temoignage;
use App\Models\Transport;
use App\Observers\ImageOptimizationObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (!app()->environment('local')) {
            URL::forceScheme('https');
        }

        // Partager la dernière configuration dans toutes les vues
        View::composer('*', function ($view) {
            $view->with('setting', Setting::latest()->first());
        });

        // Observer d'optimisation d'images
        $modelsWithImages = [
            Activite::class, Albaraime1::class, Albaraime2::class,
            Apropos::class, Blog::class, Cafeteria::class,
            College::class, CursusScolaire::class, Galerie::class,
            Home::class, Lycee::class, Maternelle::class,
            Primaire::class, Reinscription::class, Temoignage::class,
            Transport::class,
        ];

        foreach ($modelsWithImages as $model) {
            $model::observe(ImageOptimizationObserver::class);
        }
    }
}
