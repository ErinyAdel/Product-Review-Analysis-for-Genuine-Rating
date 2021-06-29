<?php
include_once "../Model/admin.php";
include_once "../Model/category.php";
include_once "isAdminLogged.php";

if (isset($_POST['categoryName']) && !empty($_POST['categoryName'])) {
    $category = new Category();
    $category->setCategoryName($_POST['categoryName']);
    $admin = new Admin();
    $result = $admin->addCategory($category);
    if ($result == 1) {
        echo "<script>
        alert('category added successfully');
        </script>";
        $admin->logger(4, $_POST['categoryName']);
    } else {
        echo "<script>
        alert('category add failed, failure in database');
        </script>";
    }
    
}
