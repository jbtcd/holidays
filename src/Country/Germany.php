<?php

declare(strict_types = 1);

/**
 * (c) Jonah Böther <mail@jbtcd.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace jbtcd\Holidays\Country;

use jbtcd\Holidays\Holidays\AscensionDay;
use jbtcd\Holidays\Holidays\BoxingDay;
use jbtcd\Holidays\Holidays\ChristmasDay;
use jbtcd\Holidays\Holidays\EasterMonday;
use jbtcd\Holidays\Holidays\GermanUnityDay;
use jbtcd\Holidays\Holidays\GoodFriday;
use jbtcd\Holidays\Holidays\LabourDay;
use jbtcd\Holidays\Holidays\NewYearsDay;
use jbtcd\Holidays\Holidays\WhitMonday;

/**
 * Class Germany
 *
 * @author Jonah Böther <mail@jbtcd.me>
 */
class Germany extends AbstractCountry
{
    public const ISO3 = 'DEU';

    /**
     * https://en.wikipedia.org/wiki/Public_holidays_in_Germany
     */
    public function registerHelper(): void
    {
        $this->holidays[] = new NewYearsDay();
        $this->holidays[] = new GoodFriday();
        $this->holidays[] = new EasterMonday();
        $this->holidays[] = new LabourDay();
        $this->holidays[] = new AscensionDay();
        $this->holidays[] = new WhitMonday();
        $this->holidays[] = new GermanUnityDay();
        $this->holidays[] = new ChristmasDay();
        $this->holidays[] = new BoxingDay();
    }
}
