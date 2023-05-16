<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    
?>

<div id="menu" class="col col-sm-12 col-lg-2 col-md-2 bg-black text-bg-dark position-fixed width-show-icon">
    <div class="row d-block w-auto d-lg-none d-md-none">
        <div id="show-icon-js" style="width: 150px !important;" class="col-12 p-3 px-5">
            <i class="fas fa-bars"></i>
        </div>
    </div>
    <div class="d-none d-lg-block d-md-block" id="menu-js">
        <div class="row d-none d-lg-block d-md-block">
            <div class="img-logo ">
                    <a href="index.php">
                    <img class="row w-100 mx-auto mt-3" src="../img/img-logo/sneaker.jpg" alt="">
                    </a>
                </div>

        </div>
        <ul id='ulMenu' class="mt-2 list-unstyled text-black ">
            <a href="index.php?id=tc">
                <li class="row LiMenu mx-0 text-center p-2 align-items-center border-secondary border-size-menu " style = "<?php if($id ==  "tc"){echo "background:  #6c757d";}?>">
                    <div class="col-3 px-0 d-none d-lg-flex justify-content-center">
                        <i class="fa fa-yin-yang"></i>
                    </div>
                    <div class="col-lg-9 col-12 px-0">
                        <p class="text-font-menu m-0">Trang chủ</p>
                    </div>
                </li>
            </a>
            <a href="index.php?id=nd">
                <li class="row LiMenu mx-0 text-center p-2 align-items-center border-secondary border-size-menu " style = "<?php if($id ==  "nd"){echo "background:  #6c757d";}?>">
                    <div class="col-3 px-0 d-none d-lg-flex justify-content-center">
                        <i class="fa fa-yin-yang"></i>
                    </div>
                    <div class="col-lg-9 col-12 px-0">
                        <p class="text-font-menu m-0">Người dùng</p>
                    </div>
                </li>
            </a>
            <a href="index.php?id=sp">
                <li class="row LiMenu mx-0 text-center p-2 align-items-center border-secondary border-size-menu " style = "<?php if($id ==  "sp"){echo "background:  #6c757d";}?>">
                    <div class="col-3 px-0 d-none d-lg-flex justify-content-center">
                        <i class="fa fa-yin-yang"></i>
                    </div>
                    <div class="col-lg-9 col-12 px-0">
                        <p class="text-font-menu m-0">Sản phẩm</p>
                    </div>
                </li>
            </a>
            <a href="index.php?id=dh">
                <li class="row LiMenu mx-0 text-center p-2 align-items-center border-secondary border-size-menu " style = "<?php if($id ==  "dh"){echo "background:  #6c757d";}?>">
                    <div class="col-3 px-0 d-none d-lg-flex justify-content-center">
                        <i class="fa fa-yin-yang"></i>
                    </div>
                    <div class="col-lg-9 col-12 px-0">
                        <p class="text-font-menu m-0">Đơn hàng</p>
                    </div>
                </li>
            </a>
            <a href="index.php?id=bd">
                <li class="row LiMenu mx-0 text-center p-2 align-items-center border-secondary border-size-menu " style = "<?php if($id ==  "bd"){echo "background:  #6c757d";}?>">
                    <div class="col-3 px-0 d-none d-lg-flex justify-content-center">
                        <i class="fa fa-yin-yang"></i>
                    </div>
                    <div class="col-lg-9 col-12 px-0">
                        <p class="text-font-menu m-0">Bài đăng</p>
                    </div>
                </li>
            </a>
            <a href="index.php?id=pq">
                <li class="row LiMenu mx-0 text-center p-2 align-items-center border-secondary border-size-menu " style = "<?php if($id ==  "pq"){echo "background:  #6c757d";}?>">
                    <div class="col-3 px-0 d-none d-lg-flex justify-content-center">
                        <i class="fa fa-yin-yang"></i>
                    </div>
                    <div class="col-lg-9 col-12 px-0">
                        <p class="text-font-menu m-0">Phân quyền</p>
                    </div>
                </li>
            </a>
            <a href="index.php?id=pn">
                <li class="row LiMenu mx-0 text-center p-2 align-items-center border-secondary border-size-menu " style = "<?php if($id ==  "pn"){echo "background:  #6c757d";}?>">
                    <div class="col-3 px-0 d-none d-lg-flex justify-content-center">
                        <i class="fa fa-yin-yang"></i>
                    </div>
                    <div class="col-lg-9 col-12 px-0">
                        <p class="text-font-menu m-0">Phiếu Nhập</p>
                    </div>
                </li>
            </a>
            <a href="index.php?id=km">
                <li class="row LiMenu mx-0 text-center p-2 align-items-center border-secondary border-size-menu " style = "<?php if($id ==  "km"){echo "background:  #6c757d";}?>">
                    <div class="col-3 px-0 d-none d-lg-flex justify-content-center">
                        <i class="fa fa-yin-yang"></i>
                    </div>
                    <div class="col-lg-9 col-12 px-0">
                        <p class="text-font-menu m-0">Khuyến mãi</p>
                    </div>
                </li>
            </a>
            <a href="index.php?id=h">
                <li class="row LiMenu mx-0 text-center p-2 align-items-center border-secondary border-size-menu " style = "<?php if($id ==  "h"){echo "background: rown";}?>">
                    <div class="col-3 px-0 d-none d-lg-flex justify-content-center">
                        <i class="fa fa-yin-yang"></i>
                    </div>
                    <div class="col-lg-9 col-12 px-0">
                        <p class="text-font-menu m-0">Hãng</p>
                    </div>
                </li>
            </a>
            <a href="index.php?id=dm">
                <li class="row LiMenu mx-0 text-center p-2 align-items-center border-secondary border-size-menu " style = "<?php if($id ==  "dm"){echo "background:  #6c757d";}?>">
                    <div class="col-3 px-0 d-none d-lg-flex justify-content-center">
                        <i class="fa fa-yin-yang"></i>
                    </div>
                    <div class="col-lg-9 col-12 px-0">
                        <p class="text-font-menu m-0">Danh mục</p>
                    </div>
                </li>
            </a>
        </ul>
    </div>

</div>