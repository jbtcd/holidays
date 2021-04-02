<?php

namespace jbtcd\HolidaysTest;

use jbtcd\Holidays\Holiday;
use PHPUnit\Framework\TestCase;

class HolidayTest extends TestCase
{
    /**
     * @covers \jbtcd\Holidays\Holiday::__construct
     * @covers \jbtcd\Holidays\Holiday::isHoliday
     * @covers \jbtcd\Holidays\Configuration\Configuration::getCountryClass
     * @covers \jbtcd\Holidays\Configuration\Configuration::isCountrySupported
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::isHoliday
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::getYear
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::setYear
     * @covers \jbtcd\Holidays\Helper\EasterSundayHelper::getDate
     * @covers \jbtcd\Holidays\Helper\PentecostHelper::getDate
     * @covers \jbtcd\Holidays\Helper\GoodFridayHelper::getDate
     */
    public function testIsHolidayFunction(): void
    {
        $holiday = new Holiday('DEU', 2021);

        $this->assertTrue($holiday->isHoliday(new \DateTime('2021-01-01')));
    }

    /**
     * @covers \jbtcd\Holidays\Holiday::__construct
     * @covers \jbtcd\Holidays\Holiday::getHolidays
     * @covers \jbtcd\Holidays\Configuration\Configuration::getCountryClass
     * @covers \jbtcd\Holidays\Configuration\Configuration::isCountrySupported
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::getHolidays
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::getYear
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::setYear
     * @covers \jbtcd\Holidays\Helper\EasterSundayHelper::getDate
     * @covers \jbtcd\Holidays\Helper\PentecostHelper::getDate
     * @covers \jbtcd\Holidays\Helper\GoodFridayHelper::getDate
     */
    public function testIsHolidayListReturned(): void
    {
        $holiday = new Holiday('DEU', 2021);

        $this->assertIsArray($holiday->getHolidays());
    }

    /**
     * @covers \jbtcd\Holidays\Holiday::isCountrySupported
     * @covers \jbtcd\Holidays\Configuration\Configuration::isCountrySupported
     */
    public function testCountryIsSupported(): void
    {
        $this->assertTrue(Holiday::isCountrySupported('DEU'));
    }

    /**
     * @covers \jbtcd\Holidays\Holiday::__construct
     * @covers \jbtcd\Holidays\Holiday::getSelectedYear
     * @covers \jbtcd\Holidays\Configuration\Configuration::getCountryClass
     * @covers \jbtcd\Holidays\Configuration\Configuration::isCountrySupported
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::getHolidays
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::getYear
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::setYear
     * @covers \jbtcd\Holidays\Helper\EasterSundayHelper::getDate
     * @covers \jbtcd\Holidays\Helper\PentecostHelper::getDate
     * @covers \jbtcd\Holidays\Helper\GoodFridayHelper::getDate
     */
    public function testDefaultYearIsCurrentYear(): void
    {
        $holiday = new Holiday('DEU');

        $this->assertEquals(date('Y'), $holiday->getSelectedYear());
    }

    /**
     * @covers \jbtcd\Holidays\Holiday::__construct
     * @covers \jbtcd\Holidays\Holiday::getSelectedYear
     * @covers \jbtcd\Holidays\Configuration\Configuration::getCountryClass
     * @covers \jbtcd\Holidays\Configuration\Configuration::isCountrySupported
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::getHolidays
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::getYear
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::setYear
     * @covers \jbtcd\Holidays\Helper\EasterSundayHelper::getDate
     * @covers \jbtcd\Holidays\Helper\PentecostHelper::getDate
     * @covers \jbtcd\Holidays\Helper\GoodFridayHelper::getDate
     */
    public function testYearCanBeSet(): void
    {
        $holiday = new Holiday('DEU', 2025);

        $this->assertEquals(2025, $holiday->getSelectedYear());
    }
}
