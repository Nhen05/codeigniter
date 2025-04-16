
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="<?= base_url()?>">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Thêm bàn ăn</title>
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="fix-header">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="main-wrapper">
    <?= $Header?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="card card-outline-primary">
                        <div class="card-header">
                            <h4 class="m-b-0 text-white">Thêm nhà hàng</h4>
                        </div>
                        <div class="card-body">
                            <form action='' method='post' enctype="multipart/form-data">
                                <div class="form-body">
                                    <hr>
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Tên
                                                   Bàn</label>
                                                <input type="text" name="res_name" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Giờ mở</label>
                                                <select name="o_hr" class="form-control custom-select" data-placeholder="Choose a Category">
                                                    <option>--Chọn giờ mở cửa--</option>
                                                    <option value="6am">6 giờ sáng
                                                    </option>
                                                    <option value="7am">7 giờ sáng
                                                    </option>
                                                    <option value="8am">8 giờ sáng
                                                    </option>
                                                    <option value="9am">9 giờ sáng
                                                    </option>
                                                    <option value="10am">10 giờ sáng
                                                    </option>
                                                    <option value="11am">11 giờ trưa
                                                    </option>
                                                    <option value="12pm">12 giờ trưa
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Giờ đóng</label>
                                                <select name="c_hr" class="form-control custom-select" data-placeholder="Choose a Category">
                                                    <option>--Chọn giờ đóng cửa--</option>
                                                    <option value="3pm">13 giờ chiều
                                                    </option>
                                                    <option value="4pm">14 giờ chiều
                                                    </option>
                                                    <option value="5pm">15 giờ chiều
                                                    </option>
                                                    <option value="6pm">16 giờ chiều
                                                    </option>
                                                    <option value="7pm">17 giờ tối
                                                    </option>
                                                    <option value="8pm">18 giờ tối
                                                    </option>
                                                    <option value="9pm">19 giờ tối
                                                    </option>
                                                    <option value="10pm">20 giờ tối
                                                    </option>
                                                    <option value="11pm">21 giờ đêm
                                                    </option>
                                                    <option value="12am">00 giờ đêm
                                                    </option>
                                                    <option value="1am">1 giờ sáng
                                                    </option>
                                                    <option value="2am">2 giờ sáng
                                                    </option>
                                                    <option value="3am">3 giờ sáng
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Ngày mở cửa</label>
                                                <select name="o_days" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                    <option>--Chọn ngày mở cửa--
                                                    </option>
                                                    <option value="Mon-Tue">
                                                        Thứ hai - Thứ ba</option>
                                                    <option value="Mon-Wed">
                                                    Thứ hai - Thứ tư</option>
                                                    <option value="Mon-Thu">
                                                    Thứ hai - Thứ năm</option>
                                                    <option value="Mon-Fri">
                                                    Thứ hai - Thứ sáu</option>
                                                    <option value="Mon-Sat">
                                                    Thứ hai - Thứ bảy</option>
                                                    <option value="24hr-x7">
                                                        24hr-x7</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Số người</label>
                                                <input type="number" name="so_nguoi" class="form-control" placeholder="Nhập số người">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-danger">
                                                <label class="control-label">Hình
                                                    ảnh</label>
                                                <input type="file" name="file" id="lastName" class="form-control form-control-danger" placeholder="12n">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Danh Mục</label>
                                                <select name="c_name" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                    <option>--Chọn danh mục--
                                                    </option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="box-title m-t-40">Địa chỉ của nhà hàng</h3>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <textarea name="address" type="text" style="height:100px;" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="form-actions">
                            <input type="submit" name="submit" class="btn btn-primary" value="Save">
                            <a href="add_restaurant.php" class="btn btn-inverse">Cancel</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <footer class="footer"> © 2025 - TH Team </footer>
        </div>
    </div>
    </div>
    </div>
    <script src="js/lib/jquery/jquery.min.js"></script>
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="js/custom.min.js"></script>
</body>

</html>