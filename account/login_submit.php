<?php
    // session_start();
    // header('Content-Type: text/html; charset=utf-8');
    $conn = mysqli_connect('localhost', 'root', '', 'webgiaybongda') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");
    if (isset($_POST['dangnhap'])) {
        $username = trim($_POST['username']); //trim để loại bỏ khoảng trắng ở đầu và cuối của username
        $password = trim($_POST['password']);

        if(!$username || !$password) {
            echo '<script language="javascript">alert("Vui lòng nhập đầy đủ thông tin!"); window.location="login.php";</script>';
        }

        $password=md5($password);

        $sql = "SELECT username,password FROM user WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 0){
            echo '<script language="javascript">alert("Username không tồn tại!"); window.location="login.php";</script>';
            // Dừng chương trình
            die ();
        }
        //Kiểm tra mật khẩu có đúng không:
        $row = mysqli_fetch_array($result);
        if ($password != $row['password']) {
            echo '<script language="javascript">alert("Mật khẩu không đúng. Vui lòng nhập lại!"); window.location="login.php";</script>';
            exit;
        }
        //Lưu tên đăng nhập
        $_SESSION['username'] = $username;
        echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='index.php'>Về trang chủ</a>";
        die();
    }
?>