<?php

namespace app\models\my;

use app\models\my\ProductDescription;

class SalesLineItem {

    private $quantity;
    private $description;
    
    public function __constructor() {
        $this->descriptions = new ProductDescription;
        $this->quantity=0;
    }

    public function SalesLineItem($desc, $quantity) {
        $this->quantity=$quantity;
        $this->description=$desc;
    }

    public function getSubTotal() {
        return $this->description->getPrice()*$this->quantity;
    }

}
