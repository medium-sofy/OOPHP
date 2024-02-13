<?php

class Book
{
  public $title;
  public $author;
  public $price;

  public function __construct(string $title, string $author, int $price)
{
  $this->title = $title;
  $this->author = $author;
  $this->price = $price;
}

public function getTitle()
{
  return $this->title;
}

public function getAuthor()
{
  return $this->author;
}

public function getPrice()
{
  return $this->price;
}
}

