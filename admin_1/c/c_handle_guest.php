<?php 

    if(isset($_SESSION['ss_admin'])){
        $user = $db->get('admin_staff',array('id'=>$_SESSION['ss_admin']));
        if($user[0]['lv']==1){
        switch($_GET['method']){
            case 'edit':
                $id = $_GET['id'];
                $data_guest = $db->get('user_guest',array('id'=>$id));
                if(isset($_POST['edit_guest'])){
                    $user = $_POST['user'];
                    $password = $_POST['password'];
                    $gender = $_POST['gender'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $name = $_POST['name'];

                    $error = array();
                    if($password == ''){
                        $error['password'] = "Mật khẩu không được để trống";
                    }
            
                    if($name == ''){
                        $error['name'] = "Tên không được để trống";
                    }

                    if($gender == ''){
                        $error['gender'] = "Giới tính không được để trống";
                    }

                    if($address == ''){
                        $error['address'] = "Địa chỉ không được để trống";
                    }

                    if($email == ''){
                        $error['email'] = "Email không được để trống";
                    }

                    if($phone == ''){
                        $error['phone'] = "Số điện thoại không được để trống";
                    }


                    if(!$error){
                        $db->update('user_guest',array(
                            'password'=>$password,
                            'name'=>$name,
                            'gender'=>$gender,
                            'address'=>$address,
                            'email'=>$email,
                            'phone'=>$phone
                        ),array('id'=>$id));
                        header('location: ?controller=guest');
                    }
                }
                require_once('./v/v_handle_guest.php');
                break;

            case 'del':
                $id = $_GET['id'];
                $db->delete('user_guest', array('id'=>$id));
                header('location: ?controller=guest');
                break;

            default:
                header('location: ?controller=guest');
                break;

        }
    } else{
        header('location: ?controller=staff');
    } } 
?>