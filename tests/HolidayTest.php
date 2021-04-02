<?php

namespace jbtcd\HolidaysTest;

use jbtcd\Holidays\Holiday;
use PHPUnit\Framework\TestCase;

class HolidayTest extends TestCase
{
    public function testIsHolidayFunction(): void
    {
        $holiday = new Holiday('DEU', 2021);

        $this->assertTrue($holiday->isHoliday(new \DateTime('2021-01-01')));
    }

    public function testIsHolidayListReturned(): void
    {
        $holiday = new Holiday('DEU', 2021);

        $this->assertIsArray($holiday->getHolidays());
    }

    public function testCountryIsSupported(): void
    {
        $this->assertTrue(Holiday::isCountrySupported('DEU'));
    }

    public function testDefaultYearIsCurrentYear(): void
    {
        $holiday = new Holiday('DEU');

        $this->assertEquals(date('Y'), $holiday->getSelectedYear());
    }

    public function testYearCanBeSet(): void
    {
        $holiday = new Holiday('DEU', 2025);

        $this->assertEquals(2025, $holiday->getSelectedYear());
    }
}
