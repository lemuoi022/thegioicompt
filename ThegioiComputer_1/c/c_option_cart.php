<?php

$method = $_GET['method'];

$id = $_GET['id'];

switch ($method){
    case 'prev':
        $_SESSION['cart'][$id]['sl']-=1;

        if($_SESSION['cart'][$id]['sl'] == 0){
            unset($_SESSION['cart'][$id]);
        }

        if(empty($_SESSION['cart'])){
            unset($_SESSION['cart']);
            header('location: ?controller=index');
            break;
            
        }
        header('location: ?controller=payment');
        break;

    case 'next':
        $_SESSION['cart'][$id]['sl']+=1;
        header('location: ?controller=payment');
        break;

    case 'del':
        unset($_SESSION['cart'][$id]);
        if(empty($_SESSION['cart'])){
            unset($_SESSION['cart']);
            header('location: ?controller=index');
            break;
        }
        header('location: ?controller=payment');
        break;

    

    default:
        header('location: ?controller=index');
        break;
} 

?>