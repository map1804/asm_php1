<?php
    include "../model/connect.php";
    include_once "../model/product.php";
    include_once "../model/type.php";
    include_once "../model/collection.php";

    // loaddata cho trang chủ
    connect();

    // show loại sản phẩm
    $dsdanhmuc = danhsachcacdanhmuc(1);

    // show danh mục(category)
    $danhsach_catagory = showsp_catagory();

    include_once "../view/header.php";

    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        switch ($page) {
            case 'product':
                // // load data cho trang sp
                // if (isset($_GET['id_danhmuc'])&&($_GET['id_danhmuc']>0)) {
                //     $iddm=$_GET['id_danhmuc'];
                // }else{
                //     $iddm=0;
                // }
                // $dssp = showsp($iddm);
                // show dssp
                include_once "../view/chitiet.php";
                break;
            case 'collection':
                if (isset($_GET['id_danhmuc'])&&($_GET['id_danhmuc']>0)) {
                    $iddm=$_GET['id_danhmuc'];
                }else{
                    $iddm=0;
                }
                $danhsachsp = showsp_theodanhmuc($iddm);
                include_once "../view/collection.php";
                break;
            case 'banchay':
                include_once "../view/banchay.php";
                break;
            case 'sanphammoi':
                include_once "../view/sanphammoi.php";
                break;
            case 'chitiet_sp':
                if (isset($_GET['id_product'])&&($_GET['id_product']>0)) {
                    $id_sanpham=$_GET['id_product'];
                }else{
                    $id_sanpham=0;
                }
                $chitietsanpham = show_chitietsp($id_sanpham);
                include_once "../view/chitiet_sp.php";
                break;
            case 'user':
                // đăng ký

                // đăng nhập

                // thoát
                if (isset($_GET['logout'])&&($_GET['logout']==1)) {
                    unset($_SESSION['sid']); 
                    unset($_SESSION['suser']);
                    header('location: index.php'); 
                }
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