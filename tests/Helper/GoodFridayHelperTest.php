<?php declare(strict_types = 1);

namespace jbtcd\HolidaysTest\Helper;

use jbtcd\Holidays\Helper\GoodFridayHelper;
use PHPUnit\Framework\TestCase;

class GoodFridayHelperTest extends TestCase
{
    /**
     * @covers \jbtcd\Holidays\Helper\GoodFridayHelper::getDate
     * @covers \jbtcd\Holidays\Helper\EasterSundayHelper::getDate
     */
    public function testGetDate(): void
    {
        $this->assertEquals(new \DateTime('2021-04-02'), GoodFridayHelper::getDate(2021));
    }
}
