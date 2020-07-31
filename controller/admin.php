<?php
    include "../model/connect.php";
    include_once "../model/product.php";
    include_once "../model/brand.php";
    include_once "../model/cart.php";
    include_once "../model/type.php";
    include_once "../model/collection.php";

    // load data cho trang chủ

    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'value':
                # code...
                break;
            
            default:
                include "../view/admin/home.php";
                break;
        }
    }else{
        include "../view/admin/home.php";
    }
?>