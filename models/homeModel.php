<?php
    class homeModel{
        public $conn;
        function __construct(){
            $this->conn = connectDB();
        }
        public function allSanpham(){
            $sql = "SELECT *, danh_muc.ten_danh_muc, san_pham.id
            FROM san_pham
            JOIN danh_muc ON san_pham.id_danh_muc = danh_muc.id ";
            $stmt = $this->conn->prepare($sql);
            $stmt-> execute();
            return $stmt-> fetchAll();
        }
    }
?>