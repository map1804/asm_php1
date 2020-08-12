<?php
    session_start();
    include "../model/connect.php";
    include "../model/binhluan.php";
    if (isset($_SESSION['sid'])&&($_SESSION['sid']>0)) {
        if (isset($_SESSION['suser'])&&($_SESSION['suser']!="")){
            $user = $_SESSION['suser'];
        }else{
            $user = "";
        }
        if (isset($_POST['guibl'])&&($_POST['guibl'])) {
            $name = $_POST['name'];
            $id_product = $_POST['idsp'];
            $id_user = $_SESSION['sid'];
            $noidung = $_POST['noidung'];

            $thembl = thembl($name,$id_user,$id_product,$noidung);
        }

        $dsbl = showbl();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bình luận</title>
</head>
<body>
    <form action="binhluan.php" method="post">
        <input type="text" name="name" id="" value="<?=$user?>">
        <input type="hidden" name="idsp" value="<?=$_GET['id_product']?>">
        <input type="text" name="noidung" id="">
        <!-- <textarea name="noidung" id="" cols="30" rows="10"></textarea> -->
        <input type="submit" value="Gửi bình luận" name="guibl">
    </form>
    <hr>
    <?php
        foreach ($dsbl as $bl) {
            echo '<h2>Tên:'.$bl["name"].'</h2>
            <p>Bình luận: '.$bl["noidung"].'</p>';
        }
    ?>
</body>
</html>
    <?php }else{
        echo "<a href='index.php?page=user' target='_parent'>Bạn vui lòng đăng nhập!</a> ";
    }
        ?>