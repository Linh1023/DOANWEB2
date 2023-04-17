
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Đăng ký</title>
</head>
<body>
    <form method="post" action="register.php" class="form">
        <h2>Đăng ký thành viên</h2>
        Username: <input type="text" name="username" value="" required>
        Password: <input type="text" name="password" value="" required/>
        Email: <input type="email" name="email" value="" required/>
        Phone: <input type="text" name="phone" value="" required/>
        <br/>
        <br/>
        <input type="submit" name="dangky" value="Đăng Ký"/>
        <?php require 'register_submit.php';?>
    </form>
</body>
</html>