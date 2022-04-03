<?php

declare(strict_types = 1);

/**
 * (c) Jonah Böther <mail@jbtcd.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace jbtcd\Holidays\Country;

use jbtcd\Holidays\Helper\Country\Austria\NationalDayHelper;
use jbtcd\Holidays\Helper\Country\Austria\StateHolidayHelper;
use jbtcd\Holidays\Helper\General\AllSaintsDayHelper;
use jbtcd\Holidays\Helper\General\AscensionOfJesusHelper;
use jbtcd\Holidays\Helper\General\AssumptionOfMaryHelper;
use jbtcd\Holidays\Helper\General\BiblicalMagiHelper;
use jbtcd\Holidays\Helper\General\HolyNightHelper;
use jbtcd\Holidays\Helper\General\ImmaculateConceptionDayHelper;
use jbtcd\Holidays\Helper\General\SecondChristmasDayHelper;
use jbtcd\Holidays\Helper\General\FirstChristmasDayHelper;
use jbtcd\Holidays\Helper\General\EasterMondayHelper;
use jbtcd\Holidays\Helper\General\FeastOfCorpusChristiHelper;
use jbtcd\Holidays\Helper\General\NewYearHelper;
use jbtcd\Holidays\Helper\General\PentecostMondayHelper;

/**
 * Class Austria
 *
 * @author Jonah Böther <mail@jbtcd.me>
 */
class Austria extends AbstractCountry
{
    public const ISO3 = 'AUT';

    public function createList(): void
    {
        $this->holidays = [
            NewYearHelper::getDate($this->getYear()),
            BiblicalMagiHelper::getDate($this->getYear()),
            EasterMondayHelper::getDate($this->getYear()),
            StateHolidayHelper::getDate($this->getYear()),
            AscensionOfJesusHelper::getDate($this->getYear()),
            PentecostMondayHelper::getDate($this->getYear()),
            FeastOfCorpusChristiHelper::getDate($this->getYear()),
            AssumptionOfMaryHelper::getDate($this->getYear()),
            NationalDayHelper::getDate($this->getYear()),
            AllSaintsDayHelper::getDate($this->getYear()),
            ImmaculateConceptionDayHelper::getDate($this->getYear()),
            HolyNightHelper::getDate($this->getYear()),
            FirstChristmasDayHelper::getDate($this->getYear()),
            SecondChristmasDayHelper::getDate($this->getYear()),
            NewYearHelper::getDate($this->getYear()),
        ];
    }
}
