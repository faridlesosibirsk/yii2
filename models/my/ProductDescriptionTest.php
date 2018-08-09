<?php

use PHPUnit\Framework\TestCase;
use app\models\my\ProductDescription;

final class ProductDescriptionTest extends TestCase {

    public function testProductDescription() {

        $productDesc = new ProductDescription();
        $id=100; 
        $price=3; 
        $description='товааар 1';
        $productDesc->ProductDescription($id, $price, $description);
        $this->assertEquals($id, $productDesc->getId());
        $this->assertEquals($price, $productDesc->getPrice());
        $this->assertEquals($description, $productDesc->getDescription());
    }

}
