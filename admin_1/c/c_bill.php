<?php
if(isset($_SESSION['ss_admin'])){
    $user = $db->get('admin_staff', array('id'=>$_SESSION['ss_admin']));
    $data_order_not_done = $db->get('order_main',array('status'=>0));
    $data_order_done = $db->get('order_main',array('status'=>1));
}else{
    header('location: ?controller=login');
}
require_once('./v/v_bill.php');
?>