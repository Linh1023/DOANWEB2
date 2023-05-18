<?php
    $MaQuyen = $_GET['pq'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/admin.js"></script>
    <script src="../resources/ckeditor/ckeditor.js"></script>


    <link rel="stylesheet" href="./css/admin.css">
    <script src="./js/edit.js"></script>
    <title>Admin</title>
</head>

<body>
    <div class="wrapper" style=" background-color: #6c757d;height:100%;min-height:100vh">
        <?php include('template/topbar_ad.php'); ?>
        <div class="container">
            <div class="row " style="min-height:1200px;padding-bottom:50px;position: relative;">
                <div class="col-2 d-none d-lg-block d-md-block"></div>
                <?php include('template/menu_ad.php'); ?>
                <div id="main" class="col col-12 col-lg-10 col-md-10 ">
                    <?php include('template/header_ad.php'); ?>
                    <div id="content" class="row" style="background-color:#f0f5f8;height:calc(100% - 72px)">
                        <div class="main mx-auto ">
                            <?php
                            include('../db/dbconnect.php');
                        
                            // Phiếu nhập
                              
                                echo '<div class="row justify-content-center display-4">Thêm Phiếu Nhập</div>';
                               
                            
                            //Luu bảng khuyen mãi, hang va danh muc
                                // Xuat danh sách hãng db ra mảng
                                $listHang = [];
                                $sql = "SELECT * FROM hang";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $listHang[$row['MaHang']]=$row['Ten'];
                                    }
                                }
                                // Xuat danh sách khuyenmai db ra mảng
                                $listNhanVien = [];
                                $sql = "SELECT nhanvien.MaNhanVien, nhanvien.TenNhanVien , taikhoan.Quyen  from nhanvien 
                                join taikhoan on taikhoan.MaTaiKhoan= nhanvien.MaNhanVien WHERE taikhoan.quyen <> 'User'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $listNhanVien[$row['MaNhanVien']]=$row['TenNhanVien'];
                                    }
                                }
                           
                            ?>
                            <!-- Tạo form thêm / sửa -->
                            <form action="xuly/xulyEditpn.php?pq=<?php echo $MaQuyen?>" method="post">
                    
                                <div class="row mt-2">
                                    <label class="row">
                                        <div class="col col-3">Tên Nhân Viên:</div>
                                        <div class="col col-9">
                                            <select class="w-100" name="nhanvien">
                                            <?php
                                                foreach($listNhanVien as $ma=>$ten){
                                                    echo"<option value='$ma'>$ten</option>";                                                
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </label>
                                </div>
                                
                                <div class="row mt-2">
                                    <label class="row">
                                        <div class="col col-3">Hãng</div>
                                        <div class="col col-9">
                                            <select class="w-100" name="hang">
                                            <?php
                                                foreach($listHang as $ma=>$ten){
                                                    echo'<option value='.$ma.'>'.$ten.'</option>';                                                
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </label>
                                </div>

                                <div class="row mt-2">
                                    <div class="col col-3"></div>
                                    <div class="col col-9">
                                        <?php
                                            echo '<input type="submit" class="btn bg-success"name="hd" value="Thêm">';
                                        ?>
                                        <a href="index.php?pq=<?php echo $MaQuyen?>&id=pn">
                                            <div class='btn text-black bg-danger'>Hủy</div>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>

    </div>
    <?php
    $conn->close();
    ?>
    <script>
        showmenu();
        choosemenu();
    </script>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('textarea');
    </script>
</body>

</html>