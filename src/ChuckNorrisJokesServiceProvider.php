<?php

namespace MrBrownNL\ChuckNorrisJokes;

use Illuminate\Support\ServiceProvider;
use MrBrownNL\ChuckNorrisJokes\Console\ChuckNorrisJoke;
use MrBrownNL\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ChuckNorrisJoke::class
            ]);
        }
    }

    public function register()
    {
        $this->app->bind('chuck-norris', function() {
            return new JokeFactory();
        });
    }
}