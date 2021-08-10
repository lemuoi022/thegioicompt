<?php
$brand = $_GET['brand'];
$banner1='';
$banner2='';
$banner3='';
$banner4='';
switch($brand){
    case 'acer':
    $banner1='<img src="assets/images/acer/banner-acer.jpg" style="width: 100%; height: 500px;">';
    
    $banner2='<div class="banner-products" style="margin-left: 210px;"><img src="assets/images/acer/banner-product1.jpg" alt=""></div>';
    
    $banner3='<div class="banner-products" style=" width:fit-content"><img style=" width:100%" src="assets/images/acer/banner-product2.jpg" alt=""></div>';
    
    $data=$db->get('product',array('product_brand'=>$brand));   
    $data_product0=$db->get('laptop_detail',array('id'=>$data[0]['product_id']));
    $data_product1=$db->get('laptop_detail',array('id'=>$data[1]['product_id']));
    $data_product2=$db->get('laptop_detail',array('id'=>$data[2]['product_id']));
    $data_product3=$db->get('laptop_detail',array('id'=>$data[3]['product_id']));
    case 'asus':
        $color =' style="background-color:#000;"';
        $background ='style="background-color: #261e2b;"';
        $banner1=' <img src="assets/images/asus/banner-asus.jpg" style="width: 100%; height: 500px;">';
        $banner2='<div class="banner-products" style="margin-left: 280px;"><img src="assets/images/asus/banner-product1.jpg" alt="" style="margin-top: 20px;"></div>';
        $banner3='<div class="banner-products" ><img style=" width:100%;"src="assets/images/asus/banner-product2.jpg" alt=""></div>';
        $data=$db->get('product',array('product_brand'=>$brand));   
    $data_product0=$db->get('laptop_detail',array('id'=>$data[0]['product_id']));
    $data_product1=$db->get('laptop_detail',array('id'=>$data[1]['product_id']));
    $data_product2=$db->get('laptop_detail',array('id'=>$data[2]['product_id']));
    $data_product3=$db->get('laptop_detail',array('id'=>$data[3]['product_id']));
    break;
    case 'dell':
        $color =' style="background-color: #fff;"';
        $background ='style="background-image: linear-gradient(-90deg, #436276, #1f272a);"';
        $banner1='<img src="assets/images/dell/banner-dell.jpg" style="width: 100%; height: 500px;">';
        $banner2=' <div class="banner-products" style="margin-left: 280px;"><img src="assets/images/dell/banner-product1.jpg" alt=""></div>';
        $banner3='<div class="banner-products" style=" width:fit-content"><img src="assets/images/dell/banner-product2.jpg" alt="" style="width: 112.4%; margin-top: -22px;"></div>';
        $data=$db->get('product',array('product_brand'=>$brand));   
    $data_product0=$db->get('laptop_detail',array('id'=>$data[0]['product_id']));
    $data_product1=$db->get('laptop_detail',array('id'=>$data[1]['product_id']));
    $data_product2=$db->get('laptop_detail',array('id'=>$data[2]['product_id']));
    $data_product3=$db->get('laptop_detail',array('id'=>$data[3]['product_id']));
        break;
    case 'lenovo':
        $banner1='assets/images/lenovo/banner-lenovo.jpg';
        $banner2='assets/images/lenovo/banner-product1.jpg';
        $banner3='assets/images/lenovo/banner-product2.jpg';
        $data=$db->get('product',array('product_brand'=>$brand));   
    $data_product0=$db->get('laptop_detail',array('id'=>$data[0]['product_id']));
    $data_product1=$db->get('laptop_detail',array('id'=>$data[1]['product_id']));
    $data_product2=$db->get('laptop_detail',array('id'=>$data[2]['product_id']));
    $data_product3=$db->get('laptop_detail',array('id'=>$data[3]['product_id']));
        break;
    case 'msi':
        $color =' style="background-color: #000;"';
        $background ='style="background-image: linear-gradient(-90deg, #0b1218, #3c2329);"';
        $banner1='<img src="assets/images/msi/banner-msi.jpg" style="width: 100%; height: 500px;">';
        $banner2='<div class="banner-products"><img src="assets/images/msi/banner-product1.jpg" alt="" style="margin-top: 20px; width:100%;"></div>';
        $banner3=' <div class="banner-products" ><img style="width:100%;" src="assets/images/msi/banner-product2.jpg" alt="" style="width: 1450px; height:500px"></div>';
        $data=$db->get('product',array('product_brand'=>$brand));   
    $data_product0=$db->get('laptop_detail',array('id'=>$data[0]['product_id']));
    $data_product1=$db->get('laptop_detail',array('id'=>$data[1]['product_id']));
    $data_product2=$db->get('laptop_detail',array('id'=>$data[2]['product_id']));
    $data_product3=$db->get('laptop_detail',array('id'=>$data[3]['product_id']));
        break;
}
require_once('./v/v_laptop_brand.php');
?>