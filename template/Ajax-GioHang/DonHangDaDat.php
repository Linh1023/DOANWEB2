<script>
    let Trang = 1;
    $(document).ready(function() {
        $.get('./template/Ajax-GioHang/Ajax-GioHang.php',
        {
            SoTrang: Trang,
            MaTK: <?php echo $_SESSION['MaTaiKhoan']?>
        },
        function(data){
            $('#donhang').html(data);
        });

    });
</script>


<?php
    if(isset($_SESSION['MaTaiKhoan'])){
        $MaTK = $_SESSION['MaTaiKhoan'];
?>
    <div id="donhang_container">
        <div id = "title"><h2>Danh sách các đơn hàng đã đặt</h2></div>
        <div id = "Loc">
            <label for = "From">Từ: </label>
            <input type = "date" name = "from" id = "from" required>
            <label for = "To">Đến: </label>
            <input type = "date" name = "to" id = "to" required>
            <!-- <button id = "btn-Loc">Lọc</button> -->
            <button id = "btn-Refresh">Refresh</button>
        </div>
        <div id = "donhang">
            
        </div>
    </div>
<?php
    }

?>