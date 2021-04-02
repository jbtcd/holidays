<?php declare(strict_types = 1);

namespace jbtcd\HolidaysTest\Helper;

use jbtcd\Holidays\Helper\EasterMondayHelper;
use PHPUnit\Framework\TestCase;

class EasterMondayHelperTest extends TestCase
{
    public function testGetDate(): void
    {
        $this->assertEquals(new \DateTime('2021-04-05'), EasterMondayHelper::getDate(2021));
    }
}
