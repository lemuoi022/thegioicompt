<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Document</title>
  <style>
  </style>
</head>

<body>
  <div class="res-web">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0" nonce="s09fLbP5"></script>

    <?php include('v_header.php') ?>
  </div>
  <section class="h-100 h-custom" style="background-color: #f1f0f1;">
    <div class="container py-2 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-lg-8">
                  <div class="p-4">
                    <div class="d-flex justify-content-between align-items-center ">
                      <h1 class="fw-bold mb-0 text-black">Giỏ hàng</h1>
                      <?php $amount = 0;
                      $sum = 0;
                      if (isset($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $value) {
                          $amount += $value['sl'];

                      ?>
                      <?php }
                      } ?>
                      <h6 class="mb-0 text-muted"><?php echo $amount ?>items</h6>
                      <?php  ?>
                    </div>
                    <hr class="my-4">
                    <?php $amount = 0;
                    $sum = 0;
                    if (isset($_SESSION['cart'])) {
                      foreach ($_SESSION['cart'] as $value) {
                        $amount += $value['sl'] * $value['price'];
                        $sum = $value['sl'] * $value['price'];
                    ?>
                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                          <div class="col-md-2 col-lg-2 col-xl-2">
                            <img src="<?php echo $value['img_link'] ?>" class="img-fluid rounded-3">
                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-3">
                            <h6 class="text-muted"><?php echo $value['product_name']; ?></h6>
                          </div>
                          <div class="col-md-8 col-lg-8 col-xl-3 d-flex">
                            <a href="?controller=option_cart&method=prev&id=<?php echo $value['id'] ?>" class="btn btn-secondary" style="font-size: 20px;">-</a>

                            <div style="width:35px; text-align:center; margin-top:9px;"><?php echo $value['sl']; ?></div>

                            <a href="?controller=option_cart&method=next&id=<?php echo $value['id'] ?>" class="btn btn-success" style="font-size: 20px;">+</a>
                          </div>
                          <div class="col-md-2 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0" style="color:#000;"><?php echo number_format($sum) ?> VNĐ</h6>
                          </div>
                          <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                            <a href="?controller=option_cart&method=del&id=<?php echo $value['id'] ?>" class="text-muted"><i class="fas fa-times"></i></a>
                          </div>
                        </div>
                    <?php }
                    } ?>
                    <hr class="my-4">

                    <div class="pt-5">
                      <h6 class="mb-0"><a href="?controller=index" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Trở về trang chủ</a></h6>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 bg-grey">
                  <div class="p-4">
                    <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                    <hr class="my-4">
                    <?php $amount = 0;
                    $sum = 0;
                    $count = 0;
                    $_SESSION['qty'] = 0;
                    if (isset($_SESSION['cart'])) {
                      foreach ($_SESSION['cart'] as $value) {
                        $count = $value['sl'] * $value['price'];
                        $amount += $value['sl'] * $value['price'];
                        $sum = $value['sl'] * $value['price'];
                        $_SESSION['qty'] += $value['sl'];
                    ?>
                        <div class="d-flex justify-content-between mb-4">
                          <h5 class="" style="font-size: 15px;"><?php echo substr($value['product_name'], 0, 15) ?></h5>
                          <h5 style="font-size: 15px;"><?php echo number_format($count) ?> VNĐ</h5>
                        </div>
                    <?php }
                    } ?>
                    <h5 class="text-uppercase mb-3">Shipping</h5>

                    <div class="mb-4 pb-2">
                      <select class="select">
                        <option value="1">Giao hàng nhanh nội thành</option>
                        <option value="2">Giao thông thường</option>
                        <option value="3">More..</option>

                      </select>
                    </div>
                    <hr class="my-4">

                    <div class="d-flex justify-content-between mb-1">
                      <h5 class="text-uppercase">Tổng giá trị:</h5>
                      <h5><?php echo number_format($amount) ?> VNĐ</h5>
                    </div>
                  </div>

                  <form method="post" action="?controller=payment">
                    <h5 class="text-uppercase mb-3">Điền thông tin của bạn</h5>

                    <div class="mb-5">
                      <div class="form-outline">
                        <input name="name" type="text" class="form-control mb-2" placeholder="Điền tên đầy đủ...."
                        value="<?php if(isset($_SESSION['ss_name'])) echo $_SESSION['ss_name']?>">
                        <input name="address" type="text" class="form-control mb-2" placeholder="Điền địa chỉ...."
                        value="<?php if(isset($_SESSION['ss_address'])) echo $_SESSION['ss_address']?>">
                        <input name="phone" type="text" class="form-control mb-2" placeholder="Điền điện thoại...."
                        value="<?php if(isset($_SESSION['ss_phone'])) echo $_SESSION['ss_phone']?>">
                        <input name="email" type="email" class="form-control mb-1" placeholder="Điền email...."
                        value="<?php if(isset($_SESSION['ss_email'])) echo $_SESSION['ss_email']?>">

                      </div>
                    </div>
                    <button name="btn_payment" onclick="return confirm('xác nhận thanh toán');" type="submit" class="btn btn-dark btn-block btn-lg mb-3" data-mdb-ripple-color="dark">Thanh toán</a></button>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include('v_footer.php') ?>

  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="assets/javascript/main.js"></script>
</body>

</html>