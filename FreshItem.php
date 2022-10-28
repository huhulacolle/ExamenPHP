<?php 

class FreshItem extends Item {

  private $bestBeforeDate;

  public function __construct($Name, $Price, $Weight, $bestBeforeDate) {
    parent::__construct($Name, $Price, $Weight);
    $this->bestBeforeDate = $bestBeforeDate;
  }

}