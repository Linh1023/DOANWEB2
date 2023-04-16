
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
            if(isset($_POST['Loc']) == false){
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
                    <td><a href="./template/template_content/xulyDonHang.php?XL=<?php echo $data[$i][0]?>"><div>Xử lý đơn hàng</div></a></td>
                    <td><a href="./template/template_content/ChiTietDonHang.php?CT=<?php echo $data[$i][0]?>&LuuY=<?php echo $data[$i][1]?>&MaTK=<?php echo $data[$i][2]?>&Date=<?php echo $data[$i][3]?>&TT=<?php echo $data[$i][5]?>"><div>Xem chi tiết đơn hàng</div></a></td>
                </tr>
        <?php
                    $i++;
                }
            }
            else{
                if(isset($_POST['from']) && $_POST['to']){
                    $from = $_POST['from'];
                    $to = $_POST['to'];
                    include('../db/DAODonHang.php');
                    $db = new DAODonHang();
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
                            <td><a href="./template/template_content/xulyDonHang.php?XL=<?php echo $data[$i][0]?>"><div>Xử lý đơn hàng</div></a></td>
                            <td><a href="./template/template_content/ChiTietDonHang.php?CT=<?php echo $data[$i][0]?>&LuuY=<?php echo $data[$i][1]?>&MaTK=<?php echo $data[$i][2]?>&Date=<?php echo $data[$i][3]?>&TT=<?php echo $data[$i][5]?>"><div>Xem chi tiết đơn hàng</div></a></td>
                        </tr>
        <?php    
                        $i++;
                    }
                }
            }
        ?>

    </table>

</from>
