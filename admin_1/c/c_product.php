<?php
    if(isset($_SESSION['ss_admin'])){
        $user = $db->get('admin_staff', array('id'=>$_SESSION['ss_admin']));
        $data_product = $db->get('product', array());
    }
    require_once('./v/v_product.php');
?>