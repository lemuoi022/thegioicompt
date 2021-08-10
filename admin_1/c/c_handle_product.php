<?php 

    if(isset($_SESSION['ss_admin'])){
        $data_product = $db->get('product',array('id'=>$_SESSION['ss_admin']));
        $user = $db->get('admin_staff',array('id'=>$_SESSION['ss_admin']));
        if($user[0]['lv']==1){
        switch($_GET['method']){
            case 'edit':
                $id = $_GET['id'];
                $data_product = $db->get('product',array('id'=>$id));
                if(isset($_POST['edit_product'])){
                    $product_id = $_POST['product_id'];
	 			    $price = $_POST['price'];
	 			    $qty = $_POST['qty'];
	 			    $content = $_POST['content'];
	 			    $catalog_id = $_POST['catalog_id'];

                    $error = array();
                    if ($product_id == '') {
                        $error['product_id'] = "Tên sản phẩm không được để trống";
                    } 
                    if ($price == '') {
                        $error['price'] = "Giá sản phẩm không được để trống";
                    }
                    if ($qty == '') {
                        $error['qty'] = "Giá sản phẩm không được để trống";
                    }
                    if ($catalog_id == '') {
                        $error['catalog_id'] = "Giá sản phẩm không được để trống";
                    }
                    //Kiểm tra xem mô tả ngắn có trống không
                    if ($content == '') {
                        $error['content'] = "Mô tả ngắn không được để trống";
                    }

                    if(!$error){
                        $db->update('product',array(
                            'catalog_id' => $catalog_id,
					        'product_id' => $product_id,
					        'price' => $price,
					        'qty' => $qty,
                            'content' => $content
                        ),array('id'=>$id));
                        header('location: ?controller=handle_product');
                        exit();
                    }
                }
                require_once('./v/v_handle_product.php');
                break;

            case 'del':
                $id = $_GET['id'];
                $db->delete('product', array('id'=>$id));
                header('location: ?controller=product');
                break;

            default:
                header('location: ?controller=product');
                break;

        }
    } else{
        header('location: ?controller=product');
    } } 
