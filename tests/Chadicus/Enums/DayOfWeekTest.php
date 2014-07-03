<?php
namespace Chadicus\Enums;

/**
 * Unit tests for the Chadicus\Enums\DayOfWeek class.
 *
 * @coversDefaultClass \Chadicus\Enums\DayOfWeek
 * @covers ::<private>
 */
final class DayOfWeekTests extends \PHPUnit_Framework_TestCase
{
    /**
     * Verify basic behavior of __callStatic.
     *
     * @test
     * @covers ::__callStatic
     * @covers ::__toString
     *
     * @return void
     */
    public function basicUse()
    {
        $this->assertSame(DayOfWeek::WEDNESDAY, (string)DayOfWeek::Wednesday());
    }

    /**
     * Verify exception is thrown if __callStatic is invoked with an invalid value.
     *
     * @test
     * @covers ::__callStatic
     * @expectedException \UnexpectedValueException
     * @expectedExceptionMessage 'Invalid' is not a valid Chadicus\Enums\DayOfWeek
     *
     * @return void
     */
    public function badConstant()
    {
        DayOfWeek::Invalid();
    }
}