<?php
$MaQuyen = $_GET['pq'];
include '../../db/dbconnect.php';
if(isset($_GET['idpn'])) {
    $idpn = $_GET['idpn'];
    $sql = 'UPDATE phieunhaphang SET TrangThai=0 where  MaPhieu = "'.$idpn.'"';
    $result = $conn->query($sql);
    if($result)
    echo "<script>
    alert('Xóa Thành Công');
    window.location = '../index.php?pq=".$MaQuyen."&id=pn'
    </script>";
    $conn->close();
    return;
}
else{
    echo "<script>
    alert('Xóa không Thành Công');
    window.location = '../index.php?pq=".$MaQuyen."&id=pn'
    </script>";
    $conn->close();
        return;
}
?>
