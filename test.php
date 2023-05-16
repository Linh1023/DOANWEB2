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
    ';
}
?>