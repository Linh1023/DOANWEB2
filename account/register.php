

<link rel="stylesheet" href="../css/formDN.css"/>
<link rel="stylesheet" href="themify-icons-font/themify-icons/themify-icons.css">

<form method="post" action="./index.php" id="formdk">
    <p onclick=tatdk()>X</p>
    <h2>Đăng ký</h2>
    Username: 
    <input type="text" name="username" value="" required/>
    Password: 
    <input type="password" name="password" value="" required/>
    Email: 
    <input type="text" name="email" value="" required/>
    <br/>
    <br/>
    <input type="button" name="dangnhap" value="Đăng Nhập" onclick="hienthidangnhap()"/>
    <br/>
    <br/>
    <input type="submit" name="dangky" value="Đăng Ký"/>
    <?php require 'register_submit.php';?> 
</form>
