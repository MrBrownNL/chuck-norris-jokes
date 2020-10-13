<?php

namespace MrBrownNL\ChuckNorrisJokes\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use MrBrownNL\ChuckNorrisJokes\Facades\ChuckNorris;
use MrBrownNL\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $mock = new MockHandler([
            new Response(200, [], '{ "type": "success", "value": { "id": 281, "joke": "TEST JOKE", "categories": [] } }'),
        ]);

        $handlerStack = HandlerStack::create($mock);

        $client = new Client(['handler' => $handlerStack]);

        $jokes = new JokeFactory($client);
        $joke = $jokes->getRandomJoke();

        $this->assertSame('TEST JOKE', $joke);
    }
}
