<?php

namespace jbtcd\HolidaysTest\Helper;

use jbtcd\Holidays\Helper\General\FeastOfCorpusChristiHelper;
use PHPUnit\Framework\TestCase;

class FeastOfCorpusChristiHelperTest extends TestCase
{
    public function testGetDate(): void
    {
        $this->assertEquals(new \DateTime('2021-06-03'), FeastOfCorpusChristiHelper::getDate(2021));
    }
}
