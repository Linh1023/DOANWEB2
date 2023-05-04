<?php
if (isset($_POST['hd'])){
    // echo "anh chinh".$_POST['anhchinh'];
    $hd=$_POST['hd'];
    if(isset($_POST['id']))
        $id=$_POST['id'];
    // include '../../db/dbconnect.php';
    
    if (isset($_FILES['anhphu'])) {
        // Lấy tất cả các tập tin đã chọn
        if(isset($_FILES['anhphu'])) {
            $file_array = reArrayFiles($_FILES['anhphu']);
            // Xử lý mảng $file_array ở đây
        }
        
        function reArrayFiles($file_post) {
        
            $file_array = array();
            $file_count = count($file_post['name']);
            $file_keys = array_keys($file_post);
        
            for ($i=0; $i<$file_count; $i++) {
                foreach ($file_keys as $key) {
                    $file_array[$i][$key] = $file_post[$key][$i];
                }
            }
        
            return $file_array;
        }
      }
    
      
    // switch($hd){
    //     case "Lưu":
    //         // Truy vấn danh sách sản phẩm
    //         $sql = "UPDATE sanpham   SET Ten='".$_POST['ten']."',
    //                                     MoTa='".$_POST['mota']."',
    //                                     Gia=".$_POST['gia'].",
    //                                     MaKhuyenMai='".$_POST['khuyenmai']."' ,
    //                                     MaDM='".$_POST['danhmuc']."' ,
    //                                     AnhChinh='".$_POST['anhchinh']."',
    //                                     MaHang='".$_POST['hang']."'
    //                                     WHERE maSP='".$_POST['id']."'";
    //         echo $sql;
    //         $result=mysqli_query($conn, $sql);
    //         break;
    //     case "Thêm":
    //         // Tao listid da co san
    //         $listId=[];
    //         $sql = "SELECT MaSP FROM sanpham";
    //         $result = $conn->query($sql);
    //         // Kiểm tra kết quả trả về
    //         if ($result->num_rows > 0) {
    //             $i=0;
    //             while($row = $result->fetch_assoc()) {
    //                 $listId[$i]=$row['MaSP'];
    //                 $i++;
    //             }
    //         }
    //         // tìm id thích hợp
    //         for ($i = 1; $i < 1000; $i++) {
    //             $found = false;
    //             if (!in_array($i, $listId)) {
    //                 $id=$i;
    //                 break;
    //             }
    //         }
    //         // ép kiểu string
    //         $id=(string) $id;
    //         if (strlen($id) > 3) {
    //             echo "Lỗi tạo mã";
    //             return;
    //         }
    //         while (strlen($id) != 3) {
    //             $id="0" . $id;
    //         }
    //         // Thêm vào db
    //         $sql = "INSERT INTO sanpham (MaSP, Ten, MoTa, Gia, MaKhuyenMai, MaDM, AnhChinh,MaHang,NgayTao)
    //         VALUES ('" . $id . "',
    //         '" . $_POST['ten'] . "',
    //         '" . $_POST['mota'] . "',
    //         " . $_POST['gia'] . ",
    //         '" . $_POST['khuyenmai'] . "',
    //         '" . $_POST['danhmuc'] . "',
    //         '" . $_POST['anhchinh'] . "',
    //         '" . $_POST['hang'] . "',
    //         CURDATE())";
    //         $result = mysqli_query($conn, $sql);
    //         echo "$sql";
    //         if (!$result)
    //             echo "Lỗi khi thực hiện ở database";
    //         break;
    // }
    // Đóng kết nối
    // $conn->close();
    // header("Location:../editsp.php?id=".$id);
}

?>