<?php
include "../model/pdo.php";
include "home.php";
include "../model/admin/danhmuc.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'home':
           
            break;
            case 'listdm':
                $list_danh_muc = loadAll_danh_muc();
                include "./danhmuc/list.php";
                break;
                case 'themdm':
                    include "danhmuc/add.php";
                    break;
                case "adddm":
                   if(isset($_POST['themmoi'])&&($_POST['themmoi'])){

                    $tendm = $_POST['tendm'];
                    $mota =$_POST['mota'];
                    $image= $_FILES['img'];

                    if (isset($image)) {
                        // thư mục chứa ảnh sau khi upload
                        $target_dir = "../img/";
                        // lấy ra tên của ảnh đẩy từ form
                        $anh = $image['name'];
                        // tạo 1 đường dẫn ảnh đầy đủ trên máy chủ
                        $target_file = $target_dir . $anh;
                        // Di chuyển ảnh đến thư mục đã tạo
                        move_uploaded_file($image['tmp_name'], $target_file);
                    }
                    insert_danh_muc($tendm, $mota, $target_file);
                   }
                //    $list_danh_muc = loadall_danh_muc();
                //    include "danhmuc/list.php";
                //    break;

                   case "xoadm":
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $id = $_GET['id'];
                        xoadm(  $id);
                        
                    }
                    $list_danh_muc = loadall_danh_muc();
                    include "danhmuc/list.php";
                    break;
                    
       
        default:
            # code...
            break;
    }

    
}
?>