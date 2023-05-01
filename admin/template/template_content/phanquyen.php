<form action="" method="GET">
    
    <h2 id="title-pq">Quản lý phân quyền</h2>
    <h4 id="dsq">Danh sách quyền: </h4> 

    <select id="quyen">
        <option name="Admin" id="Admin" value="Quản lý">Quản lý</option>
        <option name="BTV" id="BTV" value="Nhân viên">Nhân viên</option>
        <option name="User" id="User" value="Thành viên đăng ký">Thành viên đăng ký</option>
    </select>

    <div id="check_item">
        <div class="row">
            <div class="col-6">
                <label for="ND" class="checkbox_item w-100 ">
                    <input type="checkbox" name="ND" class="checkbox" id="ND"/> 
                    <span>Quản lý người dùng</span>
                    <i class="fas fa-circle"></i>     
                </label>
            </div>

            <div class="col-6">
                <label for="SP" class="checkbox_item w-100">
                    <input type="checkbox" name="SP" class="checkbox" id="SP"/> 
                    <span>
                        Quản lý sản phẩm
                    </span>
                    <i class="fas fa-circle"></i>     
                </label>
            </div>

            <div class="col-6">
                <label for="DH" class="checkbox_item w-100">
                    <input type="checkbox" name="DH" class="checkbox" id="DH"/> 
                    <span>
                        Quản lý đơn hàng
                    </span>
                    <i class="fas fa-circle"></i>     
                </label>
            </div>

            <div class="col-6">
                <label for="BD" class="checkbox_item w-100">
                    <input type="checkbox" name="BD" class="checkbox" id="BD"/> 
                            <span>
                                Quản lý bài đăng
                            </span>
                            <i class="fas fa-circle"></i>     
                </label>
            </div>

            <div class="col-6">
                <label for="PN" class="checkbox_item w-100">
                    <input type="checkbox" name="PN" class="checkbox" id="PN"/> 
                    <span>
                        Quản lý phiếu nhập
                    </span>
                    <i class="fas fa-circle"></i>     
                </label>
            </div>
            <div class="col-6">
                <label for="KM" class="checkbox_item w-100">
                    <input type="checkbox" name="KM" class="checkbox" id="KM"/> 
                    <span>
                        Quản lý khuyến mãi
                    </span>
                    <i class="fas fa-circle"></i>     
                </label>
            </div>
            <div class="col-6">
                <label for="H" class="checkbox_item w-100">
                    <input type="checkbox" name="H" class="checkbox" id="H"/> 
                    <span>
                        Quản lý hãng
                    </span>
                    <i class="fas fa-circle"></i>   
                </label>   
        </div>
            <div class="col-6">
                <label for="DM" class="checkbox_item w-100">
                    <input type="checkbox" name="DM" class="checkbox" id="DM"/> 
                    <span>
                        Quản lý danh mục
                    </span>
                    <i class="fas fa-circle"></i>     
                </label>
            </div>
        </div>

    </div>
    
    <div id="submit">
        <input type=submit name="edit" id="edit" value="Thực hiện phân quyền"/>
    </div>
</form>