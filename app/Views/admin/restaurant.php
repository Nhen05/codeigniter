<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Danh sách bàn ăn</title>
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <base href="<?= base_url()?>/admin/">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="main-wrapper">
    <?=$header?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Danh sách các bàn nhà hàng
                                </h4>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Danh mục</th>
                                                <th>Tên bàn</th>
                                                <th>Số người</th>
                                                <th>Giờ mở</th>
                                                <th>Giờ đóng</th>
                                                <th>Ngày mở</th>
                                                <th>Vị trí</th>
                                                <th>Hình ảnh</th>
                                                <th>Thời gian</th>
                                                <th>Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            if (isset($resList['listRes']) && !empty($resList['listRes'])) {
                                                foreach ($resList['listRes'] as $index => $res) { 
                                                    $categoryName = isset($resList['resCategory'][$index]['c_name']) ? $resList['resCategory'][$index]['c_name'] : 'Not Found Category !';
                                                    echo '<tr>';
                                                    echo '<td>' . esc($categoryName) . '</td>'; // Tên danh mục
                                                    echo '<td>' . esc($res['title']) . '</td>'; // Tên bàn
                                                    echo '<td>' . esc($res['so_nguoi']) . '</td>'; // Số người
                                                    echo '<td>' . esc($res['o_hr']) . '</td>'; // Giờ mở
                                                    echo '<td>' . esc($res['c_hr']) . '</td>'; // Giờ đóng
                                                    echo '<td>' . esc($res['o_days']) . '</td>'; // Ngày mở
                                                    echo '<td>' . esc($res['address']) . '</td>'; // Vị trí
                                                    echo '<td><img src="Res_img/' . esc($res['image']) . '" alt="Hình ảnh" style="width: 50px; height: 50px;"></td>'; // Hình ảnh
                                                    echo '<td>' . esc($res['date']) . '</td>'; // Thời gian
                                                    echo '<td>
                                                            <a href="delete_stores.php?res_del=' . esc($res['rs_id']) . '" class="btn btn-danger">Xóa</a>
                                                            <a href="update_restaurant.php?res_upd=' . esc($res['rs_id']) . '" class="btn btn-info">Sửa</a>
                                                            <a href="generate_qr.php?table_id=' . esc($res['rs_id']) . '" class="btn btn-success">QR</a>
                                                        </td>';
                                                    echo '</tr>';
                                                }
                                            } else {
                                                echo '<tr><td colspan="10">Không có dữ liệu</td></tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer class="footer"> © 2025 - TH Team </footer>
    </div>
    </div>
    <script src="js/lib/jquery/jquery.min.js"></script>
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>
</body>
</html>