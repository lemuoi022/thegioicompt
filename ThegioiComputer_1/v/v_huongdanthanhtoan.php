<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Document</title>
</head>

<body>
  <div class="res-web">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0" nonce="s09fLbP5"></script>

    <?php include('v_header.php') ?>
  </div>
  <div>
      <div class="container">
          <img src="./assets/images/hinhthuthanhtoan.jpg" width="100%" height="600px">
      </div>
      <br>
      <div  class="container">
        <div >
        <button type="button" class="btn btn-success" style="font-weight: bold;color: yellow ;font-size: 25px;">1-Thanh toán trực tiếp</button><br><br>
            <span>- Khách hàng có thể đến trực tiếp Showroom Thế Giới Computer tại Hà Nội để thanh toán bằng tiền mặt hoặc quẹt thẻ.</span><br>
            <span>- Địa chỉ: Số 1 Hoàng Đạo Thúy, Quận Thanh Xuân, Hà Nội.</span><br>
            <span>- Số điện thoại liên hệ: 0337758726.</span><br>
           
          </div> <br><br>

          <div >
        <button type="button" class="btn btn-success" style="font-weight: bold;color: yellow ;font-size: 25px;">2-Thanh toán chuyển khoản</button><br><br>
            <span>- Khách hàng có thể chuyển khoản qua tải khoản của Thế Giới Computer tại các ngân hàng dưới đây.</span><br>
           <div  class="container">
              <div class="row"> 
                  <div class="col-md-4">
                     <img  src="./assets/images/vietcombank.jpg" width="100%" >
                  </div>
                  <div class="col-md-8" style="margin-top:50px;font-size: 20px;">
                    <span>Ngân Hàng Thương Mại Cổ Phần Ngoại Thương Việt Nam</span><br>
                     <span>Tên chủ tài khoản: Nguyen Manh Tu</span><br>
                     <span>Số tài khoản: 1016766352</span><br>
                     <span>Chi nhánh: Thái Hà</span><br>
                  </div>
              </div>
              
              <div class="row"> 
                  <div class="col-md-4">
                     <img  src="./assets/images/techcombank.jpg" width="100%" >
                  </div>
                  <div class="col-md-8" style="margin-top:50px;font-size: 20px;">
                    <span>Ngân Hàng Thương Mại Cổ Phần Kỹ Thương Việt Nam</span><br>
                     <span>Tên chủ tài khoản: Dong Huy Hoang</span><br>
                     <span>Số tài khoản: 19037311245017
</span><br>
                     <span>Chi nhánh: Đông Anh</span><br>
                  </div>
              </div>
             
           </div>
           
          </div> <br><br>
         </div>            
   </div> 

  <?php include('v_footer.php') ?>
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId: "1784956665094089",
        xfbml: true,
        version: "v2.6"
      });
    };
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) {
        return;
      }
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  <div class="fb-customerchat" page_id="142092768006615"></div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="assets/javascript/main.js"></script>
</body>

</html>