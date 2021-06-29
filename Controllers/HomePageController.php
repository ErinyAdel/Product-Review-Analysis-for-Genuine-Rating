<?php
include_once "../constants/constants.php";
include_once "../Controllers/displayCategoriesController.php";
session_start();
$html = '<a href="Login.php" class="btn btn-primary" class="normalLink">Login</a>
<a href="RegisterView.php" class="btn btn-primary" class="normalLink" >Register</a>';

if (isset($_SESSION[USER_SESSION]) && !empty($_SESSION[USER_SESSION])) {
    $html = preg_replace('#<a href="Login.php" class="btn btn-primary" class="normalLink">Login</a>#'
    , '<a href="../Controllers/LogoutController.php" class="btn btn-primary" class="normalLink">Logout</a>', $html);
    $html = preg_replace('#<a href="RegisterView.php" class="btn btn-primary" class="normalLink" >Register</a>#', 
    '<a href="EditProfile.php" class="btn btn-primary" class="normalLink" >EditProfile</a>', $html);
    $html .= '<a href="Compare.php" class="btn btn-primary" class="normallink" style="margin-left:5px;">Compare</a>';
}else if(isset($_SESSION[ADMIN_SESSION]) && !empty($_SESSION[ADMIN_SESSION])){
    $html = preg_replace('#<a href="Login.php" class="btn btn-primary" class="normalLink">Login</a>#'
    , '<a href="../Controllers/LogoutController.php" class="btn btn-primary" class="normalLink">Logout</a>', $html);
    $html = preg_replace('#<a href="RegisterView.php" class="btn btn-primary" class="normalLink">Register</a>#'
    , '<a href="EditProfile.php" class="btn btn-primary" class="normalLink">EditProfile</a>', $html);
}
