<?php declare(strict_types = 1);

namespace jbtcd\Holidays\Configuration;

use jbtcd\Holidays\Countries\AbstractCountry;
use jbtcd\Holidays\Countries\Austria;
use jbtcd\Holidays\Countries\Germany;
use jbtcd\Holidays\Exception\CountryNotSupportedException;

class Configuration
{
    /** @var string[] */
    private static array $countries = [
        Germany::ISO3 => Germany::class,
        Austria::ISO3 => Austria::class,
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
