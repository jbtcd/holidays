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
 * Interface HelperInterface
 *
 * @author Jonah Böther <mail@jbtcd.me>
 */
interface HolidayInterface
{
    /**
     * @param DateTime $dateTime
     *
     * @return bool
     */
    public function isMatch(DateTime $dateTime): bool;
}
