<?php
if (isset($_POST['btn-send'])) {
		$id = $_POST['id'];
		$_SESSION['ss_dt_user'] = $db->get('user_guest',array('id'=>$id));
		$_SESSION['ss_id'] = $id;
		$code = rand(100000,999999);
		$title = 'MÃ XÁC NHẬN KHÔI PHỤC MẬT KHẨU'; $title="=?utf-8?b?".base64_encode($title)."?=";
		$content = $code;
		$nTo = $_SESSION['ss_dt_user'][0]['name'];
		$mTo = $_SESSION['ss_dt_user'][0]['email'];
		$diachicc = 'tgcomputer2021@gmail.com';
		$mail = $db->sendMail($title, $content, $nTo, $mTo, $diachicc='');
		if ($mail==1) {
			$_SESSION['code']=$code;
			header('location:?controller=input_code');
		}
		else echo 'Có lỗi';
}
require_once('./v/v_send_email.php');
?>