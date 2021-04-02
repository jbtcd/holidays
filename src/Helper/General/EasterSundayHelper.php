<?php

namespace jbtcd\Holidays\Helper\General;

use jbtcd\Holidays\Helper\HelperInterface;

class EasterSundayHelper implements HelperInterface
{
    public static function getDate(int $year): \DateTime
    {
        $a = $year % 4;
        $b = $year % 7;
        $c = $year % 19;
        $d = (19 * $c + 24) % 30;
        $e = (2 * $a + 4* $b + 6 * $d + 5) % 7;
        $f = floor(($c + 11 * $d + 22 * $e) / 451);
        $g = 22 + $d + $e - 7 * $f;

        $date = ($g <= 31) ? $g . '.03.' . $year : $g - 31  . '.04.' . $year;

        return new \DateTime($date);
    }
}
