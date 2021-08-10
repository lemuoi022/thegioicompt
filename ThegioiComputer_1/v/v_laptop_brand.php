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
    .outer-circle {
      margin-top: 50px;
    }

    .nav-products {
      padding-bottom: 200px;
    }

    footer {
      background-color: #fff;
      padding-top: 200px;
    }
  </style>
</head>

<body>
  <div class="res-web">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0" nonce="s09fLbP5"></script>

    <?php include('v_header.php') ?>
  </div>
  <div class="header-nav-block">
    <?php echo $banner1 ?>
  </div>
  <div class="nav-products" <?php if (isset($color)) echo $color; ?>>
    <?php echo $banner2 ?>
    <div class="container">
      <div class="outer-circle">
        <div class="inner-circle">
          <div class="row mx-auto" style="width: 475px;background-color: white;border-radius: 6%;">
            <div class="img-left">
            <a href="?controller=detail&id=<?php echo $data[0]['product_id'] ?>">
              <img src="<?php echo  $data[0]['img_link'] ?>" width="200" height="200" style="border-radius: 6%;">
            </a>
          </div>
            <div class="detail-product" style="line-height: 2px;margin-top: 15px;">
              <p class="" style="font-weight: bolder;line-height: 10px;">Tên sản phẩm:<?php echo substr($data_product0[0]['laptop_name'], 0, 15) ?></p>
              <p>---------------------------------</p>
              <p><b>CPU:</b> <?php echo substr($data_product0[0]['cpu'], 0, 25) ?> </p>
              <p><b>RAM:</b> <?php echo substr($data_product0[0]['ram'], 0, 9) ?> </p>
              <p><b>Moniter:</b> <?php echo substr($data_product0[0]['monitor'], 0, 5) ?> </p>
              <p><b>VGA:</b><?php echo substr($data_product0[0]['vga'], 0, 25) ?> </p>
              <p><b>Ổ cứng:</b> <?php echo substr($data_product0[0]['ssd'], 0, 5) ?> </p>
              <p><b>Window:</b> Win 10 Pro Bản quyền </p>
              <p>--------------------------------</p>
              <strong style="color: red;">Giá:<?php echo number_format($data_product0[0]['price']) ?>Đ</strong>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container" style="padding-left: 600px; margin-top: -270px;">
      <div class="outer-circle">
        <div class="inner-circle">
          <div class="row mx-auto" style="width: 475px;background-color: white;border-radius: 6%;">
            <div class="img-left" style="">
            <a href="?controller=detail&id=<?php echo $data[1]['product_id']?>">
              <img src="<?php echo $data[1]['img_link'] ?>" width="200" height="200" style="border-radius: 6%;">
            </a>
            </div>
            <div class="detail-product" style="line-height: 2px;margin-top: 15px;">
              <p class="" style="font-weight: bolder;line-height: 10px;">Tên sản phẩm:<?php echo substr($data_product1[0]['laptop_name'], 0, 15) ?></p>
              <p>---------------------------------</p>
              <p class="" style=""><b>CPU:</b> <?php echo substr($data_product1[0]['cpu'], 0, 25) ?> </p>
              <p class="" style=""><b>RAM:</b> <?php echo substr($data_product1[0]['ram'], 0, 9) ?> </p>
              <p class="" style=""><b>Moniter:</b> <?php echo substr($data_product1[0]['monitor'], 0, 5) ?> </p>
              <p class="" style=""><b>VGA:</b><?php echo substr($data_product1[0]['vga'], 0, 25) ?> </p>
              <p class="" style=""><b>Ổ cứng:</b> <?php echo substr($data_product1[0]['ssd'], 0, 5) ?> </p>
              <p class="" style=""><b>Window:</b> Win 10 Pro Bản quyền </p>
              <p>--------------------------------</p>
              <strong style="color: red;">Giá:<?php echo number_format($data_product1[0]['price']) ?>Đ</strong>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="nav-products" <?php if (isset($background)) echo $background; ?>>
    <?php echo $banner3 ?>
    <div class="container">
      <div class="outer-circle">

        <div class="inner-circle">
          <div class="row mx-auto" style="width: 475px;background-color: white;border-radius: 6%;">
            <div class="img-left" style="">
              <a href="?controller=detail&id=<?php echo $data[2]['product_id'] ?>">
                <img src="<?php echo  $data[2]['img_link'] ?>" width="200" height="200" style="border-radius: 6%;">
              </a>
            </div>
            <div class="detail-product" style="line-height: 2px;margin-top: 15px;">
              <p class="" style="font-weight: bolder;line-height: 10px;">Tên sản phẩm:<?php echo substr($data_product2[0]['laptop_name'], 0, 15) ?></p>
              <p>---------------------------------</p>
              <p class="" style=""><b>CPU:</b> <?php echo substr($data_product2[0]['cpu'], 0, 25) ?> </p>
              <p class="" style=""><b>RAM:</b> <?php echo substr($data_product2[0]['ram'], 0, 9) ?> </p>
              <p class="" style=""><b>Moniter:</b> <?php echo substr($data_product2[0]['monitor'], 0, 5) ?> </p>
              <p class="" style=""><b>VGA:</b><?php echo substr($data_product2[0]['vga'], 0, 25) ?> </p>
              <p class="" style=""><b>Ổ cứng:</b> <?php echo substr($data_product2[0]['ssd'], 0, 5) ?> </p>
              <p class="" style=""><b>Window:</b> Win 10 Pro Bản quyền </p>
              <p>--------------------------------</p>
              <strong style="color: red;">Giá:<?php echo number_format($data_product2[0]['price']) ?>Đ</strong>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="container" style="padding-left: 600px; margin-top: -270px;">
      <div class="outer-circle">
        <div class="inner-circle">
          <div class="row mx-auto" style="width: 475px;background-color: white;border-radius: 6%;">
            <div class="img-left" style="">
            <a href="?controller=detail&id=<?php echo $data[3]['product_id'] ?>">
              <img src="<?php echo  $data[3]['img_link'] ?>" width="200" height="200" style="border-radius: 6%;">
            </a>
            </div>
            <div class="detail-product" style="line-height: 2px;margin-top: 15px;">
              <p class="" style="font-weight: bolder;line-height: 10px;">Tên sản phẩm:<?php echo substr($data_product3[0]['laptop_name'], 0, 15) ?></p>
              <p>---------------------------------</p>
              <p class="" style=""><b>CPU:</b> <?php echo substr($data_product3[0]['cpu'], 0, 15) ?> </p>
              <p class="" style=""><b>RAM:</b> <?php echo substr($data_product3[0]['ram'], 0, 9) ?> </p>
              <p class="" style=""><b>Moniter:</b> <?php echo substr($data_product3[0]['monitor'], 0, 5) ?> </p>
              <p class="" style=""><b>VGA:</b><?php echo substr($data_product3[0]['vga'], 0, 25) ?> </p>
              <p class="" style=""><b>Ổ cứng:</b> <?php echo substr($data_product3[0]['ssd'], 0, 5) ?> </p>
              <p class="" style=""><b>Window:</b> Win 10 Pro Bản quyền </p>
              <p>--------------------------------</p>
              <strong style="color: red;">Giá:<?php echo number_format($data_product3[0]['price']) ?>Đ</strong>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

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