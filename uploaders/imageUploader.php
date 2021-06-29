<?php
function uploadProductImage($varName)
{
    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES[$varName]['name']);
    $checkImage = checkIfFileIsImage($varName);
    $checkExist = checkIfFileExists($target_file);
    if ($checkImage == 1 && $checkExist == 1) {
        if (move_uploaded_file($_FILES[$varName]["tmp_name"], $target_file)) {
            return 1;
        } else {
            return 0;
        }
    }
}
function checkIfFileIsImage($varName)
{
    $check = getimagesize($_FILES[$varName]["tmp_name"]);
    if ($check !== false) {
        return 1;
    } else {
        return 0;
    }
}
function checkIfFileExists($target_file)
{
    if (file_exists($target_file)) {
        return 0;
    } else {
        return 1;
    }
}