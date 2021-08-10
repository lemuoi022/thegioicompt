<?php
if (isset($_SESSION['ss_admin'])) {
    $user =  $db->get('admin_staff', array('id' => $_SESSION['ss_admin']));
    $data_order_not_done = $db->get('order_main', array('status' => 0));
    $data_order_done = $db->get('order_main', array('status' => 1));
    if ($user[0]['lv'] == 1) {
        switch ($_GET['method']) {
            case 'browse':
                $id = $_GET['id'];
                $data_order_detail = $db->get('order_detail', array('order_id' => $id));
                foreach ($data_order_detail as $key => $value) {
                    $product = $db->get('product', array('id' => $value['product_id']));
                    $db->update('product', array('amount' => $product[0]['amount'] - $value['qty']), array('id' => $value['product_id']));
                }
                $db->update('order_main', array('status' => 1), array('id' => $id));
                header('location: ?controller=bill');
                break;
            case 'del':
                $id = $_GET['id'];
                $db->delete('order_main', array('id' => $id));
                header('location: ?controller=bill');
                break;

            default:
                header('location: ?controller=bill');
                break;
        }
    } else {
        header('location: ?controller=order');
    }
} else {
    header('location: ?controller=login');
}
require_once('./v/v_detail_bill.php');
