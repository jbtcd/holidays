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
 * Class EasterSunday
 *
 * @author Jonah Böther <mail@jbtcd.me>
 */
class EasterSunday extends AbstractHoliday
{
    /**
     * @param DateTime $dateTime
     *
     * @return DateTime
     *
     * @throws \Exception
     *
     * @SuppressWarnings(PHPMD.ShortVariable)
     *
     */
    public function getDateOfHoliday(DateTime $dateTime): DateTime
    {
        $year = $dateTime->format('Y');

        $a = $year % 4;
        $b = $year % 7;
        $c = $year % 19;
        $d = (19 * $c + 24) % 30;
        $e = (2 * $a + 4* $b + 6 * $d + 5) % 7;
        $f = floor(($c + 11 * $d + 22 * $e) / 451);
        $g = 22 + $d + $e - 7 * $f;

        $date = ($g <= 31) ? $g . '.03.' . $year : $g - 31  . '.04.' . $year;

        return new DateTime($date);
    }
}
