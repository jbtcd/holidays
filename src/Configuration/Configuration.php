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

/**
 * Class Configuration
 *
 * @author Jonah Böther <mail@jbtcd.me>
 */
class Configuration
{
    /** @var string[] */
    public array $countries = [
        Germany::ISO3 => Germany::class,
    ];

    /**
     * @param string $iso3
     *
     * @return AbstractCountry
     */
    public function getCountryClass(string $iso3): AbstractCountry
    {
        return new $this->countries[$iso3];
    }

    /**
     * @param string $iso3
     *
     * @return bool
     */
    public function isCountrySupported(string $iso3): bool
    {
        if (key_exists($iso3, $this->countries)) {
            return true;
        }

        return false;
    }
}
