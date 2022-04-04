<?php

declare(strict_types = 1);

/**
 * (c) Jonah Böther <mail@jbtcd.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace jbtcd\Holidays\Configuration;

use jbtcd\Holidays\Country\AbstractCountry;
use jbtcd\Holidays\Country\Germany;
use jbtcd\Holidays\Exception\CountryNotSupportedException;

/**
 * Class Configuration
 *
 * @author Jonah Böther <mail@jbtcd.me>
 */
class Configuration
{
    /** @var string[] */
    public static array $countries = [
        Germany::ISO3 => Germany::class,
    ];

    /**
     * @param string $iso3
     *
     * @return AbstractCountry
     *
     * @throws CountryNotSupportedException
     */
    public static function getCountryClass(string $iso3): AbstractCountry
    {
        if (!self::isCountrySupported($iso3)) {
            throw new CountryNotSupportedException();
        }

        return new self::$countries[$iso3];
    }

    /**
     * @param string $iso3
     *
     * @return bool
     */
    public static function isCountrySupported(string $iso3): bool
    {
        if (key_exists($iso3, self::$countries)) {
            return true;
        }

        return false;
    }
}
