<?php

namespace jbtcd\Holidays\Countries;

abstract class AbstractCountry implements Country
{
    /** @var \DateTime[] */
    protected array $holidays;

    abstract public function createList(int $year): void;

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
