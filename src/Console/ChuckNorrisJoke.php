<?php

namespace MrBrownNL\ChuckNorrisJokes\Console;

use Illuminate\Console\Command;
use MrBrownNL\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisJoke extends Command
{
    protected $signature = 'chuck-norris';

    protected $description = 'Output a funny Chuck Norris joke';

    public function handle()
    {
        $this->info(ChuckNorris::getRandomJoke());
    }
}
