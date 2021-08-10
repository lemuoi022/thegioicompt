<?php 

    if(isset($_SESSION['ss_admin'])){
        $user = $db->get('admin_staff',array('id'=>$_SESSION['ss_admin']));
        if($user[0]['lv']==1){
        switch($_GET['method']){

            case 'del':
                $id = $_GET['id'];
                $db->delete('order_main', array('id'=>$id));
                header('location: ?controller=bill');
                break;

            default:
                header('location: ?controller=bill');
                break;

        }
    } else{
        header('location: ?controller=index');
    } } 
    require_once('./v/v_bill.php');
?>