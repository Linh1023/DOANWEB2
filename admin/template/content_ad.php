<div class="row" style="background-color:#f0f5f8;height:calc(100% - 72px)">
<?php
if(isset($_GET['id'])){
    switch($_GET['id']){
        case 'tc':
            include('template_main/trangchu.php');
        break;
        case 'nd':
            include('template_main/nguoidung.php');
        break;
        case 'sp':
            include('template_main/sanpham.php');
        break;
        case 'dh':
            include('template_main/donhang.php');
        break;
        case 'bd':
            include('template_main/baidang.php');
        break;
        case 'pq':
            include('template_main/phanquyen.php');
        break;
    }
}
                    
?>


    
</div>