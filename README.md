[![Stand With Ukraine](https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/banner2-direct.svg)](https://vshymanskyy.github.io/StandWithUkraine/)

# The holiday project 🏖️

A simple PHP library to work with all the holidays in the world.

[![GitHub stars](https://img.shields.io/github/stars/jbtcd/holidays.svg)](https://github.com/jbtcd/holidays/stargazers)
[![GitHub issues](https://img.shields.io/github/issues/jbtcd/holidays.svg)](https://github.com/jbtcd/holidays/issues)
[![Build Status](https://travis-ci.com/jbtcd/holidays.svg?branch=main)](https://travis-ci.com/jbtcd/holidays)
[![license](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![packagist](https://img.shields.io/packagist/v/jbtcd/holidays.svg?style=flat-square)](https://packagist.org/packages/jbtcd/holidays)
[![downloads](https://img.shields.io/packagist/dt/jbtcd/holidays.svg?style=flat-square)](https://packagist.org/packages/jbtcd/holidays)
[![php version](https://img.shields.io/packagist/php-v/jbtcd/holidays?style=flat-square)](https://packagist.org/packages/jbtcd/holidays)

## Installation

To install, use composer:

```bash
$ composer require jbtcd/holidays
```

## Usage

```php
<?php

require __DIR__ . '/vendor/autoload.php';

$holiday = new \jbtcd\Holidays\Holiday('DEU');

var_dump($holiday->isHoliday(new \DateTime('start of year')));
```

## Testing

PHPUnit:
``` bash
./vendor/bin/phpunit --testdox tests --coverage-text
```

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
