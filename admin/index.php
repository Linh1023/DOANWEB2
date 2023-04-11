<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" -->
        <!-- integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./index.js"></script>
    <link rel="stylesheet" href="./css/bootstrap.min.css">


    <link rel="stylesheet" href="./css/admin.css">

    <title>Admin</title>
</head>

<body>
    <div class="wrapper" style=" background-color: #372c2c;">
        <div class="container">
            <div class="row " style="height:1500px;position: relative;">
                <div class="col-2 d-none d-lg-block d-md-block"></div>
                <?php include('themplate/menu_ad.php');?>
                <?php include('themplate/right_ad.php');?>
                <div id="menu"   class="col col-sm-12 col-lg-2 col-md-2 bg-black text-bg-dark position-fixed width-show-icon">
                
            </div>
        </div>
    </div>

    </div>
    <script>
        showmenu()
    </script>
</body>

</html>