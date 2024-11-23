<?php
session_start();
include "model/pdo.php";
include "view/header.php";
include "model/client/client.php";
$listsp = loadAll_sanpham_home();

if(!isset($_SESSION['mycart'])){
    $_SESSION['mycart'] = [];
}
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
        case 'home':
            include "view/home.php";
            break;

            case 'allsanpham':
                $listsp = loadAll_sanpham('', 0);
                include "view/xemsanpham/allsanpham.php";
                break;
                
                case 'dangky':
                    include "view/taikhoan/dangky.php";
                    break;
        default:
        
            break;
    }
}else{
    include "view/home.php";
   
}
include "view/footer.php";
?>