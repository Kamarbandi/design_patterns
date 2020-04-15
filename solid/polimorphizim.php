<?php


abstract class Publication
{
    abstract public function doPrint();
}

class News extends Publication
{

    public function doPrint()
    {
        echo '<h4>News</h4>';
    }
}

class Announcement extends Publication
{

    public function doPrint()
    {
        echo '<h4>Announcement</h4>';
    }
}


class Article extends Publication
{

    public function doPrint()
    {
        echo '<h4>Article </h4>';
    }

}


$publications[] = new News();
$publications[] = new Announcement();
$publications[] = new Article();

foreach ($publications as $publication) {
    $publication->doPrint();
}