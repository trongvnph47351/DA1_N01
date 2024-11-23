<?php
    class categoryController
    {
        public $Category;
        public function __construct(){
            $this->Category = new Category();
        }
        public function listCategory(){
            $cate = $this->Category->list();
            require_once PATH_ROOT . 'views/admin/danhmuc/list.php';
        }
        public function insert(){
            require_once PATH_ROOT . 'views/admin/danhmuc/add.php';
        }
        // public function deleteCategory($id){
        //     if($this->Category->delete($id)){
        //         header("Location:?act=category");
        //     }else{
        //         echo "Lỗi";
        //     }
        // }
    }
?>