<?php 
	if (isset($_POST['btn-code'])) {
		$code = $_POST['code'];
		$error=array();
		if (empty($code)) {
			$error['code']='không được để trống';
		}
		if(!$error){
			if($code != $_SESSION['code']){
				$error['code']='Sai mã';
			}
			else{
				unset($_SESSION['code']);
				header('location:?controller=newpass');
			}
    }
} 
    require_once('./v/v_input_code.php');
?>