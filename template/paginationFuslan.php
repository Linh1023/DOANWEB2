<?php
    include "../db/dbconnect.php";

    $limit = 4;
    $page = 0;
    $output = '';
    if(isset($_POST["page"])){
        $page = $_POST["page"];
    }else{
        $page = 1;
    }
    $star_from = ($page -1)*$limit;
    $query = mysqli_query($conn,"SELECT * FROM `sanpham` WHERE DanhMuc = 'Giày đá bóng fulsan' ORDER BY 'MaSP' ASC LIMIT $star_from, $limit ");
    $output .='
    <div class="products">
   ';
if(mysqli_num_rows($query) > 0){
    while($row = mysqli_fetch_array($query)){
        $output .='
        <div class="product">
        <div class="product-image">
            <div class="quickview-background">
                <div class="quickview-box">Xem Nhanh</div>

            </div>
            <img src="./img/products/artificial_turf/xanh_cdec749c849644c9aa4d5923bdb65de6_large.webp" alt="">
        </div>
        <div class="product-info">
            <div class="product-name">'.$row['Ten'].'
            </div>
            <div class="product-vendor">'.$row['MoTa'].'</div>
            <div class="product-price">
                <span class="price-new price">'.number_format($row['Gia'], 0, ",", ".").' đ</span>
                <span class="price-old price">2.890.000 đ</span>
            </div>
        </div>
        </div>
        
        ';
    }
}else{
    $output .='
    <p>ko thay data</p>
    ';
}
$output .= '
    </div>
';

//pagination
$query = mysqli_query($conn,"SELECT * FROM `sanpham` WHERE DanhMuc = 'Giày đá bóng fulsan'");
$total_records = mysqli_num_rows($query);
$total_page = ceil($total_records / $limit);
$output .= '<ul class="pagination">';

if($page > 1){
    $previous = $page - 1;
    $output .= '<li class="page-item-FS" id="1"><span class="page-link">frist</span></li>';
    $output .= '<li class="page-item-FS" id="'.$previous.'"><span class="page-link"><i class="bi bi-chevron-double-left"></i></span></li>';
}

for($i=1;$i<=$total_page; $i++){
    $active_class = "";
    if($i == $page){
        $active_class = "active";
    }
    $output .= '<li class="page-item-FS '.$active_class.'" id="'.$i.'"><span class="page-link">'.$i.'</span></li>';
}

if($page < $total_page){
    $page++;
    $output .= '<li class="page-item-FS" id="'.$page.'"><span class="page-link"><i class="bi bi-chevron-double-right"></i></span></li>';
    $output .='<li class="page-item-FS" id="'.$total_page.'"><span class="page-link">last</span></li>';
}
$output .= '</ul>';
echo $output;
?>

<style>
   .pagination{
            float: right;
            margin: 0 15px;
            display: flex;
        }
        .page-item-FS.active{
            background-color: blanchedalmond;
        }
        .page-item-FS{
            cursor: pointer;
            width: 40px;
            height: 30px;
            border: 1px solid;
            margin: 0 3px;
            text-align: center;
            padding-top: 4px;
        }
        
        
</style>