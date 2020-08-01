<section>
    <hr>
    <h1>Quản lí loại sản phẩm</h1>

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
                echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>';
            }
        ?>
    </table>
    <hr>
</section>