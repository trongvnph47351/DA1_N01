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
        public function dangky($ten_dang_nhap,$mat_khau,$so_dien_thoai,$email,$dia_chi,$ho_ten){
            $sql= "INSERT INTO tai_khoan ( ten_dang_nhap ,  mat_khau ,   so_dien_thoai ,  email ,  dia_chi ,ho_ten ) 
            VALUES (:ten_dang_nhap, :mat_khau, :so_dien_thoai,:email  , :dia_chi,:ho_ten)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':ten_dang_nhap',$ten_dang_nhap);
            $stmt->bindParam(':mat_khau',$mat_khau);
            $stmt->bindParam(':so_dien_thoai',$so_dien_thoai);
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':dia_chi',$dia_chi);
            $stmt->bindParam(':ho_ten',$ho_ten);
            
            $stmt->execute();
            return true;
        }
        // check đăng nhập
        public function checkEmail($email, $mat_khau){
            $sql = "SELECT * FROM tai_khoan WHERE email = :email AND mat_khau=:mat_khau";
            
        }
    }
?>