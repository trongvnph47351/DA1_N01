<?php
   
    class homeController{
        public $homeModel;
        public function __construct(){
            $this->homeModel = new homeModel();
        }

        public function home(){
            $sanpham = $this->homeModel->allSanpham();
            require_once 'views/clients/home.php';
        }
        function products(){
            require_once 'views/clients/products.php';
        }
        function category(){
            require_once 'views/clients/category.php';
        }
        function news(){
            require_once 'views/clients/news.php';
        }
        function contact(){
            require_once 'views/clients/contact.php';
        }
        function detailproduct(){
            require_once 'views/clients/detailproduct.php';
        }
        function detailNew(){
            require_once 'views/clients/detailnew.php';
        }

        function cart(){
            require_once 'views/clients/cart.php';
        }
        function checkout(){
            require 'views/clients/checkout.php';
        }
        function order(){
            require_once 'views/clients/order.php';
        }
        function wishlist(){
            require_once 'views/clients/wishlist.php';
        }
        function myaccount(){
            require_once 'views/clients/my-account.php';
        }
    }
?>