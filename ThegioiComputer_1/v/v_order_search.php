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
<style>
   .container-fluid.order {
    margin-bottom: 500px;
}
</style>
<body>
    <div class="res-web">
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0" nonce="s09fLbP5"></script>

        <?php include('v_header.php') ?>
    </div>

    <div class="container-fluid order">


        <!-- Content Row -->
        <div class="container-fluid ">
            <h4>Tra cứu đơn hàng</h4>
            <hr>
        </div>

        <div class="searchbar">
            <form method="post" action="?controller=order_search">
                <input class="search_input" type="search" name="keyword_order" placeholder="Mã đơn hàng" aria-label="search">
                <button href="#" class="search_icon btn_link" type="submit" name="search"><i class="fas fa-search"></i></button>
            </form>


            <table class="table table-dark">
                <thead>
                    <tr style="text-align: center;">
                        <th scope="col">ID</th>
                        <th scope="col">Full-name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody class="col table-dark">
                    <?php if (isset($order)) {
                        foreach ($order as $key => $value) { ?>
                            <tr style="text-align: center;padding-top:30px;">
                                <th scope="row" style="text-align:center;"><?php echo $value['id'] ?></th>
                                <td><?php echo $value['name'] ?></td>
                                <td><?php echo $value['phone'] ?></td>
                                <td><?php echo $value['address'] ?></td>
                                <?php if ($value['status'] == 0) {
                                    echo '<td class="text-danger font-weight-bold">Chưa duyệt</td>';
                                } elseif ($value['status'] == 1) {
                                    echo '<td class="text-success font-weight-bold">Đã duyệt</td>';
                                }
                                ?>

                            </tr>
                    <?php  }
                    } ?>

                </tbody>
            </table>
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