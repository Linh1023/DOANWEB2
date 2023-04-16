<?php
    include("../../../db/DAODonHang.php");
    if(isset($_GET['XL'])){
        $MaDon = $_GET['XL'];
        $db = new DAODonHang();
        $db->connect();
        if($db->XuLyDon($MaDon) == true){
            header('Location:../../index.php?chon=$&id=dh');
        }
    }
?>