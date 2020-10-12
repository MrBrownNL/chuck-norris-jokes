# chuck-norris-jokes

Serves random Chuck Norris jokes, used for demo purposes

## Installation

Require the package using composer

```bash
composer require mrbrownnl/chuck-norris-jokes
```

## Usage

```php
use MrBrownNL\ChuckNorrisJokes\JokeFactory;

$jokes = new JokeFactory();

$joke = $jokes->getRandomJoke();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)
