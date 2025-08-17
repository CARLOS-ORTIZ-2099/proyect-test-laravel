<?php

namespace App\Providers;

use App\View\Composers\ViewComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
  /**
   * Register services.
   */
  public function register(): void
  {
    //
  }

  /**
   * Bootstrap services.
   */
  public function boot(): void
  {
    // con esto compartimos datos de forma global a todas las vistas
    View::share('global', 'valor global 123');

    /* Los compositores de vistas pueden resultar especialmente útiles si la 
       misma vista es devuelta por varias rutas o controladores dentro de su 
       aplicación y siempre necesita un dato específico. 
    */
    // con esto compartimos datos de forma global a una vista en especifico
    /* existen los compositores basados en callbacks que se usan cuando la 
       lógica es simple.
       Cuando la lógica es compleja sería mejor separar esa lógica y llevarla a otro archivo aparte, a esto se le conoce como compositores basados 
       en clases.    
    */
    View::composer('welcome', function ($view) {
      $view->with('data', 'mensaje de un composer basado en callbacks');
    });

    // con esto compartimos datos de forma global a varias vistas en especifico
    View::composer(['welcome', 'posts.edit'], function ($view) {
      $view->with('data', 'mensaje de un composer basado en callbacks');
    });

    // compositor basado en clases
    View::composer(['welcome', 'posts.edit'], ViewComposer::class);
  }
}
