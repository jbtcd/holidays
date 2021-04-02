<?php

namespace jbtcd\Holidays\Helper;

class FeastOfCorpusChristiHelper
{
    public static function getDate(int $year): \DateTime
    {
        $easterSunday = EasterSundayHelper::getDate($year);

        return $easterSunday->modify('+60 days');
    }
}
