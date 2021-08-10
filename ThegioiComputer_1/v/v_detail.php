<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/detail.css">
  <link rel="stylesheet" href="assets/css/detail1.css">
  <title>Document</title>
  <style>
    .outer-circle {
      margin-top: 50px;
    }

    .nav-products {
      padding-bottom: 200px;
    }
    .container{
      margin-bottom: 179px;
    }
  </style>
  <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
  <link rel="stylesheet" href="./style.css">

</head>

<body>
  <div class="res-web">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0" nonce="s09fLbP5"></script>

    <?php include('v_header.php') ?>
  </div>


  <main>
    <div class="container">

      <div class="grid product">
        <div class="column-xs-12 column-md-7">
          <div class="product-gallery">
            <div class="product-image">
              <img class="active" src="<?php echo $detail[0]['img_link'] ?>">
            </div>
            <ul class="image-list">
              <li class="image-item"><img src="<?php echo $detail[0]['img_link2'] ?>"></li>
              <li class="image-item"><img src="<?php echo $detail[0]['img_link3'] ?>"></li>
              <li class="image-item"><img src="<?php echo $detail[0]['img_link'] ?>"></li>
            </ul>
          </div>
        </div>
        <div class="column-xs-12 column-md-5" style="font-family: 'Font Awesome 5 Brands';">
          <h1><b><?php echo $detail1[0]['laptop_name'] ?></b< /h1>
              <h2 style="color:red"><?php echo number_format($detail[0]['price']) ?> VNĐ</h2>
              <h4><b>Monitor:</b><?php echo $detail1[0]['monitor'] ?></h4>
              <h4><b>CPU:</b><?php echo $detail1[0]['cpu'] ?></h4>
              <h4><b>RAM:</b><?php echo $detail1[0]['ram'] ?></h4>
              <h4><b>VGA:</b><?php echo $detail1[0]['vga'] ?></h4>
              <h4><b>SSD:</b><?php echo $detail1[0]['ssd'] ?></h4>
              <h4><b>HDD:</b><?php
                              if ($detail1[0]['hdd']  == null) {
                                echo "Có thể nâng cấp thêm";
                              } else {
                                echo $detail1[0]['hdd'];
                              }
                              ?></h4>
              <button class="btn btn-success">Thêm giỏ hàng</button>
        </div>
      </div>
      <div>
        <h3 style="text-align:center; font-family: 'Font Awesome 5 Brands';">Giới thiệu sản phẩm</h3>
        <h5 style="font-family: 'Font Awesome 5 Brands';"><?php echo $detail[0]['content'] ?></h5>
        <h4 style="font-family: 'Font Awesome 5 Brands';"><b>Bình luận</b></h4>
        <form action="?controller=detail&id=<?php echo $detail[0]['product_id'] ?>" method="post">
          <input type="hidden" name="id" value="<?php echo $detail[0]['product_id'] ?>">
          <textarea name="comment" id="" cols="143" rows="5" placeholder="Nội dung comment" class="form-control "></textarea>
          <div style="float: left;">
            <div class="rateyo" id="rating" data-rateyo-rating="4" data-rateyo-num-stars="5" data-rateyo-score="3"></div>
            <span class='result'>0</span>
            <input type="hidden" name="rating">
          </div>
          <input style="float: right;" type="submit" value="Gửi và đánh giá" name="rate" class="btn btn-info">
        </form>
      </div>
    </div>
  </main>

  <!-- partial -->
  <script src="assets/javascript/detail.js"></script>
  <?php include('v_footer.php') ?>


  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script>       
     $(function () {
            $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
               var rating = data.rating;       
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));             
            $(this).parent().find('.result').text('rating :'+ rating);             
            $(this).parent().find('input[name=rating]').val(rating);
            // Getter
            var readOnly = $("#rateYo").rateYo("option", "spacing"); //returns 10px
 
// Setter
            $("#rateYo").rateYo("option", "spacing", "5px"); //returns a jQuery Element
     //add rating value to input field         
        });    
      });   
    </script>
  <script src="assets/javascript/main.js"></script>
</body>

</html>