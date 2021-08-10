<?php
    if(isset($_SESSION['ss_admin'])){
        $user = $db->get('admin_staff',array('id'=>$_SESSION['ss_admin']));
        if($user[0]['lv']==1){
            $id = $_GET['id'];
            $data_order = $db->get('order_main',array('id'=>$id));
            $data_order_detail = $db->get('order_detail',array('order_id'=>$id));
        } else{
            header('location: ?controller=bill');
        } }
        else {
            header('location: ?controller=login');
        }
    require_once('./v/v_detail_bill.php');
?>