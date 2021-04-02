<?php

namespace jbtcd\Holidays\Helper\General;

use jbtcd\Holidays\Helper\HelperInterface;

class FeastOfCorpusChristiHelper implements HelperInterface
{
    public static function getDate(int $year): \DateTime
    {
        $easterSunday = EasterSundayHelper::getDate($year);

        return $easterSunday->modify('+60 days');
    }
}
