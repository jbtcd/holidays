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
use jbtcd\Holidays\Helper\HelperInterface;

/**
 * Class AbstractCountry
 *
 * @author Jonah Böther <mail@jbtcd.me>
 */
abstract class AbstractCountry implements Country
{
    /** @var HelperInterface[] $helper */
    protected array $helper;

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
