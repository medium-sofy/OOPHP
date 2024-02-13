<?php
function dd($value){
  var_dump($value);
  die();
}
function pf($description, $value = null){
  print($description . $value . PHP_EOL);
}

class Product 
{
  public $name = 'soap';
  public $price = 100; # cents

  public function currency($divisor = 10, $currencySymbol = '$')
  {
    return $currencySymbol .= $this->price / $divisor;
  }
  public function price()
  {
    return $this;
  }
}

$product = new Product();
pf($product->price()->currency());