<?php

require_once("autoload.php");

$Item = new Item("corn flakes", 500, 10000);
echo $Item->getPrice(); // affiche: 500
echo "\n";
echo $Item->getName(); // affiche: corn flakes
echo "\n";
// On souhaite que lorsque l'on affiche un article avec var_dump (), le nom de l'article
// s'affiche suivi de deux points (":"), d'un espace et de son prix en euros, où les
// centimes sont précédés d'un point ('.'), le tout suivi d'un espace et du symbole '€'. Par
// exemple:
$item = new Item("corn flakes", 500, 10000);
echo $item->getName() . " " . $item->getPrice() . " €"; // affiche: corn flakes: 5.00 €
echo "\n";
$chewingGum = new Item("chewing gum",403, 10000);
echo $chewingGum->getName() . " " . $chewingGum->getPrice() . " €"; // affiche: chewing gum: 4.03 €
