# Chuck Norris jokes
[![Latest Version on Packagist](https://img.shields.io/packagist/v/mrbrownnl/chuck-norris-jokes.svg?style=flat-square)](https://packagist.org/packages/mrbrownnl/chuck-norris-jokes)
[![Build Status](https://img.shields.io/travis/mrbrownnl/chuck-norris-jokes/master.svg?style=flat-square)](https://travis-ci.org/mrbrownnl/chuck-norris-jokes)
[![codecov](https://codecov.io/gh/MrBrownNL/chuck-norris-jokes/branch/master/graph/badge.svg)](https://codecov.io/gh/MrBrownNL/chuck-norris-jokes)
[![Total Downloads](https://img.shields.io/packagist/dt/mrbrownnl/chuck-norris-jokes.svg?style=flat-square)](https://packagist.org/packages/mrbrownnl/chuck-norris-jokes)

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
