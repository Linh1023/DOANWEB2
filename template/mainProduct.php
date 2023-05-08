<?php
    if(isset($_GET['MaSP'])){
        $MaSP = $_GET["MaSP"];

        include("./db/DAOSP.php");
        $db = new DAOSP();
        $db->connect();

        $data = $db->getList($MaSP);
    }

?>
<div id="main_product">
    <div id = "top_main">
        <div id = "selection">
            <div class = "item_selection">
                <label>
                        <input type = "radio" name = "img_selected" onclick="ChuyenAnh('./img/products/<?php echo $data[0][4]?>')" checked/>
                        <img src = "./img/products/<?php echo $data[0][4]?>">
                </label>
            </div>
            <?php
                for($i = 1; $i < 4;$i++){

            ?>
            <div class = "item_selection">
                <label>
                        <input type = "radio" name = "img_selected" onclick="ChuyenAnh('./img/products/<?php echo $data[0][0]?>_<?php echo $i?>.jpg')"/>
                        <img src = "./img/products/<?php echo $data[0][0]?>_<?php echo $i?>.jpg">
                </label>
            </div>
            <?php } ?>
        </div>
        <div id = "image">
            <img src = "./img/products/<?php echo $data[0][4]?>" id="AnhChinh">
        </div>
        <div id = "info">
            <h1><?php echo $data[0][1]?></h2>
            <div id = "price">
                <p><?php echo number_format($data[0][2],0,',','.')."đ"?></p>
            </div>
            <p>Kích thước</p>
            <div id = "size">
                <ul id = "size_list">
                    <li class = "size-item">
                        <label>
                            <input type = "radio" name = "option" value = "39">
                            <span>39</span>
                        </label>
                    </li>
                    <li class = "size-item">
                        <label>
                            <input type = "radio" name = "option" value = "40">
                            <span>40</span>
                        </label>
                    </li>
                    <li class = "size-item">
                        <label>
                            <input type = "radio" name = "option" value = "41">
                            <span>41</span>
                        </label>
                    </li>
                    <li class = "size-item">
                        <label>
                            <input type = "radio" name = "option" value = "42">
                            <span>42</span>
                        </label>
                    </li>
                    <li class = "size-item">
                        <label>
                            <input type = "radio" name = "option" value = "43">
                            <span>43</span>
                        </label>
                    </li>
                    <li class = "size-item">
                        <label>
                            <input type = "radio" name = "option" value = "44">
                            <span>44</span>
                        </label>
                    </li>
                </ul>
            </div>
            <div id = "tonkho">
                <p>
                    Tồn kho:
                    <span><?php echo $data[0][9]?></span>  
                </p>
            </div>
            <div id = "giohang">
                <a href = "xuly.php">
                    <span id="icon"><i class="ti-shopping-cart"></i></span> 
                    <span id = "themvaogio">Thêm vào giỏ</span>
                </a>
            </div>
        </div>
    </div>
    <div id = "bottom_main">
        <div id = "MoTa">
            
        </div>

    </div>
</div>