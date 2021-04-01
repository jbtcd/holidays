<?php declare(strict_types = 1);

namespace jbtcd\HolidaysTest\Configuration;

use jbtcd\Holidays\Configuration\Configuration;
use PHPUnit\Framework\TestCase;

class ConfigurationTest extends TestCase
{
    /**
     * @covers ::isCountrySupported
     */
    public function testIfCountryIsAvailable(): void
    {
        $this->assertTrue(
            Configuration::isCountrySupported('DEU')
        );
    }
}
