<?php


class timeIterator implements IteratorAggregate
{
    public function __construct(int $time)
    {
        $this->weekAgo = $time - 604800;
        $this->yesterday = $time - 86400;
        $this->now = $time;
        $this->tomorrow = $time + 86400;
        $this->nextWeek = $time + 604800;
    }


    /**
     * Retrieve an external iterator
     * @link https://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator()
    {
        return new ArrayIterator($this);
    }
}


$time = new timeIterator(time());
foreach ($time as $key => $value) {
    var_dump($key, $value);
    echo "n";
}