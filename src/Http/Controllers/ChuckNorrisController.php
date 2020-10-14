<?php

namespace MrBrownNL\ChuckNorrisJokes\Http\Controllers;

use MrBrownNL\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisController
{
    public function __invoke()
    {
        return view('chuck-norris::joke', [
            'joke' => ChuckNorris::getRandomJoke(),
        ]);
    }
}
