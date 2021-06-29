<?php
include_once "Human.php";
include_once "User.php" ;
include_once "admin.php";
include_once "seller.php";
include_once "category.php";

$admin=new seller() ;
$admin->addProduct(513,"mas","asas","as","asas","asasasas","2");



/*
i used this to test the functions i implemented
*/
// $obj = new Human();
// $id = $obj->Login("Malak", "ABCD");
// if ($id != -1) {
//     echo "" . $id . "\n" . "</br>";

// }

// $categories = $obj->viewCategories();
// foreach ($categories as $current_category) {
//     echo $current_category->getCategoryName() . "</br>";
//     echo "" . $current_category->getCategoryId() . "</br>";
// }

// $category_products = $obj->viewProductsOfCategory(1);
// foreach ($category_products as $current_product) {
//     echo $current_product->getName() . "</br>";
//     echo "" . $current_product->getAverageRating() . "</br>";
// }

// $admin = new Admin();
// $test_product = new Product();
// $test_product->setName("test function");
// $test_product->setPrice(2500);
// $test_product->setAverageRate(3.2);
// $test_product->setCategoryID(1);
// $test_product->setPicture("test function picture");
// $test_product->setOtherInfo("test function details");
// $test_product->setSerialNumber(300);
// $insert_result = $admin->addProduct($test_product);
// if ($insert_result == 1) {
//     echo "insert successful";
// } else {
//     echo "insert failed";
// }
// $update_result = $admin->editProduct(300, $test_product);
// if ($update_result == 1) {
//     echo "successful update";
// } else {
//     echo "failed update";
// }
// $cat = new Category();
// $cat->setCategoryName("category test insert");
// $add_category_result = $admin->addCategory($cat);
// if ($add_category_result == 1) {
//     echo "cat add success";
// } else {
//     echo "failed cat add";
// }

//$admin->deleteCategory(1);

?>
