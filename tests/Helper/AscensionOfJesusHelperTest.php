<?php

namespace jbtcd\HolidaysTest\Helper;

use jbtcd\Holidays\Helper\General\AscensionOfJesusHelper;
use PHPUnit\Framework\TestCase;

class AscensionOfJesusHelperTest extends TestCase
{
    public function testGetDate(): void
    {
        $this->assertEquals(new \DateTime('2021-05-13'), AscensionOfJesusHelper::getDate(2021));
    }
}
