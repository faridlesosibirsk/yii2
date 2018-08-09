<?php

use PHPUnit\Framework\TestCase;
use app\models\my\Payment;

final class PaymentTest extends TestCase {

    public function testPayment() {

        $pay = new Payment();
        $cashTendered=10;
        $pay->Payment($cashTendered);
        $this->assertEquals($cashTendered, $pay->getAmount());
    }

}
