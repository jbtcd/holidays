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
    /** @var HolidayInterface[] $helper */
    protected array $helper;

    /**
     * In this function all countries has to register the Helper to get the dates of holidays
     */
    abstract public function registerHelper(): void;

    /**
     * @inheritDoc
     */
    public function isHoliday(DateTime $dateTime): bool
    {
        foreach ($this->helper as $helper) {
            if ($helper->isMatch($dateTime)) {
                return true;
            }
        }

        return false;
    }
}
