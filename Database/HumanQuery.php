<?php
include_once "connect.php";
include_once '../Model/category.php';
include_once '../Model/Seller.php';
include_once '../Model/Product.php';
include_once '../Model/User.php';
$db_connection = Connect::getInstance()->getConnection();
function login($username, $password)
{
    global $db_connection;
    $Query = "SELECT * from users where UserName='" . $username . "' ";
    if ($result = $db_connection->query($Query)) {
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if ($row['UserTypeId'] == 2) {
                if (password_verify($password, $row['Password'])) {
                    return $row;
                } else {
                    return 0;
                }
            } else {
                return $row;
            }
        } else {
            return 0;
        }
    }
}
function EditUserData($userTypeId, $userName, $Id, $Password, $Email, $feedback)
{
    global $db_connection;
    $Query = "UPDATE users SET UserName='" . $userName . "',Password='" . $Password . "',Email='" . $Email . "',UserTypeId='" . $userTypeId . "',Feedback='" . $feedback . "' WHERE Id ='" . $Id . "'";
    if ($result = $db_connection->query($Query)) {
        return 1;
    } else {
        return 0;
    }
}
function ViewCategories()
{
    global $db_connection;
    $all_categories = array();
    $Query = "SELECT * from category";
    if ($result = $db_connection->query($Query)) {
        if ($result->num_rows > 0) {
            $counter = 0;
            while ($row = $result->fetch_assoc()) {
                $category_name = $row['CategoryName'];
                $category_id = $row['CategoryId'];
                $curr_category = new Category();
                $curr_category->setCategoryName($category_name);
                $curr_category->setCategoryId($category_id);
                $all_categories[$counter++] = $curr_category;
            }
            return $all_categories;
        } else {
            return 0;
        }
    }

}
function viewSellers()
{
    global $db_connection;
    $sellers = array();
    $Query = "SELECT * from seller";
    if ($result = $db_connection->query($Query)) {
        if ($result->num_rows > 0) {
            $counter = 0;
            while ($row = $result->fetch_assoc()) {
                $seller = new Seller();
                $seller->setSellerId($row['Id']);
                $seller->setName($row['Name']);
                $seller->setSellerPhone($row['TelephoneNumber']);
                $seller->setSellerRate($row['SellerRate']);
                $sellers[$counter++] = $seller;
            }
            return $sellers;
        } else {
            return 0;
        }
    }

}
function ViewProductsOfCategory($category_id)
{
    global $db_connection;
    $all_products = array();
    $query = "SELECT * from product WHERE CategoryId=" . $category_id;
    if ($result = $db_connection->query($query)) {
        if ($result->num_rows > 0) {
            $counter = 0;
            while ($row = $result->fetch_assoc()) {
                $current_product = new Product();
                $current_product->setName($row['Name']);
                $current_product->setSerialNumber($row['SerialNumber']);
                $current_product->setPrice($row['Price']);
                $current_product->setOtherInfo($row['Details']);
                $current_product->setAverageRate($row['Rate']);
                $current_product->setPicture($row['Picture']);
                $all_products[$counter++] = $current_product;
            }
            return $all_products;
        } else {
            echo $db_connection->error;
            return 0;
        }
    }
}
function ViewProduct($product_id)
{
    global $db_connection;
    $query = "SELECT * FROM product WHERE SerialNumber = " . $product_id;
    if ($result = $db_connection->query($query)) {
        if ($row = $result->fetch_assoc()) {
            $product = new Product();
            $product->setName($row['Name']);
            $product->setAverageRate($row['Rate']);
            $product->setPrice($row['Price']);
            $product->setPicture($row['Picture']);
            $product->setOtherInfo($row['Details']);
            $product->setCategoryID($row['CategoryId']);
            $product->setSerialNumber($row['SerialNumber']);
            return $product;
        }
    } else {
        echo $db_connection->error;
        return 0;
    }
}

