<?php declare(strict_types = 1);

namespace jbtcd\Holidays\Countries;

class Germany extends AbstractCountry
{
    public const ISO3 = 'DEU';

    public function createList(int $year): void
    {
        $this->holidays = [
            new \DateTime($year.'-01-01'),
        ];
    }
}
