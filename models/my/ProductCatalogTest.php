<?php

use PHPUnit\Framework\TestCase;
use app\models\my\ProductCatalog;
use app\models\my\ProductDescription;

final class ProductCatalogTest extends TestCase {

    public function testProductCatalog() {

        $productCatalog = new ProductCatalog();
        $id1 = 100;
        $price = 3;
        $desc = new ProductDescription();
        $desc->ProductDescription($id1, $price, 'товар 1');
        $this->assertEquals($productCatalog->getProductDescription($id1), $desc);
    }

}
