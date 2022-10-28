<?php

class Payable extends Ticket {
  
  public function __construct($Reference, $Price)
  {
    parent::__construct($Reference, $Price);
  }

  public function label() {
    return $this->getReference();
  }

  public function cost() {
    return $this->getPrice();
  }

}