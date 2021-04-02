<?php declare(strict_types = 1);

namespace jbtcd\HolidaysTest\Helper;

use jbtcd\Holidays\Helper\EasterMondayHelper;
use jbtcd\Holidays\Helper\EasterSundayHelper;
use jbtcd\Holidays\Helper\PentecostHelper;
use PHPUnit\Framework\TestCase;

class PentecostHelperTest extends TestCase
{
    /**
     * @covers \jbtcd\Holidays\Helper\PentecostHelper::getDate
     * @covers \jbtcd\Holidays\Helper\EasterSundayHelper::getDate
     */
    public function testGetDate(): void
    {
        $this->assertEquals(new \DateTime('2021-05-24'), PentecostHelper::getDate(2021));
    }
}
