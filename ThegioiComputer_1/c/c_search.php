<?php
if(isset($_GET['keyword'])){
    $keyword = $_GET['keyword'];
    $product = $db->search('product', 'product_name', $keyword);
    $empty='';
    if (empty($product)) {
        $empty = "Không tìm thấy sản phẩm";
    }
    
}
require_once('./v/v_search.php');
?>