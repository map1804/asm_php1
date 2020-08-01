<?php
    include "../model/connect.php";
    include_once "../model/product.php";
    include_once "../model/type.php";
    include_once "../model/collection.php";

    // load data cho trang chủ

    include "../view/admin/header.php";

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'qlloaisp':
                $qlloaisp = danhsachcacdanhmuc();
                include "../view/admin/qlloaisp.php";
                break;
            
            default:
                include "../view/admin/home.php";
                break;
        }
    }else{
        include "../view/admin/home.php";
    }

    include "../view/admin/footer.php";
?>