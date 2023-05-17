<?php
if (isset($_POST['hd'])) {
    $hd = $_POST['hd'];
    include '../../db/dbconnect.php';

        //kiểm tra điều kiện pattern
        if(isset($_POST['id']))$id=$_POST['id'];


    switch ($hd) {
        case "Lưu":

            if (preg_match('/^0\d{9}$/', $_POST['sdt']) == false) {
                echo "<script>
                    alert('Số điện thoại không hợp lệ. Vui lòng nhập số điện thoại 10 chữ số và bắt đầu bằng số 0.');
                    window.location = '../editkh.php?id=$id&hd=$hd'
                    </script>";
                return;
            }
        
            if (!preg_match('/^[a-zA-Z0-9]{5,}$/', $_POST['tendn'])) {
                echo "<script>alert('Tên đăng nhập phải có ít nhất 5 kí tự và chỉ chứa chữ cái và số.'); window.location = '../editkh.php?id=$id&hd=$hd';</script>";
                return;
            }
            if (substr($_POST['email'], -10) !== "@gmail.com") {
                echo "<script>alert('Email phải có đuôi @gmail.com.'); window.location = '../editkh.php?id=$id&hd=$hd';</script>";
                return;
            }

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
                                        SDT ='" . $_POST['sdt'] . "',
                                        MaTaiKhoan='" . $_POST['idtk'] . "'
                                        WHERE MaKhach='" . $_POST['id'] . "'";
                                       
            $result = mysqli_query($conn, $sql);
            echo $sql;

            break;
        case "Thêm":

            if (preg_match('/^0\d{9}$/', $_POST['sdt']) == false) {
                echo "<script>
                    alert('Số điện thoại không hợp lệ. Vui lòng nhập số điện thoại 10 chữ số và bắt đầu bằng số 0.');
                    window.location = '../editkh.php'
                    </script>";
                return;
            }
        
            if (!preg_match('/^[a-zA-Z0-9]{5,}$/', $_POST['tendn'])) {
                echo "<script>alert('Tên đăng nhập phải có ít nhất 5 kí tự và chỉ chứa chữ cái và số.'); window.location = '../editkh.php';</script>";
                return;
            }
            if (substr($_POST['email'], -10) !== "@gmail.com") {
                echo "<script>alert('Email phải có đuôi @gmail.com.'); window.location = '../editkh.php';</script>";
                return;
            }
           

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
                '" . $_POST['sdt'] . "',
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
    header("Location:../editkh.php?id=$id&hd=$hd");
}

?>