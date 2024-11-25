<?php
session_start();
    require_once __DIR__ . '/env.php';
    require_once __DIR__ . '/./commons/function.php';

    require_once __DIR__ . '/./models/homeModel.php';
    require_once __DIR__ . '/./controllers/clients/homeController.php';
    

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
        'wishlist' => (new homeController())->wishlist(),
        'myaccount' => (new homeController())->myaccount(),
        'dangky' =>(new homeController())->dangky(),
    }
?>