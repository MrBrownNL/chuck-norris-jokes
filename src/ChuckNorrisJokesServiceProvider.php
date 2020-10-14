<?php

namespace MrBrownNL\ChuckNorrisJokes;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use MrBrownNL\ChuckNorrisJokes\Console\ChuckNorrisJoke;
use MrBrownNL\ChuckNorrisJokes\Http\Controllers\ChuckNorrisController;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ChuckNorrisJoke::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'chuck-norris');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/chuck-norris')
        ]);

        Route::get('chuck-norris', ChuckNorrisController::class);
    }

    public function register()
    {
        // Binds the name given in the facade
        $this->app->bind('chuck-norris', function () {
            return new JokeFactory();
        });
    }
}
