<?php
$MaQuyen = $_GET['pq'];
include '../../db/dbconnect.php';
if(isset($_GET['idsp'])) {
    $idsp = $_GET['idsp'];
    $sql = 'DELETE FROM sanpham WHERE MaSP = "'.$idsp.'"';
    $result = $conn->query($sql);

}
$conn->close();

header("Location: ../index.php?pq=".$MaQuyen."&id=sp");

?>
