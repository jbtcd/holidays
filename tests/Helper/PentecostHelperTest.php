<?php declare(strict_types = 1);

namespace jbtcd\HolidaysTest\Helper;

use jbtcd\Holidays\Helper\PentecostHelper;
use PHPUnit\Framework\TestCase;

class PentecostHelperTest extends TestCase
{
    public function testGetDate(): void
    {
        $this->assertEquals(new \DateTime('2021-05-24'), PentecostHelper::getDate(2021));
    }
}
