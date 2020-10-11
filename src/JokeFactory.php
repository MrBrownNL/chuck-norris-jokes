<?php

namespace MrBrownNL\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'Chuck Norris threw a grenade and killed 50 people, then it exploded.',
        'Chuck Norris eats habanero peppers to cool down on a hot day.',
        'Chuck Norris can strangle you with a cordless phone.',
        'Death once had a near-Chuck-Norris experience.',
        'Chuck Norris can kill two stones with one bird.',
        'Chuck Norris doesn\'t dial the wrong number, you pick up the wrong phone.',
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}