<?php

require_once("autoload.php");

$test = new Payable("RGBY17032012 - Walles-France", 9000);

echo $test->label();