<?php
    require_once 'commons/function.php';
    require_once 'controllers/homeController.php';
    require_once 'models/homeModel.php';
mmmm
    $act = $_GET['act']??'/';
    match ($act){
        '/' => (new homeController())->home(),
        'products' => (new homeController())->products(),
        'category' => (new homeController())->category(),
        'news' => (new homeController())->news(),
        'contact' => (new homeController())->contact(),
        'detailproduct' => (new homeController())->detailproduct(),
        'detailnew' => (new homeController())->detailnew(),
        'cart' => (new homeController())->cart(),
        'checkout' => (new homeController())->checkout(),
        'order' => (new homeController())->order(),
        'wishlist' => (new homeController())->wishlist()
    }
?>