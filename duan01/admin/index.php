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
        default:
            # code...
            break;
    }

    
}
?>