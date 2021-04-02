<?php declare(strict_types = 1);

namespace jbtcd\Holidays\Helper;

class EasterMondayHelper
{
    public static function getDate(int $year): \DateTime
    {
        $easterSunday = EasterSundayHelper::getDate($year);

        return $easterSunday->modify('+1 days');
    }
}
