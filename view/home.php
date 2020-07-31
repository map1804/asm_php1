<!-- Start home  -->
<section>
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class=""></li>
                <li data-target="#demo" data-slide-to="1" class="active"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="../view/img/banner_silder_4.jpg" alt="Los Angeles" width="1100" height="500">
                </div>
                <div class="carousel-item active">
                    <img src="../view/img/banner_silder_5.jpg" alt="Chicago" width="1100" height="500">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <div class="container py-3">
            <div class="row">
                <div class="row">
                    <h2>INK LASTING - MUA 1 TẶNG 1</h2>
                </div>
                <div class="row mb-5 mt-2">
                    <div class="col5 mar-2">
                        <div class="card">
                            <img class="card-img-top" src="../view/img/hinh1.webp" alt="Card image cap">
                            <div class="card-body">
                                <a href="index.php?page=chitiet_sp&id_product=1">
                                    <p class="card-text">Bộ Sản Phẩm Làm Sạch & Phấn Nước Trang Điểm DR.BELMEUR ADVANCED
                                        CICA
                                    </p>
                                </a>
                                <p class="card-gia">400.000đ</p>
                            </div>
                        </div>
                    </div>
                    <div class="col5 mar-2">
                        <div class="card">
                            <img class="card-img-top" src="../view/img/hinh2.webp" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Bộ Sản Phẩm Dành Cho Da Dầu Mụn DR.BELMEUR (CLARIFYING + FACE MILD)
                                </p>
                                <p class="card-gia">400.000đ</p>
                            </div>
                        </div>
                    </div>
                    <div class="col5 mar-2">
                        <div class="card">
                            <img class="card-img-top" src="../view/img/hinh3.webp" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Kem Nền Đa Năng INK LASTING FOUNDATION SLIM FIT SPF30 PA++ 30ML
                                    CICA
                                </p>
                                <p class="card-gia">400.000đ</p>
                            </div>
                        </div>
                    </div>
                    <div class="col5 mar-2">
                        <div class="card">
                            <img class="card-img-top" src="../view/img/hinh4.webp" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">[FMGT] Kem Nền Lâu Trôi Chống Nắng INK LASTING FOUNDATION SLIM FIT
                                    EX</p>
                                <p class="card-gia">400.000đ</p>
                            </div>
                        </div>
                    </div>
                    <div class="col5">
                        <div class="card">
                            <img class="card-img-top" src="../view/img/hinh5.webp" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Phấn Nước Lâu Trôi INK LASTING CUSHION SPF 30 PA++15g FOUNDATION
                                    SLIM
                                </p>
                                <p class="card-gia">400.000đ</p>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="row nav">
                    <a class="nav-link active title py-2 " href="index.php?page=collection&duong-da">DƯỠNG DA</a>
                    <?php
                        // $tungdanhmuccon biến để lưu từng phần tử trong mảng
                        // dsdanhmuc = [tungdanhmuccon,tungdanhmuccon,tungdanhmuccon]
                        // array = [object,object,object] => array[0] sẽ in duoc object 
                        // object = {doituong1,doituong2,doituong3} => object['doituong1']
                        
                        //1 kết quả về của sql sẽ hiển thị dưới
                        //array = [
                        //     {1, "Các sản phẩm"} ,
                        //     {2, "Nước cân bằng"} ,
                        //     {3, "Tinh chất"}
                        // ]
                        foreach($dsdanhmuc as $tungdanhmuccon) {
                            $tendanhmuc = $tungdanhmuccon['name'];
                            // $slugdm = to_slug($tendanhmuc);
                            // $link = "index.php?page=danhmuc&idcatalog=".$slugdm;
                            $link = "index.php?page=collection&id_danhmuc=".$tungdanhmuccon['id_type'];
                            echo '<a class="nav-link" href="'.$link.'">'.$tendanhmuc.'</a>';
                        }
                    ?>
                </nav>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-12">
                        <div class="box1">
                            <img src="https://www.kosmebox.com/image/data/Homebanner/16-31Jan2019/TFS1200x400.jpg" alt="">
                        </div>
                        <div class="container">
                            <?php
                            foreach ($danhsach_catagory as $sanpham_theo_cata) {
                            $id = $sanpham_theo_cata['id_product'];
                            $name = $sanpham_theo_cata['name'];
                            $img = $sanpham_theo_cata['img'];
                            $price = $sanpham_theo_cata['price'];
                            $id_catagory = $sanpham_theo_cata['id_catagory'];
                            if($id_catagory == 1) {
                                echo '<div class="col5 mar-2 mt-5">
                                    <div class="card">
                                        <img class="card-img-top" src="../view/img/' . $img . '" alt="Card image cap">
                                        <div class="card-body">
                                            <a href="index.php?page=chitiet_sp&id_product=' . $id . '">
                                                <p class="card-text">' . $name . '</p>
                                            </a>
                                            <p class="card-gia">' . $price . 'đ</p>
                                        </div>
                                    </div>
                                </div>';
                            } 
                        ?>
                        
                    </div>
                </div>
                <nav class="row nav mt-5">
                    <a class="nav-link active title py-2 " href="index.php?page=collection&id_catagory">DƯỠNG DA</a>
                    <a class="nav-link" href="#">Các sản phẩm</a>
                    <a class="nav-link" href="#">Sữa rửa mặt</a>
                    <a class="nav-link" href="#">Dầu tẩy trang</a>
                    <a class="nav-link" href="#">Kem tẩy trang</a>
                    <a class="nav-link" href="#">Mặt nạ kì</a>
                </nav>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-12">
                        <div class="box1">
                            <img src="https://vn.stylekorean.com/data/promotion/promo_mobile_banner_50.jpg" alt="">
                        </div>
                        
                        <div class="box-full mt-2">
                            <div class="col5 mar-2">
                                <div class="card">
                                    <img class="card-img-top" src="../view/img/hinh9.webp" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Bộ Sản Phẩm Cấp Ẩm Chuyên Sâu, Làm Dịu</p>
                                        <p class="card-gia">400.000đ</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col5 mar-2">
                                <div class="card">
                                    <img class="card-img-top" src="../view/img/hinh10.webp" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Bộ Sản Phẩm Dưỡng Ẩm, Phục Hồi Da</p>
                                        <p class="card-gia">400.000đ</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col5 mar-2">
                                <div class="card">
                                    <img class="card-img-top" src="../view/img/hinh11.webp" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Bộ Sản Phẩm Cấp Ẩm Chuyên Sâu, Làm Dịu</p>
                                        <p class="card-gia">400.000đ</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col5 mar-2">
                                <div class="card">
                                    <img class="card-img-top" src="../view/img/hinh12.webp" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Bộ Sản Phẩm Dưỡng Ẩm, Phục Hồi Da DR.</p>
                                        <p class="card-gia">400.000đ</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col5">
                                <div class="card">
                                    <img class="card-img-top" src="../view/img/hinh13.webp" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Bộ Sản Phẩm Tăng Cường Ẩm, Săn Chắc</p>
                                        <p class="card-gia">400.000đ</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <nav class="row nav mt-5">
                    <a class="nav-link active title py-2 " href="#">DƯỠNG DA</a>
                    <a class="nav-link" href="#">Các sản phẩm</a>
                    <a class="nav-link" href="#">Sữa rửa mặt</a>
                    <a class="nav-link" href="#">Dầu tẩy trang</a>
                    <a class="nav-link" href="#">Kem tẩy trang</a>
                    <a class="nav-link" href="#">Mặt nạ kì</a>
                </nav>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-12">
                        <div class="box1">
                            <img src="https://file.hstatic.net/1000036599/collection/bannerlamsach.jpg" alt="">
                        </div>
                        
                        <div class="box-full mt-2">
                            <div class="col5 mar-2">
                                <div class="card">
                                    <img class="card-img-top" src="../view/img/hinh9.webp" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Bộ Sản Phẩm Cấp Ẩm Chuyên Sâu, Làm Dịu</p>
                                        <p class="card-gia">400.000đ</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col5 mar-2">
                                <div class="card">
                                    <img class="card-img-top" src="../view/img/hinh10.webp" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Bộ Sản Phẩm Dưỡng Ẩm, Phục Hồi Da</p>
                                        <p class="card-gia">400.000đ</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col5 mar-2">
                                <div class="card">
                                    <img class="card-img-top" src="../view/img/hinh11.webp" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Bộ Sản Phẩm Cấp Ẩm Chuyên Sâu, Làm Dịu</p>
                                        <p class="card-gia">400.000đ</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col5 mar-2">
                                <div class="card">
                                    <img class="card-img-top" src="../view/img/hinh12.webp" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Bộ Sản Phẩm Dưỡng Ẩm, Phục Hồi Da DR.</p>
                                        <p class="card-gia">400.000đ</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col5">
                                <div class="card">
                                    <img class="card-img-top" src="../view/img/hinh13.webp" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Bộ Sản Phẩm Tăng Cường Ẩm, Săn Chắc</p>
                                        <p class="card-gia">400.000đ</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <h2>GÓC LÀM ĐẸP</h2>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="card goclamdep">
                            <img class="card-img-top" src="../view/img/goclamdep-hinh1.webp" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">THE SOLUTION FACE MASK GIẢI QUYẾT MỌI VẤN ĐỀ CHO LÀN DA...</p>
                                <p class="xemthem">Xem thêm</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card goclamdep">
                            <img class="card-img-top" src="../view/img/goclamdep-hinh2.webp" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">CÁCH TẠO LỚP NỀN HOÀN HẢO TỪ 2 MÀU KEM NỀN...</p>
                                <p class="xemthem">Xem thêm</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card goclamdep">
                            <img class="card-img-top" src="../view/img/goclamdep-hinh3.webp" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">TỪ ĐIỂN CÁC LOẠI MẶT NẠ BẠN CẦN ĐỂ CÓ LÀN DA ĐẸP...</p>
                                <p class="xemthem">Xem thêm</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card goclamdep">
                            <img class="card-img-top" src="../view/img/goclamdep-hinh4.webp" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">MUA MỸ PHẨM THEFACESHOP CHÍNH HÃNG Ở ĐÂU?...</p>
                                <p class="xemthem">Xem thêm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Finish home -->