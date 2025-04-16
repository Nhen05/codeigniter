<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="<?php base_url()?>">
    <link rel="icon" type="images/koji.png" sizes="16x16" href="images/favicon.png">
    <title>Đặt món</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?= $Header?>
    <div class="page-wrapper">
        <div class="top-links">
            <div class="container">
                <ul class="row links">
                    <li class="col-xs-12 col-sm-4 link-item"><span>1</span><a
                            href="restaurants.php">Chọn bàn</a>
                    </li>
                   
                    <li class="col-xs-12 col-sm-4 link-item"><span>3</span><a
                            href="#">Thanh toán và thưởng thức</a></li>
                </ul>
            </div>
        </div>
       
        <section class="inner-page-hero bg-image"
            data-image-src="images/img/dish.jpeg">
            <div class="profile">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-xs-12 col-sm-12  col-md-4 col-lg-4 profile-img">
                            <div class="image-wrap">
                                
                            </div>
                        </div>
                        <div
                            class="col-xs-12 col-sm-12 col-md-8 col-lg-8 profile-desc">
                            <div class="pull-left right-text white-txt">
                                
                                <ul class="nav nav-inline">
                                    <li class="nav-item"> <a class="nav-link active" href="#"><i class="fa fa-check"></i> Min $ 1000</a> </li>
                                    <li class="nav-item ratings">
                                        <a class="nav-link" href="#"> <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="breadcrumb">
            <div class="container">
            </div>
        </div>
        <div class="container m-t-30">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                    <div class="widget widget-cart">
                        <div class="widget-heading">
                            <h3 class="widget-title text-dark">
                                Đơn Hàng Của Bạn
                            </h3>
                            <div class="clearfix"></div>
                        </div>
                        <div class="order-row bg-white">
                            <div class="widget-body">

                        

                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="order-card">
                                <h3>Đơn Hàng Của Bạn</h3>
                                
                                <div class="alert alert-warning" role="alert">
                                    <i class="fa fa-info-circle"></i> Vui lòng kiểm tra đơn hàng trước khi đặt hàng
                                </div>
                                <div class="button-group" style="display: flex; flex-direction: column; gap: 10px;">
                                    <button type="button" class="btn btn-primary btn-block" onclick="confirmOrder()">Đặt Hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9">
                    <div class="menu-widget" id="2">
                        <div class="widget-heading">
                            <h3 class="widget-title text-dark">
                                Các món ăn xịn xò!! ~~~<a
                                    class="btn btn-link pull-right"
                                    data-toggle="collapse" href="#popular2"
                                    aria-expanded="true">
                                    <i class="fa fa-angle-right pull-right"></i>
                                    <i class="fa fa-angle-down pull-right"></i>
                                </a>
                            </h3>
                            <div class="clearfix"></div>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
           
<?= $Footer?>
    
    </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
    <style>
        .order-card {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .order-card h3 {
            margin-bottom: 20px;
            color: #333;
        }
        .total-price {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .total-price p {
            font-size: 16px;
            margin: 0;
        }
        .total-price h4 {
            font-size: 24px;
            color: #e44d3a;
            margin: 0;
        }
        .button-group {
            margin-top: 10px;
        }
        .btn-block {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            font-weight: 500;
        }
        .btn-primary {
            background-color: #e44d3a;
            border-color: #e44d3a;
        }
        .btn-primary:hover {
            background-color: #d93c29;
            border-color: #d93c29;
        }
        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }
        .btn-info:hover {
            background-color: #138496;
            border-color: #138496;
        }
    </style>

    <!-- Modal Xác nhận đặt hàng -->
    <div class="modal fade" id="confirmOrderModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Xác nhận đặt hàng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Bạn có chắc muốn đặt đơn hàng này không?</p>
                    
                        <button type="submit" name="submit" class="btn btn-primary">Xác nhận đặt hàng</button>
                    
                </div>
            </div>
        </div>
    </div>

   
</body>

</html>