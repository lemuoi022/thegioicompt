<marquee style="color: red;font-size:15px"><b>THÔNG ĐIỆP 5K : Khẩu trang – Khử khuẩn – Khoảng cách – Không tụ tập – Khai báo y tế” để quyết tâm chiến thắng đại dịch COVID-19</b></marquee>
<div class="container-fluid header" id="myHeader">

  <div class="top-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <div class="logo-header">
          <a href="?controller=index"><img src="assets/images/logo.png" alt="" class="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i id="bar" class="fas fa-bars"></i></span>
          </button>
        </div>
        <div class="searchbar">
         <form method="get" action="?controller=search">
            <input type="hidden" name="controller" value="search">
            <input class="search_input" type="search" name="keyword" placeholder="Tên sản phẩm" aria-label="search" value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : '' ?>">
            <button href="#" class="search_icon btn_link" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <?php if (!isset($_SESSION['ss_client']) && !isset($_COOKIE['ck_client'])) {
                echo '<a class="nav-link" href="?controller=register"><i class="fas fa-user-plus"></i>Đăng ký</a></li>';
               } else echo "<a class='nav-link' href='?controller=profile'><i class='fas fa-user-alt'></i>{$_SESSION['ss_name']}</a></li>";;
              ?>

            <li class="nav-item">
              <?php if (!isset($_SESSION['ss_client']) && !isset($_COOKIE['ck_client'])) {
                echo '<a class="nav-link" href="?controller=login"><i class="fas fa-sign-in-alt"></i>Đăng nhập</a></li>';
              } else echo '<a class="nav-link" href="?controller=logout"><i class="fas fa-sign-out-alt"></i>Dăng xuất</a></li>';
              ?>
            <li class="nav-item">
              <a class="nav-link" href="?controller=order_search"><i class="fas fa-search-dollar"></i>Tra cứu đơn</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?controller=cart"><i class="fal fa-shopping-cart" href="#"></i> <span class="product-count">
                <?php if (isset($_SESSION['qty'])) {echo $_SESSION['qty'];} else echo '0' ?>  
              </span>Giỏ hàng</a>
            </li>
        </div>
      </div>

    </nav>
  </div>
  <div class=" bottom-header">
    <div class="container-fluid list menu row" style="margin:auto;">
      <ul class="hover">
        <li class="hoverli">
          <a href="#" class="menu-a"><i class="fas fa-bars"></i>Danh mục sản phẩm</a>
          <ul class="file_menu">
            <li><a href="#"><i class="fas fa-laptop"></i>&nbsp;Laptop</a>
              <ul class="sub laptop">

                <li><a href="?controller=laptopbrand&brand=acer">Laptop thương hiệu Acer</a></li>
                <li><a href="?controller=laptopbrand&brand=asus">Laptop thương hiệu Asus</a></li>
                <li><a href="?controller=laptopbrand&brand=msi">Laptop thương hiệu MSI</a></li>
                <li><a href="?controller=laptopbrand&brand=dell">Laptop thương hiệu Dell</a></li>
                <li><a href="?controller=laptopbrand&brand=lenovo">Laptop thương hiệu Lenovo</a></li>
              </ul>
            </li>
            <li><a href="#"><i class="fas fa-hdd"></i>&nbsp;PC</a>
              <ul class="sub computer">
                <li><a href="#">Cấu hình giá rẻ</a></li>
                <li><a href="#">Cấu hình tầm trung</a></li>
                <li><a href="#">Cấu hình cao cấp</a></li>
                <li><a href="#">Cấu hình siêu cao cấp</a></li>
                <li><a href="#">Cấu hình theo giá</a></li>
              </ul>
            </li>
            <li><a href="#"><i class="fas fa-microchip"></i>&nbsp;Linh kiện PC</a>
              <ul class="sub components">
                <li><a href="#">Mainboard-Bo mạch chủ</a></li>
                <li><a href="#">CPU-Bộ vi xử lí</a></li>
                <li><a href="#">Ram-Bộ nhớ trong</a></li>
                <li><a href="#">VGA-card màn hình</a></li>
                <li><a href="#">SSD-Ổ cứng thể rắn</a></li>
                <li><a href="#">HDD-Ổ cứng PC</a></li>
                <li><a href="#">Case-Vỏ máy tính</a></li>
                <li><a href="#">PSU-Nguồn máy tính</a></li>
                <li><a href="#">Fan RGB- Tản nhiệt</a></li>
              </ul>
            </li>
            <li><a href="#"><i class="fas fa-print"></i>&nbsp;Thiết bị văn phòng</a>
              <ul class="sub office">
                <li><a href="#">Microsoft Window</a></li>
                <li><a href="#">Microsoft Office</a></li>
                <li><a href="#">Máy in</a></li>
                <li><a href="#">Mực in</a></li>
                <li><a href="#">Các thiết bị khác</a></li>
              </ul>
            </li>
            <li><a href="#"><i class="fas fa-desktop"></i>&nbsp;Màn hình</a>
              <ul class="sub screen">
                <li><a href="#">Samsung</a></li>
                <li><a href="#">LG</a></li>
                <li><a href="#">Acer</a></li>
                <li><a href="#">Asus</a></li>
                <li><a href="#">Các thương hiệu khác</a></li>
                <li><a href="#">Kích thước 22"</a></li>
                <li><a href="#">Kích thước 24"</a></li>
                <li><a href="#">Kích thước Trên 24"</a></li>
                <li><a href="#">Tần số quét 60hz</a></li>
                <li><a href="#">Tần số quét trên 60hz</a></li>
              </ul>
            </li>
            <li><a href="#"><i class="fas fa-chair"></i>&nbsp;Ghế Gaming</a>
              <ul class="sub chair">
                <li><a href="#">Cougar</a></li>
                <li><a href="#">Razer</a></li>
                <li><a href="#">Corsair</a></li>
                <li><a href="#">Asus</a></li>
                <li><a href="#">Asus</a></li>
                <li><a href="#">Các thương hiệu khác</a></li>
              </ul>
            </li>
         
            <li><a href="#"><i class="fab fa-usb"></i>&nbsp;phụ kiện</a>
              <ul class="sub accessories">
                <li><a href="#"><i class="fas fa-volume-up"></i>&nbsp;Loa</a></li>
                <li><a href="#"><i class="fas fa-headphones"></i>&nbsp;Tai nghe</a></li>
                <li><a href="#"><i class="fas fa-mouse-pointer"></i>&nbsp;Chuột + Lót chuột</a></li>
                <li><a href="#"><i class="fas fa-camera"></i>&nbsp;Webcam</a></li>
                <li><a href="#"><i class="fas fa-keyboard"></i>&nbsp;Bàn phím</a></li>
                <li><a href="#"><i class="fas fa-glass-martini"></i>&nbsp;Giá đỡ chuột + Tai nghe</a></li>
                <li><a href="#"><i class="fas fa-gamepad"></i>&nbsp;Thiết bị streaming</a></li>
                <li><a href="#"><i class="fas fa-ellipsis-h"></i>&nbsp;Phụ kiện khác</a></li>
              </ul>
            </li>
          </ul>
        <li>
      </ul>

      <div class="list "><a href="#" class="a-list"><i class="fas fa-gift"></i>Sale siêu tốc</a>
        <a href="?controller=huongdanthanhtoan" class="a-list"><i class="fas fa-hand-holding-usd"></i>Hướng dẫn thanh toán</a>
        <a href="?controller=huongdantragop" class="a-list"><i class="fas fa-hand-holding-usd"></i>Hướng dẫn trả góp</a>
        <a href="?controller=baohanh" class="a-list"><i class="fas fa-tools"></i>Chính sách bảo hành</a>
        <a href="?controller=vanchuyen" class="a-list"><i class="fas fa-shuttle-van"></i>Chính sách vận chuyển</a>
      </div>
    </div>
  </div>