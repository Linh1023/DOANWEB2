<link rel="stylesheet" href="../../../css/XuLyKhuyenMai.css" >
<!-- ^KM_ -->
<?php
    if(isset($_GET['cn'])){
        switch($_GET['cn']){
            case 'Add':{
                ?>
                    <form method="post" action="">
                        <a href="../../../index.php?id=km"><div id="Back">X</div></a>
                        <h2>Thêm khuyến mãi</h2>
                        <label for="MaKH">Mã khuyến mãi: </label><br>
                        <input type="text" id="MaKH" name="MaKH" value=""><br>
                        <label for="TenKH">Tên khuyến mãi: </label><br>
                        <input type="text" id="TenKH" name="TenKH" value=""><br>
                        <label for="MoTa">Mô tả: </label><br>
                        <textarea id="MoTa" name="MoTa" value=""></textarea><br>
                        <label for="TiLeGiam">Phần trăm sẽ giảm:</label><br>
                        <input type="number" id="TiLeGiam" name="TiLeGiam" min="1" max="100"><br>
                        <input type="submit" id="Add" name="Add" value="Thêm khuyến mãi">
                    </form>
                <?php
                break;
            }
            case 'Delete':{
                echo 'delete';
                break;
            }
            case 'Edit':{
                ?>
                    <form method="post" action="">
                        <a href="../../../index.php?id=km"><div id="Back">X</div></a>
                        <h2>Sửa khuyến mãi</h2>
                        <label for="MaKH">Mã khuyến mãi: </label><br>
                        <input type="text" id="MaKH" name="MaKH" value=""><br>
                        <label for="TenKH">Tên khuyến mãi: </label><br>
                        <input type="text" id="TenKH" name="TenKH" value=""><br>
                        <label for="MoTa">Mô tả: </label><br>
                        <textarea id="MoTa" name="MoTa" value=""></textarea><br>
                        <label for="TiLeGiam">Phần trăm sẽ giảm:</label><br>
                        <input type="number" id="TiLeGiam" name="TiLeGiam" min="1" max="100"><br>
                        <input type="submit" id="Edit" name="Edit" value="Sửa khuyến mãi">
                    </form>
                <?php
                break;
            }
        }
    }


?>