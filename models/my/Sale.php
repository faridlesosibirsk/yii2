<?php

namespace app\models\my;

use app\models\my\SalesLineItem;
use app\models\my\Payment;
use app\models\my\ProductDescription;

class Sale {

    private $lineItems;
    private $date;
    private $complete;
    private $payment;

    public function __constructor() {
        $this->lineItem=array();
        $this->complete=false;
        $this->payment=new Payment();
    }

    public function getBalance() {
        return $this->payment->getAmount()-$this->getTotal();
    }

    public function becomeComplete() {
        $this->complete=true;
    }

    public function isComplete() {
        return $this->complete;
    }

    public function makeLineItem($desc, $quantity) {
        $sileLineItem=new SalesLineItem();
        $sileLineItem->sileLineItem($desc, $quantity);
        $this->lineItem=$this->lineItem + array($sileLineItem);
    }

    public function getTotal() {
        $total=0;
        $subtotal=0;
        //foreach
        return $total;
    }

    public function makePayment($cachTendered) {
        $this->payment= new Payment();
        $this->payment->Payment($cachTendered);
    }

}
