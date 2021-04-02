<?php declare(strict_types = 1);

namespace jbtcd\Holidays\Country;

use jbtcd\Holidays\Helper\Country\Germany\NationalDayHelper;
use jbtcd\Holidays\Helper\General\SecondChristmasDayHelper;
use jbtcd\Holidays\Helper\General\FirstChristmasDayHelper;
use jbtcd\Holidays\Helper\General\EasterMondayHelper;
use jbtcd\Holidays\Helper\General\FeastOfCorpusChristiHelper;
use jbtcd\Holidays\Helper\General\GoodFridayHelper;
use jbtcd\Holidays\Helper\General\LabourDayHelper;
use jbtcd\Holidays\Helper\General\NewYearHelper;
use jbtcd\Holidays\Helper\General\PentecostMondayHelper;

/**
 * @codeCoverageIgnore
 */
class Germany extends AbstractCountry
{
    public const ISO3 = 'DEU';

    public function createList(): void
    {
        $this->holidays = [
            NewYearHelper::getDate($this->getYear()),
            GoodFridayHelper::getDate($this->getYear()),
            EasterMondayHelper::getDate($this->getYear()),
            LabourDayHelper::getDate($this->getYear()),
            FeastOfCorpusChristiHelper::getDate($this->getYear()),
            PentecostMondayHelper::getDate($this->getYear()),
            NationalDayHelper::getDate($this->getYear()),
            FirstChristmasDayHelper::getDate($this->getYear()),
            SecondChristmasDayHelper::getDate($this->getYear()),
        ];
    }
}
