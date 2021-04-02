<?php

namespace jbtcd\Holidays\Helper\General;

use jbtcd\Holidays\Helper\HelperInterface;

class AscensionOfJesusHelper implements HelperInterface
{
    public static function getDate(int $year): \DateTime
    {
        $easterSunday = EasterSundayHelper::getDate($year);

        return $easterSunday->modify('+39 days');
    }
}
