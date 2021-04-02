<?php

namespace jbtcd\HolidaysTest\Countries;

use jbtcd\Holidays\Country\AbstractCountry;
use jbtcd\Holidays\Country\Germany;
use jbtcd\Holidays\Exception\DateIsNotInSelectedYearException;
use PHPUnit\Framework\TestCase;

class CountryTest extends TestCase
{
    public function testNotSelectedYearException(): void
    {
        $this->expectException(DateIsNotInSelectedYearException::class);

        $country = $this->prepareCountry();

        $country->isHoliday(new \DateTime('2022-01-01'));
    }

    public function testIsNoHoliday(): void
    {
        $country = $this->prepareCountry();

        $this->assertFalse($country->isHoliday(new \DateTime('2021-01-02')));
    }

    public function testIsHoliday(): void
    {
        $country = $this->prepareCountry();

        $this->assertTrue($country->isHoliday(new \DateTime('2021-01-01')));
    }

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
