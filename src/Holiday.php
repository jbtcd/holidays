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
    /** @var Configuration */
    private Configuration $configuration;

    /** @var AbstractCountry */
    private AbstractCountry $country;

    /**
     * @param string $iso3
     */
    public function __construct(string $iso3)
    {
        $this->configuration = new Configuration();

        $this->country = $this->configuration->getCountryClass($iso3);

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
    public function isCountrySupported(string $iso3): bool
    {
        return $this->configuration->isCountrySupported($iso3);
    }

    public function getSupportedCountries(): array
    {
        return $this->configuration->countries;
    }
}
