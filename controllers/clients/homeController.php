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
             public function formlogin()  {
            require_once 'views/clients/login.php';
            
        }

        public function dangky()  {
            if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST)){
                $ten_dang_nhap=$_POST['ten_dang_nhap'];
                $so_dien_thoai=$_POST['so_dien_thoai'];
                $dia_chi=$_POST['dia_chi'];
                $email=$_POST['email'];
                $mat_khau=$_POST['pass'];
                $ho_ten=$_POST['ho_ten'];
                $newpass=$_POST['newpass'];
                
                $tai_khoan= $this->homeModel->dangky($ten_dang_nhap,$mat_khau,$so_dien_thoai,$email, $dia_chi,$ho_ten);
            if(!empty($newpass)&& !empty($mat_khau)&& $newpass === $mat_khau){
               
            //    echo"<script> alert('ĐĂNG KÝ THÀNH CÔNG'); </script>";
            
                header('Location:'.__DIR__. '?act=login');
               
             
                
            }else{
                echo"<script> alert('Đăng ký không thành công'); </script>";
            }
            }
            require_once 'views/clients/login.php';
        }
    }
?>