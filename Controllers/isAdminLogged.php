<?php
include_once "../constants/constants.php";
session_start();
if(!isset($_SESSION[ADMIN_SESSION])){
    header("Location: ../View/Login.php");
}