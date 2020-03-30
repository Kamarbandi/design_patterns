<?php


class EBook implements Book
{
    public $title;
    public $author;
    public $contents;

    /**
     * EBook constructor.
     * @param $title
     * @param $author
     * @param $contents
     */
    public function __construct(string $title, string $author, string $contents)
    {
        $this->title = $title;
        $this->author = $author;
        $this->contents = $contents;
    }


    public function getTitle(): string
    {
        return $this->contents;
    }
    public function getAuthor(): string
    {
        return $this->author;
    }
    public function getContents(): string
    {
        return $this->contents;
    }
}