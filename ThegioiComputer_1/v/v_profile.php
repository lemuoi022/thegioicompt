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
</head>
<style>

</style>


<body>
    <div class="res-web">
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0" nonce="s09fLbP5"></script>

        <?php include('v_header.php') ?>
    </div>
    <div class="container" id="page-account">

        <div id="layout-page" class="clearfix">
            <?php foreach ($data_client as $key => $value) { ?>
                <span class="header-contact header-page clearfix">
                    <h1>Tài khoản của bạn <a class="logout" href="?controller=logout"><span class="fa fa-sign-out"></span>Thoát</a></h1>
                </span>
                <div id="customer_orders" class="col-xs-12">

                    <p>Bạn chưa đặt mua sản phẩm.</p>

                </div>

                <div class="col-xs-12" id="customer_sidebar">
                    <h2><?php echo $value['name'] ?></h2>
                    <p class="email "><?php echo $value['email'] ?></p>
                    <div class="address ">
                        <p> <?php echo $value['address'] ?></p>
                        <p><?php echo $value['phone'] ?></p>
                        <a id="view_address" href="?controller=edit_profile">sửa thông tin</a>
                        <br>
                        <a id="view_address" href="?controller=order_profile">Xem đơn hàng</a>
                    <?php } ?>
                    </div>
                </div>
        </div>

    </div>
    <?php include('v_footer.php') ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/javascript/main.js"></script>
</body>

</html>