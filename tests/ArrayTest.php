<?php

declare(strict_types=1);

namespace Otis22\PhpSkelleton\Tests;

use Otis22\FridayExercise\MergedArray;
use Otis22\FridayExercise\SortedArray;
use Otis22\PhpSkelleton\Test;
use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    public function testSort(): void
    {
        $array = iterator_to_array((new SortedArray([2,4,3,1])));
        $this->assertEquals($array, [1,2,3,4]);
    }

    public function testMerge(): void
    {
        $array = iterator_to_array((new MergedArray([1,2], [3,4])));
        $this->assertEquals($array, [1,2,3,4]);
    }
}
