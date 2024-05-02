<?php
class Movie
{
  public $title;
  public $year;
  public $director;
  public $protagonist;
  

  public function __construct(string $_title, string $_year, string $_director, string $_protagonist)
  {
    $this->title = $_title;
    $this->year = $_year;
    $this->director = $_director;
    $this->protagonist = $_protagonist;
  }

  public function getTitleHero()
  {
    echo "$this->title, il protagonista è $this->protagonist";
  }
}