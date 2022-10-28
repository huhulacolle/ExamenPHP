<?php

require_once("autoload.php");

$ticket = new Ticket("RGBY17032012 - Walles-France", 9000);

$payable = new Payable($ticket);

echo $payable->label();
echo "\n";
echo $payable->cost();
echo "\n";
echo $payable->taxRatePerTenThousand();