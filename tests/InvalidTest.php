<?php

namespace Eberkund\Range\Tests;

use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

class SinglesTest extends TestCase
{
    public function setUp()
    {
        $this->expectException(InvalidArgumentException::class);
    }

    /** @test */
    public function number_followed_by_nonnumber()
    {
        get_range('4r');
    }

    /** @test */
    public function nonnumber()
    {
        get_range('<');
    }

    /** @test */
    public function incorrect_range_input()
    {
        get_range('1-2s');
    }
}
