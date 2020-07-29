<?php
    include "../model/connect.php";
    include_once "../model/brand.php";
    include_once "../model/cart.php";
    include_once "../model/type.php";
    include_once "../model/product.php";
    // include_once "../model/dangki.php";
    // include_once "../model/dangnhap.php";

    // loaddata cho trang chủ
    connect();

    // show danh mục(category)
    $dsdanhmuc = danhsachcacdanhmuc();

    include_once "../view/header.php";

    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        switch ($page) {
            case 'product':
                // load data cho trang sp
                if (isset($_GET['id_danhmuc'])&&($_GET['id_danhmuc']>0)) {
                    $iddm=$_GET['id_danhmuc'];
                }else{
                    $iddm=0;
                }
                $dssp = showsp($iddm);
                // show dssp
                include_once "../view/chitiet.php";
                break;
            case 'khuyenmai':
                include_once "../view/khuyenmai.php";
                break;
            case 'banchay':
                include_once "../view/banchay.php";
                break;
            case 'sanphammoi':
                include_once "../view/sanphammoi.php";
                break;
            case 'chitiet_sp':
                include_once "../view/chitiet_sp.php";
                break;
            default:
                include_once "../view/home.php";
                break;
        }
    }
    else{
        include_once "../view/home.php";
    }
    
    include_once "../view/footer.php";

?>