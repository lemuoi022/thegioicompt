<?php
session_start();
include('./c/class.smtp.php');
include('./c/class.phpmailer.php');

require_once('./m/m_database.php');
//tạo đối tượng $db
$db = new database();
if (isset($_GET['controller'])) {
	$controller = $_GET['controller'];
} else {
	$controller = 'index';
}
switch ($controller) {
	case 'index':
		require_once('./c/c_index.php');
		break;
	case 'login':
		require_once('./c/c_login.php');
		break;
	case 'register':
		require_once('./c/c_register.php');
		break;
	case 'logout':
		require_once('./c/c_logout.php');
		break;
	case 'laptopbrand':
		require_once('./c/c_laptop_brand.php');
		break;
	case 'cart':
		require_once('./c/c_cart.php');
		break;
	case 'addcart':
		require_once('./c/c_add_cart.php');
		break;
	case 'option_cart':
		require_once('./c/c_option_cart.php');
		break;
	case 'payment':
		require_once('./c/c_payment.php');
		break;
	case 'search':
		require_once('./c/c_search.php');
		break;
	case 'search_email':
		require_once('./c/c_pass_search_email.php');
		break;
	case 'send_email':
		require_once('./c/c_pass_send_email.php');
		break;
	case 'input_code':
		require_once('./c/c_pass_input_code.php');
		break;
	case 'newpass':
		require_once('./c/c_pass_newpass.php');
		break;
	case 'profile':
		require_once('./c/c_profile.php');
		break;
	case 'detail':
		require_once('./c/c_detail.php');
		break;
	case 'order_search':
		require_once('./c/c_order_search.php');
		break;
	case 'huongdantragop':
		require_once('./c/c_huongdantragop.php');
		break;
	case 'huongdanthanhtoan':
		require_once('./c/c_huongdanthanhtoan.php');
		break;
	case 'vanchuyen':
		require_once('./c/c_vanchuyen.php');
		break;
	case 'baohanh':
		require_once('./c/c_baohanh.php');
		break;
	case 'order_profile':
		require_once('./c/c_order_profile.php');
		break;
	default:
		echo "Lỗi trang";
		break;
}
