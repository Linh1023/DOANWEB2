<?php
    session_start();

    include("../db/DAODonHang.php");

    $db = new DAODonHang();
    $db->connect();



    if(!isset($_SESSION['MaTaiKhoan'])){

        echo '<script>alert("Bạn chưa đăng nhập vào hệ thống nên không thanh toán được"); window.location="../GioHang.php";</script>';
    }

    $MaTK =  $_SESSION['MaTaiKhoan'];

    $NgayDat= date("Y-m-d");

    // echo $NgayDat;

    $TongTien = 0 ;

    if(isset($_SESSION['cart'])){
                            
        foreach ($_SESSION['cart'] as $key => $value){
            $TongTien += $value['SL'] * $value['Price'];
        }
    }

    if($db->Insert($MaTK,$NgayDat,$TongTien)){
        echo '<script>alert("Đơn hàng sẽ được xử lý nhanh nhất có thể"); window.location="../GioHang.php";</script>';
    }
    else{
        echo '<script>alert("Tạo đơn thất bại"); window.location="../GioHang.php";</script>';
    }
    
?>