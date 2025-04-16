<div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard.php">
                        <span><img src="images/koji.png" alt="homepage" class="dark-logo" style="width: 70px" /></span>
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <div
                                class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center"
                                            href="javascript:void(0);">
                                            <strong>Check all notifications</strong> <i
                                                class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  "
                                href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><img
                                    src="images/bookingSystem/user-icn.png"
                                    alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Trang chủ</li>
                        <li> <a href="dashboard.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
                        
                        <li class="nav-label">Quản lý nhà hàng</li>
                        <li> <a class="has-arrow" href="#" aria-expanded="false">
                            <i class="fa fa-cutlery"></i><span>Quản lý bàn</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="all_restaurant.php">Danh sách bàn</a></li>
                                <li><a href="add_category.php">Thêm danh mục bàn</a></li>
                                <li><a href="add_restaurant.php">Thêm bàn mới</a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow" href="#" aria-expanded="false">
                            <i class="fa fa-cutlery"></i><span>Quản lý món ăn</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="all_menu.php">Danh sách món</a></li>
                                <li><a href="add_menu.php">Thêm món mới</a></li>
                            </ul>
                        </li>

                        <li> <a href="all_orders.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Đơn hàng</span></a></li>
                        <li> <a href="reports.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span>Báo cáo doanh thu</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>