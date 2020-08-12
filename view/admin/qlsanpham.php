<div class="col-10 main-right">
<section>
    <div class="container">
        <div class="row">
            <?php
            if (isset($_GET['idedit']) && ($_GET['idedit']>0)) {
                $img = '../view/img/'.$infosp['img'].'' ;
                if(is_file($img)){

                    $img = '<img src="'.$img.'" alt="" style="width: 100px">';
                }
            ?>
                <?php
                $rand = rand();
                $_SESSION['rand'] = $rand;
                ?>
                <form action="admin.php?page=qlsp" method="post" enctype="multipart/form-data">
                    <input type="text" name="name" id="" value="<?=$infosp['name'] ?>">
                    <input type="file" name="img" id="" value="">
                    <?=$img?>
                    <select name="type" > 
                        <?php
                        foreach ($dstype as $type) {
                            if($infosp['id_type']==$type['id_type']){
                                $s1 = "selected";
                            }else{
                                $s1 = "";
                            }
                            echo '<option value="' . $type['id_type'] . '" '.$s1.'>' . $type['name'] . '</option>';
                        }
                        ?>
                    </select>
                    <input type="text" name="price" id="" placeholder="Giá" value="<?=$infosp['price']?>">
                    <select name="catagory">
                        <?php
                        foreach ($dsdm as $dm) {
                            if($infosp['id_catagory']==$dm['id_catagory']){
                                $s1 = "selected";
                            }else{
                                $s1 = "";
                            }
                            echo '<option value="' . $dm['id_catagory'] . '" '.$s1.'>' . $dm['name'] . '</option>';
                        }
                        ?>
                    </select>
                    <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
                    <input type="hidden" name="id" value="<?=$infosp['id_product']?>">
                    <input type="submit" value="Edit" name="suasanpham">
                </form>
        </div>
    <?php } else { ?>
        <div class="col-12"><label class="title-header">New product</label></div>
        <div class="col-12">
            <div class="row">
                <div class="wrapper-content mb-5">
                    <div class="ui-information">
                        <form action="admin.php?page=qlsp" method="post" enctype="multipart/form-data">
                            <div class="wrapper-content mb-3">    
                                <div class="ui-information-body">
                                    <div class="form-group px-0">
                                        <label class="label-input-group">Name</label>
                                        <div class=""><input class="next-input" type="text" name="name" id="" placeholder="Tên sản phẩm"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrapper-content mb-3"> 
                                <div class="form-group px-0">
                                    <label class="label-input-group">Hình</label>
                                    <div class="file-upload position-relative">
                                        <div class="file-upload-drop">
                                        <input type="file" name="img" id="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group px-0">
                                <label class="label-input-group">Giá</label>
                                <input class="next-input" type="text" name="price" id="" placeholder="Giá">
                            </div>
                                <div class="mb-2">
                                    <label class="label-input-group">Type</label>
                                    <div class="ui-selectbox">
                                        <div class="">
                                            <select name="type" class="next-input next-input--invisible">
                                                <?php
                                                foreach ($dstype as $type) {
                                                    echo '<option value="' . $type['id_type'] . '">' . $type['name'] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <label class="label-input-group">Catagory</label>
                                    <div class="ui-selectbox">
                                        <div class="">
                                        <select name="catagory" class="next-input next-input--invisible">
                                            <?php
                                            foreach ($dsdm as $dm) {
                                                echo '<option value="' . $dm['id_catagory'] . '">' . $dm['name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            
                            <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
                            <input class="btn btn-primary mt-3" type="submit" value="Thêm" name="themsp">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <?php } ?>
    <div class="container">
        <div class="row">
        <div class="wrapper-content mb-5">
            <table class="ui-table">
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
                    $img = "../view/img/" . $sp['img'];
                    if (is_file($img)) {
                        $img = '<img src ="' . $img . '" width="100px">';
                    } else {
                        $img = '';
                    }
                    $catagory = $sp['id_catagory'];
                    $price = $sp['price'];
                    $linkedit = "admin.php?page=qlsp&idedit=" . $id;
                    $linkdelete = "admin.php?page=qlsp&iddelete=" . $id;
                    echo '<tr><td>' . $id . '</td>
                                <td class="table-break-word text-primary">' . $name . '</td>
                                <td>' . $img . '</td>
                                <td>' . $type . '</td>
                                <td>' . $price . '</td>
                                <td>' . $catagory . '</td>
                                <td><a href="' . $linkedit . '">Edit</a></td>
                                <td><a href="' . $linkdelete . '">Delete</a></td>';
                }
                ?>
            </table>
        </div>
        </div>
    </div>
    </div>
</section>
</div>
</div>
</div>