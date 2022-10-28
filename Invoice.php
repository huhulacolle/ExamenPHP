<?php 

class Invoice {


  private $payableArray = array(); 

  public function add(Payable $p) {
    $this->payableArray[] = $p;
  }

  public function totalAmount() {
    $result = 0;
    foreach ($this->payableArray as $p) {
      $result = $result + $p->cost();
    }
    return $result;
  }

  public function totalTax() {
    $result = 0;
    foreach ($this->payableArray as $p) {
      $result = $result + $p->taxRatePerTenThousand();
    }
    return $result / count($this->payableArray);
  }

}