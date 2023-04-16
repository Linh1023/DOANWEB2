<link rel="stylesheet" href="../../css/ChiTietDonHang.css">

<?php
    $Madon = $_GET['CT'];
    $LuuY = $_GET['LuuY'];
    $MaTK = $_GET['MaTK'];
    $Date = $_GET['Date'];
    $TT = $_GET['TT'];
?>

<div id="ctdh">
    <h2>Chi Tiết Hóa Đơn</h2>
    <p>Mã đơn hàng:       <?php echo $Madon?></p>
    <p>Mã tài khoản:      <?php echo $MaTK?></p>
    <p>Lưu ý:             <?php echo $LuuY?></p>
    <p>Ngày đặt:          <?php echo $Date?></p>
    <p>Tổng tiền:         <?php echo $TT?></p>

    <table id="ds_donhang">
        <tr>
            <th>Mã sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Tổng tiền</th>
        </tr>
        <?php
            include("../../../db/DAOChiTietDonHang.php");
            $db = new DAOChiTietDonHang();
            $db->connect();
            $data = $db->getList($Madon);
            $i=0;
            while ($i < count($data)){
        ?>
                <tr>
                    <td><?php echo $data[$i][0]?></td>
                    <td><?php echo $data[$i][1]?></td>
                    <td><?php echo $data[$i][2]?></td>
                    <td><?php echo $data[$i][3]?></td>
                </tr>
        <?php
                $i++;
            }
        ?>
</div>