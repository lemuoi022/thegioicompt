
<?php
    $id = $_GET['id'];

    $detail = $db->get('product', array('product_id'=>$id));

    $detail1 = $db->get('laptop_detail', array('id'=>$detail[0]['product_id']));

    

    if (isset($_POST['rate'])) {
        $rating = $_POST['rating'];
        $comment = $_POST['comment'];
        $rate= $db->insert('rating',array('product_id'=>$id,'rate'=>$rating,'comment'=>$comment));
    };
    
    require_once('./v/v_detail.php');
?>