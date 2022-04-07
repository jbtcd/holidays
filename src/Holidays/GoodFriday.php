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
 * Class GoodFriday
 *
 * @author Jonah Böther <mail@jbtcd.me>
 */
class GoodFriday extends AbstractHoliday
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
        $easterSundayHelper = new EasterSunday();
        $easterSundayDate = $easterSundayHelper->getDateOfHoliday($dateTime);

        return $easterSundayDate->modify('-2 days');
    }
}
