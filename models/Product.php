<?php
    class Product{
        public $conn;
        public function __construct(){
            $this->conn = connectDB();
        }
      
    }
?>