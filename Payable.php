<?php

class Payable {

  private $object;

  public function __construct($object)
  {
    $this->object = $object;
  }

  
  public function label() {
    return get_class($this->object);
  }

  public function cost() {
    return $this->object->getPrice();
  }

  public function taxRatePerTenThousand() {
    return $this->object->getTax() / 100;
  }

}