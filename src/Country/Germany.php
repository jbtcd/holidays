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
        $this->helper[] = new NewYearsDay();
        $this->helper[] = new GoodFriday();
        $this->helper[] = new EasterMonday();
        $this->helper[] = new LabourDay();
        $this->helper[] = new AscensionDay();
        $this->helper[] = new WhitMonday();
        $this->helper[] = new GermanUnityDay();
        $this->helper[] = new ChristmasDay();
        $this->helper[] = new BoxingDay();
    }
}
