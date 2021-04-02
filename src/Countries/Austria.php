<?php declare(strict_types = 1);

namespace jbtcd\Holidays\Countries;

use jbtcd\Holidays\Helper\AscensionOfJesusHelper;
use jbtcd\Holidays\Helper\EasterMondayHelper;
use jbtcd\Holidays\Helper\FeastOfCorpusChristiHelper;
use jbtcd\Holidays\Helper\PentecostHelper;

/**
 * @codeCoverageIgnore
 */
class Austria extends AbstractCountry
{
    public const ISO3 = 'AUT';

    public function createList(): void
    {
        $this->holidays = [
            new \DateTime($this->getYear() . '-01-01'),
            new \DateTime($this->getYear() . '-01-06'),
            EasterMondayHelper::getDate($this->getYear()),
            new \DateTime($this->getYear() . '-05-01'),
            AscensionOfJesusHelper::getDate($this->getYear()),
            PentecostHelper::getDate($this->getYear()),
            FeastOfCorpusChristiHelper::getDate($this->getYear()),
            new \DateTime($this->getYear() . '-08-15'),
            new \DateTime($this->getYear() . '-10-26'),
            new \DateTime($this->getYear() . '-11-01'),
            new \DateTime($this->getYear() . '-12-08'),
            new \DateTime($this->getYear() . '-12-24'),
            new \DateTime($this->getYear() . '-12-25'),
            new \DateTime($this->getYear() . '-12-26'),
            new \DateTime($this->getYear() . '-12-31'),
        ];
    }
}
