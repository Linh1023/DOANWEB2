<div id="content"class="row" style="background-color:#f0f5f8;height:calc(100% - 72px)">
<?php
// if(isset($_GET['id'])&&isset($_GET['hd'])&&isset($_GET['idsp'])){
//     if($_GET['id'])
//         include('template_content/detail_'.$id.'.php');
// }
// else
if(isset($_GET['id'])){
    switch($_GET['id']){
        case 'tc':
            include('template_content/trangchu.php');
        break;
        case 'nd':
            include('template_content/nguoidung.php');
        break;
        case 'sp':
            include('template_content/sanpham.php');
        break;
        case 'dh':
            include('template_content/donhang.php');
        break;
        case 'bd':
            include('template_content/baidang.php');
        break;
        case 'pq':
            include('template_content/phanquyen.php');
        break;
        case 'pn':
            include('template_content/phieunhap.php');
        break;
    }
}
                    
?>


    
</div>