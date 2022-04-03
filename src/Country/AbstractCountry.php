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
 * Class AbstractCountry
 *
 * @author Jonah Böther <mail@jbtcd.me>
 */
abstract class AbstractCountry implements Country
{
    /** @var \DateTime[] */
    protected array $holidays;
    /** @var int */
    private int $selectedYear;

    /**
     * @return int
     */
    protected function getYear(): int
    {
        return (int) (new \DateTime())->format('Y');
    }

    abstract public function createList(): void;

    /**
     * @inheritDoc
     */
    public function getHolidays(): array
    {
        return $this->holidays;
    }

    /**
     * @inheritDoc
     */
    public function isHoliday(\DateTime $dateTime): bool
    {
        if (in_array($dateTime, $this->holidays)) {
            return true;
        }

        return false;
    }
}
