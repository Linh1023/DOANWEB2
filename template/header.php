<script src="../js/login.js"></script>

        <header>
            <div id = "header">
                <div class="container2">
                    <div class = "content1">
                        <p class = " ti-headphone"></p>
                        <div id = "phone_header">0909 123 456</div>
                    </div>

                    <div class = "content2">
                        <img src=".\img\img-header\logo_header.png">
                    </div>
                    <div class = "content3">
                        <ul>
                            <li class = "ti-search kl"></li>

                            <?php 
                                if (isset($_SESSION['MaTaiKhoan']) ){
                                    ?>
                                        <li><a href="./account/logout.php"><i class="ti-share-alt"></i></a></li>
                                    
                                    <?php
                                }
                                else{
                                ?>
                                    <li class="ti-user user" onclick="hienthi()"></li>

                            <?php

                                }
                        ?>
                            <li><a href="GioHang.php"><i class="ti-shopping-cart gh"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
