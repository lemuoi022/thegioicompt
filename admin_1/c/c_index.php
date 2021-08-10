<?php
    if(isset($_SESSION['ss_admin'])){
        $user = $db->get('admin_staff', array('id'=>$_SESSION['ss_admin']));
        $data_sale =$db->get('sales', array());
    } else{
        header('location: ?controller=login');
    }
    require_once('./v/v_index.php');
?>