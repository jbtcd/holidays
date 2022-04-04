<?php

declare(strict_types = 1);

/**
 * (c) Jonah Böther <mail@jbtcd.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace jbtcd\Holidays;

use DatePeriod;
use DateTime;
use jbtcd\Holidays\Configuration\Configuration;
use jbtcd\Holidays\Country\AbstractCountry;

/**
 * Class Holiday
 *
 * @author Jonah Böther <mail@jbtcd.me>
 */
class Holiday
{
    /** @var AbstractCountry */
    private AbstractCountry $country;

    /**
     * @param string $iso3
     *
     * @throws Exception\CountryNotSupportedException
     */
    public function __construct(string $iso3)
    {
        $this->country = Configuration::getCountryClass($iso3);

        $this->country->registerHelper();
    }

    /**
     * @param DateTime $dateTime
     *
     * @return bool
     */
    public function isHoliday(DateTime $dateTime): bool
    {
        return $this->country->isHoliday($dateTime);
    }

    /**
     * @param DatePeriod $dateRange
     *
     * @return array
     */
    public function getHolidays(DatePeriod $dateRange): array
    {
        $holidays = [];

        foreach ($dateRange as $date) {
            if ($this->isHoliday($date)) {
                $holidays[] = $date;
            }
        }

        return $holidays;
    }

    /**
     * @param string $iso3
     *
     * @return bool
     */
    public static function isCountrySupported(string $iso3): bool
    {
        return Configuration::isCountrySupported($iso3);
    }

    public static function getSupportedCountries(): array
    {
        return Configuration::$countries;
    }
}
