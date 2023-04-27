<form action="./template/template_content/PhanQuyen/xulyPhanQuyen.php" method="GET">
    
    <h2 id="title-pq">Quản lý phân quyền</h2>
    <h4 id="dsq">Danh sách quyền: </h4>
    <select id="quyen">
            <option value="Admin">Quản lý</option>
            <option value="BTV">Biên tập viên</option>
            <option value="User">Thành viên đăng ký</option>
    </select>

    <div id="check_item">
        <label for="ND" class="checkbox_item">
            <input type="checkbox" name="ND" class="checkbox" id="ND"/> Quản lý người dùng
            <i class="ti-check"></i>      
        </label>

        <label for="SP" class="checkbox_item">
            <input type="checkbox" name="SP" class="checkbox" id="SP"/> Quản lý sản phẩm
            <i class="ti-check"></i>      
        </label>

        <label for="DH" class="checkbox_item">
            <input type="checkbox" name="DH" class="checkbox" id="DH"/> Quản lý đơn hàng
            <i class="ti-check"></i>      
        </label>

        <label for="BD" class="checkbox_item">
            <input type="checkbox" name="BD" class="checkbox" id="BD"/> Quản lý bài đăng
            <i class="ti-check"></i>      
        </label>

        <label for="PN" class="checkbox_item">
            <input type="checkbox" name="PN" class="checkbox" id="PN"/> Quản lý phiếu nhập
            <i class="ti-check"></i>      
        </label>

        <label for="KM" class="checkbox_item">
            <input type="checkbox" name="KM" class="checkbox" id="KM"/> Quản lý khuyến mãi
            <i class="ti-check"></i>      
        </label>

        <label for="H" class="checkbox_item">
            <input type="checkbox" name="H" class="checkbox" id="H"/> Quản lý hãng
            <i class="ti-check"></i>    
        </label>

        <label for="DM" class="checkbox_item">
            <input type="checkbox" name="DM" class="checkbox" id="DM"/> Quản lý danh mục
            <i class="ti-check"></i>      
        </label>

    </div>

    <input type=submit name="edit" id="edit" value="Thực hiện phân quyền"/>

</form>