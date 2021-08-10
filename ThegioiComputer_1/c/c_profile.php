<?php
if (!isset($_SESSION['ss_client'])) {
    header('location:?controller=login');
}   
$id =  $_SESSION['ss_client'];
$data_client=$db->get('user_guest',array('id'=>$id) );
require_once('./v/v_profile.php');
?>