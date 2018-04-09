<?php

namespace Eberkund\Range\Tests;

use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

class RangeTest extends TestCase
{
    /** @test */
    public function range()
    {
        $this->assertEquals([1, 2, 3], get_range('1-3'));
    }

    /** @test */
    public function number()
    {
        $this->assertEquals([41], get_range('41'));
    }

    /** @test */
    public function white_space_after_comma()
    {
        $this->assertEquals([1, 2, 3], get_range('1, 2, 3'));
    }
}
