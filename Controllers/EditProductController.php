<?php
include_once "../Model/admin.php";
include_once "../uploaders/imageUploader.php";
include_once "displayCategoriesController.php";
include_once "isAdminLogged.php";
$admin = new Admin();

if (isset($_POST['product_name']) && !empty($_POST['product_name'])
    && isset($_POST['product_serial_number']) && !empty($_POST['product_serial_number'])
    && isset($_POST['product_price']) && !empty($_POST['product_price'])
    && isset($_FILES['product_image']['tmp_name']) && !empty($_FILES['product_image']["tmp_name"])
    && isset($_POST['category']) && !empty($_POST['category'])
    && isset($_POST['product_description']) && !empty($_POST['product_description'])) {
    $fileUpload = uploadProductImage('product_image');

    if ($fileUpload == 1) {
        $product = new Product();
        $product->setName($_POST['product_name']);
        $product->setCategoryID($_POST['category']);
        $product->setPrice($_POST['product_price']);
        $product->setPicture("../images/" . basename($_FILES['product_image']['name']));
        $product->setOtherInfo($_POST['product_description']);
        $result = $admin->editProduct($_POST['category'], $_POST['product_serial_number'], $product);
        if ($result == 1) {
            echo "<script>
        alert('product edit successful');
        </script>";
            $admin->logger(3, $product);
        } else {
            echo "<script>
        alert('product edit failed, failure in database');
        </script>";
        }

    } else {
        echo "<script>
        alert('product edit failed, file not valid or already exists');
        </script>";

    }

} 
