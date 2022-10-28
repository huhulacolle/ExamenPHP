<?php

class ShoppingCart {

  private $panier;
  private static $idInstanciation = 0;
  private $id;

  public function __construct()
  {
    ++self::$idInstanciation;
    $this->id = self::$idInstanciation;
  }
  
  public function additem(Item $item) {
    if ($item->getWeight() > 10000) {
      throw new Exception("l'article ". $item ->getName() ." dépasse les 10kg");
    }
    return $this->panier[$item->getName()] = $item;
  }

  public function removeItem(Item $item) {
    if (isset($this->panier[$item->getName()])) {
      unset($this->panier[$item->getName()]);
      return true;
    }
    return false;
    
  }

  public function itemCount() {
    return count($this->panier);
  }

  public function totalPrice() {
    $resultat = 0;
    foreach ($this->panier as $item) {
      $resultat += $item->getPrice();
    }
    return $resultat;
  }

  public function getId() {
    return $this->id;
  }

  public function toString() {
    $result = "id : " . $this->getId() . "\nnombre d'articles : ". $this->itemCount() . "\n";
    foreach ($this->panier as $item) {
      $result = $result . $item->getName() . " Prix : " . $item->getPrice() . "€ Poids : " . $item->getWeight() . "g \n";
    }
    return $result; 
  }
}