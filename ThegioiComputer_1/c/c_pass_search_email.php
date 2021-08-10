<?php
if (isset($_POST['btn-check'])) {
	$email = $_POST['email'];
	$error = '';
	$dt_user = array();
	if ($email == ''){
		$error = 'Không được để trống';
	}
	if ($email != '') {		
		$dt_user = $db->get('user_guest', array('email'=>$email));
		if (count($dt_user) == 0) 
		{
			$error = 'Không có tài khoản nào phù hợp';
		}else {
			$_SESSION['ss_dt_user']=$dt_user;
			header('location:?controller=send_email');
		}
	}
}
	require_once('./v/v_search_email.php');
?>