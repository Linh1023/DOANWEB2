<?php
if (isset($_POST['hd'])){
    $hd=$_POST['hd'];
    if (isset($_POST['id']))
    $id=$_POST['id'];
    include '../../db/dbconnect.php';
    switch($hd){
        case "Lưu":
            // Truy vấn danh sách sản phẩm
            $sql = "UPDATE hang   SET Ten='".$_POST['ten']."' WHERE MaHang='".$_POST['id']."'";
            echo $sql;
            $result=mysqli_query($conn, $sql);
            break;
        case "Thêm":
            $listId=[];
            $sql = "SELECT MaHang FROM hang";
            $result = $conn->query($sql);
            // Kiểm tra kết quả trả về
            if ($result->num_rows > 0) {
                $i=0;
                while($row = $result->fetch_assoc()) {
                    $listId[$i]=$row['MaHang'];
                    $i++;
                }
            }
            // tìm id thích hợp
                if (in_array($i, $listId)){
                    header("Location:../editH.php");
                    return;
                }
            // // ép kiểu string
            // $id=(string) $id;
            // if (strlen($id) > 3) {
            //     echo "Lỗi tạo mã";
            //     return;
            // }
            // while (strlen($id) != 3) {
            //     $id="0" . $id;

            // }
            // $id='MH-100';

            // Thêm vào db
            $sql = "INSERT INTO hang (MaHang, Ten,NgayTao)
            VALUES ('" . $id . "',
            '" . $_POST['ten'] . "',
            CURDATE())";
            $result = mysqli_query($conn, $sql);
            if (!$result)
                echo "Lỗi khi thực hiện ở database";
            break;
    }
    // Đóng kết nối
    $conn->close();
    header("Location:../editH.php?id=".$id);
}

?>