<?php
function dd($value){
  var_dump($value);
  die();
}
function pf($description,$value){
  print($description . $value . PHP_EOL);
}

class Product 
{
  public $name = 'soap';
  public $price; # cents

  public function priceAsCurrency()
  {
    return $priceAsCurrency = $this->price / 100;
  }
}

$soap = new Product;
$soap->price = 550;

$currencyPrice = $soap->priceAsCurrency();
dd($currencyPrice);
pf("The price as a currency is: ",$currencyPrice);