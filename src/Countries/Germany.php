<?php declare(strict_types = 1);

namespace jbtcd\Holidays\Countries;

use jbtcd\Holidays\Helper\EasterMondayHelper;
use jbtcd\Holidays\Helper\EasterSundayHelper;
use jbtcd\Holidays\Helper\GoodFridayHelper;
use jbtcd\Holidays\Helper\PentecostHelper;

/**
 * @codeCoverageIgnore
 */
class Germany extends AbstractCountry
{
    public const ISO3 = 'DEU';

    public function createList(): void
    {
        $this->holidays = [
            new \DateTime($this->getYear() . '-01-01'),
            GoodFridayHelper::getDate($this->getYear()),
            EasterSundayHelper::getDate($this->getYear()),
            EasterMondayHelper::getDate($this->getYear()),
            new \DateTime($this->getYear() . '-05-01'),
            PentecostHelper::getDate($this->getYear()),
            new \DateTime($this->getYear() . '-10-03'),
            new \DateTime($this->getYear() . '-12-25'),
            new \DateTime($this->getYear() . '-12-26'),
        ];
    }
}
