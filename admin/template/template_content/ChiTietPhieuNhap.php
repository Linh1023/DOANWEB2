<link rel="stylesheet" href="../../css/bootstrap.min.css">
<link rel="stylesheet" href="../../css/ChiTietDonHang.css">


<?php
    include("../../../db/DAOChiTietPhieuNhap.php");
    $db = new DAOChiTietPhieuNhap();
    $db->connect();
    $Madon = $_GET['CT'];
    $NgayTao = $_GET['NgayTao'];
    $TT= $_GET['TongDon'];
    $MaH = $_GET['MaH'];
    $MaTK = $_GET['MaTK'];
    $TenH = $db->getTenHang($MaH);
    $TenNV = $db->getTenNhanVien($MaTK);
?>

<div id="ctdh" class="container">
    <h2>Chi Tiết Phiếu Nhập</h2>
    <div class="row">
        <div class="col col-6">
                <p>Mã phiếu:  <?php echo $Madon?></p>
                <p>Ngày tạo: <?php echo $NgayTao?></p>
                <p>Mã hãng: <?php echo $MaH?></p>
                <p>Tên hãng: <?php echo $TenH[0]?></p>
        </div>
        <div class="col col-6">
            <p>Mã tài khoản: <?php echo $MaTK?></p>
            <p>Tên nhân viên: <?php echo $TenNV[0]?></p>
            <!-- Hien thi theo tien viet nam -->
            <p>Tổng tiền: <?php echo number_format($TT,0,',','.')."đ"?></p>

        </div>
    </div>
    
    
    

    <table id="ds_donhang">
        <tr>
            <th>Mã sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Tổng tiền</th>
        </tr>
        <?php
            
            $data = $db->getList($Madon);
            if($data == null){
                return ;
            }
            $i=0;
            while ($i < count($data)){
        ?>
                <tr>
                    <td><?php echo $data[$i][0]?></td>
                    <td><?php echo $data[$i][1]?></td>
                    <td><?php echo number_format($data[$i][3],0,',','.')."đ"?></td>
                    <td><?php echo number_format($data[$i][4],0,',','.')."đ"?></td>
                </tr>
        <?php
                $i++;
            }
        ?>
</div>