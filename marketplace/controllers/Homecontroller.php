<?php

class HomeController extends Controller {

    public function index() {

        $productModel = $this->model("Product");

        $data["product"] = $productModel->getProduct();

        $this->view("home", $data);
    }
}