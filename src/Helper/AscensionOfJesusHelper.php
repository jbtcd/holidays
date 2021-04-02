<?php

namespace jbtcd\Holidays\Helper;

class AscensionOfJesusHelper
{
    public static function getDate(int $year): \DateTime
    {
        $easterSunday = EasterSundayHelper::getDate($year);

        return $easterSunday->modify('+39 days');
    }
}
