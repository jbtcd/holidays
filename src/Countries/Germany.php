<?php declare(strict_types = 1);

namespace jbtcd\Holidays\Countries;

class Germany extends AbstractCountry
{
    public const ISO3 = 'DEU';

    public function createList(): void
    {
        $this->holidays = [
            new \DateTime($this->getYear() . '-01-01'),
            new \DateTime(easter_date($this->getYear())),
        ];
    }
}
