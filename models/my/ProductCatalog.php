<?php

namespace app\models\my;

use app\models\my\ProductDescription;

class ProductCatalog {

    private $descriptions;

    public function __constructor() {
        $this->descriptions= new HashMap('integer', 'ProductDescription');
        $this->productCatalog();
    }

    public function productCatalog() {
       $id1=100;
       $id2=200;
       $price=3;
       
    }

    public function getProductDescription($id) {
        return $this->descriptions->index($id);
    }

}
