<?php
include '../../db/dbconnect.php';
if(isset($_GET['idsp'])) {
    $idsp = $_GET['idsp'];
    $sql = 'DELETE FROM danhmuc WHERE MaDM = "'.$idsp.'"';
    echo $sql;
    $result = $conn->query($sql);

}
$conn->close();

header("Location: ../index.php?id=dm"); 

?>
