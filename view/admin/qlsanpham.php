<section>
    <div class="container">
        <div class="row">
            <?php
                $rand=rand();
                $_SESSION['rand']=$rand;
            ?>
            <form action="admin.php?page=qlsp" method="post" enctype="multipart/form-data">
                <input type="text" name="name" id="" placeholder="Tên sản phẩm">
                <input type="file" name="img" id="">
                <select name ="type" >
                    <?php 
                        foreach ($dstype as $type) {
                             echo '<option value="'.$type['id_type'].'">'.$type['name'].'</option>';
                        }
                    ?>
                </select>
                <input type="text" name="price" id="" placeholder="Giá">
                <select name ="catagory" >
                    <?php 
                        foreach ($dsdm as $dm) {
                             echo '<option value="'.$dm['id_catagory'].'">'.$dm['name'].'</option>';
                        }
                    ?>
                </select>
                <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
                <input type="submit" value="Thêm" name ="themsp">
            </form>
        </div>
        <div class="row">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Hình</th>
                    <th>Loại</th>
                    <th>Giá</th>
                    <th>Danh mục</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                    foreach ($dssp as $sp) {
                        $id = $sp['id_product'];
                        $name = $sp['name'];
                        $type = $sp['id_type'];
                        $img = "../view/img/".$sp['img'];
                        if (is_file($img)) {
                            $img = '<img src ="'.$img.'" width="100px">';
                        }else{
                            $img = '';
                        }
                        $catagory = $sp['id_catagory'];
                        $price = $sp['price'];
                        echo '<tr><td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$img.'</td>
                            <td>'.$type.'</td>
                            <td>'.$price.'</td>
                            <td>'.$catagory.'</td>
                            <td>Edit</td>
                            <td>Delete</td><tr>';
                    }
                ?>
            </table>
        </div>
    </div>
</section>