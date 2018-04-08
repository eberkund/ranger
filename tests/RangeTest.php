<?php

namespace Eberkund\Range\Tests;

use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

class RangeTest extends TestCase
{
    /** @test */
    public function handles_range()
    {
        $output = get_range('1-3');

        $this->assertEquals([1, 2, 3], $output);
    }

    /** @test */
    public function incorrect_range_input()
    {
        $this->expectException(InvalidArgumentException::class);

        get_range('1-2s');
    }
}
