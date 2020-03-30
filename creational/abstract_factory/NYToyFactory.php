<?php


class NYToyFactory implements ToyFactory
{
    private $location = "New York";

    public function makeMaze()
    {
        return new Toys\NYMazeToy();
    }

    public function makePuzzle()
    {
        return new Toys\NYPuzzleToy();
    }
}