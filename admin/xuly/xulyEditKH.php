<?php
if (isset($_POST['hd'])) {
    $hd = $_POST['hd'];
    include '../../db/dbconnect.php';
    switch ($hd) {
        case "Lưu":

            // Truy vấn danh sách tai khoan
            $mataikhoan=$_POST['idtk'];
            $sql = "UPDATE taikhoan  SET TenDN='" . $_POST['tendn'] . "',
                                        MatKhau='" . $_POST['matkhau'] . "',
                                        Email ='" . $_POST['email'] ."',
                                        Quyen ='". $_POST['quyen'] ."',
                                        TinhTrang ='". $_POST['tinhtrang'] ."'
                                        WHERE MaTaiKhoan='" . $_POST['idtk'] . "'";
                                       
            $result = mysqli_query($conn, $sql);
            echo $sql;
            // Truy vấn danh sách khách hàng
            $sql = "UPDATE khachhang   SET TenKhach='" . $_POST['ten'] . "',
                                        DiaChi='" . $_POST['diachi'] . "',
                                        SDT =" . $_POST['sdt'] . ",
                                        MaTaiKhoan='" . $_POST['idtk'] . "'
                                        WHERE MaKhach='" . $_POST['id'] . "'";
                                       
            $result = mysqli_query($conn, $sql);
            echo $sql;

            break;
        case "Thêm":
            // Tao listid da co san
            $listId = [];
            $sql = "SELECT MaTaiKhoan FROM taikhoan";
            $result = $conn->query($sql);
            // Kiểm tra kết quả trả về
            if ($result->num_rows > 0) {
                $i = 0;
                while ($row = $result->fetch_assoc()) {
                    $listId[$i] = $row['MaTaiKhoan'];
                    $i++;
                }
            }
            // tìm id thích hợp
            for ($i = 1; $i < 1000; $i++) {
                $found = false;
                if (!in_array($i, $listId)) {
                    $id = $i;
                    break;
                }
            }
            // ép kiểu string
            $id = (string) $id;

            // Thêm vào db
            $sql = "INSERT INTO taikhoan (TenDN,MatKhau,Email ,Quyen ,TinhTrang ,MaTaiKhoan,NgayTao )
            VALUES (
            '" . $_POST['tendn'] . "',
            '" . $_POST['matkhau'] . "',
            '" . $_POST['email'] . "',
            '" . $_POST['quyen'] . "',
            '" . $_POST['tinhtrang'] . "',
            '" . $id . "',
            CURDATE())";                                      
            $result = mysqli_query($conn, $sql);
            echo $sql;
            // Truy vấn danh sách khách hàng
            $sql = "INSERT INTO khachhang  (TenKhach,DiaChi,SDT ,MaTaiKhoan,MaKhach)
            VALUES (
                '" . $_POST['ten'] . "',
                '" . $_POST['diachi'] . "',
                " . $_POST['sdt'] . ",
                '" . $id . "',
                NULL)";
                                       
            $result = mysqli_query($conn, $sql);
            echo "$sql";
            if (!$result)
                echo "Lỗi khi thực hiện ở database";
            else
                break;
    }
    // Đóng kết nối
    $conn->close();
    // header("Location:../editsp.php?id=" . $id);
}

?>