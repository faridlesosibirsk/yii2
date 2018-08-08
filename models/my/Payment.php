<?php

namespace app\models\my;

class Payment {

    private $amount = 0;

    public function Payment($cashTendered) {
        $this->$amount = $cashTendered;
    }

    public function getAmount() {
        return $this->amount;
    }

}
