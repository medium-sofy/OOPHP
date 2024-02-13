<?php
function dd($value){
  var_dump($value);
  die();
}
function pf($description, $value = null){
  print($description . $value . PHP_EOL);
}