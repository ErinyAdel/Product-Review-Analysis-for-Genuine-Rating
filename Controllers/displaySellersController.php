<?php
include_once "../Model/Human.php";
function displaySellers()
{
    $human = new Human();
    $result = $human->ViewSellers();
    if ($result == 0) {
        echo "<p>something went wrong connecting to database</p>";
    } else {
        foreach ($result as $seller) {
            $option = '<option value = "' . $seller->getSellerId() . '">' . $seller->getName() . '</option>';
            echo $option;
        }
        echo "</select>";
    }
}