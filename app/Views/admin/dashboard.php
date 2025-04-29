<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">    
    <base href="<?= base_url()?>/admin/">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Admin</title>   
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="fix-header">

    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none"
                stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>

    <div id="main-wrapper">
        <?=$header?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="card card-outline-primary">
                        <div class="card-header">
                            <h4 class="m-b-0 text-white">Admin Dashboard</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card p-30">
                                    <div class="media">
                                        <div
                                            class="media-left meida media-middle">
                                            <span><i
                                                    class="fa fa-home f-s-40 "></i></span>
                                        </div>
                                        <div
                                            class="media-body media-text-right">
                                            <h2><?= esc($totals['totalRes'])?></h2>
                                            <p class="m-b-0">Số bàn</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card p-30">
                                    <div class="media">
                                        <div
                                            class="media-left meida media-middle">
                                            <span><i class="fa fa-cutlery f-s-40"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                        <div
                                            class="media-body media-text-right">
                                            <h2><?= esc($totals['totalDishes'])?></h2>
                                            <p class="m-b-0">Món Ăn</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card p-30">
                                    <div class="media">
                                        <div
                                            class="media-left meida media-middle">
                                            <span><i
                                                    class="fa fa-users f-s-40"></i></span>
                                        </div>
                                        <div
                                            class="media-body media-text-right">
                                            <h2></h2>
                                            <p class="m-b-0">Tài Khoản</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card p-30">
                                    <div class="media">
                                        <div
                                            class="media-left meida media-middle">
                                            <span><i class="fa fa-shopping-cart f-s-40"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                        <div
                                            class="media-body media-text-right">
                                            <h2></h2>
                                            <p class="m-b-0">Tổng Đơn Đặt</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card p-30">
                                    <div class="media">
                                        <div
                                            class="media-left meida media-middle">
                                            <span><i class="fa fa-th-large f-s-40"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                        <div
                                            class="media-body media-text-right">
                                            <h2><?= esc($totals['totalResCate'])?></h2>
                                            <p class="m-b-0">Danh Mục</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card p-30">
                                    <div class="media">
                                        <div
                                            class="media-left meida media-middle">
                                            <span><i class="fa fa-spinner f-s-40"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                        <div
                                            class="media-body media-text-right">
                                            <h2></h2>
                                            <p class="m-b-0">Đơn Đặt Đang Xét
                                                Duyệt</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card p-30">
                                    <div class="media">
                                        <div
                                            class="media-left meida media-middle">
                                            <span><i class="fa fa-check f-s-40"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                        <div
                                            class="media-body media-text-right">
                                            <h2></h2>
                                            <p class="m-b-0">Đơn đặt đã được
                                                giao</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card p-30">
                                    <div class="media">
                                        <div
                                            class="media-left meida media-middle">
                                            <span><i class="fa fa-times f-s-40"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                        <div
                                            class="media-body media-text-right">
                                            <h2></h2>
                                            <p class="m-b-0">Đơn đặt đã bị hủy
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card p-30">
                                    <div class="media">
                                        <div
                                            class="media-left meida media-middle">
                                            <span><i class="fa fa-usd f-s-40"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                        <div
                                            class="media-body media-text-right">
                                            <h2></h2>
                                            <p class="m-b-0">Tổng Thu Nhập Được
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer"> © 2025 - TH Team</footer>
            <script src="js/lib/jquery/jquery.min.js"></script>
            <script src="js/lib/bootstrap/js/popper.min.js"></script>
            <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
            <script src="js/jquery.slimscroll.js"></script>
            <script src="js/sidebarmenu.js"></script>
            <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js">
            </script>
            <script src="js/custom.min.js"></script>

</body>

</html>

