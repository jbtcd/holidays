<?php

declare(strict_types = 1);

/**
 * (c) Jonah Böther <mail@jbtcd.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace jbtcd\Holidays\Country;

use jbtcd\Holidays\Helper\Country\Germany\NationalDayHelper;

/**
 * Class Germany
 *
 * @author Jonah Böther <mail@jbtcd.me>
 */
class Germany extends AbstractCountry
{
    public const ISO3 = 'DEU';

    public function registerHelper(): void
    {
        $this->helper = [
            new NationalDayHelper(),
        ];
    }
}
