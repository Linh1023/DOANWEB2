
<form action="" method="POST">
    <h2 id="title_dh">Danh sách phiếu nhập</h2>
    <!-- Tạo thành chọn ngày lọc -->
    <h3 id="title_loc">Lọc đơn hàng theo ngày</h3>
    <label for="from" class="label_from">Từ :</label>
    <input type="date" name="from" id="from">
    <label for="to" class="to">Đến :</label>
    <input type="date" name="to" id="to">
    <input type="submit" name="Loc" id="Loc" value="Lọc">
    <input type="submit" name="Refresh" id="Refresh" value="Refresh">
 


    
    <table id="ds_donhang">
        <tr>
            <th>Mã phiếu</th>
            <th>Ngày tạo</th>
            <th>Tổng đơn</th>
            <th>Mã hãng</th>
            <th>Mã tài khoản</th>
            <th style = "width: 23%">Xem chi tiết</th>
        </tr>
        <?php
            if(isset($_POST['Loc']) == false){
                include("../db/DAOPhieuNhap.php");
                $db = new DAOPhieuNhap();
                $db->connect();
                $data = $db->getList();
                if($data == null){
                    return;
                }
                $i=0;
                while ($i < count($data)){
        ?>
                <tr>
                    <td><?php echo $data[$i][0]?></td>
                    <td><?php echo $data[$i][1]?></td>
                    <td><?php echo number_format($data[$i][2],0,',','.')."đ"?></td>
                    <td><?php echo $data[$i][3]?></td>
                    <td><?php echo $data[$i][4]?></td>
                    <td><a href="./template/template_content/ChiTietDonHang.php?CT=<?php echo $data[$i][0]?>&NgayTao=<?php echo $data[$i][1]?>&TongDon=<?php echo $data[$i][2]?>&MaH=<?php echo $data[$i][3]?>&MaTK=<?php echo $data[$i][4]?>"><div>Xem chi tiết đơn hàng</div></a></td>
                
                </tr>
        <?php
                    $i++;
                }
            }
            else{
                if(isset($_POST['from']) && $_POST['to']){
                    $from = $_POST['from'];
                    $to = $_POST['to'];
                    include('../db/DAOPhieuNhap.php');
                    $db = new DAOPhieuNhap();
                    $db->connect();
                    $data = $db->Loc($from,$to);
                    if($data == false){
                        return;
                    }
                    $i=0;
                    while ($i < count($data)){
        ?>
                        <tr>
                    <td><?php echo $data[$i][0]?></td>
                    <td><?php echo $data[$i][1]?></td>
                    <td><?php echo number_format($data[$i][2],0,',','.')."đ"?></td>
                    <td><?php echo $data[$i][3]?></td>
                    <td><?php echo $data[$i][4]?></td>
                    <td><a href="./template/template_content/ChiTietPhieuNhap.php?CT=<?php echo $data[$i][0]?>&MaTK=<?php echo $data[$i][1]?>&Date=<?php echo $data[$i][2]?>&TT=<?php echo $data[$i][4]?>"><div>Xem chi tiết đơn hàng</div></a></td>
                
                </tr>
        <?php    
                        $i++;
                    }
                }
            }
        ?>

    </table>

</from>
