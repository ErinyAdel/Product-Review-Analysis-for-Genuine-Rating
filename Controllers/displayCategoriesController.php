<?php
include_once "../Model/Human.php";
function displayCategories()
{
    $human = new Human();
    $result = $human->viewCategories();
    if ($result == 0) {
        echo "<p>something went wrong connecting to database</p>";
    } else {
        foreach ($result as $category) {
            $option = '<option value = "' . $category->getCategoryId() . '">' . $category->getCategoryName() . '</option>';
            echo $option;
        }
        echo "</select>";
    }
}