<?php

namespace jbtcd\HolidaysTest\Countries;

use jbtcd\Holidays\Countries\AbstractCountry;
use jbtcd\Holidays\Countries\Germany;
use jbtcd\Holidays\Exception\DateIsNotInSelectedYearException;
use PHPUnit\Framework\TestCase;

class CountryTest extends TestCase
{
    /**
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::isHoliday
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::getYear
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::setYear
     * @covers \jbtcd\Holidays\Helper\EasterSundayHelper::getDate
     * @covers \jbtcd\Holidays\Helper\PentecostHelper::getDate
     * @covers \jbtcd\Holidays\Helper\GoodFridayHelper::getDate
     */
    public function testNotSelectedYearException(): void
    {
        $this->expectException(DateIsNotInSelectedYearException::class);

        $country = $this->prepareCountry();

        $country->isHoliday(new \DateTime('2022-01-01'));
    }

    /**
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::isHoliday
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::getYear
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::setYear
     * @covers \jbtcd\Holidays\Helper\EasterSundayHelper::getDate
     * @covers \jbtcd\Holidays\Helper\PentecostHelper::getDate
     * @covers \jbtcd\Holidays\Helper\GoodFridayHelper::getDate
     */
    public function testIsNoHoliday(): void
    {
        $country = $this->prepareCountry();

        $this->assertFalse($country->isHoliday(new \DateTime('2021-01-02')));
    }

    /**
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::isHoliday
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::getYear
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::setYear
     * @covers \jbtcd\Holidays\Helper\EasterSundayHelper::getDate
     * @covers \jbtcd\Holidays\Helper\PentecostHelper::getDate
     * @covers \jbtcd\Holidays\Helper\GoodFridayHelper::getDate
     */
    public function testIsHoliday(): void
    {
        $country = $this->prepareCountry();

        $this->assertTrue($country->isHoliday(new \DateTime('2021-01-01')));
    }

    /**
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::getHolidays
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::getYear
     * @covers \jbtcd\Holidays\Countries\AbstractCountry::setYear
     * @covers \jbtcd\Holidays\Helper\EasterSundayHelper::getDate
     * @covers \jbtcd\Holidays\Helper\PentecostHelper::getDate
     * @covers \jbtcd\Holidays\Helper\GoodFridayHelper::getDate
     */
    public function testHolidayList(): void
    {
        $country = $this->prepareCountry();

        $this->assertIsArray($country->getHolidays());
    }

    private function prepareCountry(): AbstractCountry
    {
        $country = new Germany();
        $country->setYear(2021);
        $country->createList();

        return $country;
    }
}
