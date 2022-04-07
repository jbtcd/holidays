<?php

declare(strict_types = 1);

/**
 * (c) Jonah Böther <mail@jbtcd.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace jbtcd\HolidaysTest\Holidays;

use DateTime;
use jbtcd\Holidays\Holidays\EasterSunday;
use PHPUnit\Framework\TestCase;

/**
 * Class EasterSundayTest
 *
 * @author Jonah Böther <mail@jbtcd.me>
 */
class EasterSundayTest extends TestCase
{
    public function easterSundayDataProvider(): array
    {
        return [
            '2020' => [
                'year' => 2020,
                'expectedResult' => new DateTime('2020-04-12'),
            ],
            '2030' => [
                'year' => 2030,
                'expectedResult' => new DateTime('2030-04-21'),
            ],
            '2040' => [
                'year' => 2040,
                'expectedResult' => new DateTime('2040-04-01'),
            ],
            '2050' => [
                'year' => 2050,
                'expectedResult' => new DateTime('2050-04-10'),
            ],
        ];
    }

    /**
     * @param int $year
     * @param DateTime $expectedResult
     *
     * @dataProvider easterSundayDataProvider
     */
    public function testIfEasterSundayCalculationIsCorrect(int $year, DateTime $expectedResult): void
    {
        $dateWithYear = new DateTime($year . '-01-01');

        $easterSunday = new EasterSunday();

        self::assertEquals($expectedResult, $easterSunday->getDateOfHoliday($dateWithYear));
    }
}
