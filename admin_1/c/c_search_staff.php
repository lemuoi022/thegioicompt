<?php
if(isset($_GET['keyword'])){
    $keyword = $_GET['keyword'];
    $data_staff = $db->search('admin_staff', 'name_staff', $keyword);
    if(isset($_SESSION['ss_admin'])){
        $user = $db->get('admin_staff', array('id'=>$_SESSION['ss_admin']));
    }
    $empty='';
    if (empty($data_staff)) {
        $empty = "Không tìm thấy sản phẩm";
    }
}
require_once('./v/v_search_staff.php');
?>