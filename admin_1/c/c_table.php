<?php
    if(isset($_SESSION['ss_admin'])){
        $user = $db->get('admin_staff', array('id'=>$_SESSION['ss_admin']));
        $data_sale = $db->get('sales', array());
    }
    require_once('./v/v_table.php');
?>