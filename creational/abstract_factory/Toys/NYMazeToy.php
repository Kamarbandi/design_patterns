<?php


namespace Toys;


class NYMazeToy extends MazeToy
{
    private $size;
    private $pictureName;

    public function __construct()
    {
        $this->size = 99;
        $this->pictureName = "New York Maze";
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getPictureName(): string
    {
        return $this->pictureName;
    }
}