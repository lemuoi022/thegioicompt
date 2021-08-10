<?php
if(isset($_GET['keyword'])){
    $keyword = $_GET['keyword'];
    $product = $db->search('product', 'product_name', $keyword);
}
require_once('./v/v_search.php');

?>