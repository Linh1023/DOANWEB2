<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./css/main.css">

    <link rel="stylesheet" href="./css/GioHang.css">
    
    <!-- header -->
    <link rel="stylesheet" href="./css/top_menu.css">
    <link rel="stylesheet" href="./fonts/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./css/header.css">


    <!-- footer -->
    <link rel="stylesheet" href="./css/footer.css">



</head>
<body>
    <div id="wrapper">
        <?php include('template/header.php');?>
        <?php include('template/top_menu.php');?>

        <div id="main">
            <?php include('template/GioHang.php');?>
        </div>

        <div id="footer">
            <?php include('template/footer.php');?>
        </div>
    </div>
    
</body>
</html>