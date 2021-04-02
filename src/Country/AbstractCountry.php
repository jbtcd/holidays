<?php

namespace jbtcd\Holidays\Country;

use jbtcd\Holidays\Exception\DateIsNotInSelectedYearException;

abstract class AbstractCountry implements Country
{
    /** @var \DateTime[] */
    protected array $holidays;
    /** @var int */
    private int $selectedYear;

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
        if ((int) $dateTime->format('Y') !== $this->selectedYear) {
            throw new DateIsNotInSelectedYearException();
        }

        if (in_array($dateTime, $this->holidays)) {
            return true;
        }

        return false;
    }

    public function setYear(int $year): void
    {
        $this->selectedYear = $year;
    }

    public function getYear(): int
    {
        return $this->selectedYear;
    }
}