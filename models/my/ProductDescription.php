<?php

namespace app\models\my;

class ProductDescription {

    private $id = 0;
    private $price = 0;
    private $description = '';

    public function ProductDescription($_id, $_price, $_description) {
        $this->$id=$_id;
        $this->$price=$_price;
        $this->$description=$_description;
    }

    public function getId() {
        return $this->$id;
    }

    public function getPrice() {
        return $this->$price;
    }

    public function getDescription() {
        return $this->$discription;
    }

}
