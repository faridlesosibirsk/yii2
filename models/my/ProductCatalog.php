<?php

namespace app\models\my;

use app\models\my\ProductDescription;

class ProductCatalog {

    private $descriptions;

    public function __constructor() {
        $this->descriptions= new HashMap('integer', 'ProductDescription');
    }

    public function productCatalog() {
        
    }

    public function getProductDescription() {
        
    }

}
