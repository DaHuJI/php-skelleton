<?php

namespace Otis22\TableExport\Tests;

use Otis22\TableExport\Test;
use PHPUnit\Framework\TestCase;

class TestTest extends TestCase
{

    public function testOne()
    {
        $this->assertEquals(
            (new Test())->one(),
            1
        );
    }
    public function testTwo()
    {
        $this->assertEquals(
            (new Test())->two(),
            2
        );
    }
}