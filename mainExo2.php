<?php

require_once("autoload.php");

$test = new ShoppingCart();

try {
  $item1 = new Item("item1", 100, 9999);
} catch (Exception $e) {
  echo $e->getMessage();
}

try {
  $item2 = new Item("item2", 100, 9999);
} catch (Exception $e) {
  echo $e->getMessage();
}

$test2 = new ShoppingCart();

try {
  $item3 = new Item("item3", 100, 9999);
} catch (Exception $e) {
  echo $e->getMessage();
}

$test->additem($item1);

$test->additem($item2);

$test2->additem($item3);

echo $test->toString();