<?php

namespace jbtcd\Holidays\Helper\Country\Germany;

use jbtcd\Holidays\Helper\HelperInterface;

class NationalDayHelper implements HelperInterface
{
    public static function getDate(int $year): \DateTime
    {
        return new \DateTime($year . '-10-03');
    }
}
