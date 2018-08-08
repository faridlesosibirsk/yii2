<?php

namespace app\models\my;

use app\models\my\ProductDescription;

class ProductCatalog {

    private $descriptions;

    public function productCatalog() {
        $id1 = 100;
        $id2 = 200;
        $price = 3;
        $desc = new ProductDescription;
        $desc->ProductDescription($id1, $price, 'товар 1');
        $this->$descriptions->put($id1, $desc);
        $desc->ProductDescription($id2, $price, 'товар 2');
        $this->$descriptions->put($id2, $desc);
    }

    public function getProductDescription($id) {
        return $this->$descriptions->getid($id);
    }

    public function __constructor() {
        $this->$descriptions = new HashMap();
        $this->productCatalog();
    }

}
