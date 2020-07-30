

    <!-- Start product -->
    <section>
        <div class="container">
            <div class="row product">
                <?php
                    foreach ($chitietsanpham as $chitiet) {
                        $img = $chitiet['img'];

                        echo '<div class="col-6">
                                <div class="col-2 img-left">
                                    <img src="../view/img/'.$img.'" alt="">
                                </div>
                                <div class="col-10 img-right">
                                    <img src="../view/img/'.$img.'" alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="title-product mb-4">
                                    <h5>Bộ Sản Phẩm Kem Nền Lâu Trôi Chống Nắng INK LASTING FOUNDATION SLIM FIT EX #V103</h5>
                                </div>
                                <div class="price-product">
                                    <p>635,000₫<span>1,380,000₫</span></p>
                                </div>
                                <div class="mt-3 ml-2">
                                    <p>Dòng sản phẩm </p>
                                    <p>Thương hiệu</p>
                                    <p>Nơi sản xuất</p>
                                </div>
                                <div class="row quantity mb-4">
                                    <div class="col-6">
                                        <p>Số lượng <span>1</span></p>
                                    </div>
                                    <div class="col-6">
                                        <h5>Tư vấn bán hàng</h5>
                                        <p class="phone">0968 86 33 77</p>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row add">
                                        <div class="col-6">
                                            <div class="add-cart">
                                                <h5>Thêm giỏ hàng</h5>
                                                <p>(Mua nhiều, lợi nhiều)</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="buy-fast">
                                                <h5>Mua nhanh</h5>
                                                <p>(Đặt ngay, gần hết hàng)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    }
                ?>
                
            </div>
        </div>
    </section>
    <!-- Finish product -->