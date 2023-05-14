<?php
include '../../db/dbconnect.php';
if(isset($_GET['idsp'])) {
    $idsp = $_GET['idsp'];
    $sql = 'DELETE FROM khachhang WHERE MaKhach = "'.$idsp.'"';
    $result = $conn->query($sql);

}
$conn->close();

header("Location: ../index.php?id=nd");

?>
