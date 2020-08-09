<?php
session_start();
include "../model/connect.php";
include_once "../model/product.php";
include_once "../model/type.php";
include_once "../model/collection.php";

// load data cho trang chủ
// connect();

// if (isset($_SESSION['sid']) && ($_SESSION['sid'] > 0)) {

    include "../view/admin/header.php";

    if (isset($_GET['page']) && ($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'qlloaisp':
                // insert 
                if (isset($_POST['submit_loaisp']) && $_POST['randcheck'] == $_SESSION['rand']) {
                    $name = $_POST['name'];
                    themloaisp($name);
                }

                // delete
                if (isset($_GET['iddelete']) && ($_GET['iddelete']) > 0) {
                    $id = $_GET['iddelete'];
                    // kiểm tra hca này có con ko
                    // if không có thì xóa

                    // if có con thì ko chogetinfoloaisp xóa hoặc cảnh báo là có con, xóa cha là xóa con
                    // $ds = danhsachcacdanhmuc(0);

                    xoaloaisp($id);
                }

                // edit
                // load lại loại sp
                if (isset($_GET['idedit']) && ($_GET['idedit'])) {
                    $id = $_GET['idedit'];
                    // load dữ liệu với id
                    $infoloaisp = getinfoloaisp($id);
                }
                // cập nhật 
                if (isset($_POST['updateloaisp']) && ($_POST['updateloaisp'])) {
                    $id = $_POST['id_type'];
                    $name = $_POST['name'];

                    editloaisp($id, $name);
                }
                // show list
                $qlloaisp = danhsachcacdanhmuc(0);
                include "../view/admin/qlloaisp.php";
                break;
            case 'qlsp':
                // insert 
                // $_POST['randcheck']==$_SESSION['rand']
                if (isset($_POST['themsp']) && ($_POST['themsp'])) {
                    // lấy dữ liệu từ form
                    $name = $_POST['name'];
                    $type = $_POST['type'];
                    $img = $_FILES['img']['name'];
                    $target_file = "../view/img/" . basename($img);
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                        $err_upload = 'Upload thành công';
                    } else {
                        $err_upload = '';
                    }
                    $catagory = $_POST['catagory'];
                    $price = $_POST['price'];


                    themsp($name, $img, $type, $price, $catagory); //khúc này làm hàm func_get_args


                }
                // delete
                if (isset($_GET['iddelete']) && ($_GET['iddelete']) > 0) {
                    $id = $_GET['iddelete'];
                    // kiểm tra hca này có con ko
                    // if không có thì xóa

                    // if có con thì ko cho xóa hoặc cảnh báo là có con, xóa cha là xóa con
                    // $ds = danhsachcacdanhmuc(0);

                    xoasp($id);
                }

                // load dữ liệu với id
                if (isset($_GET['idedit']) && ($_GET['idedit']) > 0) {
                    $id = $_GET['idedit'];
                    $infosp = infosp($id);
                }
                // cập nhật  
                if (isset($_POST['suasanpham']) && ($_POST['suasanpham'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $type = $_POST['type'];
                    if ($_FILES['img']['name']!="") {
                        $img = $_FILES['img']['name'];
                        $target_file = "../view/img/" . basename($img);
                        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                            $err_upload = 'Upload thành công';
                        } else {
                            $err_upload = '';
                        }
                    }else{
                        $img="";
                    }
                    $catagory = $_POST['catagory'];
                    $price = $_POST['price'];

                    // cập nhật
                    $suasp = editsp($id, $name, $img, $type, $price, $catagory);
                    
                }
                
                // show list
                $dstype = danhsachcacdanhmuc(0);
                // var_dump($dstype);
                $dsdm = showcatagory(0);
                $dssp = show_chitietsp(0);

                include "../view/admin/qlsanpham.php";
                break;
            default:
                include "../view/admin/home.php";
                break;
        }
    } else {
        include "../view/admin/home.php";
    }

    include "../view/admin/footer.php";
// } else {
//     // header('location: login.php');
// }
