<?php
include_once "../Model/admin.php";
include_once "../Model/User.php";
include_once "../constants/constants.php";
session_start();
function redirect($type, $isVerified, $id){
    if ($type == 1) {
        $_SESSION[ADMIN_SESSION] = $id;
        header("Location: ../View/AdminHomePage.php");
    } else {
        if ($isVerified == 'verified') {
            $_SESSION[USER_SESSION] = $id;
            header("Location: ../View/HomePage.php");
        } else {
            echo "<script>
    alert('Login failed, email not verified');
    </script>";
        }
    }
}
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = new User();
    $result = $user->Login($username, $password);
    if (isset($result['Id']) && isset($result['UserTypeId'])) {
        $id = $result['Id'];
        $type = $result['UserTypeId'];
        $isVerified = $result['user_email_status'];
        redirect($type, $isVerified, $id);
    } else if ($result == 0) {
        echo "<script>
        alert('Login failed, invalid data');
        </script>";
    }
}

