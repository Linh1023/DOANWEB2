<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/admin.js"></script>


    <link rel="stylesheet" href="./css/admin.css">
    <script src="./js/edit.js"></script>
    <title>Admin</title>
</head>

<body>
    <div class="wrapper" style=" background-color: #6c757d;">
        <?php include('template/topbar_ad.php'); ?>
        <div class="container">
            <div class="row " style="min-height:1200px;padding-bottom:50px;position: relative;">
                <div class="col-2 d-none d-lg-block d-md-block"></div>
                <?php include('template/menu_ad.php'); ?>
                <div id="main" class="col col-12 col-lg-10 col-md-10 ">
                    <?php include('template/header_ad.php'); ?>
                    <div id="content" class="row" style="background-color:#f0f5f8;height:calc(100% - 72px)">
                        <div class="main mx-auto ">
                            <div class="row justify-content-center display-4">Thêm sản phẩm</div>
                            <div class="row mt-2">
                                <label class="row">
                                    <div class="col col-4">Tên:</div>
                                    <div class="col col-8">
                                        <input class="w-100" type="text">
                                    </div>
                                </label>
                            </div>
                            <div class="row mt-2">
                                <label class="row">
                                    <div class="col col-4">Mô tả:</div>
                                    <div class="col col-8">
                                        <textarea class="w-100" rows="" cols="">hi</textarea>

                                    </div>
                                </label>
                            </div>
                            <div class="row mt-2">
                                <label class="row">
                                    <div class="col col-4">Giá:</div>
                                    <div class="col col-8">
                                        <input class="w-100" type="text">
                                    </div>
                                </label>
                            </div>
                            <div class="row mt-2">
                                <label class="row">
                                    <div class="col col-4">Danh mục:</div>
                                    <div class="col col-8">
                                        <select class="w-100" name="category" id="category"
                                            onchange="addFieldOtherCategory()">
                                            <option value="" checked="checked">Chưa phân loại</option>
                                            <option value="">Giày đá bóng sân cỏ nhân tạo</option>
                                            <option value="">Giày đá bóng sân cỏ tự nhiên</option>
                                            <option value="Khác">Khác</option>
                                        </select>
                                    </div>
                                </label>
                            </div>
                            <div class="row mt-2" id="other-category-field" style="display: none;">
                                <label class="row">
                                    <div class="col col-4">Tên Danh Mục mới:</div>
                                    <div class="col col-8">
                                        <input class="w-100" type="text" name="other_category" id="other_category">
                                    </div>
                                </label>
                            </div>

                            <div class="row mt-2">
                                <label class="row">
                                    <div class="col col-4">Số lượng tồn kho:</div>
                                    <div class="col col-8">
                                        <input class="w-100" type="text">
                                    </div>
                                </label>
                            </div>
                            <div class="row mt-2">
                                <label class="row">
                                    <div class="col col-4">Ảnh :</div>
                                    <div class="col col-8">
                                        <input class="w-100" type="file" id="anhSP" onchange="getLinkImg()">
                                    </div>
                                </label>
                            </div>
                            <div class="row">
                                <div class="col col-4"></div>
                                <div class="col col-8">
                                    <div class="row">
                                        <img style="width: 300px;min-height: 150px;"src="../img/img-logo/sneaker.jpg" alt="" id="imagePreview">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label class="row">
                                    <div class="col col-4">Hãng:</div>
                                    <div class="col col-8">
                                        <select class="w-100" name="brand" id="brand" onchange="addFieldOtherBrand()">
                                            <option value="Adidas" checked="checked">Adidas</option>
                                            <option value="Puma">Puma</option>
                                            <option value="Khác">Khác</option>
                                        </select>

                                    </div>
                                </label>
                            </div>
                            <div class="row mt-2" id="other-brand-field" style="display: none;">
                                <label class="row">
                                    <div class="col col-4">Tên Hãng mới:</div>
                                    <div class="col col-8">
                                        <input class="w-100" type="text" name="other_brand" id="other_brand">
                                    </div>
                                </label>
                            </div>
                            <div class="row mt-2">
                                <label class="row">
                                    <div class="col col-4">Khuyến mãi:</div>
                                    <div class="col col-8">
                                        <select class="w-100" name="khuyenmai" id="khuyenmai">
                                            <option value="" checked="checked">Không</option>
                                            <option value="5">Giảm 5%</option>
                                            <option value="10">Giảm 10%</option>
                                            <option value="15">Giảm 15%</option>
                                            <option value="Khác">Khác</option>
                                        </select>
                                        <!-- if (selectedValue === '80') {
                                            input.value = parseInt(input.value) - 20;
                                            input.disabled = true;
                                            } else {
                                            input.disabled = false; -->
                                    </div>
                                </label>
                            </div>
                            <div class="row mt-2" id="other-khuyenmai-field">
                                <label class="row">
                                    <div class="col col-4">Giá mới:</div>
                                    <div class="col col-8">
                                        <input class="w-100" type="text" name="other_khuyenmai" id="other_khuyenmai">
                                    </div>
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    </div>
    <script>
        showmenu();
        choosemenu();
    </script>
</body>

</html>