<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Parametre;
use App\Models\Categorie;

class ParametreServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // // Partager le premier enregistrement de Parametre avec toutes les vues
        // View::composer('*', function ($view) {
        //     $parametre = Parametre::first(); // Récupère le premier enregistrement

        //     // $categories_cours = Categorie::where('active', 1)->
        //     // where('is_cours', 1)->get();
        //     // $view->with('parametre', $parametre, 'categories_cours',$categories_cours);
        //     $view->with('parametre', $parametre);
        // });

        // Partager le premier enregistrement de Parametre avec toutes les vues
        View::composer('*', function ($view) {
            $parametre = Parametre::first(); // Récupère le premier enregistrement

            // Récupérer les catégories de cours actives
            $categories_cours = Categorie::where('active', 1)
                ->where('is_cours', 1)
                ->get();

            // Passer les variables à la vue correctement sous forme de tableau associatif
            $view->with([
                'parametre' => $parametre,
                'categories_cours' => $categories_cours
            ]);
        });

    }
}
