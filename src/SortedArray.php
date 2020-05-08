<?php
declare(strict_types=1);
namespace Otis22\FridayExercise;
/**
 * @template T
 *
 * @implements \Iterator<int, int>
 */
final class SortedArray implements \Iterator
{
    /**
     * @var int
     */
    private $position = 0;
    /**
     * @var array<int,int>
     */
    private $array = [];
    /**
     * SortedArray constructor.
     * @param array<int,int> $array
     */
    public function __construct(array $array)
    {
        sort($array);
        $this->array = $array;
    }
    public function rewind(): void
    {
        $this->position = 0;
    }
    public function current(): int
    {
        return $this->array[$this->position];
    }
    public function key(): int
    {
        return $this->position;
    }
    public function next(): void
    {
        ++$this->position;
    }
    public function valid(): bool
    {
        return isset($this->array[$this->position]);
    }
}