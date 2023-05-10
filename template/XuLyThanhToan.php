<?php
    session_start();

    include("../db/DAODonHang.php");

    $db = new DAODonHang();
    $db->connect();



    if(!isset($_SESSION['MaTaiKhoan'])){

        echo '<script>alert("Bạn chưa đăng nhập vào hệ thống nên không thanh toán được"); window.location="../GioHang.php";</script>';
    }
    echo $_SESSION['MaTaiKhoan'];
    
    $Date = getdate();

    $NgayDat = $Date['year']."-".$Date['mon']."-".$Date['mday'];

    // if($db->Insert($MaTK))
    
?>