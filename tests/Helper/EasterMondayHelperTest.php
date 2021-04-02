<?php declare(strict_types = 1);

namespace jbtcd\HolidaysTest\Helper;

use jbtcd\Holidays\Helper\EasterMondayHelper;
use jbtcd\Holidays\Helper\EasterSundayHelper;
use PHPUnit\Framework\TestCase;

class EasterMondayHelperTest extends TestCase
{
    /**
     * @covers \jbtcd\Holidays\Helper\EasterMondayHelper::getDate
     * @covers \jbtcd\Holidays\Helper\EasterSundayHelper::getDate
     */
    public function testGetDate(): void
    {
        $this->assertEquals(new \DateTime('2021-04-05'), EasterMondayHelper::getDate(2021));
    }
}
