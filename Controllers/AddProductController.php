<?php
include_once "../Model/admin.php";
include_once "../uploaders/imageUploader.php";
include_once "displayCategoriesController.php";
include_once "displaySellersController.php";
include_once "isAdminLogged.php";
$admin = new Admin();
if (isset($_POST['product_name']) && !empty($_POST['product_name'])
    && isset($_POST['product_serial_number']) && !empty($_POST['product_serial_number'])
    && isset($_POST['product_price']) && !empty($_POST['product_price'])
    && isset($_FILES['product_image']['tmp_name']) && !empty($_FILES['product_image']["tmp_name"])
    && isset($_POST['category']) && !empty($_POST['category'])
    && isset($_POST['product_description']) && !empty($_POST['product_description'])
    && isset($_POST['id']) && !empty($_POST['id'])
) {
    $fileUpload = uploadProductImage('product_image');

    if ($fileUpload == 1) {
        $product = new Product();
        $product->setName($_POST['product_name']);
        $product->setCategoryID($_POST['category']);
        $product->setPrice($_POST['product_price']);
        $product->setPicture("../images/" . basename($_FILES['product_image']['name']));
        $product->setSerialNumber($_POST['product_serial_number']);
        $product->setOtherInfo($_POST['product_description']);
        $seller =new Seller() ;
        $seller->setSellerId($_POST['id']);
        $result = $admin->addProduct($product);
        $admin->addSellerToProduct($product,$seller);
        if ($result == 1) { 
            echo "<script>
        alert('product add successful');
        </script>";
        } else {
            echo "<script>
        alert('product add failed, failure in database');
        </script>";
            $admin->logger(1, $product);
        }
    } else {
        echo "<script>
        alert('product add failed, file not valid or already exists');
        </script>";
    }

}

