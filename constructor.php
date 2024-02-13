<?php
declare(strict_types=1);
function dd($value){
  var_dump($value);
  die();
}
function pf($description, $value = null){
  print($description . $value . PHP_EOL);
}

class Product 
{
  
public function __construct(public string $name = 'Soap' , public int $price = 13)
{
  
}
  public function currency($divisor = 10, $currencySymbol = '$')
  {
    return $currencySymbol .= $this->price / $divisor;
  }
  public function price()
  {
    return $this;
  }
}

$product = new Product('soap', 33);
dd($product);
print("The product name is {$product->name}, and price is {$product->price}" . PHP_EOL);