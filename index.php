<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./css/main.css">

<!-- products -->
    <link rel="stylesheet" href="./css/products.css">
    <script src="./js/index.js"></script>
    <!-- <link rel="stylesheet" href="./fonts/fontawesome-free-5.12.0-web/css/all.min.css"> -->

    <!-- slider -->
    <link rel="stylesheet" href="./css/slider.css">
    <script src="./js/slider.js"></script>

    <!-- header -->
    <link rel="stylesheet" href="./css/top_menu.css">
    <link rel="stylesheet" href="./fonts/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./css/header.css">

</head>
<body>
    <div id="wrapper">
        <?php include('themplate/header.php');?>
        <div id="topmenu">
        <?php include('themplate/top_menu.php');?>
        </div>
        <div id="main">
            <?php include('themplate/slider.php');?>
            <?php include('themplate/products.php');?>
        </div>
        <div id="footer"></div>
    </div>
    
</body>
</html>