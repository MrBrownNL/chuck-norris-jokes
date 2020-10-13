<?php

namespace MrBrownNL\ChuckNorrisJokes\Facades;

use Illuminate\Support\Facades\Facade;

class ChuckNorris extends Facade
{
    protected static function getFacadeAccessor()
    {
        // Must be the same name as in the register method of the service provider
        return 'chuck-norris';
    }
}
