<?php
    include "../model/connect.php";
    include_once "../model/product.php";
    include_once "../model/type.php";
    include_once "../model/collection.php";

    // load data cho trang chủ
    connect();

    include "../view/admin/header.php";

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'qlloaisp':
                // insert 
                if (isset($_POST['themloai'])&&($_POST['themloai'])) {
                    $name = $_POST['name'];
                    themloaisp($name);
                }
                // delete

                // edit

                // show list
                $qlloaisp = danhsachcacdanhmuc(0);
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