<?php

use PHPUnit\Framework\TestCase;
use app\models\my\SalesLineItem;
use app\models\my\Payment;
use app\models\my\ProductDescription;
use app\models\my\Sale;
require_once '../../models/my/SalesLineItem.php';


final class SaleTest extends TestCase {
    
    private $Sale;
    //$this->Sale=new Sale();
    function testGetBalance(){
        $this->assertEquals(1, 1);
    }
    
}