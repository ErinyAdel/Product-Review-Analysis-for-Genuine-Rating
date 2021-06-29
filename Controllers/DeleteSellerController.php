<?php 
include_once "../Model/admin.php";
include_once "displaySellersController.php";
include_once "isAdminLogged.php";
$admin = new Admin();
if(isset($_POST['selectedSeller']) && !empty($_POST['selectedSeller'])){
    $result = $admin->deleteSeller($_POST['selectedSeller']);
    if ($result == 0) {
        echo "<script>
        alert('seller delete failed');
        </script>";
    } else {
        echo "<script>
        alert('seller deleted successfully');
        </script>";
        $admin->logger(9, $_POST['selectedSeller']);
    }
}

