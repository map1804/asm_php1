<section>
    <hr>
    <h1>Thêm loại sản phẩm</h1>
    <?php
        if(isset($_GET['idedit']) && ($_GET['idedit'])>0){
            ?>

    <form action="admin.php?page=qlloaisp" method="post">
        <?php
            $rand=rand();
            $_SESSION['rand']=$rand;
        ?>
        <input type="text" value="<?=$infoloaisp['name'] ?>" name="name" required>
        <input type="hidden" name="id_type" value="<?=$infoloaisp['id_type']?>">
        <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
        <input type="submit" value="Cập nhật Loại sp" name="updateloaisp">
    </form>
        <?php
        }else{
    ?>

    <!-- form thêm loại sản phẩm -->
    <form action="admin.php?page=qlloaisp" method="post">
        <?php
            $rand=rand();
            $_SESSION['rand']=$rand;
        ?>
        <input type="text" value="" name="name" required>
        <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
        <input type="submit" value="Thêm Loại sp" name="submit_loaisp">
    </form>
        <?php } ?>
    <h1>Danh sách loại sản phẩm</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
            foreach ($qlloaisp as $loaisp) {
                $id = $loaisp['id_type'];
                $name = $loaisp['name'];
                $linkedit = "admin.php?page=qlloaisp&idedit=".$id;
                $linkdelete = "admin.php?page=qlloaisp&iddelete=".$id;
                echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td><a href="'.$linkedit.'">Edit</a></td>
                        <td><a href="'.$linkdelete.'">Delete</a></td>
                    </tr>';
            }
        ?>
    </table>
    <hr>
</section>