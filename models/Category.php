<?php
    class Category{
        public $conn;
        public function __construct(){
            $this->conn = connectDB();
        }
        public function list(){
            $sql = "select * from danh_muc";
            return $this->conn->query($sql);
        }
        // public function delete($id){
        //     $sql = "delete from danh_muc where id = $id";
        //     $stmt = $this->conn->prepare($sql);
        //     return $stmt->execute();
        // }
    }
?>