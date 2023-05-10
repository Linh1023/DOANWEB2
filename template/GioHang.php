<?php
    include('./db/DAOSP.php');
    $db = new DAOSP();
    $db->connect();
    
   


    if(isset($_POST['add_to_cart'])){
        $MaSP = $_POST['MaSP'];
        $Size = $_POST['Size'];
        if(isset($_POST['sl'])){
            $SL = $_POST['sl'];
        }
        else{
            $SL = 1;
        }


        $data = $db->getList($MaSP);

        $TiLegiam = $db->getTiLeGiam($MaSP);

        function TinhTienGiam($TiLegiam, $data){
            return $data[0][2] - $data[0][2]*$TiLegiam/100;
        }
        
        echo $TiLegiam;

        


        if(isset($_SESSION['cart'])){
            $session_array_id = array_column($_SESSION['cart'], 'ID');

            if(!in_array($MaSP,$session_array_id)){
                $session_array = array(
                    "ID" => $data[0][0],
                    "Name" => $data[0][1],
                    "Price" => TinhTienGiam($TiLegiam,$data),
                    "Img" => $data[0][4],
                    "Size" => $Size,
                    "SL" => $SL
                );
    
                $_SESSION['cart'][] = $session_array;
            }
        }
        else{
            $session_array = array(
                "ID" => $data[0][0],
                "Name" => $data[0][1],
                "Price" => TinhTienGiam($TiLegiam,$data),
                "Img" => $data[0][4],
                "Size" => $Size,
                "SL" => $SL
            );

            $_SESSION['cart'][] = $session_array;
        }
    }
    session_destroy();
?>



<div id = "gio_hang_container">
        <div id = "thong_tin">
            <h1>Giỏ hàng</h1>
            <div id="cart_form">
                <form>
                    <table id = "don_hang">
                        <tbody>
                            <tr>
                                <th>&ensp;&ensp;&ensp;</th>
                                <th>Sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th>&ensp; </th>
                            </tr>
                            <?php
                                foreach($_SESSION['cart'] as $key => $value)
                                {
                            ?>
                            <tr>
                                <td><a href="#"><img src = "./img/products/<?php echo $value['Img']?>"></a></td>
                                <td><a href="#">
                                    <strong><?php echo $value['Name']?></strong>
                                    <span class="variant_title">Size: <?php echo $value['Size']?></span>
                                </a></td>
                                <td>
                                    <?php echo number_format($value['Price'],0,",",".")."đ"?>
                                </td>
                                <td>
                                    <input type = "number" value="1" class = "sl">
                                </td>
                                <td>
                                <?php echo number_format($value['Price'] * $value['SL'],0,",",".")."đ"?>
                                </td>
                                <td>
                                    <button type = "button" class = "delete"><i class="ti-trash trash"></i></button>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        
                    </table>
                </form>
            </div>
            
            <div class="clearfix">
                <a href="index.php">mua tiếp</a>
                <button type="button" class="btn">Cập nhật giỏ hàng</button>
            </div>
        </div>
        <div id = "thanh_toan">
            <h2>Đơn hàng</h2>
            <div id="thanh_toan_container">
                <h2>
                    <label>Tổng tiền</label>
                    <label class="tien">20000000</label>
                </h2>
                <a href="#">THANH TOÁN</a>
            </div>
        </div>
</div>