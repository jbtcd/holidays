<?php declare(strict_types = 1);

namespace jbtcd\HolidaysTest\Configuration;

use jbtcd\Holidays\Configuration\Configuration;
use jbtcd\Holidays\Countries\Germany;
use jbtcd\Holidays\Exception\CountryNotSupportedException;
use PHPUnit\Framework\TestCase;

class ConfigurationTest extends TestCase
{
    public function testIfCountryIsAvailable(): void
    {
        $this->assertTrue(Configuration::isCountrySupported('DEU'));
    }

    public function testIfCountryIsNotAvailable(): void
    {
        $this->assertFalse(Configuration::isCountrySupported('USA'));
    }

    public function testIfCountryReturnsCorrectClass(): void
    {
        $this->assertEquals((new Germany()), Configuration::getCountryClass('DEU'));
    }

    public function testForCountryNotSupportedException(): void
    {
        $this->expectException(CountryNotSupportedException::class);

        Configuration::getCountryClass('USA');
    }
}
