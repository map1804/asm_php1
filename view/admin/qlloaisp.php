<section>
    <hr>
    <h1>Quản lí loại sản phẩm</h1>
    <form action="admin.php?page=qlloaisp" method="post">
        <input type="text" value="name">
        <input type="submit" value="Thêm Loại sp" name="themloai">
    </form>
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
                $linkdelete = "admin.php?page=qlloaisp&linkdelete=".$id;
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