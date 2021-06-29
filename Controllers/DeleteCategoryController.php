<?php
include_once "../Model/admin.php";
include_once "displayCategoriesController.php";
include_once "isAdminLogged.php";
$admin = new Admin();
if (isset($_POST['selectedCategory']) && !empty($_POST['selectedCategory'])) {
    $result = $admin->deleteCategory($_POST['selectedCategory']);
    if ($result == 0) {
        echo "<script>
        alert('category delete failed');
        </script>";
    } else {
        echo "<script>
        alert('category deleted successfully');
        </script>";
        $admin->logger(5, $_POST['selectedCategory']);
    }
}

