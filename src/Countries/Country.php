<?php declare(strict_types = 1);

namespace jbtcd\Holidays\Countries;

use jbtcd\Holidays\Exception\DateIsNotInSelectedYearException;

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
