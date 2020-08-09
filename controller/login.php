<?php
    session_start();
    include "../model/connect.php";
    include "../model/user.php";
    if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $checkuser = checkuser($user,$pass);

        if(is_array($checkuser)){
            if($checkuser['role']==1) header('location: admin.php');
            else header('location: index.php');
        }else{
            $canhbao = "Bạn không có tài khoản";
            // hacker à mơ đi bé :v
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The faceshop</title>

    <!-- Link fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../view/css/bootstrap.min.css">

    <!-- Link css tự viết -->
    <link rel="stylesheet" href="../view/css/style.css">
</head>

<body>

    <!-- Form đăng kí -->
    <form action="login.php" method="post">
        <div class="wrapinner">
            <div class="centerdangki">
                <div class="row textcenter">
                    <p class="text-dn">ĐĂNG NHẬP</p>
                </div>
                <input type="text" name="user" id="" placeholder="Tài khoản" autofocus>
                <input type="password" name="pass" id="" placeholder="Mật khẩu" autofocus>
                <div class="dangnhap">
                    <input type="submit" value="ĐĂNG NHẬP" name="dangnhap">
                </div>
                <ul class="dk">
                    <li><a href="#">Đăng nhập</a></li>
                    <li><a href="#">Quên mật khẩu</a></li>
                </ul>
            </div>
        </div>
    </form>
    <?php 
        if(isset($canhbao)&& ($canhbao != "")){
            echo $canhbao;
        }
    ?>

</body>

</html>