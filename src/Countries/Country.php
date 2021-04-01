<?php declare(strict_types = 1);

namespace jbtcd\Holidays\Countries;

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
     */
    public function isHoliday(\DateTime $dateTime): bool;
}
