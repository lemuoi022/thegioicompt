<?php 
    if(isset($_SESSION['ss_admin'])){
    $user =  $db->get('admin_staff', array('id'=>$_SESSION['ss_admin']));
    if($user[0]['lv']==1){
    if(isset($_POST['add-admin'])){
        $user_staff = $_POST['user_staff'];
        $password_staff = $_POST['password_staff'];
        $name_staff = $_POST['name_staff'];

        $error = array();

        if($user_staff == ''){
            $error['user_staff'] = "Tài khoản không được để trống";
        }

        if($password_staff == ''){
            $error['password_staff'] = "Mật khẩu không được để trống";
        }

        if($name_staff == ''){
            $error['name_staff'] = "Tên không được để trống";
        }

        if(!$error){
            $staff_create = $db->get('admin_staff', array('user_staff' =>$user_staff));
            if(!empty($staff_create)){
                $error['user_staff'] = "Tài khoản đã được sử dụng";
            }
        }

        if(!$error){
            $db->insert('admin_staff',array(
                'user_staff'=>$user_staff,
                'password_staff'=>$password_staff,
                'name_staff'=>$name_staff,
                'lv'=>1
            ));
            header('location: ?controller=staff');
        }
    }
} else{
    echo "Bạn không phải admin";
    header('location: ?controller=staff');
}
}


?>