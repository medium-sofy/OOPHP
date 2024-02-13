<?php
require_once 'functions.php';
require_once 'PhysicalBook.php';

$book = new PhysicalBook('Sometitle','Some Author', 33);
// dd($book);
$book->print();