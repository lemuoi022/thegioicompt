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

<body>
    <div class="res-web">
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0" nonce="s09fLbP5"></script>

        <?php include('v_header.php') ?>
    </div>

    <div class="row container-fluid header-nav-block mx-auto">
        <div class="container">
            <h2 class="title-fea font-weight-bold">Sản phẩm cần tìm kiếm</h2>
        </div>
        <div class="container">
            <p style="color: #000; font-family:auto;font-size: 19 px"><?php if (!empty($empty)) echo $empty ?></p>
        </div>
        <?php foreach ($product as $key => $value) {?>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="?controller=detail&id=<?php echo $value['id']?>" class="image">
                        <img class="pic-1" src="<?php echo $value['img_link'] ?>">
                    </a>
                    <span class="product-discount-label">-33%</span>
                    <ul class="product-links">
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                        <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <ul class="rating">
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="far fa-star"></li>
                        <li class="far fa-star"></li>
                    </ul>
                    <h3 class="title"><a href="#"><?php echo $value['product_name'] ?></a></h3>
                    <div class="price"><span>$90.00</span><?php echo number_format($value['price']) ?> VNĐ</div>
                    <a class="add-to-cart" href="?controller=addcart&id=<?php echo $value['id']; ?>">Thêm giỏ hàng</a>
                </div>
            </div>
            
        </div>
        <?php }?> 
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