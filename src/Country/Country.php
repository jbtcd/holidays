<?php

declare(strict_types = 1);

/**
 * (c) Jonah Böther <mail@jbtcd.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace jbtcd\Holidays\Country;

use jbtcd\Holidays\Exception\DateIsNotInSelectedYearException;

/**
 * Interface Country
 *
 * @author Jonah Böther <mail@jbtcd.me>
 */
interface Country
{
    /**
     * @return array
     */
    public function getHolidays(): array;

    /**
     * @param \DateTime $dateTime
     *
     * @return bool
     *
     * @throws DateIsNotInSelectedYearException
     */
    public function isHoliday(\DateTime $dateTime): bool;
}
