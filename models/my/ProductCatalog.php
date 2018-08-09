<?php

namespace app\models\my;

use app\models\my\ProductDescription;

class ProductCatalog {

    private $descriptions;

    public function __constructor() {
        $this->descriptions = new HashMap('integer', 'ProductDescription');
        $this->productCatalog();
    }

    public function productCatalog() {
        $id1 = 100;
        $id2 = 200;
        $price = 3;
        $desc1 = new ProductDescription();
        $desc1->ProductDescription($id1, $price, 'товар 1');
        $this->descriptions->set($id1, $desc1);
        $desc2 = new ProductDescription();
        $desc2->ProductDescription($id2, $price, 'товар 1');
        $this->descriptions->set($id2, $desc2);
    }

    public function getProductDescription($id) {
        return $this->descriptions->each(function($value, $key, $thisMap) {
                    if ($value == $id) {
                        return $key;
                    } else {
                        return $nil = 0;
                    }
                });
    }

}
