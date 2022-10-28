<?php 

class FreshItem extends Item {

  private $bestBeforeDate;
  private $Tax;

  public function __construct($Name, $Price, $Weight, $bestBeforeDate) {
    parent::__construct($Name, $Price, $Weight);
    $this->bestBeforeDate = $bestBeforeDate;
    $this->Tax = $this->getTax();
    for ($i=0; $i < $Weight; $i++) { 
      $this->Tax--;
    }
  }

}