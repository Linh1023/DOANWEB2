    <link rel="stylesheet" href="./css/products.css">
    <link rel="stylesheet" href="./css/main.css">
    <script src="./js/index.js"></script>
<?php
include 'db/dbconnect.php';
$sql = "SELECT * FROM sanpham";
$result = mysqli_query($conn, $sql);
echo '
<div id="artificial_turf " class="block-product">
<div class="container">
<div class="title-block">
<div class="title-content">
<h2 class="title">Giày đá bóng sân cỏ nhân tạo</h2>
<div class="describe">Giày đá bóng đinh TF cập nhật thường xuyên</div>
</div>
</div>
<div class="products">
';
while ($row = mysqli_fetch_assoc($result)) {
    $selectTenHang = 'SELECT Ten FROM hang WHERE MaHang = "'. $row['MaHang'] . '"';
    $resultTenHang = mysqli_query($conn, $selectTenHang);
    $rowTenHang = mysqli_fetch_assoc($resultTenHang);
    echo '
    <div class="product">
    <div class="product-image">
    <div class="quickview-background">
    <div class="quickview-box" onclick = >Xem Nhanh</div>       
    </div>
    <img src="./img/products/'.$row['AnhChinh'].' "alt="">
    </div>
    <div class="product-info">
    <div class="product-name"> '.$row['Ten'].'
    </div>
            <div class="product-vendor"> '.$rowTenHang['Ten'].'</div>
            <div class="product-price">
                <span class="price-new price">  '.$row['Gia'].'</span>
                <span class="price-old price">  '.($row['Gia']-100).'</span>
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
                        <div class="item clicked"
                            <label>
                                <input onclick="getValueImgQuickview()" type="radio" name="img-quickview">
                                <img data-image="./img/products/cotunhien.webp" src="./img/products/cotunhien.webp" alt="">
                            </label>
                        </div>

                        <div class="item "
                            <label>
                                <input onclick="getValueImgQuickview()" type="radio" name="img-quickview">
                                <img data-image="./img/products/cotunhien.webp" src="./img/products/cotunhien.webp" alt="">
                            </label>
                        </div>

                        <div class="item "
                            <label>
                                <input onclick="getValueImgQuickview()" type="radio" name="img-quickview">
                                <img data-image="./img/products/cotunhien.webp" src="./img/products/cotunhien.webp" alt="">
                            </label>
                        </div>

                        <div class="item "
                            <label>
                                <input onclick="getValueImgQuickview()" type="radio" name="img-quickview">
                                <img data-image="./img/products/cotunhien.webp" src="./img/products/cotunhien.webp" alt="">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="quickview-content">
                <div class="title" id="TenGiay">
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
                                <input onclick="getValueSize()" name="size" checked="checked" type="radio" value="40"
                                    id="">
                                <span>40</span>
                            </label>
                        </li>
                        <li class="size">
                            <label>
                                <input onclick="getValueSize()" name="size" type="radio" value="41" id="">
                                <span>41</span>

                            </label>
                        </li>
                        <li class="size">
                            <label>
                                <input onclick="getValueSize()" name="size" type="radio" value="42" id="">
                                <span>42</span>
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="quickview-quantity">
                    Số lượng còn lại: <p>25 đôi</p>
                </div>
                <button class="add-cart">
                    <span class="icon-add-cart"></span>
                    <span>Thêm vào giỏ hàng</span>
                </button>
                <div class="quickview-description">
                    <h4>Mô tả: </h4>
                    <p>Sản phẩm được thiết kế từ Quang Linh :>>></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // getInformation(`a`,`23000`,`98`,`a`,`2`);
        showQuickview();
        hideQuickview();
    </script>
    
    ';
}
?>