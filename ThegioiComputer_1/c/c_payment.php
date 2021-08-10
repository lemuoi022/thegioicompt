<?php

if(isset($_POST['btn_payment'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $product_name = $_POST['product_name'];

    $order_id = 1;

    $data_order = $db->get('order_main', array());
    foreach($data_order as $key => $value){
        $order_id += $value['id'];
    }

    foreach($_SESSION['cart'] as $key => $value){
        $db->insert('order_detail',
            array('order_id'=>$order_id,
                    'product_name'=>$value['product_name'],
                    'product_id'=>$value['id'],
                    'price'=>$value['price'],
                    'qty'=>$value['sl'],
                    'amount'=>$value['sl']*$value['price']
    ));
    }

     
    $data_order = $db->get('order_detail', array('order_id'=>$order_id));
        $amount = 0;
    foreach($data_order as $key => $value){
        $amount += $value['amount'];
    }

    $db->insert('order_main',
    array('id'=>$order_id,
        'name'=>$name,
        'address'=>$address,
        'phone'=>$phone,
        'email'=>$email,
        'amount'=>$amount,
        'status'=>0
    ));

    //Gửi email cho người dùng
		//Chuẩn bị cấu trúc thư gửi cho người mua
		//Bước 1: chuẩn bị phần thông tin người nhận
		$title="Xác nhận đơn hàng của A'Shop"; $title="=?utf-8?b?".base64_encode($title)."?=";
		$content= '<p>Người nhận :'.$name.'</p>';
        $content.= '<p>Mã đơn hàng :'.$order_id.'</p>';
		$content.= '<p>Số điện thoại :'.$phone.'</p>';
		$content.= '<p>Địa chỉ người nhận :'.$address.'</p>';
		$content.= '<p>Tổng tiền :'.number_format($amount).'</p>';
		$content.= '<table class="mt-3 p-0 table table-borderless">
					<thead>
						<tr>	
							<th>Sản phẩm</th>
							<th>Đơn giá</th>
							<th>Số lượng</th>
							<th>Thành tiền</th>
					   	</tr>	
					</thead>';
		//Bước 2: Lặp các sản phẩm người dùng mua ra
		foreach ($_SESSION['cart'] as $key => $value) {
			$content.= '<tr>
							<td>'.$value['product_name'].'</td>
							<td>'.number_format($value['price']).' VNĐ</td>
							<td >'.$value['sl'].'</td>
							<td>$'.number_format($value['price']*$value['sl']).'</td></tr>';
		}
		//Bước 3:đóng thẻ table
		$content.='</tbody>
		</table>';

		//Bắt đầu gửi thư cho người mua
		$sendmail = $db->sendMail($title, $content, $name, $email, $diachicc);
		unset($_SESSION['cart']);
		header(('location: ?controller=cart'));
}

require_once('./v/v_payment.php');
?>
