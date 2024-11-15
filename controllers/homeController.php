<?php
    require_once 'models/homeModel.php';
    class homeController{
        public $homeModel;
        function __construct(){
            $this->homeModel = new homeModel();
        }

        function home(){
            require_once 'views/home.php';
        }
        function products(){
            require_once 'views/products.php';
        }
        function category(){
            require_once 'views/category.php';
        }
        function news(){
            require_once 'views/news.php';
        }
        function contact(){
            require_once 'views/contact.php';
        }
        function detailproduct(){
            require_once 'views/detailproduct.php';
        }
        function detailNew(){
            require_once 'views/detailnew.php';
        }

        function cart(){
            require_once 'views/cart.php';
        }
        function checkout(){
            require 'views/checkout.php';
        }
        function order(){
            require_once 'views/order.php';
        }
        function wishlist(){
            require_once 'views/wishlist.php';
        }
    }
?>