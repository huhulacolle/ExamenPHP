<?php


class Item {
  private $Name;
  private $Price;
  private $Weight;

  public function __construct($Name, $Price, $Weight)
  {
    $this->Name = $Name;
    $this->Price = $Price;
    $this->Weight = $Weight;
  }

  public function getPrice() {
    return $this->Price;
  }

  public function getName() {
    return $this->Name;
  }

  public function getWeight() {
    return $this->Weight;
  }
}

