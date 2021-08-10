<?php
    if(isset($_POST['btn-newpass'])){
        $id = $_POST['id'];
        $password_1 = $_POST['password1'];  
        $password_2= $_POST['password2'];
		$_SESSION['ss_dt_user'] = $db->get('user_guest',array('id'=>$id));
		$_SESSION['ss_id'] = $id;
		$error='';
		if($password_1==''||$password_2==''){
			$error='Không được để trống';
		}
		if($password_1!=$password_2){
			$error = 'Mật khẩu nhập lại không giống';
		}
		if ($error='') {
			$newpass=$db->update('user_guest',array('password'=>$password_1) ,array('id'=>$id));
			header('location:?controller=login');
		}
		else echo 'Có lỗi';
}
    require_once('./v/v_newpass.php');
?>