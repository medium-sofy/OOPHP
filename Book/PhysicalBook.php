<?php

require_once 'Book.php';
class PhysicalBook extends Book
{
  public $weight;
  public function getWeight()
  {
    return $this->weight;
  }
  public function print()
  {
    print "{$this->title} {$this->author} {$this->price} {$this->weight}";
  }
}