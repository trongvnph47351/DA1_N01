<?php
    require_once __DIR__ . "/../env.php";
    require_once __DIR__ . "/../commons/function.php";

    // Require Model 
    require_once __DIR__ . "/../models/Category.php";
    require_once __DIR__ . "/../models/Product.php";



    require_once __DIR__ . "/../controllers/admin/dashboardController.php";
    require_once __DIR__ . "/../controllers/admin/categoryController.php";
    require_once __DIR__ . "/../controllers/admin/productController.php"; 
    $act = $_GET['act'] ?? '/';
    match ($act) {
        '/' => (new dashboardController)->dashboard(),
        'category' => (new categoryController)->listCategory(),
        'products' => (new productController)->listProduct(),
        'insertproduct' => (new productController)->insert(),
        'insertcategory' => (new categoryController)->insert(),
        'updatecategory' => (new categoryController)->update($_GET['id']),
        'deletecategory' => (new categoryController)->deleteCategory($_GET['id']),
        'deleteproduct' => (new productController) ->deleteProduct($_GET['id'])
    }
?>
  

  