<?php

declare(strict_types = 1);

/**
 * (c) Jonah Böther <mail@jbtcd.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace jbtcd\Holidays\Country;

use DateTime;
use jbtcd\Holidays\Holidays\HolidayInterface;

/**
 * Class AbstractCountry
 *
 * @author Jonah Böther <mail@jbtcd.me>
 */
abstract class AbstractCountry implements Country
{
    /** @var HolidayInterface[] $holidays */
    protected array $holidays;

    /**
     * In this function all countries has to register the Helper to get the dates of holidays
     */
    abstract public function registerHelper(): void;

    public function addHoliday(HolidayInterface $holiday): void
    {
        $this->holidays[] = $holiday;
    }

    /**
     * @inheritDoc
     */
    public function isHoliday(DateTime $dateTime): bool
    {
        foreach ($this->holidays as $holiday) {
            if ($holiday->isMatch($dateTime)) {
                return true;
            }
        }

        return false;
    }
}
