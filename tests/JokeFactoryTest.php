<?php

namespace MrBrownNL\ChuckNorrisJokes\Tests;

use MrBrownNL\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke',
        ]);
        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke()
    {
        $chuckNorrisJokes = [
            'Chuck Norris threw a grenade and killed 50 people, then it exploded.',
            'Chuck Norris eats habanero peppers to cool down on a hot day.',
            'Chuck Norris can strangle you with a cordless phone.',
            'Death once had a near-Chuck-Norris experience.',
            'Chuck Norris can kill two stones with one bird.',
            'Chuck Norris doesn\'t dial the wrong number, you pick up the wrong phone.',
        ];
        $jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckNorrisJokes);
    }
}
