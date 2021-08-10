        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="?controller=index">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laptop"></i>
                </div>
                <div class="sidebar-brand-text mx-3">PC World <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="?controller=index">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Trang chủ</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="?controller=staff"
                    aria-expanded="true" aria-controls="collapseTwo">
                    
                    <i class="fas fa-fw fa-user"></i>
                    <span>Quản lý nhân viên</span>
                </a>
                
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="?controller=product"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-laptop"></i>
                    <span>Quản lý sản phẩm</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="?controller=bill"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-money-check-edit-alt"></i>
                    <span>Quản lý đơn hàng</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="?controller=guest"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-user-shield"></i>
                    <span>Quản lý khách hàng</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
           

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="?controller=chart">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Biểu đồ</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="?controller=table">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Doanh thu</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            
        </ul>
        <!-- End of Sidebar -->

         <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

     <!-- Logout Modal-->
     <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="?controller=log_out">Logout</a>
                </div>
            </div>
        </div>
    </div>
