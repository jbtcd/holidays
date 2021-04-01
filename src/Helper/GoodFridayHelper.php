<?php declare(strict_types = 1);

namespace jbtcd\Holidays\Helper;

class GoodFridayHelper
{
    public static function getDate(): \DateTime
    {
        $easterSunday = EasterSundayHelper::getDate();

        return $easterSunday->modify('-2 days');
    }
}
