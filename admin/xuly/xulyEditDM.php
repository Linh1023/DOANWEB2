<?php
if (isset($_POST['hd'])){
    $hd=$_POST['hd'];
    if (isset($_POST['id']))
    $id=$_POST['id'];
    include '../../db/dbconnect.php';
    switch($hd){
        case "Lưu":
            // Truy vấn danh sách sản phẩm
            $sql = "UPDATE danhmuc  SET TenDM='".$_POST['ten']."' WHERE MaDM='".$_POST['id']."'";
            echo $sql;
            $result=mysqli_query($conn, $sql);
            break;
        case "Thêm":
            // Tao listid da co san
            $listId=[];
            $sql = "SELECT MaDM FROM danhmuc";
            $result = $conn->query($sql);
            // Kiểm tra kết quả trả về
            if ($result->num_rows > 0) {
                $i=0;
                while($row = $result->fetch_assoc()) {
                    $listId[$i]=$row['MaDM'];
                    $i++;
                }
            }



            // tìm id thích hợp
            // for ($i = 1; $i < 1000; $i++) {
            //     $found = false;
            //     if (!in_array($i, $listId)) {
            //         $id=$i;
            //         break;
            //     }
            // }
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
            $sql = "INSERT INTO danhmuc (MaDM, TenDM,NgayTao)
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
    header("Location:../editDM.php?id=".$id);
}

?>