
<link rel="stylesheet" href="../css/formDN.css"/>
<link rel="stylesheet" href="themify-icons-font/themify-icons/themify-icons.css">

<form method="post" action="./index.php" id="form" >
    <p onclick=tatdn()>X</p>
    <h2>Đăng nhập</h2>
    Username: 
    <input type="text" name="username" value="" required />
    Password: 
    <input type="password" name="password" value="" required />
    <br/>
    <br/>
    <input type="submit" name="dangnhap" value="Đăng Nhập"/>
    <br/>
    <br/>
    <input type="button" name="dangky" value="Đăng Ký" onclick = hienthidangky()  />
    <?php require 'login_submit.php';?>
</form>
