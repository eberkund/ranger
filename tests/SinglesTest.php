<?php

namespace Eberkund\Range\Tests;

use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

class SinglesTest extends TestCase
{
    /** @test */
    public function number()
    {
        $this->assertEquals([41], get_range('41'));
    }

    /** @test */
    public function number_followed_by_nonnumber()
    {
        $this->expectException(InvalidArgumentException::class);

        get_range('4r');
    }

    /** @test */
    public function nonnumber()
    {
        $this->expectException(InvalidArgumentException::class);

        get_range('<');
    }
}
