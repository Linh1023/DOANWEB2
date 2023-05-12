<?php
function uploadFiles($uploadedFiles) {
    $files = array();
    $errors = array();
    $returnFiles = array();
    //Xử lý gom dữ liệu vào từng file đã upload
    // var_dump($uploadedFiles);exit;
    foreach ($uploadedFiles as $key => $values) {
        if(is_array($values)){
            foreach ($values as $index => $value) {
                $files[$index][$key] = $value;
            }
        }else{
            $files[$key] = $values;
        }
    }
    $uploadPath = "../../img/products/" . date('d-m-Y', time());
    if (!is_dir($uploadPath)) {
        mkdir($uploadPath, 0777, true);
    }
    if(is_array(reset($files))){ //Up nhiều ảnh
        foreach ($files as $file) {
            $result = processUploadFile($file,$uploadPath);
            if($result['error']){
                $errors[] = $result['message'];
            }else{
                $returnFiles[] = $result['path'];
            }
        }
    }else{ //Up 1 ảnh
        $result = processUploadFile($files,$uploadPath);
        if($result['error']){
            return array(
                'errors' => $result['message']
            );
        }else{
            return array(
                'path' => $result['path']
            );
        }
    }
    return array(
        'errors' => $errors,
        'uploaded_files' => $returnFiles
    );}
function processUploadFile($file,$uploadPath){
        $file = validateUploadFile($file, $uploadPath);
        if ($file != false) {
            $file["name"] = str_replace(' ','_',$file["name"]);
            if(move_uploaded_file($file["tmp_name"], $uploadPath . '/' . $file["name"])){
                $result = substr($uploadPath, 19);
                $uploadPath=$result;
                return array(
                    'error'=>false,
                    'path' => str_replace('../', '/', $uploadPath) . '/' . $file["name"]
                );
            }
        }else{
            return array(
                'error'=>false,
                'message' => "File tải lên " . basename($file["name"]) . " không hợp lệ."
            );
        }
    }
    function validateUploadFile($file, $uploadPath) {
        //Kiểm tra xem có vượt quá dung lượng cho phép không?
        if ($file['size'] > 2 * 1024 * 1024) { //max upload is 2 Mb = 2 * 1024 kb * 1024 bite
            return false;
        }
        //Kiểm tra xem kiểu file có hợp lệ không?
        $validTypes = array("jpg", "jpeg", "png", "bmp","xlsx","xls");
        $fileType = strtolower(substr($file['name'], strrpos($file['name'], ".") + 1));
        if (!in_array($fileType, $validTypes)) {
            return false;
        }
        //Check xem file đã tồn tại chưa? Nếu tồn tại thì đổi tên
        $num = 0;
        $fileName = substr($file['name'], 0, strrpos($file['name'], "."));
        while (file_exists($uploadPath . '/' . $fileName . '.' . $fileType)) {
            $fileName = $fileName . "(" . $num . ")";
            $num++;
        }
        if($num != 0){
            $fileName = substr($file['name'], 0, strrpos($file['name'], ".")). "(" . $num . ")";
        }else{
            $fileName = substr($file['name'], 0, strrpos($file['name'], "."));
        }
        $file['name'] =  $fileName . '.' . $fileType;
        return $file;
    }
if (isset($_FILES['anhchinh'])) {
    $uploadedFiles = $_FILES['anhchinh'];
    $result = uploadFiles($uploadedFiles);
    if (!empty($result['errors'])) {
        $error = $result['errors'];
    } else {
        $anhchinh = $result['path'];
        echo "$anhchinh";
    }
}
if (isset($_POST['hd'])) {
    $hd = $_POST['hd'];
    if ($_POST['id'])
        $id = $_POST['id'];
    include '../../db/dbconnect.php';
    switch ($hd) {
        case "Lưu":
            // Truy vấn danh sách sản phẩm
            $sql = "UPDATE sanpham   SET Ten='" . $_POST['ten'] . "',
                                        MoTa='" . $_POST['mota'] . "',
                                        Gia=" . $_POST['gia'] . ",
                                        MaKhuyenMai='" . $_POST['khuyenmai'] . "' ,
                                        MaDM='" . $_POST['danhmuc'] . "' ,
                                        AnhChinh='" . $anhchinh . "',
                                        MaHang='" . $_POST['hang'] . "'
                                        WHERE maSP='" . $_POST['id'] . "'";
            echo $sql;
            $result = mysqli_query($conn, $sql);
            break;
        case "Thêm":
            // Tao listid da co san
            $listId = [];
            $sql = "SELECT MaSP FROM sanpham";
            $result = $conn->query($sql);
            // Kiểm tra kết quả trả về
            if ($result->num_rows > 0) {
                $i = 0;
                while ($row = $result->fetch_assoc()) {
                    $listId[$i] = $row['MaSP'];
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
            if (strlen($id) > 3) {
                echo "Lỗi tạo mã";
                return;
            }
            while (strlen($id) != 3) {
                $id = "0" . $id;
            }

            // Thêm vào db
            $sql = "INSERT INTO sanpham (MaSP, Ten, MoTa, Gia, MaKhuyenMai, MaDM, AnhChinh,MaHang,NgayTao)
            VALUES ('" . $id . "',
            '" . $_POST['ten'] . "',
            '" . $_POST['mota'] . "',
            " . $_POST['gia'] . ",
            '" . $_POST['khuyenmai'] . "',
            '" . $_POST['danhmuc'] . "',
            '" . $anhchinh . "',
            '" . $_POST['hang'] . "',
            CURDATE())";
            $result = mysqli_query($conn, $sql);
            echo "$sql";
            if (!$result)
                echo "Lỗi khi thực hiện ở database";
            else 
                echo "<script>alert(`thành công`)</script>";
            break;
    }
    // Đóng kết nối
    $conn->close();
    header("Location:../editsp.php?id=" . $id);
}

?>