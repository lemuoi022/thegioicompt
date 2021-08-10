<?php 
if(isset($_SESSION['ss_admin'])){
    header('location: ?controller=index');
}

if(isset($_POST['btn_login'])){
    $user_staff = $_POST['user_staff'];
    $password_staff = $_POST['password_staff'];


    $error = array();

    if($user_staff == ''){
        $error['user_staff'] = "Tài khoản không được để trống";
    }

    if($password_staff == ''){
        $error['password_staff'] = "Mật khẩu không được để trống";
    }


    if(!$error){
        $user = $db->get('admin_staff', array('user_staff'=>$user_staff));
        if(empty($user)){
            $error['user_staff'] = "Tài khoản không tồn tại";
        } else{
            if($password_staff != $user[0]['password_staff']){
                $error['password_staff'] = "Mật khẩu không tồn tại";
            }
        }
    } 
 

    if(!$error){
        $_SESSION['ss_admin'] = $user[0]['id'];
        header('location: ?controller=index');
    }
}
require_once('./v/v_login.php');
?>

