<?php
	if (isset($_SESSION['ss_client'])) {
        header('location:?controller=index');
    }
        if (isset($_POST['btn_register'])) {
            $username = $_POST['username'];
            $password1 = $_POST['password1'];
            $password2 = $_POST['password2'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $data = $db->get('user_guest',array('email'=>$email));
            $error = array();
            if (empty($username)) {
                $error['username']="Không được để trống";
            }
            if (empty($password1)) {
                $error['password']="Không được để trống";
            }
            if ($password1!=$password2) {
                $error['password']="Hai mật khẩu không giống nhau";
            }
    
            if ($data) {
                $error['email']="email đã được sử dụng";
            }
            if (!($error)) {
            $db->insert('user_guest',array(
                    'user'=>$username,
                    'password'=>$password1,
                    'name'=>$name,
                    'address'=>$address,
                    'phone'=>$phone,
                    'email'=>$email,
                    'gender'=>$gender
        ));
            header('location:?controller=login');
        }
    }
require_once('./v/v_register.php');
?>