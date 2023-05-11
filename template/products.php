    <div class="block-main">
        <div class="block-product">
            <div class="container">
                <div class ="title-block">
                    <div class = "title-content">
                        <h3 class = "title">Danh mục ưa thích</h3>
                        <div class="describe">Danh mục được nhiều khách hàng yêu thích</div>
                    </div>
                </div>
                <div id ="row">
                    <div class = "box-banner-index">
                        <div class = "index">
                            <a href = "#">
                                <img src = ".\img\img-listFav\banner_index_1.webp">
                            </a>
                        </div>
                    </div>
                    <div class = "box-banner-index">
                        <div class = "index">
                            <a href = "#">
                                <img src = ".\img\img-listFav\banner_index_2.webp">
                            </a>
                        </div>
                    </div>
                    <div class = "box-banner-index">
                        <div class = "index">
                            <a href = "#">
                                <img src = ".\img\img-listFav\banner_index_3.webp">
                            </a>
                        </div>
                    </div>
                    <div class = "box-banner-index">
                        <div class = "index">
                            <a href = "#">
                                <img src = ".\img\img-listFav\banner_index_4.webp">
                            </a>
                        </div>
                    </div>
                    <div class = "box-banner-index">
                        <div class = "index">
                            <a href = "#">
                                <img src = ".\img\img-listFav\banner_index_5.webp">
                            </a>
                        </div>
                    </div>
                    <div class = "box-banner-index">
                        <div class = "index">
                            <a href = "#">
                                <img src = ".\img\img-listFav\banner_index_6.webp" style="width: 360px; max-height: 200px;">
                            </a>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    
        <div id="artificial_turf " class="block-product">
            <div class="container">
                <div class="title-block">
                    <div class="title-content">
                        <h2 class="title">Giày đá bóng sân cỏ nhân tạo</h2>
                        <div class="describe">Giày đá bóng đinh TF cập nhật thường xuyên</div>
                    </div>
                </div>
                <div class="products">
                    <?php
                        function TinhTienGiam($TiLegiam, $data){
                            return $data - $data*$TiLegiam/100;
                        }

                        include('./db/DAOSP.php');
                        $db = new DAOSP();
                        $db->connect();

                        $MaDM1 = "DM-1";
                        $data = $db->getListDanhMuc($MaDM1);
                        $n = 8;
                        if (count($data)< 8){
                            $n = count($data);
                        }

                        for($i = 0; $i < $n ;$i++){
                            $TiLeGiam = $db->getTiLeGiam($data[$i]['MaSP']);
                    ?>
                        <div class="product">
                            <div class="product-image">
                                <div class="quickview-background">
                                    <div class="quickview-box">Xem Nhanh</div>

                                </div>
                                <img src="./img/products/<?php echo $data[$i]['AnhChinh']?>" alt="">
                            </div>
                            <div class="product-info">
                                <div class="product-name">
                                    <a href = "./ChiTietSP.php?MaSP=<?php echo $data[$i][0]?>"><?php echo $data[$i][1]?></a>
                                </div>
                                <div class="product-vendor"><?php echo $data[$i]['TenHang']?></div>
                                <div class="product-price">
                                    <span class="price-new price"><?php echo number_format(TinhTienGiam($TiLeGiam,$data[$i]['Gia']),0,',','.') ."đ"?></span>
                                    <span class="price-old price"><?php echo number_format($data[$i]['Gia'],0,',','.') ."đ"?></span>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
                <div class="viewall">
                    <div class="viewall-content">Xem tất cả</div>
                </div>
            </div>
        </div>
  

        <div id="natural_turf " class="block-product">
            <div class="container">
                <div class="title-block">
                    <div class="title-content">
                        <h2 class="title">Giày đá bóng sân cỏ tự nhiên</h2>
                        <div class="describe">Giày đá banh đinh SG/MG/FG cập nhật thường xuyên</div>
                    </div>
                </div>
                <div class="products">
                    <?php
                        $MaDM1 = "DM-2";
                        $data = $db->getListDanhMuc($MaDM1);
                        $n = 8;
                        if (count($data)< 8){
                            $n = count($data);
                        }

                        for($i = 0; $i < $n ;$i++){
                            $TiLeGiam = $db->getTiLeGiam($data[$i]['MaSP']);
                    ?>
                    <div class="product">
                        <div class="product-image">
                            <div class="quickview-background">
                                <div class="quickview-box">Xem Nhanh</div>

                            </div>
                            <img src="./img/products/<?php echo $data[$i]['AnhChinh']?>" alt="">
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <a href = "./ChiTietSP.php?MaSP=<?php echo $data[$i][0]?>"><?php echo $data[$i][1]?></a>
                            </div>
                            <div class="product-vendor"><?php echo $data[$i]['TenHang']?></div>
                            <div class="product-price">
                                    <span class="price-new price"><?php echo number_format(TinhTienGiam($TiLeGiam,$data[$i]['Gia']),0,',','.') ."đ"?></span>
                                    <span class="price-old price"><?php echo number_format($data[$i]['Gia'],0,',','.') ."đ"?></span>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
                <div class="viewall">
                    <div class="viewall-content">Xem tất cả</div>
                </div>
            </div>

        </div>
        <div id="futsal_turf " class="block-product">
            <div class="container">
                <div class="title-block">
                    <div class="title-content">
                        <h2 class="title">GIÀY ĐÁ BÓNG FUTSAL</h2>
                        <div class="describe">Giày đá banh đế bằng IC cập nhật thường xuyên</div>
                    </div>
                </div>
                <div class="products">
                    <?php
                        $MaDM1 = "DM-4";
                        $data = $db->getListDanhMuc($MaDM1);
                        $n = 8;
                        if (count($data) < 8){
                            $n = count($data);
                        }

                        for($i = 0; $i < $n ;$i++){
                            $TiLeGiam = $db->getTiLeGiam($data[$i]['MaSP']);
                    ?>
                    <div class="product">
                        <div class="product-image">
                            <div class="quickview-background">
                                <div class="quickview-box">Xem Nhanh</div>

                            </div>
                            <img src="./img/products/<?php echo $data[$i]['AnhChinh']?>" alt="">
                        </div>
                        <div class="product-info">
                            <div class="product-name">
                                <a href = "./ChiTietSP.php?MaSP=<?php echo $data[$i][0]?>"><?php echo $data[$i][1]?></a>
                            </div>
                            <div class="product-vendor"><?php echo $data[$i]['TenHang']?></div>
                            <div class="product-price">
                                    <span class="price-new price"><?php echo number_format(TinhTienGiam($TiLeGiam,$data[$i]['Gia']),0,',','.') ."đ"?></span>
                                    <span class="price-old price"><?php echo number_format($data[$i]['Gia'],0,',','.') ."đ"?></span>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
                </div>
                <div class="viewall">
                    <div class="viewall-content">Xem tất cả</div>
                </div>
            </div>

        </div>

    </div>
    
    <form action="./GioHang.php" method="post">
    <input type="hidden" name="MaSP" value="<?php echo $data[0][0]?>">
    <div id="wrapper-quickview">
        <div id="quickview">
            <!-- <span class="icon-close-quickview">
                <i class="far fa-times-circle"></i>
            </span> -->
            <div class="quickview-imgs">
                <div class="img-main">
                    <img src="./img/products/cotunhien.webp" alt="">
                </div>
                <div class="img-slider">
                    <div class="items">
                        <div class="item clicked">
                            <label>
                                <input onclick="getValueImgQuickview()" type="radio" name="img-quickview">
                                <img data-image="./img/products/cotunhien.webp" src="./img/products/cotunhien.webp" alt="">
                            </label>
                        </div>
                        <div class="item">
                            <label>
                                <input onclick="getValueImgQuickview()" type="radio" name="img-quickview">
                                <img data-image="./img/products/futsal.webp" src="./img/products/futsal.webp" alt="">
                            </label>
                        </div>
                        <div class="item">
                            <label>
                                <input onclick="getValueImgQuickview()" type="radio" name="img-quickview">
                                <img data-image="./img/products/cotunhien.webp" src="./img/products/cotunhien.webp" alt="">
                            </label>
                        </div>
                        <div class="item">
                            <label>
                                <input onclick="getValueImgQuickview()" type="radio" name="img-quickview">
                                <img data-image="./img/products/futsal.webp" src="./img/products/futsal.webp" alt="">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="quickview-content">
                <div class="title">
                    Adidas X Speedflow .1 TF GW7473 Diamond Edge Pack
                </div>
                <div class="list-star"></div>
                <div class="quickview-price">
                    2.550.000đ
                </div>
             
                <div class="quickview-select">
                    <label>Kích thước:</label>
                    <ul class="list list-size">
                        <li class="size clicked">
                            <label>
                                <input onclick="getValueSize()" name="Size" checked="checked" type="radio" value="40"
                                    id="">
                                <span>40</span>
                            </label>
                        </li>
                        <li class="size">
                            <label>
                                <input onclick="getValueSize()" name="Size" type="radio" value="41" id="">
                                <span>41</span>

                            </label>
                        </li>
                        <li class="size">
                            <label>
                                <input onclick="getValueSize()" name="Size" type="radio" value="42" id="">
                                <span>42</span>
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="quickview-quantity">
                    Số lượng còn lại: <p>25 đôi</p>
                </div>
                <form id="add-to-cart-form" action="cart.php?action=add" method=""POST>
                    <input type="text" value="1" name="quantity[]">
                </form>
                <label id="giohang">
                    <input type = "submit" name = "add_to_cart" value = "ThemGio">
                    <span id="icon"><i class="ti-shopping-cart"></i></span> 
                    <span id = "themvaogio">Thêm vào giỏ</span>
                </label>
                <div class="quickview-description">
                    <h4>Mô tả: </h4>
                    Sản phẩm được thiết kế từ Quang Linh :>>>
                </div>
            </div>
        </div>
    </div>
    </form>

    <script>
        showQuickview();
        hideQuickview();
    </script>