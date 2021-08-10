<?php
include('includes/header.php');
?>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-10 col-md-10">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block"><img src="assets/images/admin.jpg" alt="" style="width: 500px; height: 500px; border-radius:5px;"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-white-900 mb-4">Welcome Back!</h1>
                                </div>
                                <form class="user" action="?controller=login" method="post">
                                    <div class="form-group">
                                        <input type="text" name="user_staff" class="form-control form-control-user" placeholder="Enter Username...">
                                        <?php
                                        if (isset($error['user_staff'])) {
                                            echo $error['user_staff'];
                                        }
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password_staff" class="form-control form-control-user" placeholder="Password">
                                        <?php if (isset($error['password_staff'])) {
                                            echo $error['password_staff'];
                                        } ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block mb-5" name="btn_login">Login</button>
                                    <a href="#" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                    <a href="#" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<?php
include('includes/scripts.php');
?>