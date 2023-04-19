<?php
if (isset($_GET['hd'])){
    $hd=$_GET['hd'];

    include '../../db/dbconnect.php';
    switch($hd){
        case "Lưu":
            // Truy vấn danh sách sản phẩm
            $sql = "UPDATE sanpham   SET Ten='".$_GET['ten']."',
                                        MoTa='".$_GET['mota']."',
                                        Gia=".$_GET['gia'].",
                                        KhuyenMai='".$_GET['khuyenmai']."' ,
                                        DanhMuc='".$_GET['danhmuc']."' ,
                                        SLTonKho=".$_GET['soluong'].",
                                        AnhChinh='".$_GET['anhchinh']."'
                                        WHERE maSP='".$_GET['id']."'";
            echo $sql;
            $result=mysqli_query($conn, $sql);
            break;
        case "Thêm":
        // Tao listid da co san
            $listId=[];
            $sql = "SELECT MaSP FROM sanpham";
            $result = $conn->query($sql);
            // Kiểm tra kết quả trả về
            if ($result->num_rows > 0) {
                $i=0;
                while($row = $result->fetch_assoc()) {
                    foreach($row as $val)
                    $listId[$i]=$val;
                    $i++;
                }
            }
        // tìm id thích hợp
            for ($i=1;$i<1000;$i++){
                $found=false;
                if(!in_array($i,$listId)){
                    $id=$i;break;
                }
            }
        // ép kiểu string
            $id=(string)$id;
            if (strlen($id)>3){echo"Lỗi";return;}
            while(strlen($id)!=3){
                $id="0".$id;
            }
            $sql="INSERT INTO sanpham (MaSP, Ten, MoTa, Gia, KhuyenMai, DanhMuc,SLTonKho, AnhChinh )
            VALUES ('".$id."','".$_GET['ten']."','".$_GET['mota']."',".$_GET['gia'].",'".$_GET['khuyenmai']."','".$_GET['danhmuc']."',".$_GET['soluong'].",'".$_GET['anhchinh']."')";
            $result=mysqli_query($conn, $sql);
            echo $sql;
            if ($result)echo "ok";
            else echo"lỗi";
            break;
    }
    // Đóng kết nối
    $conn->close();
    // header("Location:../edit.php?id=".$id);
}

?>