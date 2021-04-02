<?php

namespace jbtcd\Holidays\Helper;

interface HelperInterface
{
    public static function getDate(int $year): \DateTime;
}
