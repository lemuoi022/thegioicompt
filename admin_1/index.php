<?php

session_start();

require_once('./m/m_database.php');

$db = new database();

if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
} else {
    $controller = 'index';
}


switch ($controller) {
    case 'login':
        require_once('./c/c_login.php');
        break;

    case 'index':
        require_once('./c/c_index.php');
        break;

    case 'log_out':
        require_once('./c/c_log_out.php');
        break;

    case 'search':
        require_once('./c/c_search.php');
        break;

    case 'search_staff':
        require_once('./c/c_search_staff.php');
        break;

    case 'staff':
        require_once('./c/c_staff.php');
        break;

    case 'add_staff':
        require_once('./c/c_add_staff.php');
        break;

    case 'handle':
        require_once('./c/c_handle_staff.php');
        break;

    case 'handle_bill':
        require_once('./c/c_handle_product.php');
        break;

    case 'handle_product':
        require_once('./c/c_handle_product.php');
        break;

    case 'product':
        require_once('./c/c_product.php');
        break;

    case 'add_product':
        require_once('./c/c_add_product.php');
        break;

    case 'bill':
        require_once('./c/c_bill.php');
        break;

    case 'order_detail':
        require_once('./c/c_detail_bill.php');
        break;

    case 'guest':
        require_once('./c/c_guest.php');
        break;

    case 'search_guest':
        require_once('./c/c_search_guest.php');
        break;

    case 'handle_guest':
        require_once('./c/c_handle_guest.php');
        break;

    case 'handle_order':
        require_once('./c/c_handle_order.php');
        break;

    case 'browse':
        require_once('./c/c_handle_order.php');
        break;

    case 'chart':
        require_once('./v/v_chart.php');
        break;

    case 'table':
        require_once('./c/c_table.php');
        break;

    default:
        echo "Lỗi trang";
        break;
}
