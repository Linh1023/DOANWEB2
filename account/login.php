<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/top_menu.css">
    <link rel="stylesheet" href="themify-icons-font/themify-icons/themify-icons.css">
    <title>Đăng nhập</title>
</head>
<body style = "height: 2000px;">
    <header>
        <div id = "header">
            <div class = "content1">
                <p class = "ti-headphone"></p>
                <div id = "phone_header">0909 123 456</div>
            </div>

            <div class = "content2">
                <img src="image/logo_header.png">
            </div>
            <div class = "content3">
                <ul>
                    <li class = "ti-search kl"></li>
                    <li>
                        <a href="register.php"><i class="ti-user"></i></a>
                    </li>
                    <li class="ti-shopping-cart gh"></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="top_menu">
        <ul>
            <li>
                <a href="">TRANG CHỦ</a>
            </li>
            <li>
                <a href="">GIÀY SALE</a>
            </li>
            <li>
                <a href="">GIÀY TRẺ EM</a>
            </li>
            <li>
                <a href="">GIÀY ĐINH SÂN CỎ NHÂN TẠO <i class="ti-angle-down"></i></a>
                <ul id="ds_phu">
                    <li><a href="">Adidas TF<i class="ti-angle-right"></i></a>
                        <ul id="ds_phu_phu">
                            <li><a href="">Adidas Nemeziz</a></li>
                            <li><a href="">Adidas Copa</a> </li>
                            <li><a href="">Adidas Predator</a> </li>
                            <li><a href="">Adidas X Ghosted</a></li>
                        </ul>
                    </li>
                    <li><a href="">Nike TF<i class="ti-angle-right"></i></a>
                        <ul id="ds_phu_phu">
                            <li><a href="">Nike Tiempo</a></li>
                            <li><a href="">Nike Mercurial</a></li>
                        </ul>
                    </li>
                    <li>Puma TF</li>
                    <li>Pan Thailand TF</li>
                </ul>
            </li>
            <li>
                <a href="">GIÀY ĐINH SÂN CỎ TỰ NHIÊN <i class="ti-angle-down"></i></a>
                <ul id="ds_phu">
                    <li><a>FG/MG</a></li>
                    <li><a>FG/MG</a></li>
                    <li><a>Puma FG/MG</a></li>
                </ul>
            </li>
            <li>
                <a href="">PHỤ KIỆN <i class="ti-angle-down"></i></a>
                <ul id="ds_phu">
                    <li><a>Vớ</a></li>
                    <li><a>Phụ kiện & Găng tay thủ môn</a></li>
                    <li><a>Rờ te ( Bảo hộ chân )</a></li>
                    <li><a>Banh</a></li>
                    <li><a>Hỗ trợ chấn thương Starbalm</a></li>
                </ul>
            </li>
            <li>
                <a href="">GIỚI THIỆU <i class="ti-angle-down"></i></a>
                <ul id="ds_phu">
                    <li><a>Thêu tên FREE Tag ID</a></li>
                    <li><a>Album khách hàng</a></li>
                    <li><a>Về chúng tôi</a></li>
                    <li><a>Tin tức</a></li>
                </ul>
            </li>
            <li>
                <a href="">HƯỚNG DẪN MUA HÀNG <i class="ti-angle-down"></i></a>
                <ul id="ds_phu">
                    <li><a>Chính sách bảo hành</a></li>
                    <li><a>Chính sách đổi hàng</a></li>
                    <li><a>Chính sách thanh toán</a></li>
                </ul>
            </li>
            <li>
                <a href="">LIÊN HỆ</a>
            </li>
        </ul>
    </div>
    <form method="post" action="login.php" class="form">
        <h2>Đăng nhập</h2>
        Username: <input type="text" name="username" value="" required>
        Password: <input type="text" name="password" value="" required/>
        <br/>
        <br/>
        <input type="submit" name="dangnhap" value="Đăng Nhập"/>
        <?php require 'login_submit.php';?>
    </form>
</body>
</html>