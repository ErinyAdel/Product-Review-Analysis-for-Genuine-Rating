<!DOCTYPE HTML>
<html>
<form action="" method="POST">
<input type="file" placeholder="fileupload" name="filetoupload"/>
<input type="submit"/>
</form>
</html>
<?php
function uploadProductImage()
{
    $target_dir = "../productsImages";
    $taget_file = $target_dir . basename($_FILES['filetoupload']['name']);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $checkImage = checkIfFileIsImage();
    $checkExist = checkIfFileExists($target_file);
    if ($checkImage == 1 && $checkExist == 1) {
        if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
            return 1;
        } else {
            return 0;
        }
    }
}
function checkIfFileIsImage()
{
    $check = getimagesize($_FILES["filetoupload"]["tmp_name"]);
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
if (isset($_POST['filetoupload'])) {
    uploadProductImage();
}