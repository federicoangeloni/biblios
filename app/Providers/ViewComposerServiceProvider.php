<?php

namespace Biblios\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('shared.lastBook', \Biblios\Http\ViewComposers\LastBookViewComposer::class);
        View::composer('shared.prolificAuthor', \Biblios\Http\ViewComposers\ProlificAuthorViewComposer::class);
    }

     /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

}
