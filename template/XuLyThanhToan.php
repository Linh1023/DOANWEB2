<?php
    session_start();

    if(!isset($_SESSION['MaTaiKhoan'])){
        echo '<script>alert("Bạn chưa đăng nhập vào hệ thống nên không thanh toán được"); window.location="../GioHang.php";</script>';
    }

    
?>