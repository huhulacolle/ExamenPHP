<?php

require_once("autoload.php");

$ticket = new Ticket("RGBY17032012 - Walles-France", 9000);
$freshItem = new FreshItem("item1", 100, 9999, "12/12/2020");

$payable = new Payable($ticket);
$payable2 = new Payable($freshItem);

// echo $payable->cost();

$invoice = new Invoice();

$invoice->add($payable);
$invoice->add($payable2);

echo $invoice->totalAmount();
echo "\n";
echo $invoice->totalTax();