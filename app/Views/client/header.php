<header id="header" class="header-scroll top-header headrom">
    <nav class="navbar navbar-dark">
        <div class="container">
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
            <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/koji.png" alt="">
            </a>
            <div class="collapse navbar-toggleable-md float-lg-right" id="mainNavbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item"> <a class="nav-link active" href="index.php">Trang Chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Chọn bàn <span class="sr-only"></span></a> </li>
                  
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Modal Xác nhận đổi bàn -->
<div class="modal fade" id="changeTableModal" tabindex="-1" role="dialog" aria-labelledby="changeTableModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changeTableModalLabel">Xác nhận đổi bàn</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-danger"><strong>Lưu ý:</strong> Khi đổi bàn, tất cả đơn đặt của bàn hiện tại sẽ bị hủy.</p>
                <p>Bạn có chắc chắn muốn đổi bàn không?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                <a href="change_table.php" class="btn btn-primary">Xác nhận</a>
            </div>
        </div>
    </div>
</div>
