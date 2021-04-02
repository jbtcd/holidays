<?php

namespace jbtcd\Holidays\Helper\General;

use jbtcd\Holidays\Helper\HelperInterface;

class NewYearsEveHelper implements HelperInterface
{
    public static function getDate(int $year): \DateTime
    {
        return new \DateTime($year . '-12-31');
    }
}
