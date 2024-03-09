<?php 

class ProductModel extends BaseModel {
    public function getAllProduct() {
        return $this->all("Sneaker");
    }

    public function findById($id) {
        echo __METHOD__;
    }
}