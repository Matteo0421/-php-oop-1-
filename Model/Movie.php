<?php
class Movie
{
  public $title;
  public $year;
  public $director;
  

  public function __construct(string $_title, string $_year, string $_director)
  {
    $this->title = $_title;
    $this->year = $_year;
    $this->director = $_director;
  }
}