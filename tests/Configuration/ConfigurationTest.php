<?php declare(strict_types = 1);

namespace jbtcd\HolidaysTest\Configuration;

use jbtcd\Holidays\Configuration\Configuration;
use jbtcd\Holidays\Countries\Germany;
use jbtcd\Holidays\Exception\CountryNotSupportedException;
use PHPUnit\Framework\TestCase;

class ConfigurationTest extends TestCase
{
    /**
     * @covers \jbtcd\Holidays\Configuration\Configuration::isCountrySupported
     */
    public function testIfCountryIsAvailable(): void
    {
        $this->assertTrue(Configuration::isCountrySupported('DEU'));
    }

    /**
     * @covers \jbtcd\Holidays\Configuration\Configuration::isCountrySupported
     */
    public function testIfCountryIsNotAvailable(): void
    {
        $this->assertFalse(Configuration::isCountrySupported('USA'));
    }

    /**
     * @covers \jbtcd\Holidays\Configuration\Configuration::getCountryClass
     * @covers \jbtcd\Holidays\Configuration\Configuration::isCountrySupported
     */
    public function testIfCountryReturnsCorrectClass(): void
    {
        $this->assertEquals((new Germany()), Configuration::getCountryClass('DEU'));
    }

    /**
     * @covers \jbtcd\Holidays\Configuration\Configuration::getCountryClass
     * @covers \jbtcd\Holidays\Configuration\Configuration::isCountrySupported
     */
    public function testForCountryNotSupportedException(): void
    {
        $this->expectException(CountryNotSupportedException::class);

        Configuration::getCountryClass('USA');
    }
}
