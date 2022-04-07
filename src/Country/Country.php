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
 * Interface Country
 *
 * @author Jonah Böther <mail@jbtcd.me>
 */
interface Country
{

    /**
     * @param DateTime $dateTime
     *
     * Check if given Date is holiday
     *
     * @return bool
     */
    public function isHoliday(DateTime $dateTime): bool;

    /**
     * @param HolidayInterface $holiday
     *
     * Add a custom holiday
     */
    public function addHoliday(HolidayInterface $holiday): void;
}
