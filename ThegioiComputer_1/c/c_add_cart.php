<?php
$id = $_GET['id'];
$product = $db->get('product', array('id'=>$id));
if (isset($_SESSION['cart'])){
    if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]['sl']+=1;
    } else{
        $_SESSION['cart'][$id]['id']=$product[0]['id'];
        $_SESSION['cart'][$id]['product_name']=$product[0]['product_name'];
        $_SESSION['cart'][$id]['img_link']=$product[0]['img_link'];
        $_SESSION['cart'][$id]['price']=$product[0]['price'];
        $_SESSION['cart'][$id]['sl']=1;  
    }
              
} else{
        $_SESSION['cart'][$id]['id']=$product[0]['id'];
        $_SESSION['cart'][$id]['product_name']=$product[0]['product_name'];
        $_SESSION['cart'][$id]['img_link']=$product[0]['img_link'];
        $_SESSION['cart'][$id]['price']=$product[0]['price'];
        $_SESSION['cart'][$id]['sl']=1;
}
header('location: ?controller=index');
?>