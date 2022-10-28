<?php

class Ticket {
  private $Reference;
  private $Price;
  private $Tax = 2500;

  public function __construct($Reference, $Price)
  {
    $this->Reference = $Reference;
    $this->Price = $Price;
  }

  public function getReference() {
    return $this->Reference;
  }

  public function getPrice() {
    return $this->Price;
  }

  public function getTax() {
    return $this->Tax;
  }
}