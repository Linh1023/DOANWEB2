<div id="nguoidung">
<?php
include '../db/dbconnect.php';
// Truy vấn danh sách sản phẩm
$sql = "SELECT * FROM khachhang";
$result = $conn->query($sql);

// Kiểm tra kết quả trả về
if ($result->num_rows > 0) {
    // Hiển thị danh sách sản phẩm
    echo "
    <div id='khachhang' class='d-block'>
    <div class='row mark m-0'>
    <p class='text-center'>Bảng khách hàng</p></div>
    <table>
            <tr>
                <th>ID</th>
                <th>Tên Khách Hàng</th>
                <th>Điểm</th>
                <th>Địa chỉ</th>
                <th>SĐT</th>
                <th>Tên đăng nhập</th>
                <th>Mat Khau</th>
                <th>Tình trạng</th>
            </tr>";
    $hanhdong=array(
        "xe"=>"Xem",
        "s"=>"Sửa",
        "xo"=>"Xóa"
    );
    while($row = $result->fetch_assoc()) {
        $selectTaiKhoan = 'SELECT * FROM taikhoan WHERE MaTaiKhoan = "'. $row['MaTaiKhoan'] . '"';
        $resultTaiKhoan = mysqli_query($conn, $selectTaiKhoan);
        $rowTaiKhoan = mysqli_fetch_assoc($resultTaiKhoan);
        echo "<tr>
            <td>" . $row['MaKhach']. "</td>
            <td style='width:160px;'>
                <div class='row'>"
                    .$row['TenKhach']."
                </div>
                <div class='row hanhdong'>";
               
            foreach($hanhdong as $key=>$val){
                echo"<a href='index.php?id=nd&hd=".$key."&idsp=".$row['MaKhach']."' class='".$key."'>
                        <div class='col'>
                            $val
                        </div>
                    </a>";
                }
        echo "        </div>
            </td>
            <td>" . $row["TichDiem"]. "</td>
            <td>" . $row["DiaChi"]. "</td>
            <td>" . $row["SDT"]. "</td>
            <td>" . $rowTaiKhoan["TenDN"]. "</td>
            <td>" . $rowTaiKhoan["MatKhau"]. "</td>
            <td>" . $rowTaiKhoan["TinhTrang"]. "</td>
        </tr>";
    }
    echo "</table>
    </div>";
} else {
    echo "Không có sản phẩm.";
}

$sql = "SELECT * FROM nhanvien";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "
    <div id='nhanvien' class='d-block'>
    <div class='row mark m-0'>
    <p class='text-center'>Bảng nhân viên</p></div>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên Nhân viên</th>
            <th>Quyền</th>
            <th>Địa chỉ</th>
            <th>SĐT</th>
            <th>Tên đăng nhập</th>
            <th>Mat Khau</th>
            <th>Tình trạng</th>
        </tr>";
    $hanhdong=array(
        "xe"=>"Xem",
        "s"=>"Sửa",
        "xo"=>"Xóa"
    );
    while($row = $result->fetch_assoc()) {
        $selectTaiKhoan = 'SELECT * FROM taikhoan WHERE MaTaiKhoan = "'. $row['MaTaiKhoan'] . '"';
        $resultTaiKhoan = mysqli_query($conn, $selectTaiKhoan);
        $rowTaiKhoan = mysqli_fetch_assoc($resultTaiKhoan);
        echo "<tr>
            <td>" . $row['MaNhanVien']. "</td>
            <td style='width:160px;'>
                <div class='row'>"
                    .$row['TenNhanVien']."
                </div>
                <div class='row hanhdong'>";
               
            foreach($hanhdong as $key=>$val){
                echo"<a href='index.php?id=nd&hd=".$key."&idsp=".$row['MaNhanVien']."' class='".$key."'>
                        <div class='col'>
                            $val
                        </div>
                    </a>";
                }
        echo "        </div>
            </td>
            <td>" . $row["Quyen"]. "</td>
            <td>" . $row["DiaChi"]. "</td>
            <td>" . $row["SDT"]. "</td>
            <td>" . $rowTaiKhoan["TenDN"]. "</td>
            <td>" . $rowTaiKhoan["MatKhau"]. "</td>
            <td>" . $rowTaiKhoan["TinhTrang"]. "</td>
        </tr>";
    }
    echo "</table>
    </div>";
} else {
    echo "Không có sản phẩm.";
}

// Đóng kết nối
$conn->close();
?>
</div>