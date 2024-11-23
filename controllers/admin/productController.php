<?php
    class productController{
        public $Product;
        public function __construct(){
            $this->Product = new Product();
        }
        public function listProduct(){
            require_once PATH_ROOT . 'views/admin/sanpham/list.php';
        }
        public function insert(){
            require_once PATH_ROOT . 'views/admin/sanpham/add.php';
        }
    }
?>