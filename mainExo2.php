<?php

require_once("autoload.php");

$test = new ShoppingCart();

try {
  $item1 = new Item("item1", 100, 10);
} catch (Exception $e) {
  echo $e->getMessage();
}

try {
  $item2 = new Item("item2", 100, 1);
} catch (Exception $e) {
  echo $e->getMessage();
}

$test->additem($item1);

$test->additem($item2);


echo $test->toString();