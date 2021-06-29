<?php
include_once "../Model/admin.php";
include_once "isAdminLogged.php";
$admin = new Admin();
if(isset($_POST['seller_name']) && !empty($_POST['seller_name'])
&& isset($_POST['phone_number']) && !empty($_POST['phone_number'])){
    $seller = new Seller();
    $seller->setName($_POST['seller_name']);
    $seller->setSellerPhone($_POST['phone_number']);
    $result = $admin->addSeller($seller);
    if($result == 0){
        echo "<script>
        alert('seller add failed');
        </script>";
    }else{
        echo "<script>
        alert('seller added successfully');
        </script>";
        $admin->logger(8, $seller);
    }
}
