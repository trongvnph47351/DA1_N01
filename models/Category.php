<?php
    class Category{
        public $conn;
        public function __construct(){
            $this->conn = connectDB();
        }
        public function list(){
            $sql = " SELECT *from danh_muc";
            $stmt = $this->conn->prepare($sql);
            $stmt -> execute();
            return $stmt->fetchAll();
        }
    }
?>