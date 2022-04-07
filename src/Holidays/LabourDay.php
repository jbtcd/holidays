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
 * Class LabourDay
 *
 * @author Jonah Böther <mail@jbtcd.me>
 */
class LabourDay extends AbstractHoliday
{
    /**
     * @param DateTime $dateTime
     *
     * @return DateTime
     *
     * @throws \Exception
     *
     */
    public function getDateOfHoliday(DateTime $dateTime): DateTime
    {
        $year = $dateTime->format('Y');

        return new DateTime($year . '-05-01');
    }
}
