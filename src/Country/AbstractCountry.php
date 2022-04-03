<?php

namespace jbtcd\Holidays\Country;

use jbtcd\Holidays\Exception\DateIsNotInSelectedYearException;

abstract class AbstractCountry implements Country
{
    /** @var \DateTime[] */
    protected array $holidays;
    /** @var int */
    private int $selectedYear;

    protected function getYear(): int
    {
        return (new \DateTime())->format('Y');
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
