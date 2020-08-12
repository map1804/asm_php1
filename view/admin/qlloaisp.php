<section class="col-10 main-right">
    <div class="container">
        <hr>
        <h4>Thêm loại sản phẩm</h4>
        <?php
        if (isset($_GET['idedit']) && ($_GET['idedit']) > 0) {
        ?>

            <form action="admin.php?page=qlloaisp" method="post">
                <?php
                $rand = rand();
                $_SESSION['rand'] = $rand;
                ?>
                <input type="text" value="<?= $infoloaisp['name'] ?>" name="name" required>
                <input type="hidden" name="id_type" value="<?= $infoloaisp['id_type'] ?>">
                <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
                <input type="submit" value="Cập nhật Loại sp" name="updateloaisp">
            </form>
        <?php
        } else {
        ?>

            <!-- form thêm loại sản phẩm -->
            <form action="admin.php?page=qlloaisp" method="post">
                <?php
                $rand = rand();
                $_SESSION['rand'] = $rand;
                ?>
                <div class="form-inline">
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" value="" name="name" required class="form-control">
                        <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
                    </div>
                    <input type="submit" value="Thêm Loại sp" name="submit_loaisp" class="btn btn-primary mb-2">
                </div>
            </form>
        <?php } ?>
        <h5 class="mt-5">Danh sách loại sản phẩm</h5>
        <div class="col-12">
            <div class="wrapper-content">
                <div class="danhsachloaisp">
                    <table class="ui-table">
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
                            $linkedit = "admin.php?page=qlloaisp&idedit=" . $id;
                            $linkdelete = "admin.php?page=qlloaisp&iddelete=" . $id;
                            echo '<tr>
                                    <td>' . $id . '</td>
                                    <td class="table-break-word text-primary">' . $name . '</td>
                                    <td><a href="' . $linkedit . '">Edit</a></td>
                                    <td><a href="' . $linkdelete . '">Delete</a></td>
                                </tr>';
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <hr>
    </div>
</section>