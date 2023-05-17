<?php
$MaQuyen = $_GET['pq'];
include '../../db/dbconnect.php';
if(isset($_GET['idsp'])) {
    $idsp = $_GET['idsp'];
    $sql = 'DELETE FROM nhanvien WHERE MaNhanVien = "'.$idsp.'"';
    $result = $conn->query($sql);
    echo $sql;

}
$conn->close();

header("Location: ../index.php?pq=".$MaQuyen."&id=nd");

?>
