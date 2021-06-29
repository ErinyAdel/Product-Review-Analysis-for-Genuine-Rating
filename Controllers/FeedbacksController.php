<?php
include_once "../Model/admin.php";
include_once "isAdminLogged.php";
$admin = new Admin();
$users = $admin->viewUsers();
if ($users != 0) {
    for ($i = 0; $i < sizeof($users); $i++) {
        if (isset($_POST[$i]) && !empty($_POST[$i])) {
            $result = $admin->deleteFeedback($users[$i]->getId());
            echo "<script>
            alert('feedback deleted');
            </script>";
        }
    }
}

function displayUsersFeedbacks()
{
    global $admin, $users;

    if ($users == 0) {
        echo "<script>
        alert('No users to display');
        </script>";
    } else {
        foreach ($users as $user) {
            $index = 0;
            $name = $user->getName();
            $feedback = $user->getFeedback();
            if ($feedback == "") {
                $feedback = "no feedback yet.";
            }
            $tr = "<tr>";
            $class = "class=";
            $className = "guiz-awards-track>";
            $td = "<td ";
            $tdClose = "</td>";
            $trClose = "</tr>";
            $nameRow = $td . $class . $className . $name . $tdClose;
            $feedbackRow = $td . $class . $className . $feedback . $tdClose;
            $input = "<input ";
            $type = " type='" . "submit" . "'";
            $indexS = "'" . $index++ . "'";
            $inputName = " name=";
            $inputValue = " value='" . "Delete" . "'";
            $closeInput = "/>";
            $inputRow = $td . $class . $className . $input . $type . $inputName . $index++ . $inputValue . $closeInput . $tdClose;
            echo $tr . $nameRow . $feedbackRow . $inputRow . $trClose;
        }
    }
}
