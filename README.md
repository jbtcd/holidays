# The holiday project

A simple PHP library to work with all the holidays in the world.

[![@jbtcdDE on Twitter](http://img.shields.io/badge/twitter-%40jbtcdDE-blue.svg?style=flat)](https://twitter.com/jbtcdDE)
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

$holiday = new \jbtcd\Holidays\Holiday('DEU', null);

var_dump($holiday->isHoliday(new \DateTime('01.01.2021')));

var_dump($holiday->getHolidays());
```

## Testing

PHPUnit:
``` bash
./vendor/bin/phpunit --testdox tests --coverage-text
```

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
