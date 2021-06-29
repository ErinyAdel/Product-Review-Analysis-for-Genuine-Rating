<?php
include_once "../Model/admin.php";
include_once "displayCategoriesController.php";
include_once "isAdminLogged.php";
$admin = new Admin();

if (isset($_POST['product_serial_number']) && !empty($_POST['product_serial_number'])
    && isset($_POST['category']) && !empty($_POST['category'])) {
    $result = $admin->deleteProduct($_POST['product_serial_number'], $_POST['category']);
    if ($result == 1) {
        echo "<script>
        alert('product delete successful');
        </script>";
        $admin->logger(2, $_POST['product_serial_number']);
    } else {
        echo "<script>
        alert('product delete failed, database failure');
        </script>";
    }
}
