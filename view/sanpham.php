<?php
                    foreach($showsp as $tungsanphamcon) {
                        $tensanpham = $tungdanhmuccon['name'];
                        // $slugdm = to_slug($tendanhmuc);
                        // $link = "index.php?page=danhmuc&idcatalog=".$slugdm;
                        $link = "index.php?page=danhmuc&idcatalog=".$tungdanhmuccon['id_type'];
                        echo '<div class="row mb-5 mt-2">
                        <div class="col5 mar-2">
                            <div class="card">
                                <img class="card-img-top" src="../view/img/hinh1.webp" alt="Card image cap">
                                <div class="card-body">
                                    <a href="#">
                                        <p class="card-text">Bộ Sản Phẩm Làm Sạch & Phấn Nước Trang Điểm DR.BELMEUR ADVANCED
                                            CICA
                                        </p>
                                    </a>
                                    <p class="card-gia">400.000đ</p>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }   
                ?>