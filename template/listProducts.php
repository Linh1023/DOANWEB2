
<div class="block-main">
        <div class = "Loc">
            <form method="POST" action="">
            <div class = "selection" id="Hang">
                <div class = "title">
                    <h3>Thương hiệu</h3>
                    <i class="ti-minus"></i>
                </div>
                <div class = "item">
                    <?php
                        include('./db/DAOHang.php');
                        $dbH = new DAOHang();
                        $dbH->connect();
                        $dataH = $dbH->getList();
                        $i = 0;
                        while ($i < count($dataH)){
                    ?>
                        <label>
                            <input type = "radio" name = "Hang" value = "<?php echo $dataH[$i][0]?>">
                            <div class = "content"><?php echo $dataH[$i][1]?></div>
                            <i class = "ti-check"></i>
                        </label>
                    <?php
                            $i++; 
                        }
                    ?>
                </div>
            </div>
            <div class = "selection" id="Gia">
                <div class = "title">
                    <h3>Giá</h3>
                    <i class="ti-minus"></i>
                </div>
                <div class = "item">
                        <label>
                            <input type = "radio" name = "Gia" value = "0-1000000">
                            <div class = "content">Nhỏ hơn 1,000,000đ</div>
                            <i class = "ti-check"></i>
                        </label>
                        <label>
                            <input type = "radio" name = "Gia" value = "1000000-1500000">
                            <div class = "content">Từ 1,000,000₫ - 1,500,000₫</div>
                            <i class = "ti-check"></i>
                        </label>
                        <label>
                            <input type = "radio" name = "Gia" value = "1500000-2000000">
                            <div class = "content">Từ 1,500,000₫ - 2,000,000₫</div>
                            <i class = "ti-check"></i>
                        </label>
                        <label>
                            <input type = "radio" name = "Gia" value = "2000000-3000000">
                            <div class = "content">Từ 2,000,000₫ - 3,000,000₫</div>
                            <i class = "ti-check"></i>
                        </label>
                        <label>
                            <input type = "radio" name = "Gia" value = "3000000-">
                            <div class = "content">Lớn hơn 3,000,000₫</div>
                            <i class = "ti-check"></i>
                        </label>
                </div>
            </div>
            <input type="submit" value="Lọc sản phẩm" name = "Loc" id = "Loc_submit">

            </form>
        </div>
        
        <div id="artificial_turf " class="block-product">
            <div class="products">
                    <?php
                        if(isset($_GET['MaDM']) || isset($_GET['Sale'])){
                        function TinhTienGiam($TiLegiam, $data){
                            return $data - $data*$TiLegiam/100;
                        }

                        include('./db/DAOSP.php');
                        $db = new DAOSP();
                        $db->connect();


                        $data = null;

                        //su dung cach ghep chuoi de toi uu hoa cac thao tac loc
                        if(isset($_GET['MaDM'])){
                            $MaDM = $_GET['MaDM'];
                            //Khoi tao chuoi de truy van theo danh muc
                            $sql = "SELECT *, hang.Ten as TenHang FROM sanpham,hang WHERE MaDM = '".$MaDM."' AND sanpham.MaHang = hang.MaHang ";
                        }

                        if(isset($_GET['Sale'])){
                            $sql = "SELECT *, hang.Ten as TenHang FROM sanpham,hang WHERE sanpham.MaHang = hang.MaHang AND MaKhuyenMai != '#' ";
                        }

                        //Kiem tra xem nguoi dung co chon rieng 1 hang nao tu top menu khong
                        if(isset($_GET['MaHang'])){
                            $Hang = $_GET['MaHang'];
                            $sql = $sql . "AND sanpham.MaHang = '".$Hang."' ";
                        }
                        
                        
                        
                        //kiem tra xem co loc hay khong
                        if(isset($_POST['Loc'])){
                            if(isset($_POST['Hang'])){
                                //Neu co chon Hang thi them dieu kien loc hang vao chuoi truy van
                                $Hang = $_POST['Hang'];
                                $sql = $sql . "AND sanpham.MaHang = '".$Hang."' ";
                            }
                            if (isset($_POST['Gia'])){
                                // Dua dieu kien loc theo gia vao cau truy van
                                $Gia = $_POST['Gia'];
                                $sql = $sql . ' AND sanpham.Gia';
                                switch ($Gia) {
                                    case '0-1000000':{
                                        $sql = $sql . " < 1000000";
                                        break;
                                    }
                                    case '1000000-1500000':{
                                        $sql = $sql . " BETWEEN 1000000 AND 1500000" ;
                                        break;
                                    }
                                    case "1500000-2000000":{
                                        $sql = $sql . " BETWEEN 1500000 AND 2000000" ;
                                        break;
                                    }
                                    case "2000000-3000000":{
                                        $sql = $sql . " BETWEEN 2000000 AND 3000000" ;
                                        break;
                                    }
                                    case "3000000-":{
                                        $sql = $sql . " > 3000000";
                                        break;
                                    }

                                }

                            }
                        }
                        $data = $db->getListDanhSach($sql);

                        $n = 0;

                        if($data != null) {
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
                    }
                    ?>
                </div>
            </div>
        </div>
    
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
                    <label>Màu sắc:</label>
                    <ul class="list list-color" id="js-color">
                        <li class="color clicked">
                            <label>
                                <input onclick="getValueColor()" name="color" checked="checked" type="radio"
                                    value="Xanh" >
                                <span>Xanh</span>
                            </label>
                        </li>
                        <li class="color">
                            <label>
                                <input onclick="getValueColor()" name="color" type="radio" value="Đỏ" >
                                <span>Đỏ</span>
                            </label>
                        </li>
                        <li class="color">
                            <label>
                                <input onclick="getValueColor()" name="color" type="radio" value="Vàng" >
                                <span>Vàng</span>
                            </label>
                        </li>


                    </ul>
                </div>
                <div class="quickview-select">
                    <label>Kích thước:</label>
                    <ul class="list list-size">
                        <li class="size clicked">
                            <label>
                                <input onclick="getValueSize()" name="size" checked="checked" type="radio" value="40"
                                    >
                                <span>40</span>
                            </label>
                        </li>
                        <li class="size">
                            <label>
                                <input onclick="getValueSize()" name="size" type="radio" value="41">
                                <span>41</span>

                            </label>
                        </li>
                        <li class="size">
                            <label>
                                <input onclick="getValueSize()" name="size" type="radio" value="42">
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
                <button class="add-cart">
                    <span class="icon-add-cart"></span>
                    <span>Thêm vào giỏ hàng</span>
                </button>
                <div class="quickview-description">
                    <h4>Mô tả: </h4>
                    Sản phẩm được thiết kế từ Quang Linh :>>>
                </div>
            </div>
    </div>

    <script>
        showQuickview();
        hideQuickview();
    </script>