<?php

class ProductController extends BaseController {
    private ProductModel $productModel;
    public function __construct()
    {
        $this->loadModel("ProductModel");
        $this->productModel = new ProductModel;
    }
    public function getAll() {
        $data = $this->productModel->getAllProduct();
        return json_encode($data);
    }

    public function show() {
        $this->productModel->findById(1);
        return $this->view("Product/Show");
    }
}