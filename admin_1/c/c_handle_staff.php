<?php 

    if(isset($_SESSION['ss_admin'])){
        $user = $db->get('admin_staff',array('id'=>$_SESSION['ss_admin']));
        if($user[0]['lv']==1){
        switch($_GET['method']){
            case 'edit':
                $id = $_GET['id'];
                $data_staff = $db->get('admin_staff',array('id'=>$id));
                if(isset($_POST['edit_staff'])){
                    $password_staff = $_POST['password_staff'];
                    $name_staff = $_POST['name_staff'];

                    $error = array();
                    if($password_staff == ''){
                        $error['password_staff'] = "Mật khẩu không được để trống";
                    }
            
                    if($name_staff == ''){
                        $error['name_staff'] = "Tên không được để trống";
                    }

                    if(!$error){
                        $db->update('admin_staff',array(
                            'password_staff'=>$password_staff,
                            'name_staff'=>$name_staff
                        ),array('id'=>$id));
                        header('location: ?controller=staff');
                    }
                }
                require_once('./v/v_handle_staff.php');
                break;

            case 'del':
                $id = $_GET['id'];
                $db->delete('admin_staff', array('id'=>$id));
                header('location: ?controller=staff');
                break;

            default:
                header('location: ?controller=staff');
                break;

        }
    } else{
        header('location: ?controller=staff');
    } } 
?>