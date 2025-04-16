<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?php base_url()?>">
    <title>Chi tiết đơn hàng</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .header-scroll {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background-color: #1c1c1c;
        }
        .main-content {
            padding-top: 80px;
        }
    </style>
</head>

<body>
<?= $Header?>
<header id="header" class="header-scroll top-header headrom">
    <nav class="navbar navbar-dark">
        <div class="container">
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
            <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/koji.png" alt="" style="max-height: 50px;">
            </a>
            <div class="collapse navbar-toggleable-md float-lg-right" id="mainNavbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item"> <a class="nav-link active" href="index.php">Trang Chủ <span class="sr-only">(current)</span></a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>
</header>
    
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Chi tiết đơn hàng</h4>
                    </div>
                    <div class="card-body">
                        <!-- Thông tin bàn và khách hàng -->
                        <div class="row mb-4">
                           
                        </div>

                        <!-- Danh sách món đã đặt -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên món</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            
                            <tfoot>
                                <tr>
                                    <td colspan="4" class="text-right"><strong>Tổng cộng:</strong></td>
                                    <td><strong>đ</strong></td>
                                </tr>
                            </tfoot>
                        </table>

                        <!-- Nút in hóa đơn -->
                        <div class="text-center mt-4">
                            <button onclick="window.print()" class="btn btn-primary"><i class="fa fa-print"></i> In hóa đơn</button>
                            <a href="dishes.php?res_id "class="btn btn-success"><i class="fa fa-plus"></i> Đặt thêm món</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

   

    <!-- Modal Xác nhận xóa -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Xác nhận xóa món</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST">
                    <div class="modal-body">
                        Bạn có chắc chắn muốn xóa món <span id="dishTitle"></span>?
                        <input type="hidden" name="dish_title" id="dishTitleInput">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <button type="submit" name="delete_dish" class="btn btn-danger">Xóa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?= $Footer?>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html> 