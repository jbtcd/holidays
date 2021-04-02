<?php declare(strict_types = 1);

/**
 * (c) Jonah Böther <mail@jbtcd.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace jbtcd\Holidays;

use jbtcd\Holidays\Configuration\Configuration;
use jbtcd\Holidays\Country\AbstractCountry;

class Holiday
{
    /** @var AbstractCountry */
    private AbstractCountry $country;

    /**
     * @param string $iso3
     * @param int|null $year
     *
     * @throws Exception\CountryNotSupportedException
     */
    public function __construct(string $iso3, ?int $year = null) {
        $this->country = Configuration::getCountryClass($iso3);

        if ($year === null) {
            $year = (int) date('Y');
        }

        $this->country->setYear($year);

        $this->country->createList();
    }

    /**
     * @return \DateTime[]
     */
    public function getHolidays(): array
    {
        return $this->country->getHolidays();
    }

    /**
     * @param \DateTime $dateTime
     *
     * @return bool
     */
    public function isHoliday(\DateTime $dateTime): bool
    {
        return $this->country->isHoliday($dateTime);
    }

    /**
     * @return int
     */
    public function getSelectedYear(): int
    {
        return $this->country->getYear();
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
}
