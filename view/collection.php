<div class="container">
        <div class="row mb-5 mt-2">
            <?php
                foreach ($danhsachsp as $spcon) {
                    $id = $spcon['id_product'];
                    $name = $spcon['name'];
                    $img = $spcon['img'];
                    $description = $spcon['description'];
                    echo '<div class="col5 mar-2">
                        <div class="card">
                            <img class="card-img-top" src="../view/img/'.$img.'" alt="Card image cap">
                            <div class="card-body">
                            <a href="index.php?page=chitiet_sp&id_product='.$id.'">
                                <p class="card-text">'.$name.'</p>
                            </a>
                                <p class="card-gia">400.000đ</p>
                            </div>
                        </div>
                    </div>';
                }
            ?>
            
            
        </div>
    </div>