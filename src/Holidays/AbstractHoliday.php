<?php

declare(strict_types = 1);

/**
 * (c) Jonah Böther <mail@jbtcd.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace jbtcd\Holidays\Holidays;

use DateTime;

/**
 * Class AbstractHoliday
 *
 * @author Jonah Böther <mail@jbtcd.me>
 */
abstract class AbstractHoliday implements HolidayInterface
{
    /**
     * @param DateTime $dateTime
     *
     * @return DateTime
     */
    abstract protected function getDateOfHoliday(DateTime $dateTime): DateTime;

    /**
     * @param DateTime $dateTime
     *
     * @return bool
     */
    public function isMatch(DateTime $dateTime): bool
    {
        if ($this->getDateOfHoliday($dateTime) === $dateTime) {
            return true;
        }

        return false;
    }
}
