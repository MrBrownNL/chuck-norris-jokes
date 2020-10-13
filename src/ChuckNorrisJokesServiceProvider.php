<?php

namespace MrBrownNL\ChuckNorrisJokes;

use Illuminate\Support\ServiceProvider;
use MrBrownNL\ChuckNorrisJokes\Console\ChuckNorrisJoke;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ChuckNorrisJoke::class,
            ]);
        }
    }

    public function register()
    {
        // Binds the name given in the facade
        $this->app->bind('chuck-norris', function () {
            return new JokeFactory();
        });
    }
}
