<?php
include_once "../Model/admin.php";
include_once "isAdminLogged.php";
$admin = new Admin();

function displayUsers()
{
    global $admin;
    $result = $admin->viewUsers();
    if ($result == 0) {
        echo "<script>
        alert('No users to display');
        </script>";
    } else {
        foreach ($result as $user) {
            $id = $user->getId();
            $name = $user->getName();
            $email = $user->getEmail();
            $tr = "<tr>";
            $class = "class=";
            $className = "guiz-awards-title>";
            $td = "<td ";
            $tdClose = "</td>";
            $trClose = "</tr>";
            $idRow = $td . $class . $className . $id . $tdClose;
            $nameRow = $td . $class . $className . $name . $tdClose;
            $emailRow = $td . $class . $className . $email . $tdClose;
            echo $tr . $idRow . $nameRow . $emailRow . $trClose;
        }
    }
}
