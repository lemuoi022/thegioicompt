<?php
//Kiểm tra xem người dùng đã đăng nhập chưua
if (isset($_SESSION['ss_admin'])) {
	//Nếu đã đăng nhập thì lấy thông tin người dùng theo ss
	$user = $db->get('admin_staff', array('id' => $_SESSION['ss_admin']));
	//Kiểm tra có phải là admin không
	if ($user[0]['lv'] == 1) {
		//lấy dữ liệu danh mục có trong cơ sở dữ liệu
		$data_product = $db->get('product', array());
		//Kiểm tra người dùng có ấn nút xác nhận không
		if (isset($_POST['add-product'])) {
			//Lấy dữ liệu người dùng nhập vào
			$product_id = $_POST['product_id'];
			$product_name = $_POST['product_name'];
			$product_brand = $_POST['product_brand'];
			$price = $_POST['price'];
			$qty = $_POST['qty'];
			$content = $_POST['content'];
			$catalog_id = $_POST['catalog_id'];
			$img_link = $_FILES['img_link'];
			$img_link2 = $_FILES['img_link2'];
			//Kiểm tra dữ liệu người dùng nhập
			//Tạo 1 biến lỗi cho nó là mảng
			$error = array();
			// Kiểm tra xem tên sản phẩm có trống không
			if ($product_id == '') {
				$error['product_id'] = "Tên sản phẩm không được để trống";
			}
			if ($product_name == '') {
				$error['product_name'] = "Tên sản phẩm không được để trống";
			}
			if ($product_brand == '') {
				$error['product_brand'] = "Tên sản phẩm không được để trống";
			}
			//Kiểm tra đơn giá sản phẩm có trống không
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
			//Kiểm tra file update file
			//Bước 1 : Tạo đường dẫn upload lên hệ thống
			$link = 'assets/images/';
			$target_file = $link . basename($img_link['name']);
			//bước 2 : kiểm tra điều kiện upload
			//2.1: kích thước
			if ($img_link['size'] > 5242880) {
				$error['img_link'] = "Chỉ được upload file dưới 5md";
			}
			//2.2: kiểu file
			$file_type = pathinfo($img_link['name'], PATHINFO_EXTENSION);
			$file_type_allow = array('png', 'jpg', 'jpeg', 'gif');
			if (!in_array(strtolower($file_type), $file_type_allow)) {
				$error['img_link'] = "Chỉ cho upload img_link ảnh";
			}
			//2.3: kiểm tra tồn tại, nếu tồn tại thì thêm 1 số đằng sau
			$num = 1;
			$target_file = substr($target_file, 0, strrpos($target_file, "."));
			while (file_exists($target_file . "." . $file_type)) {
				$target_file = $target_file . $num;
				$num++;
			}
			$target_file .= "." . $file_type;

			//Kiểm tra file update file
			//Bước 1 : Tạo đường dẫn upload lên hệ thống
			$link = 'assets/images/';
			$target_file1 = $link . basename($img_link['name']);
			//bước 2 : kiểm tra điều kiện upload
			//2.1: kích thước
			if ($img_link['size'] > 5242880) {
				$error['img_link'] = "Chỉ được upload file dưới 5md";
			}
			//2.2: kiểu file
			$file_type = pathinfo($img_link['name'], PATHINFO_EXTENSION);
			$file_type_allow = array('png', 'jpg', 'jpeg', 'gif');
			if (!in_array(strtolower($file_type), $file_type_allow)) {
				$error['img_link'] = "Chỉ cho upload img_link ảnh";
			}
			//2.3: kiểm tra tồn tại, nếu tồn tại thì thêm 1 số đằng sau
			$num = 1;
			$target_file1 = substr($target_file1, 0, strrpos($target_file1, "."));
			while (file_exists($target_file1 . "." . $file_type)) {
				$target_file1 = $target_file1 . $num;
				$num++;
			}
			$target_file1 .= "." . $file_type;

			//Kiểm tra file update file
			//Bước 1 : Tạo đường dẫn upload lên hệ thống
			$link = 'assets/images/';
			$target_file2 = $link . basename($img_link['name']);
			//bước 2 : kiểm tra điều kiện upload
			//2.1: kích thước
			if ($img_link['size'] > 5242880) {
				$error['img_link'] = "Chỉ được upload file dưới 5md";
			}
			//2.2: kiểu file
			$file_type = pathinfo($img_link['name'], PATHINFO_EXTENSION);
			$file_type_allow = array('png', 'jpg', 'jpeg', 'gif');
			if (!in_array(strtolower($file_type), $file_type_allow)) {
				$error['img_link'] = "Chỉ cho upload img_link ảnh";
			}
			//2.3: kiểm tra tồn tại, nếu tồn tại thì thêm 1 số đằng sau
			$num = 1;
			$target_file2 = substr($target_file2, 0, strrpos($target_file2, "."));
			while (file_exists($target_file2 . "." . $file_type)) {
				$target_file2 = $target_file2 . $num;
				$num++;
			}
			$target_file2 .= "." . $file_type;
			if (!$error) {
				//update ảnh vào thư mục img
				move_uploaded_file($img_link['tmp_name'], $target_file2);
			
				//insert vào cơ sở dữ liệu thông tin người dùng nhập
				$db->insert('product', array(
					'catalog_id' => $catalog_id,
					'product_id' => $product_id,
					'product_name' => $product_name,
					'product_brand' => $product_brand,
					'price' => $price,
					'qty' => $qty,
					'img_link' => $target_file,
					'img_link2' => $target_file1,
					'img_link3' => $target_file2,
					'content' => $content
				));
				//Chuyển về trang sản phẩm
				header('location: ?controller=product');
			}
		}
	} else {
		//Nếu không phải admin thì cho về trang nhan viên
		header('location: ?controller=product');
	}
} else {
	//Nếu chưa đăng nhập thì sẽ cho người dùng về trang login
	header('location: ?controller=login');
}
require_once('./v/v_product.php');
