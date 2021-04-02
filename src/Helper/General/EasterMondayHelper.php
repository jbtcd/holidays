<?php declare(strict_types = 1);

namespace jbtcd\Holidays\Helper\General;

use jbtcd\Holidays\Helper\HelperInterface;

class EasterMondayHelper implements HelperInterface
{
    public static function getDate(int $year): \DateTime
    {
        $easterSunday = EasterSundayHelper::getDate($year);

        return $easterSunday->modify('+1 days');
    }
}
