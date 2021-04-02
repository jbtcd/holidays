<?php declare(strict_types = 1);

namespace jbtcd\HolidaysTest\Helper;

use jbtcd\Holidays\Helper\General\PentecostMondayHelper;
use PHPUnit\Framework\TestCase;

class PentecostHelperTest extends TestCase
{
    public function testGetDate(): void
    {
        $this->assertEquals(new \DateTime('2021-05-24'), PentecostMondayHelper::getDate(2021));
    }
}
