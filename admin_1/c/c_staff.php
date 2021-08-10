<?php
    if(isset($_SESSION['ss_admin'])){
        $user = $db->get('admin_staff', array('id'=>$_SESSION['ss_admin']));
        $data_staff = $db->get('admin_staff', array());

    } else{
        header('location: ?controller=login');
    }
    require_once('./v/v_staff.php');

?>