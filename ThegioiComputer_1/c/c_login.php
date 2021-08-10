<?php
if (isset($_SESSION['ss_client'])) {
    header('location:?controller=index');
} elseif (isset($_COOKIE['ck_client'])) {
    $username = $_COOKIE['name'];
    $user = $db->get('user_guest', array('user' => $username));
    $_SESSION['ss_client'] = $user[0]['id'];
    $_SESSION['ss_user'] = $user[0]['user'];
    $_SESSION['ss_name'] = $user[0]['name'];
    $_SESSION['ss_phone'] = $user[0]['phone'];
    $_SESSION['ss_address'] = $user[0]['address'];
    $_SESSION['ss_email'] = $user[0]['email'];

    header('location:?controller=index');
}
if (isset($_POST['btn-login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $error = array();
    if ($username == '') {
        $error['username'] = 'Tài khoản không được để trống';
    }
    if ($password == '') {
        $error['password'] = 'Mật khẩu không được để trống';
    }

    $user = $db->get('user_guest', array('user' => $username));
    if (empty($user)) {
        $error['username'] = "Tài khoản này không tồn tại";
    } elseif ($password != $user[0]['password']) {
        $error['password'] = 'Mật khẩu nhập sai';
    }
    if (empty($error)) {
        $user = $db->get('user_guest', array('user' => $username));
        $a_check = ((isset($_POST['remember']) != 0) ? 1 : "");

        $f_user = $user[0]['user'];

        $f_pass = $user[0]['password'];

        if ($f_user == $username && $f_pass == $password) {

            $_SESSION['username'] = $f_user;

            $_SESSION['password'] = $f_pass;

            if ($a_check == 1) {
                setcookie('username', $username, time() + 9000000);
                setcookie('ck_client', 'usr=' . $f_user . '&hash=' . $f_pass, time() + 9000000);
            }
        }
    }
    if (empty($error)) {

        $_SESSION['ss_client'] = $user[0]['id'];

        $_SESSION['ss_user'] = $user[0]['username'];
        $_SESSION['ss_name'] = $user[0]['name'];
        $_SESSION['ss_phone'] = $user[0]['phone'];
        $_SESSION['ss_address'] = $user[0]['address'];
        $_SESSION['ss_email'] = $user[0]['email'];
        header('location:?controller=index');
    }
}
require_once('./v/v_login.php');
