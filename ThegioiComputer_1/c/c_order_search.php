<?php
if(isset($_SESSION['ss_client'])){
    $email = $_SESSION['ss_email'];
    $order = $db->get('order_main',array('email'=>$email));
}
if(isset($_POST['search'])){
    $keyword = $_POST['keyword_order'];
    $order = $db->get('order_main',array('id'=>$keyword));
    
}


require_once('./v/v_order_search.php');
?>