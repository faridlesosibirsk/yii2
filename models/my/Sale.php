<?php

namespace app\models\my;

use app\models\my\SalesLineItem;
use app\models\my\Payment;
use app\models\my\ProductDescription;

require_once '../../models/my/Payment.php';

class Sale {

    private $lineItems;
    private $date;
    private $complete;
    private $payment;

    public function __constructor() {
        $this->lineItems = array();
        $this->complete = false;
        //$this->payment = new Payment();
    }

    public function getBalance() {
        return $this->payment->getAmount() - $this->getTotal();
    }

    public function becomeComplete() {
        $this->complete = true;
    }

    public function isComplete() {
        return $this->complete;
    }

    public function makeLineItem($desc, $quantity) {
        $saleLineItem = new SalesLineItem();
        $saleLineItem->sileLineItem($desc, $quantity);
        $this->lineItems = $this->lineItems + array($saleLineItem);
    }

    public function getTotal() {
        $total = 0;
        $subtotal = 0;
        /* foreach ($this->lineItems as $salesLineItems) {
          $subTotal = $salesLineItems->getSubTotal();
          $total = $total + $subTotal;
          } */
        return $total;
    }

    public function makePayment($cachTendered) {
        $this->payment = new Payment();
        $this->payment->Payment($cachTendered);
    }

}