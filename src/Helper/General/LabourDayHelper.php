<?php declare(strict_types = 1);

namespace jbtcd\Holidays\Helper\General;

use jbtcd\Holidays\Helper\HelperInterface;

class LabourDayHelper implements HelperInterface
{
    public static function getDate(int $year): \DateTime
    {
        return new \DateTime($year . '-05-01');
    }
}
