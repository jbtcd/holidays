<?php

declare(strict_types = 1);

/**
 * (c) Jonah Böther <mail@jbtcd.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace jbtcd\Holidays\Helper\Country\Germany;

use jbtcd\Holidays\Helper\AbstractHelper;

/**
 * Class NationalDayHelper
 *
 * @author Jonah Böther <mail@jbtcd.me>
 */
class NationalDayHelper extends AbstractHelper
{
    /**
     * @param \DateTime $dateTime
     *
     * @return \DateTime
     *
     * @throws \Exception
     *
     */
    protected function getDateOfHoliday(\DateTime $dateTime): \DateTime
    {
        $year = $dateTime->format('Y');

        return new \DateTime($year . '-10-03');
    }
}
