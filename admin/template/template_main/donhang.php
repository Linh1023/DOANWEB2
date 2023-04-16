<!--
    kich thuoc table la w = 1076
    kich thuoc khung la 1100x 1048
-->
<form action="" method="POST">
    <h2 id="title_dh">Danh sách đơn hàng</h2>
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
            <th>Mã đơn</th>
            <th>Lưu ý</th>
            <th>Mã khách hàng</th>
            <th>Ngày đặt</th>
            <th>Trạng thái</th>
            <th>Tổng tiền</th>
            <th>Cập nhật trạng thái</th>
            <th>Xem chi tiết</th>
        </tr>
        <?php
            include("../db/DAODonHang.php");
            $db = new DAODonHang();
            $db->connect();
            $data = $db->getList('donhang');
            $i=0;
            while ($i < count($data)){
        ?>
                <tr>
                    <td><?php echo $data[$i][0]?></td>
                    <td><?php echo $data[$i][1]?></td>
                    <td><?php echo $data[$i][2]?></td>
                    <td><?php echo $data[$i][3]?></td>
                    <td><?php 
                            if($data[$i][4]==1){
                                echo 'Đã sử lý';
                            }
                            else{
                                echo 'Chưa xử lý';
                            }
                        ?></td>
                    <td><?php echo $data[$i][5]?></td>
                    <td><a href="./template/template_main/xulyDonHang.php?XL=<?php echo $data[$i][0]?>"><div>Xử lý đơn hàng</div></a></td>
                    <td><a href="xuly.php?CT=<?php echo $data[$i][0]?>"><div>Xem chi tiết đơn hàng</div></a></td>
                </tr>
        <?php
                $i++;
            }
        ?>

    </table>

</from>
