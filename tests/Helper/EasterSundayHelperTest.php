<?php declare(strict_types = 1);

namespace jbtcd\HolidaysTest\Helper;

use jbtcd\Holidays\Helper\EasterSundayHelper;
use PHPUnit\Framework\TestCase;

class EasterSundayHelperTest extends TestCase
{
    /**
     * @covers \jbtcd\Holidays\Helper\EasterSundayHelper::getDate
     */
    public function testGetDate(): void
    {
        $this->assertEquals(new \DateTime('2021-04-04'), EasterSundayHelper::getDate());
    }
}
